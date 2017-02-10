<?php 

	require_once('scripts/sb_functions.php');

	global $logged_in;

	$logged_in = logged_in( true, false );

	

	read_config();

	

	global $blog_config;

	if ( array_key_exists( 'blog_language', $_GET ) ) {	

		$blog_config[ 'blog_language' ] = $_GET['blog_language'];

	}

	

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');

	sb_language( 'install03' );

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

		if (theform.user.value=="" || theform.pass.value=="") {

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

		global $lang_string, $user_colors, $blog_config;

		

		?>

		

		<h2><?php echo( $lang_string[ 'title' ] ); ?></h2>

		<?php echo( $lang_string[ 'instructions' ] ); ?><p />

		

		<?php	

		echo( $lang_string[ 'supported' ]. '<br />');

		echo( $lang_string[ 'standard' ] . ( CRYPT_STD_DES == 1 ? '<b style="color: green;">' . $lang_string[ 'enabled' ] . '</b>' : '<b style="color: red;">' . $lang_string[ 'disabled' ] . '</b>' ) . '<br />');

		echo( $lang_string[ 'extended' ] . ( CRYPT_EXT_DES == 1 ? '<b style="color: green;">' . $lang_string[ 'enabled' ] . '</b>' : '<b style="color: red;">' . $lang_string[ 'disabled' ] . '</b>' ) . '<br />');

		echo( $lang_string[ 'MD5' ] . ( CRYPT_MD5 == 1 ?'<b style="color: green;">' . $lang_string[ 'enabled' ] . '</b>' : '<b style="color: red;">' . $lang_string[ 'disabled' ] . '</b>' ) . '<br />');

		echo( $lang_string[ 'blowfish' ] . ( CRYPT_BLOWFISH == 1 ? '<b style="color: green;">' . $lang_string[ 'enabled' ] . '</b>' : '<b style="color: red;">' . $lang_string[ 'disabled' ] . '</b>' ) . '<br />');

		echo('<br />');

	

		$hashtest = crypt('test');

		if ( strlen( $hashtest ) <= 13 ) {

			echo( $lang_string[ 'using_standard' ] );

		} else if ( strlen( $hashtest ) <= 20 ) {

			echo( $lang_string[ 'using_extended' ] );

		} else if ( substr( $hashtest, 0, 3 ) == '$1$' ) {

			echo( $lang_string[ 'using_MD5' ] );

		} else if ( substr( $hashtest, 0, 3 ) == '$2$' || substr( $hashtest, 0, 4 ) == '$2a$' ) {

			echo( $lang_string[ 'using_blowfish' ] );

		} else {

			echo( $lang_string[ 'using_unknown' ] );

		}

		echo( str_replace( '%string', CRYPT_SALT_LENGTH, $lang_string[ 'salt_length' ] ) );

		?>

		

		<hr />

		

		<form action="install04.php?blog_language=<?php echo( $blog_config[ 'blog_language' ] ); ?>" method="post" onsubmit="return validate(this)">

			<label for="user"><?php echo( $lang_string['username'] ); ?></label><br />

			<input type="text" name="user" autocomplete="OFF" size="40"><br /><br />

			

			<label for="pass"><?php echo( $lang_string['password'] ); ?></label><br />

			<input type="password" name="pass" autocomplete="OFF" size="40"><br /><br />

			

			<input type="submit" name="submit" value="<?php echo( $lang_string['submit_btn'] ); ?>" />

		</form>

		

		<?php 

	}

?>

<?php 

	theme_pagelayout();

?>

</html>

