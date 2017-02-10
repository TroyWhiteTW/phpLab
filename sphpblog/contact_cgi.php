<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}
	
	$client_ip_local = getIP();
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'contact' );
	
    if (!isset($_SESSION['cookies_enabled'])) {
		redirect_to_url('errorpage-nocookies.php');
		// header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage-nocookies.php');
	}
	
	$comment_date = time();
	
	$subject=$lang_string['contactsent'] . $blog_config[ 'blog_title' ];
	$body='<b>' . $lang_string[ 'name' ] . '</b> ' . $_POST[ 'name' ] . '<br />';
	$body=$body . '<b>' . $lang_string[ 'IPAddress' ] . '</b> ' . $client_ip_local . ' (' . @gethostbyaddr($client_ip_local) .')<br />';
	$body=$body . '<b>' . $lang_string[ 'useragent' ] . '</b> ' . $_SERVER[ 'HTTP_USER_AGENT' ] . '<br />';
	$body=$body . '<b>' . $lang_string[ 'email' ] . '</b> ' . $_POST[ 'email' ] . '<br />';
	$body=$body . '<b>' . $lang_string[ 'subject' ] . '</b> ' . $_POST[ 'subject' ] . '<br /><br />';
	$body=$body . '<b>' . $lang_string[ 'comment' ] . '</b><br /><br />';
	$body=$body . sprintf( $lang_string[ 'wrote' ], format_date( $comment_date ), $_POST[ 'name' ], str_replace( "\r\n", "<br />\r\n", $_POST[ 'comment' ] ) );
	$ok=false;
	if ($_POST[ 'capcha_contact' ] == $_SESSION[ 'capcha_contact' ] AND $_SESSION[ 'capcha_contact' ] != '' ) {
		$ok=sb_mail( $_POST[ 'email' ], $blog_config[ 'blog_email' ], $subject, $body, false );
	} else {
		$_SESSION['errornum'] = '403.8';
		$_SESSION['errortype'] = 'error_emailnotsentcapcha';
		redirect_to_url('errorpage.php');
		// header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage.php');
	}
	@session_unregister( 'capcha_contact' );
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
		
		if ( $ok == true ) { 
			echo( $lang_string[ 'success' ] );
		} else {
			$_SESSION['errornum'] = '403.8';
			$_SESSION['errortype'] = 'error_emailnotsent';
			redirect_to_url('errorpage.php');
			// header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage.php');
		}
		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>