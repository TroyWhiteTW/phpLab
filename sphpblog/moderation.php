<?php
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );

	read_config();

	if ( array_key_exists( 'blog_language', $_GET ) ) {
		$blog_config[ 'blog_language' ] = $_GET[ 'blog_language' ];
	}

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'moderation' );

	// "CGI" Functions
	if ( array_key_exists( 'banned_address_list', $_POST )) {
		global $ok;
		$ok = write_blacklist( sb_stripslashes( $_POST[ 'banned_address_list' ] ) );
		$ok = write_bannedwordlist( $_POST[ 'banned_word_list' ] );
		if ( $ok === true ) {
			redirect_to_url( 'index.php' );
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>

	<title><?php echo( $blog_config[ 'blog_title' ] ); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php
	function page_content() {
		global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme, $blog_config;
		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];
		ob_start(); ?>
		<?php echo( $lang_string[ 'instructions' ] ); ?><p />

		<!-- FORM -->
		<form action="moderation.php" method="post" name="moderation" name="moderation" onsubmit="return validate(this)">

			<?php echo( $lang_string[ 'banned_address_list_title' ] ); ?>
			<label for="info_keywords"><?php echo( $lang_string[ 'banned_address_list' ] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="banned_address_list" rows="20" cols="50" autocomplete="OFF"><?php echo($blog_config[ 'banned_address_list' ]); ?></textarea><br /><br />

				<?php echo( $lang_string[ 'banned_word_list_title' ] ); ?>
			<label for="info_keywords"><?php echo( $lang_string[ 'banned_word_list' ] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="text" name="banned_word_list" rows="20" cols="50" autocomplete="OFF"><?php echo($blog_config[ 'banned_word_list' ]); ?></textarea><br /><br />

			<!-- SUBMIT -->
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" />
		</form>

		<?php
		$entry_array[ 'entry' ] = ob_get_clean();
		echo( theme_staticentry( $entry_array ) );
	}
?>
<?php
	theme_pagelayout();
?>

</html>
