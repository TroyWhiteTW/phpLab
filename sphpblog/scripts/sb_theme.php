<?php

	// Simple PHP Blog
	// Version 0.3.5 - 06/04/2004
	// ------------------------------
	// Created by: Alexander Palmo, apalmo <at> bigevilbrain <dot> com
	//
	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	//
	// Credit should be give to the original author and the Simple PHP Blog
	// logo graphic must appear on the site and link to the project
	// on SourceForge.net

	// ------------------
	// Theme Menu Display
	// ------------------

	/**************************************************************************
	MODIFICACIONES PARA LA GESTION DE LOS BLOQUES FIJOS DEL SPHPBLOG
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	* Se ha añadido la insercion de la opción de Login [menu_display_login] en
	  la función "menu_display_links", de manera que sea dicha funcion la que
	  construya la opción de login. (Linea 54)
	* Se ha añadido a la función "menu_most_recent_trackbacks" la consulta
	  a las variables globales, para ver si dicha opcion está habilitada.
      (Linea 262)
	**************************************************************************/

	function menu_display_links () {
		// Returns the Links menu as HTML.
		//
		// Example:
		// --------
		// Links
		// Home
		// Static
		// [ + link ]
		//
		global $lang_string, $logged_in, $blog_config;

		$str = '<a href="index.php">' . $lang_string[ 'menu_home' ] . '</a><br />';

		if ( !empty( $blog_config[ 'blog_email' ] ) ) {
			// New 0.4.8
			$oBlacklist = new CBlacklist;
			$oBlacklist->load( 'config/blacklist.txt' );
			if ( $oBlacklist->isBanned( getIP() ) == false || $logged_in == true  ) {
				$str = $str . '<a href="contact.php">' . $lang_string[ 'menu_contact' ] . '</a><br />';
			}
		}

		if ( $blog_config['blog_enable_stats']){ // New 0.4.7
			$str = $str . '<a href="stats.php">' . $lang_string[ 'menu_stats' ] . '</a><br />';
		}

		$str = $str . read_links( $logged_in );

		$result = array();
		$result[ 'title' ] = $lang_string[ 'menu_links' ];
		$result[ 'content' ] = $str;

		return ( $result );
	}

	function menu_display_countertotals () {

		global $lang_string, $logged_in, $blog_config;

		if ( $blog_config[ 'blog_enable_counter' ] ) {
			$result = array();
			$result[ 'title' ] = $lang_string['counter_title'];
			$result[ 'content' ] = show_counter_totals( $logged_in );

			return ( $result );
		}
	}

	function menu_display_avatar() {
		// Title: Avatar mod for sPhpBlog
		// Author: sverde1
		// Email: sverde1@email.si

		// Returns avatar picture
		global $lang_string, $blog_config;

		if ( $blog_config[ 'blog_avatar' ] ) {
			$str = '<img src="' . $blog_config[ 'blog_avatar' ] . '" alt="" />';

			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_avatar' ];
			$result[ 'content' ] = $str;

			return ( $result );
		}
	}

	function menu_random_quote() {
		// Random Quote Block
		$quoteFile = "themes/quote.txt"; //File holding quotesÊ
		$fp = fopen($quoteFile, "r"); //Opens file for readÊ
		$quotecontent = fread($fp, filesize($quoteFile)); // Read FileÊ
		$quotes = explode("n",trim($quotecontent)); //Put quotes into arrayÊ
		fclose($fp); //Close the fileÊ
		$rquote = array_rand($quotes); // Random NumberÊ

		$result = array();
		$result[ 'title' ] = 'Random Quote';
		$result[ 'content' ] = $quotes[$rquote];

		return ( $result );
	}


	function menu_display_blognav () {
		// Returns the blog entry navigation calendar as HTML.
		//
		global $month, $year, $day, $lang_string, $blog_config;


		 if ( $blog_config[ 'blog_enable_calendar' ] ) {
			// The "read_menus_calendar()" function is located in "scripts/sb_theme.php"
			$str = read_menus_calendar( $month, $year, $day );

			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_calendar' ];
			$result[ 'content' ] = $str;
			return ( $result );
		}
	}

	function menu_display_blognav_tree () {
		// Returns the blog entry navigation menu as HTML.
		//
		// Example:
		// --------
		// 2004
		// May (2)
		//   5/27/04 (2)
		//
		global $month, $year, $day, $lang_string, $blog_config;


		 if ( $blog_config[ 'blog_enable_archives' ] ) {
			// The "read_menus_tree()" function is located in "scripts/sb_theme.php"
			$str = read_menus_tree( $month, $year, $day, 0 );

			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_archive' ];
			$result[ 'content' ] = '<a href="archives.php">' . $lang_string[ 'menu_viewarchives' ] . '</a><br />' . "\n" . $str;
			return ( $result );
		}
	}

	function menu_display_login () {
		// Returns login / logout link as HTML.
		//
		// Example:
		// --------
		// Login
		//
		global $lang_string, $blog_config, $logged_in;

		$str = '';
		if ($logged_in === true) {
			// $str = $str . '<a href="set_login.php">' . $lang_string[ 'menu_change_login' ] . '</a><br />';
			$str = $str . '<a href="logout.php">' . $lang_string[ 'menu_logout' ] . '</a>';
		} else {
			if ( $blog_config[ 'blog_enable_login' ] ) {
				$str = $str . '<a href="login.php">' . $lang_string[ 'menu_login' ] . '</a>';
			}
		}

		return ( $str );
	}

	function menu_display_user () {
		// Returns login / logout link as HTML.
		//
		// Example:
		// --------
		// Menu
		// Add Entry
		// Add Static Page
		// Upload Image
		//
		global $lang_string, $logged_in, $user_colors;

		if ($logged_in === true) {
			$str = '';
			$str = $str . '<a href="add.php">' . $lang_string[ 'menu_add' ] . '</a><br />';
			$str = $str . '<a href="add_static.php">' . $lang_string[ 'menu_add_static' ] . '</a><br />';
			$str = $str . '<a href="upload_img.php">' . $lang_string[ 'menu_upload' ] . '</a>';

			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_menu' ];
			$result[ 'content' ] = $str;

			return ( $result );
		}
	}

   function menu_display_categories () {
		// Returns categories HTML.
		//
		// Example:
		// --------
		// Menu
		// Add Entry
		// Add Static Page
		// Upload Image
		//
		global $lang_string;
		global $day, $month, $year, $category;

		$base_date = '';
		if ( isset( $day ) ) {
			$base_date .= '?d=' . $day;
		}
		if ( isset( $month ) ) {
			if ( $base_date == '' ) {
				$base_date .= '?';
			} else {
				$base_date .= '&amp;';
			}
			$base_date .= 'm=' . $month;
		}
		if ( isset( $year ) ) {
			if ( $base_date == '' ) {
				$base_date .= '?';
			} else {
				$base_date .= '&amp;';
			}
			$base_date .= 'y=' . $year;
		}
		if ( $base_date == '' ) {
			$base_date .= '?';
		} else {
			$base_date .= '&amp;';
		}
		$base_date .= 'category=';


		$str = '';
		$catArray = get_category_array();
		if ( count($catArray) > 0) {
			for ( $i = 0; $i < count( $catArray ); $i++ ) {
				$id_number = $catArray[$i][0];
				$name_str = $catArray[$i][1];
				$space_count = $catArray[$i][2];
				for ( $j = 0; $j < $space_count; $j++ ) {
					$str = $str . '&nbsp;';
				}
				if ( $category == $id_number ) {
					$str = $str . $name_str;
				} else {
					$str = $str . "<a href=\"index.php" . $base_date . $id_number . "\">" . $name_str . "</a>";
				}
				if ( $i == count( $catArray ) - 1 ) {
					$str = $str . "\n";
				} else {
					$str = $str . "<br />\n";
				}
			}
		}

		if ( $str ) {
			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_categories' ];
			$result[ 'content' ] = $str;

			return ( $result );
		}
	}

	function menu_display_setup () {
		// Returns login / logout link as HTML.
		//
		// Example:
		// --------
		// Setup
		// Setup
		// Options
		// Colors
		// Themes
		// Change Login
		//
		global $lang_string, $logged_in, $user_colors;

		if ($logged_in === true) {
			$str = '';
			$str = $str . '<a href="categories.php">' . $lang_string[ 'menu_categories' ] . '</a><br />';
			$str = $str . '<a href="add_block.php">' . $lang_string[ 'menu_add_block' ] . '</a><br />';
			$str = $str . '<a href="setup.php">' . $lang_string[ 'menu_setup' ] . '</a><br />';
			$str = $str . '<a href="emoticons.php">' . $lang_string[ 'menu_emoticons' ] . '</a><br />';
			$str = $str . '<a href="themes.php">' . $lang_string[ 'menu_themes' ] . '</a><br />';
			$str = $str . '<a href="colors.php">' . $lang_string[ 'menu_colors' ] . '</a><br />';
			$str = $str . '<a href="options.php">' . $lang_string[ 'menu_options' ] . '</a><br />';
			$str = $str . '<a href="info.php">' . $lang_string[ 'menu_info' ] . '</a><br />';
			$str = $str . '<a href="moderation.php">' . $lang_string[ 'menu_moderation' ] . '</a><br />';

			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_setup' ];
			$result[ 'content' ] = $str;

			return ( $result );
		}
	}

	function menu_most_recent_comments () {
		global $lang_string, $blog_config;

		if ( $blog_config[ 'blog_enable_lastcomments' ] ) {
			$str = get_most_recent();

			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_most_recent' ];
			$result[ 'content' ] = $str;

			return ( $result );
		}
	}

	function menu_most_recent_trackbacks () {
		global $lang_string, $blog_config;

		if ( $blog_config[ 'blog_trackback_enabled' ] ) {
			$str = get_most_recent_trackback();

			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_most_recent_trackback' ];
			$result[ 'content' ] = $str;

			return ( $result );
		}
	}

	function menu_search_field () {
		// Returns the search field text box.
		//
		// Example:
		// --------
		// Search
		// --------- [go]
		//
		global $lang_string;

		$str = '<form method="get" action="search.php">';
		$str = $str . '<input type="text" size="16" name="q" />&nbsp;';
		$str = $str . '<input type="submit" value="' . $lang_string[ 'search_go' ] . '" />';
		$str = $str . '</form>';

		$result = array();
		$result[ 'title' ] = $lang_string[ 'search_title' ];
		$result[ 'content' ] = $str;

		return ( $result );
	}

	function page_generated_in () {
		// Returns "Page Generated x.xxxx in seconds"
		global $lang_string, $page_timestamp, $blog_config;

		$str = str_replace ( '%s', round( getmicrotime() - $page_timestamp, 4 ), $lang_string[ 'page_generated_in' ] );

		if ( $blog_config[ 'blog_footer_counter'] ) {
			$str = $str . '&nbsp;|&nbsp;' . $lang_string[ 'counter_total' ] . stat_total();
		}

		return ( $str );
	}

	function menu_most_recent_entries () {
		global $lang_string, $blog_config;

		if ( $blog_config['blog_enable_lastentries'] ) {
			$entry_file_array = blog_entry_listing();

			// Grab the next X number of entries
			$file_array = array();
			for ( $i = 0; $i < min( $blog_config[ 'blog_max_entries' ]<<1, count( $entry_file_array ) ); $i++ ) {
				array_push( $file_array, $entry_file_array[ $i ] );
			}

			// Read entry files
			$contents = array();
			for ( $i = 0; $i < count( $file_array ); $i++ ) {
				list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $file_array[ $i ] );
				array_push( $contents, array( 	'path' => ( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename ),
												'entry' => $entry_filename,
												'year' => $year_dir,
												'month' => $month_dir ) );
			}

			$str = '';
			if ( $contents ) {
				if ( ( dirname($_SERVER[ 'PHP_SELF' ]) == '\\' || dirname($_SERVER[ 'PHP_SELF' ]) == '/' ) ) {
					// Hosted at root.
					$base_permalink_url = 'http://'.$_SERVER[ 'HTTP_HOST' ].'/';
				} else {
					// Hosted in sub-directory.
					$base_permalink_url = 'http://'.$_SERVER[ 'HTTP_HOST' ].dirname($_SERVER[ 'PHP_SELF' ]).'/';
				}

				for ( $i = 0; $i <= count( $contents ) - 1; $i++ ) {
					$blog_entry_data = blog_entry_to_array( $contents[$i][ 'path' ] );

					$entry_array = array();
					$entry_array[ 'subject' ] = blog_to_html( $blog_entry_data[ 'SUBJECT' ], false, false );

					$entry = sb_strip_extension( $contents[$i][ 'entry' ] );

					$entry_array[ 'permalink' ][ 'url' ] = $base_permalink_url . 'index.php?entry=' . $entry;

					$str = $str . '<a href="' . $entry_array[ 'permalink' ][ 'url' ] . '">' . $entry_array[ 'subject' ] . '</a><p />';
				}
			}

			$result = array();
			$result[ 'title' ] = $lang_string[ 'menu_most_recent_entries' ];
			$result[ 'content' ] = $str;

			return ( $result );
		}
	}
?>
