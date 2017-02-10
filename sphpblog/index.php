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
	$_SESSION['cookies_enabled'] = '1';
	
	// Read configuration file
	read_config();
	
	// Load language strings
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'index' );
	
	// Verify information being passed in:
	//
	// index.php?d=12&m=11&y=05
	// index.php?entry=entry051128-213804
	// index.php?d=28&m=11&y=05&category=3
	// index.php?category=3
	//
	$temp_year = NULL;
	if ( array_key_exists( 'y', $_GET ) ) {
		if ( strpos( $_GET[ 'y' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_GET[ 'y' ] ) == 2 ) {
			$temp_year = $_GET[ 'y' ];
		}
	}
	$temp_month = NULL;
	if ( array_key_exists( 'm', $_GET ) ) {
		if ( strpos( $_GET[ 'm' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_GET[ 'm' ] ) == 2 ) {
			$temp_month = $_GET[ 'm' ];
		}
	}
	$temp_day = NULL;
	if ( array_key_exists( 'd', $_GET ) ) {
		if ( strpos( $_GET[ 'd' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_GET[ 'd' ] ) == 2 ) {
			$temp_day = $_GET[ 'd' ];
		}
	}
	$temp_entry = NULL;
	if ( array_key_exists( 'entry', $_GET ) ) {
		if ( strpos( $_GET[ 'entry' ], array( '/', '.', '\\', '%' ) ) === false && strlen( $_GET[ 'entry' ] ) == 18 ) {
			$temp_entry = $_GET[ 'entry' ];
		}
	}
	
	// Month / Year
	if ( !isset( $temp_year ) || !isset( $temp_month ) ) {
		// Set the $month, $year, $day globals...
		get_latest_entry();
	} else {
		// Grab $year and $month from URL
		global $month, $year;
		$year = $temp_year;
		$month = $temp_month;
	}
	
	// Day
	if ( isset( $temp_day ) ) {
		global $day;
		$day = $temp_day;
	}
	
	// Entry
	if ( isset( $temp_entry) ) {
		global $entry;
		$entry = $temp_entry;
	}
	
	// Category
	if ( array_key_exists( 'category', $_GET ) ) {
		global $category;
		$category = $_GET[ 'category' ];
	}
	
	global $lang_string, $sb_info, $blog_config;
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
		global $month, $year, $day, $category, $logged_in, $entry;
		
		$page_content = read_entries( $month, $year, $day, $logged_in, $entry, $category );
		echo( $page_content );
	}
	
	theme_pagelayout();
?>
</html>
