<?php
	require_once('scripts/sb_functions.php');
	//require_once('scripts/sb_blacklist.php');
	global $logged_in;
	$logged_in = logged_in( false, true );
	if ( !session_id() ) {
		session_start();
	}

	read_config();

	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'comments' );

	// Verify information being passed
	global $ok;
	$ok = false;

	// Verify that all the correct POST keys exist (except comment_remember which is a check box)
	$fieldsExist = true;
	$requiredFields = Array( 'y', 'm', 'entry', 'comment_capcha', 'comment_name', 'comment_email', 'comment_url', 'comment_text' );
	foreach ( $requiredFields as $fieldName ) {
		if ( !array_key_exists( $fieldName, $_POST ) ) {
			// echo("Field \"$fieldName\" is missing<br />");
			$fieldsExist = false;
			break;
		}
	}

	// Do the banned words checking (New 0.4.9)
	$oBannedWords = new CBannedWords;
	$oBannedWords->load( 'config/bannedwordlist.txt' );
	if ( $oBannedWords->ContainsBannedWord( $_POST[ 'comment_name' ], $_POST[ 'comment_email' ], $_POST[ 'comment_url' ], $_POST[ 'comment_text' ] ) )
	{
		$ok = $lang_string['bannedword'];
	}

	if (!$logged_in && $_SESSION[ 'capcha_' . $_POST['entry' ] ] == '') {
	// Capcha did not exist in session, so comment poster did not come from comments page,
	// where this should have been created. User is probably a spam robot.
	// Fix submitted by Jan Normann Nielsen via Sourceforge 2006-08-11
	$fieldsExist = false;
  }

	if ( $ok != True ) {
	if ( $fieldsExist ) {
    // Dis-allow dots, and slashes to make sure the
    // user is not able to back-up a directory.
    //
    // Make sure the string lengths are correct.
    if ( $_POST[ 'comment_capcha' ] == $_SESSION[ 'capcha_' . $_POST[ 'entry' ] ] || $logged_in ) {
      if ( strpos( $_POST[ 'y' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_POST[ 'y' ] ) == 2 &&
          strpos( $_POST[ 'm' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_POST[ 'm' ] ) == 2 &&
          strpos( $_POST[ 'entry' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_POST[ 'entry' ] ) == 18 ) {

        // Verify that the file exists.
        if ( entry_exists ( $_POST[ 'y' ], $_POST[ 'm' ], $_POST[ 'entry' ] ) ) {
          if ( strlen( $_POST[ 'comment_name' ] ) > 0 && strlen( $_POST[ 'comment_text' ] ) > 0 ) {
            $ok = write_comment( $_POST[ 'y' ], $_POST[ 'm' ], $_POST[ 'entry' ],
                                 sb_stripslashes( $_POST[ 'comment_name' ] ),
                                 sb_stripslashes( $_POST[ 'comment_email' ] ),
                                 sb_stripslashes( $_POST[ 'comment_url' ] ),
                                 $_POST[ 'comment_remember' ],
                                 sb_stripslashes( $_POST[ 'comment_text' ] ),
                                 $_POST[ 'user_ip' ] );
            @session_unregister( 'capcha_' . $_GET[ 'entry' ] );
          }
        }
      }
    }
  }
  }

	if ( $ok === true ) {
		$relative_url = 'comments.php?y='.$_POST[ 'y' ].'&m='.$_POST[ 'm' ].'&entry='.$_POST[ 'entry' ];
		redirect_to_url( $relative_url );
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
			echo $lang_string[ 'error_add' ] . $ok . '<p />';
		} else {
			echo $lang_string[ 'success_add' ] . '<p />';
		}

		echo( '<a href="index.php">' . $lang_string[ 'home' ] . '</a><br /><br />' );
	}
?>
<?php
	global $blog_config;
	if ( $blog_config[ 'blog_comments_popup' ] == 1 ) {
		theme_popuplayout();
	} else {
		theme_pagelayout();
	}
?>
</html>
