<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( false, false );
	
	read_config();
	
	global $blog_config;
	if ( isset( $_GET[ 'blog_language' ] ) ) {	
		$blog_config[ 'blog_language' ] = $_GET[ 'blog_language' ];
	}
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'install06' );
	
	$ok = check_password( sb_stripslashes( $_POST['user'] ), sb_stripslashes( $_POST['pass'] ) );
	$logged_in = $ok;
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
		global $lang_string, $user_colors, $ok, $blog_config;
		
		if ( $ok === true ) {
			echo( $lang_string[ 'success' ] );
			echo( '<a href="setup.php?blog_language=' . $blog_config[ 'blog_language' ] . '">' . $lang_string[ 'btn_setup' ] . '</a><br /><br />' );
		} else {
			echo( $lang_string[ 'wrong_password' ] );
			echo( '<a href="install05.php?blog_language=' . $blog_config[ 'blog_language' ] . '">' . $lang_string[ 'btn_try_again' ] . '</a><br /><br />' );
		}
		
		// echo( '<hr />' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
