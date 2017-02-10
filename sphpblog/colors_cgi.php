<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'colors' );
	
	$color_def = theme_default_colors();
	$post_array = array();
	array_push( $post_array, 'name' );
	if ( array_key_exists( 'save_btn', $_POST ) == true && $_POST[ 'scheme_name' ] != '' && $_POST[ 'scheme_file' ] != '' ) {
		$str = str_replace( '|', ':', sb_stripslashes( $_POST[ 'scheme_name' ] ) );
		array_push( $post_array, $str );
	} else {
		array_push( $post_array, 'custom' );
	}
	
	for ( $i = 0; $i < count( $color_def ); $i++ ) {
		$id = $color_def[$i][ 'id' ];
		$color = sb_stripslashes( $_POST[ $id ] );
		array_push( $post_array, $id );
		array_push( $post_array, $color );
	}
	
	// Check if we should save color scheme, or just update colors on web site.
	if ( array_key_exists( 'save_btn', $_POST ) == true && $_POST[ 'scheme_name' ] != '' && $_POST[ 'scheme_file' ] != '' ) {
		$filename = sb_stripslashes( $_POST[ 'scheme_file' ] );
		$filename = preg_replace( '/(\s|\\\|\/|%|#)/', '_', $filename ); // Replace whitespaces [\n\r\f\t ], slashes, % and # with _
		$ok = write_colors( $post_array, $filename );
	} else {
		$ok = write_colors( $post_array, NULL );
	}
	
	if ( $ok === true ) {
		redirect_to_url( 'colors.php' );
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
			echo $lang_string[ 'success' ] . '<p />';
		}
		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>