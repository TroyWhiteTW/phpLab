<?php 
	require_once('scripts/sb_functions.php');

	global $logged_in;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}
	$_SESSION[ 'capcha_contact' ] = sb_get_capcha();
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
sb_language( 'contact' );	
	
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
	
	<script type="text/javascript">
	<!--
	function validate(theform) {
		if (theform.subject.value=="" || theform.comment.value=="" || theform.email.value=="") {
			alert("<?php echo( $lang_string[ 'form_error' ] ); ?>");
			return false;
		} else {
			return true;
		}		
	}
	//-->
	</script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $logged_in, $theme_vars;	
		
		// The user must have cookies enabled in order to send contacts - this helps with blank emails
		if (!isset($_SESSION['cookies_enabled'])) {
			header('location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'errorpage-nocookies.php');	
		} else {
			global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme, $blog_config;	
			$entry_array = array();
			$entry_array[ 'subject' ] = $lang_string[ 'title' ];
			
			ob_start(); ?>
			<?php echo ( $lang_string[ 'instructions' ] ); ?><p />
			<form action="contact_cgi.php" method="post" onsubmit="return validate(this)">
		
			<label for="name"><?php echo( $lang_string[ 'name' ] ); ?></label><br />
			<input type="text" name="name" id="name" size="40" /><br /><br />
			<label for="email"><?php echo( $lang_string[ 'email' ] ); ?></label><br />
			<input type="text" name="email" id="email" size="40" /><br /><br />
			<label for="subject"><?php echo( $lang_string[ 'subject' ] ); ?></label><br />
			<input type="text" name="subject" id="subject" size="40" /><br /><br />
			<label for="text"><?php echo( $lang_string[ 'comment' ] ); ?></label><br />
			<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="comment" rows="20" cols="50" autocomplete="OFF"></textarea><br /><br />
			
			<?php
			if ( $blog_config['blog_enable_capcha'] == 0 ) {
				echo('<!-- Anti-spam disabled -->');
				echo('<input type="hidden" name="capcha_contact" id="capcha_contact" value="' . $_SESSION[ 'capcha_contact' ] . '" autocomplete="OFF" maxlength="6" /><br /><br />'); 
			} else {
				echo('<label for="capcha_contact">');
				if ( function_exists('imagecreate') && $blog_config[ 'blog_enable_capcha_image' ] ) {
					echo ( $lang_string[ 'contact_capcha' ] . '<br /><img src="capcha.php?entry=contact" />' );
				}	else {
					echo ( $lang_string[ 'contact_capcha' ] . '<b>' . sb_str_to_ascii( $_SESSION[ 'capcha_contact' ] ) . '</b>' );
				}
				echo('</label><br />');
				echo('<input type="text" name="capcha_contact" id="capcha_contact" value="" autocomplete="OFF" maxlength="6" /><br /><br />');
			} 
			?>
			
			<hr />
	
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" />
			</form>
			<?php
			$entry_array[ 'entry' ] = ob_get_clean();
			echo( theme_staticentry( $entry_array ) );	
		} 
	}
	
	theme_pagelayout();
?>
</html>
