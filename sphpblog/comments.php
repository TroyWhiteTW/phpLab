<?php
	// Load Scripts
	require_once('scripts/sb_functions.php');

	// Login
	global $logged_in;
	$logged_in = logged_in( false, true );

	// Create a session for the anti-spam cookie
	if ( !session_id() ) {
		session_start();
	}

	// Read configuration file
	read_config();

	// Load language strings
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'comments' );

	// Verify information being passed:
	$redirect = true;
	if ( array_key_exists( 'y', $_GET ) && array_key_exists( 'm', $_GET ) && array_key_exists( 'entry', $_GET ) ) {
		// Dis-allow dots, and slashes to make sure the
		// user is not able to back-up a directory.
		//
		// Make sure the string lengths are correct.
		if ( strpos( $_GET[ 'y' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_GET[ 'y' ] ) == 2 &&
				strpos( $_GET[ 'm' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_GET[ 'm' ] ) == 2 &&
				strpos( $_GET[ 'entry' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_GET[ 'entry' ] ) == 18 ) {

			// Verify that the file exists.
			if ( entry_exists ( $_GET[ 'y' ], $_GET[ 'm' ], $_GET[ 'entry' ] ) ) {
				$_SESSION[ 'capcha_' . $_GET[ 'entry' ] ] = sb_get_capcha();

				$GLOBALS[ 'year' ] = substr($_GET[ 'entry' ], 5, 2);
				$GLOBALS[ 'month' ] = substr($_GET[ 'entry' ], 7, 2);
				$GLOBALS[ 'day' ] = substr($_GET[ 'entry' ], 9, 2);

				$redirect = false;
			}
		}
	}

	if ( $redirect === true ) {
		redirect_to_url( 'index.php' );
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />

	<!-- Meta Data -->
	<?php global $lang_string, $sb_info, $blog_config; ?>
	<meta name="generator" content="Simple PHP Blog" />
	<link rel="alternate" type="application/rss+xml" title="Get RSS 2.0 Feed" href="rss.php" />
	<link rel="alternate" type="application/rdf+xml" title="Get RDF 1.0 Feed" href="rdf.php" />
	<link rel="alternate" type="application/atom+xml" title="Get Atom 0.3 Feed" href="atom.php" />

	<!-- Meta Data -->
	<!-- http://dublincore.org/documents/dces/ -->
	<meta name="dc.title"       content="<?php echo( $blog_config[ 'blog_title' ] ); ?>" />
	<meta name="author"         content="<?php echo( $blog_config[ 'blog_author' ] ); ?>" />
	<meta name="dc.creator"     content="<?php echo( $blog_config[ 'blog_author' ] ); ?>" />
	<meta name="dc.subject"     content="<?php echo( $blog_config[ 'info_keywords' ] ); ?>" />
	<meta name="keywords"       content="<?php echo( $blog_config[ 'info_keywords' ] ); ?>" />
	<meta name="dc.description" content="<?php echo( $blog_config[ 'info_description' ] ); ?>" />
	<meta name="description"    content="<?php echo( $blog_config[ 'info_description' ] ); ?>" />
	<meta name="dc.type"        content="weblog" />
	<meta name="dc.type"        content="blog" />
	<meta name="resource-type"  content="document" />
	<meta name="dc.format"      scheme="IMT" content="text/html" />
	<meta name="dc.source"      scheme="URI" content="<?php if ( ( dirname($_SERVER[ 'PHP_SELF' ]) == '\\' || dirname($_SERVER[ 'PHP_SELF' ]) == '/' ) ) { echo( 'http://'.$_SERVER[ 'HTTP_HOST' ].'/index.php' ); } else { echo( 'http://'.$_SERVER[ 'HTTP_HOST' ].dirname($_SERVER[ 'PHP_SELF' ]).'/index.php' ); } ?>" />
	<meta name="dc.language"    scheme="RFC1766" content="<?php echo( str_replace('_', '-', $lang_string[ 'locale' ]) ); ?>" />
	<meta name="dc.coverage"    content="global" />
	<meta name="distribution"   content="GLOBAL" />
	<meta name="dc.rights"      content="<?php echo( $blog_config[ 'info_copyright' ] ); ?>" />
	<meta name="copyright"      content="<?php echo( $blog_config[ 'info_copyright' ] ); ?>" />

	<!-- Robots -->
	<meta name="robots" content="ALL,INDEX,FOLLOW,ARCHIVE" />
	<meta name="revisit-after" content="7 days" />

	<!-- Fav Icon -->
	<link rel="shortcut icon" href="interface/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<?php require_once('scripts/sb_javascript.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>

	<?php require_once('scripts/sb_editor.php'); ?>
		<script type="text/javascript">
		<!--
		// Validate the Form
		function validate_comment(theform) {
			if ( theform.comment_text.value=="" || theform.comment_name.value=="" || theform.comment_capcha.value=="" ) {
				alert("<?php echo( $lang_string[ 'form_error' ] ); ?>");
				return false;
			} else {
				return true;
			}
		}
		-->
	</script>

	<?php
		if (!isset($_GET['entry'])) {
			echo( '<title>' . $blog_config[ 'blog_title' ] . '</title>');
		} else {
			echo( '<title>' . $blog_config[ 'blog_title' ] . ' - ' . get_entry_title( substr( $_GET[ 'entry' ], 5, 2 ), substr ( $_GET[ 'entry' ], 7, 2 ), $_GET[ 'entry' ] ) . '</title>');
		}
	?>
</head>
<?php
	// Page Content (Called from within the theme_pagelayout function below)
	function page_content() {
		global $lang_string, $user_colors, $logged_in, $theme_vars, $blog_theme, $blog_config;

		echo( read_comments( $_GET[ 'y' ], $_GET[ 'm' ], $_GET[ 'entry' ], $logged_in ) );
		echo( '<p />' );

		$entry_array = array();
		$entry_array[ 'subject' ] = $lang_string[ 'title' ];

		// ADD COMMENT FORM
		ob_start(); ?>


		<h2><?php echo( $lang_string[ 'header' ] ); ?></h2>
		<?php echo( $lang_string[ 'instructions' ] ); ?><p />

		<form action='comment_add_cgi.php' method="post" name="vbform" onsubmit="return validate_comment(this)">
			<input type="hidden" name="y" value="<?php echo( $_GET[ 'y' ] ); ?>" />
			<input type="hidden" name="m" value="<?php echo( $_GET[ 'm' ] ); ?>" />
			<input type="hidden" name="entry" value="<?php echo( $_GET[ 'entry' ] ); ?>" />

			<?php
			if ($GLOBALS['logged_in']==false ) {
				echo('<label for="comment_name">' . $lang_string[ 'comment_name' ] . '</label><br />');
				echo('<input type="text" name="comment_name" id="comment_name" value="' . $_COOKIE[ 'comment_name' ] . '" autocomplete="off" /><br />');
			} else {
				echo('<input type="hidden" name="comment_name" id="comment_name" value="' . $blog_config[ 'blog_author' ] . '" autocomplete="off" />');
			}

			if ($GLOBALS['logged_in']==false ) {
				echo('<label for="comment_email">' . $lang_string[ 'comment_email' ] . '</label><br />');
				echo('<input type="text" name="comment_email" id="comment_email" value="' . $_COOKIE[ 'comment_email' ] . '" autocomplete="off" /><br />');
			} else {
				// Blank Email
				echo('<input type="hidden" name="comment_email" id="comment_email" value="" autocomplete="off" />');
			}

			if ($GLOBALS['logged_in']==false ) {
				echo('<label for="comment_url">' . $lang_string[ 'comment_url' ] . '</label><br />');
				echo('<input type="text" name="comment_url" id="comment_url" value="' . $_COOKIE[ 'comment_url' ] . '" autocomplete="off" /><br />');
				echo('<label for="comment_remember">' . $lang_string[ 'comment_remember' ] . '<input type="checkbox" name="comment_remember" id="comment_remember" value="1"');
				echo(' autocomplete="off" /></label><br /><br />');
			} else {
				// Blank URL
				echo('<input type="hidden" name="comment_url" id="comment_url" value="" autocomplete="off" />');
			}
			echo('<input type="hidden" name="user_ip" id="user_ip" value="' . GetIP() . '" autocomplete="off" />');
			?>

			<!-- NEW -->
			<?php echo( $lang_string[ 'label_insert' ] ); ?><br />
			<?php
			global $blog_config;

			if ( in_array( 'b', $blog_config[ 'comment_tags_allowed' ] ) ) {
				?><input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_bold' ] ); ?>" onclick="ins_styles(this.form.comment_text,'b','');" /><?php
			}
			if ( in_array( 'i', $blog_config[ 'comment_tags_allowed' ] ) ) {
				?><input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_italic' ] ); ?>" onclick="ins_styles(this.form.comment_text,'i','');" /><?php
			}
			if ( in_array( 'url', $blog_config[ 'comment_tags_allowed' ] ) ) {
				?><input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_url' ] ); ?>" onclick="ins_url_no_options(this.form.comment_text);" /><?php
			}
			if ( in_array( 'img', $blog_config[ 'comment_tags_allowed' ] ) ) {
				?><input type="button" class="bginput" value="<?php echo( $lang_string[ 'btn_image' ] ); ?>" onclick="ins_image_v2(this.form.comment_text);" /><?php
			}
			?>

			<select name="style_dropdown" onchange="ins_style_dropdown(this.form.comment_text,this.form.style_dropdown.value);">
				<option label="--" value="--">--</option>
				<?php
				if ( in_array( 'blockquote', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[blockquote]xxx[/blockquote]" value="blockquote">[blockquote]xxx[/blockquote]</option><?php
				}
				if ( in_array( 'pre', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[pre]xxx[/pre]" value="pre">[pre]xxx[/pre]</option><?php
				}
				if ( in_array( 'code', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[code]xxx[/code]" value="code">[code]xxx[/code]</option><?php
				}
				if ( in_array( 'strong', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[strong]xxx[/strong]" value="strong">[strong]xxx[/strong]</option><?php
				}
				if ( in_array( 'b', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[b]xxx[/b]" value="b">[b]xxx[/b]</option><?php
				}
				if ( in_array( 'em', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[em]xxx[/em]" value="em">[em]xxx[/em]</option><?php
				}
				if ( in_array( 'i', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[i]xxx[/i]" value="i">[i]xxx[/i]</option><?php
				}
				if ( in_array( 'hN', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[hN]xxx[/hN] (N=1-6)" value="hN">[hN]xxx[/hN] (?=1-6)</option><?php
				}
				if ( in_array( 'html', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[html]xxx[/html]" value="html">[html]xxx[/html]</option><?php
				}
				if ( in_array( 'del', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[del]xxx[/del]" value="del">[del]xxx[/del]</option><?php
				}
				if ( in_array( 'ins', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[ins]xxx[/ins]" value="ins">[ins]xxx[/ins]</option><?php
				}
				if ( in_array( 'strike', $blog_config[ 'comment_tags_allowed' ] ) ) {
					?><option label="[strike]xxx[/strike]" value="strike">[strike]xxx[/strike]</option><?php
				}
				?>
			</select>
			<input type="button" class="bginput" value="ok" onclick="ins_style_dropdown(this.form.comment_text,this.form.style_dropdown.value);" /><br /><br />

			<?php emoticons_show(); ?>

			<?php
			if ( in_array( 'img', $blog_config[ 'comment_tags_allowed' ] ) ) {
				global $theme_vars;
				?>
					<a href="javascript:openpopup('image_list.php',<?php echo( $theme_vars[ 'popup_window' ][ 'width' ] ); ?>,<?php echo( $theme_vars[ 'popup_window' ][ 'height' ] ); ?>,true);"><?php echo( $lang_string[ 'view_images' ] ); ?></a><br />
					<?php echo image_dropdown(); ?><br /><br />
				<?php
			}
			?>

			<label for="comment_text"><?php echo( $lang_string[ 'comment_text' ] ); ?></label><br />
			<textarea style="width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;" id="comment_text" name="comment_text" rows="20" cols="50" autocomplete="off"></textarea><br /><br />

			<?php
			if ($GLOBALS['logged_in']==true ) {
				echo('<!-- Logged in user -->');
				echo('<input type="hidden" name="comment_capcha" id="comment_capcha" value="' . $_SESSION[ 'capcha_' . $_GET[ 'entry' ] ] . '" autocomplete="off" maxlength="6" />');
			} else if ($blog_config['blog_enable_capcha']==0) {
				echo('<!-- Anti-spam disabled -->');
				echo('<input type="hidden" name="comment_capcha" id="comment_capcha" value="' . $_SESSION[ 'capcha_' . $_GET[ 'entry' ] ] . '" autocomplete="off" maxlength="6" />');
			} else {
				echo('<!-- Not logged in! Show capcha -->');
				echo('<label for="comment_capcha">');

				if ( function_exists('imagecreate') && $blog_config[ 'blog_enable_capcha_image' ] ) {
					printf( $lang_string[ 'comment_capcha' ], '<br /><img src="capcha.php?entry=' . $_GET[ 'entry' ] . '" />' );
				} else {
					printf( $lang_string[ 'comment_capcha' ], sb_str_to_ascii( $_SESSION[ 'capcha_' . $_GET[ 'entry' ] ] ) );
				}

				echo('</label><br />');
				echo('<input type="text" name="comment_capcha" id="comment_capcha" value="" autocomplete="off" maxlength="6" /><br /><br />');
			}
			?>

			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'post_btn' ] ); ?>" />

		</form>

		<?php
		// New 0.4.8
		$oBlacklist = new CBlacklist;
		$oBlacklist->load( 'config/blacklist.txt' );
		if ( $oBlacklist->isBanned( getIP() ) == true ) {
			// Check Blacklist
			ob_end_clean();
			$entry_array[ 'entry' ] = $lang_string['blacklisted'];
		} else if ( are_comments_expired( $GLOBALS[ 'month' ], $GLOBALS[ 'day' ], $GLOBALS[ 'year' ] ) ) {
			// Check Expiration Date
			ob_end_clean();
			$entry_array[ 'entry' ] = $lang_string['expired_comment1'] . $blog_config[ 'blog_comment_days_expiry' ] . $lang_string['expired_comment2'];
		} else if ( $blog_config[ 'blog_enable_comments' ] == 0 ){
			ob_end_clean();
			$entry_array[ 'entry' ] = $lang_string['nocomments'];
		} else {
			$entry_array[ 'entry' ] = ob_get_clean();
		}

		echo( theme_staticentry( $entry_array ) );
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
