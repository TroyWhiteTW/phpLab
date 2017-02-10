<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'upload_img' );
	
	global $ok;
	$ok = false;
	
	if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
		if ( $_FILES[ 'userfile' ][ 'error' ] == 0 ) {
			if (!file_exists('images')) {
				$oldumask = umask(0);
				@mkdir('images', 0777 );
				@umask($oldumask);
			}
						
			$uploaddir = 'images/';
			$uploadfile = $uploaddir . preg_replace("/ /","_",$_FILES['userfile']['name']);
			
			if ( @getimagesize($_FILES['userfile']['tmp_name']) == FALSE ){
				echo('Image is not valid or not an image file.');
				exit;
				// redirect_to_url( 'upload_img.php' );
			}
			
			// New code for limiting the files that can be uploaded - provided by ReZEN (rezen@xorcrew.net)
			$upload_denied_extentions = array( "exe", "pl", "php", "php3", "php4", "php5", "phps", "asp","cgi", "html", "htm", "dll", "bat", "cmd" );
			$extension = strtolower(substr(strrchr($uploadfile, "."), 1));
			foreach ($upload_denied_extentions AS $denied_extention) {
				if($denied_extention == $extension) {
					echo('That filetype is not allowed');
					exit;
				}    
			}		
	
			if ( move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile ) ) {
				chmod( $uploadfile, 0777 );
				$ok = true;
			} else {
				$ok = false;
			}
		}
	}
	
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
