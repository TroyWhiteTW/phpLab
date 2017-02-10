<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'setup' );
	
	$temp_max_entries = intval( $_POST[ 'blog_max_entries' ] );
	if ( $temp_max_entries <= 0) {
		$temp_max_entries = 5;
	}
	
	$temp_blog_comment_days_expiry = intval( $_POST[ 'blog_comment_days_expiry' ] );
	if ( $temp_blog_comment_days_expiry < 0) {
		$temp_blog_comment_days_expiry = 0;
	}
	
	$temp_blog_counter_hours = intval( $_POST[ 'blog_counter_hours' ] );
	if ( $temp_blog_counter_hours < 1) {
		$temp_blog_counter_hours = 1;
	}
	
	$tag_array = array( 'b', 'i', 'strong', 'em', 'del', 'ins', 'strike', 'img', 'url', 'blockquote', 'hN', 'pre', 'code', 'html' );
	$temp_array = array();
	for ( $i = 0; $i < count( $tag_array ); $i++ ) {
		$tag = $tag_array[$i];
		if ( $_POST[ $tag ] == 'on' ) {
			array_push( $temp_array, $tag );
		}
	}
	$comment_tags_allowed = implode( ',', $temp_array );

	// Clean up the Blog Email list...
	$temp_email = explode( ',', sb_stripslashes( $_POST[ 'blog_email' ] ) );
	if ( $temp_email === false ) {
		$temp_email = '';
	} else if ( is_array( $temp_email ) ) {
		for ( $i=0; $i < count($temp_email); $i++ ) {
			$temp_email[$i] = trim( $temp_email[$i] );
		}
		$temp_email = implode( ',', $temp_email );
	}
	
	global $ok;
  $ok = write_config( sb_stripslashes( $_POST[ 'blog_title' ] ),
						sb_stripslashes( $_POST[ 'blog_author' ] ),
						sb_stripslashes( $_POST[ 'blog_email' ] ),
						$_POST[ 'blog_avatar' ],
						sb_stripslashes( $_POST[ 'blog_footer' ] ),
						$_POST[ 'blog_language' ],
						$_POST[ 'blog_entry_order' ],
						$_POST[ 'blog_comment_order' ],
						( $_POST[ 'blog_enable_comments' ] == 'on' ),
						$temp_max_entries,
						( $_POST[ 'blog_comments_popup' ] == 'on' ),
						$comment_tags_allowed,
						( $_POST[ 'blog_enable_gzip_txt' ] == 'on' ),
						( $_POST[ 'blog_enable_gzip_output' ] == 'on' ),
						( $_POST[ 'blog_email_notification' ] == 'on' ),
						( $_POST[ 'blog_send_pings' ] == 'on' ),
						sb_stripslashes( $_POST[ 'blog_ping_urls' ] ),
						( $_POST[ 'blog_enable_voting' ] == 'on' ),
						( $_POST[ 'blog_trackback_enabled' ] == 'on' ),
						( $_POST[ 'blog_trackback_auto_discovery' ] == 'on' ),
						( $_POST[ 'blog_enable_cache' ] == 'on' ),
						( $_POST[ 'blog_enable_calendar' ] == 'on' ),
						$_POST[ 'blog_calendar_start' ],
						( $_POST[ 'blog_enable_title' ] == 'on' ),
						( $_POST[ 'blog_enable_permalink' ] == 'on' ),
						( $_POST[ 'blog_enable_stats' ] == 'on' ),
						( $_POST[ 'blog_enable_lastcomments' ] == 'on' ),
						( $_POST[ 'blog_enable_lastentries' ] == 'on' ),
						( $_POST[ 'blog_enable_capcha' ] == 'on' ),
						$temp_blog_comment_days_expiry,
						( $_POST[ 'blog_enable_capcha_image' ] == 'on' ),
						( $_POST[ 'blog_enable_archives' ] == 'on' ),
						( $_POST[ 'blog_enable_login' ] == 'on' ),
            ( $_POST[ 'blog_enable_counter' ] == 'on' ),
            ( $_POST[ 'blog_footer_counter' ] == 'on' ),
            $temp_blog_counter_hours );
	
	if ( $ok === true ) {
		redirect_to_url( 'index.php' );
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<?php require_once('scripts/sb_javascript.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $ok;
		if ( $ok !== true ) {
			echo( $lang_string[ 'error' ] . $ok . '<p />' );
		} else {
			echo( $lang_string[ 'success' ] . '<p />' );
		}
		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
