<?php 

	require_once('scripts/sb_functions.php');

	global $logged_in;

	$logged_in = logged_in( true, false );

	

	read_config();

	

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');

	sb_language( 'install00' );

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

		global $lang_string, $user_colors, $blog_config;

		

		echo( '<h2>' . $lang_string[ 'title' ] . '</h2>' );

		echo( $lang_string[ 'instructions' ] . '<p />' );

		

		?>

		<form action="install01.php" method="post">

			<?php

				$arr = array();

				$dir = 'languages/';

				

				clearstatcache();

				if ( is_dir($dir) ) {

					$dhandle = opendir($dir);

					if ( $dhandle ) {

						$sub_dir = readdir( $dhandle );

						while ( $sub_dir ) {

							if ( is_dir( $dir . $sub_dir ) == true && $sub_dir != '.' && $sub_dir != '..' ) {

								$lang_dir = $sub_dir;

								$lang_name = sb_read_file( $dir . $sub_dir . '/id.txt' );

								if ( $lang_name ) {

									$item = array();

									$item['label'] = $lang_name;

									$item['value'] = $lang_dir;

									if ( $blog_config[ 'blog_language' ] == $item['value'] ) {

										$item['selected'] = true;

									}

									array_push( $arr, $item );

								}

							}

							$sub_dir = readdir( $dhandle );

						}

					}

					closedir( $dhandle );

				}

				echo( HTML_dropdown( $lang_string[ 'blog_choose_language' ], "blog_language", $arr ) );

			?>

			<p />

			

			<input type="submit" name="submit" value="<?php echo( $lang_string['submit_btn'] ); ?>" />

		</form>

		<?php 

	}

?>

<?php 

	theme_pagelayout();

?>

</html>

