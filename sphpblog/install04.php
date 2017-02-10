<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, false );
	
	// $ok = create_password( sb_stripslashes( $_POST['user'] ), sb_stripslashes( $_POST['pass'] ) );
	// $logged_in = $ok;
	
	read_config();
	
	global $blog_config;
	if ( array_key_exists( 'blog_language', $_GET ) ) {	
		$blog_config[ 'blog_language' ] = $_GET['blog_language'];
	}
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'install04' );
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
		
		$hashedUser = crypt( sb_stripslashes( $_POST['user'] ) );
		$hashedPass = crypt( sb_stripslashes( $_POST['pass'] ) );
		?>
		
		<h2><?php echo( $lang_string[ 'title' ] ); ?></h2>
		<?php echo( $lang_string[ 'instructions' ] ); ?><p />
		
		<label for="phpfile"><?php echo( $lang_string['code'] ); ?></label><br />
<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" name="phpfile" rows="6" cols="40">&lt;?php
	// Save file as 'password.php' and FTP it into 'config' directory.
	$username = '<?php echo( $hashedUser ); ?>';
	$password = '<?php echo( $hashedPass ); ?>';
?&gt;</textarea>
		
		<?php 
		echo( '<p />' );
		echo( '<a href="install05.php?blog_language=' . $blog_config[ 'blog_language' ] . '">' . $lang_string['continue'] . '</a><p />' );
		echo( $lang_string['information'] );
		echo( '<p />' );
		
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
