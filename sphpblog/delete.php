<?php 

	require_once('scripts/sb_functions.php');

	global $logged_in;

	$logged_in = logged_in( true, true );

	

	read_config();

	

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');

	sb_language( 'delete' );

		

	// "CGI" Functions

	if ( array_key_exists( 'no', $_POST ) || array_key_exists( 'yes', $_POST ) ) {

		if ( array_key_exists( 'no', $_POST ) ) {

			// User clicked the "Cancel" button

				redirect_to_url( 'index.php' );

		} else {

			if ( array_key_exists( 'yes', $_POST ) ) {

				// User clicked the "OK" button

				$ok = delete_entry( $_POST[ 'entry' ], $_POST[ 'path' ] );

			

				if ( $ok === true ) {	

					redirect_to_url( 'index.php' );

				}

			}

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

	<?php require_once('scripts/sb_javascript.php'); ?>

	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>

	

	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>

</head>

<?php 

	function page_content() {

		global $lang_string, $user_colors;

		

		$entry_array = array();

		$entry_array[ 'subject' ] = $lang_string[ 'title' ];

		ob_start();

		

		if ( array_key_exists( "no", $_POST ) || array_key_exists( "yes", $_POST ) ) {

			// Check to see if we're posting data...

			global $ok;

			if ( $ok !== true ) {

				echo( $lang_string[ 'error' ] . $ok . '<p />' );

			} else {

				echo( $lang_string[ 'success' ] . '<p />' );

			}

			echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );

		} else {

		

			?>

			<?php echo( $lang_string[ 'instructions' ] ); ?><p />

			

			<hr />

			

			<form action='delete.php' method="post">

				<input type="hidden" name="entry" value="<?php echo( $_GET[ 'entry' ] ); ?>">

				<input type="hidden" name="path" value="<?php echo( 'content/'.$_GET[ 'y' ].'/'.$_GET[ 'm' ].'/' ); ?>">

				<input type="submit" name="yes" value="<?php echo( $lang_string[ 'ok_btn' ] ); ?>" />

				<input type="submit" name="no" value="<?php echo( $lang_string[ 'cancel_btn' ] ); ?>" />

			</form>

			<?php 

		}

		

		$entry_array[ 'entry' ] = ob_get_clean();

		echo( theme_staticentry( $entry_array ) );

		

		$blog_content = read_entry_from_file( 'content/'.$_GET[ 'y' ].'/'.$_GET[ 'm' ].'/'.$_GET[ 'entry' ] );

		echo( $blog_content );

	}

?>

<?php 

	theme_pagelayout();

?>

</html>

