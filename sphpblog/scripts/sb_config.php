<?php

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com

	// read_config ( )
	// write_config ( $blog_title, $blog_author, $blog_email, $blog_avatar, $blog_footer, $blog_language, $blog_entry_order, $blog_comment_order, $blog_enable_comments, $blog_max_entries, $blog_comments_popup, $comment_tags_allowed, $blog_enable_gzip_txt, $blog_enable_gzip_output, $blog_email_notification, $blog_send_pings, $blog_ping_urls, $blog_enable_voting, $blog_trackback_enabled, $blog_trackback_auto_discovery, $blog_enable_cache, $blog_enable_calendar, $blog_calendar_start, $blog_enable_title, $blog_enable_permalink, $blog_enable_stats, $blog_enable_lastcomments, $blog_enable_lastentries, $blog_enable_capcha_image )
	// write_metainfo ( $info_keywords, $info_description, $info_copyright )
	// write_theme ( $blog_theme )
	// read_theme ( )
	// write_colors ( $post_array, $user_file )
	// read_colors ( )

	// ----------------
	// Config Functions
	// ----------------

	function read_config ( ) {
		// Read config information from file.
		//
		global $blog_config;

		$blog_config = array();

		// LOAD CONFIG INFORMATION
		$contents = sb_read_file( 'config/config.txt' );
		if ( $contents ) {
			$temp_configs = explode('|', $contents);
			$config_keys = array( 	'blog_title',
									'blog_author',
									'blog_footer',
									'blog_language',
									'blog_entry_order',
									'blog_comment_order',
									'blog_enable_comments',
									'blog_max_entries',
									'blog_comments_popup',
									'comment_tags_allowed',
									'blog_email',
									'blog_avatar',
									'blog_enable_gzip_txt',
									'blog_enable_gzip_output',
									'blog_email_notification',
									'blog_send_pings',
									'blog_ping_urls',
									'blog_enable_voting',
									'blog_trackback_enabled',
									'blog_trackback_auto_discovery',
									'blog_enable_cache',
									'blog_enable_calendar',
									'blog_calendar_start',
									'blog_enable_title',
									'blog_enable_permalink',
									'blog_enable_stats',
									'blog_enable_lastcomments',
									'blog_enable_lastentries',
									'blog_enable_capcha',
									'blog_comment_days_expiry',
									'blog_enable_capcha_image',
									'blog_enable_archives',
									'blog_enable_login',
                  'blog_enable_counter',
                  'blog_footer_counter',
                  'blog_counter_hours' );

			for ( $i = 0; $i < count( $temp_configs ); $i++ ) {
				$key = $config_keys[ $i ];
				$blog_config[ $key ] = $temp_configs[ $i ];
			}
		}

		// I've got a minor issue here. You have to set the language before you
		// can call strings.php. The strings file doesn't get called until after
		// read_config. So... I'm just putting in some english values here....

		if ( !isset( $blog_config[ 'blog_language' ] ) ) {
			$blog_config[ 'blog_language' ] = 'english';
		}

		if ( !isset( $blog_config[ 'blog_title' ] ) ) {
			$blog_config[ 'blog_title' ]= 'No Title';
		}

		if ( !isset( $blog_config[ 'blog_author' ] ) ) {
			$blog_config[ 'blog_author' ] = 'No Author';
		}

		if ( !isset( $blog_config[ 'blog_email' ] ) ) {
			$blog_config[ 'blog_email' ] = 'email@myblog.com';
		}

		if ( !isset( $blog_config[ 'blog_avatar' ] ) ) {
			$blog_config[ 'blog_avatar' ] = '';
		}

		if ( !isset( $blog_config[ 'blog_footer' ] ) ) {
			$blog_config[ 'blog_footer' ] = 'No Footer'; // $lang_string[ 'sb_default_footer' ];
		}

		if ( !isset( $blog_config[ 'blog_entry_order' ] ) ) {
			$blog_config[ 'blog_entry_order' ] = 'new_to_old';
		}

		if ( !isset( $blog_config[ 'blog_comment_order' ] ) ) {
			$blog_config[ 'blog_comment_order' ] = 'new_to_old';
		}

		if ( !isset( $blog_config[ 'blog_enable_comments' ] ) ) {
			$blog_config[ 'blog_enable_comments' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_max_entries' ] ) ) {
			$blog_config[ 'blog_max_entries' ] = 5;
		}

		if ( !isset( $blog_config[ 'blog_comments_popup' ] ) ) {
			$blog_config[ 'blog_comments_popup' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_voting' ] ) ) {
			$blog_config[ 'blog_enable_voting' ] = 1;
		}

		if ( !isset( $blog_config[ 'comment_tags_allowed' ] ) ) {
			$blog_config[ 'comment_tags_allowed' ] = explode(',', 'b,i,strong,em,url');
		} else {
			$blog_config[ 'comment_tags_allowed' ] = explode(',', $blog_config[ 'comment_tags_allowed' ]);
		}

		if ( !isset( $blog_config[ 'blog_enable_gzip_txt' ] ) ) {
			$blog_config[ 'blog_enable_gzip_txt' ] = 0;
		}

		if ( !isset( $blog_config[ 'blog_enable_gzip_output' ] ) ) {
			$blog_config[ 'blog_enable_gzip_output' ] = 0;
		}

		if ( !isset( $blog_config[ 'blog_email_notification' ] ) ) {
			$blog_config[ 'blog_email_notification' ] = 0;
		}

		if ( !isset( $blog_config[ 'blog_send_pings' ] ) ) {
			$blog_config[ 'blog_send_pings' ] = 0;
		}

		if ( !isset( $blog_config[ 'blog_ping_urls' ] ) ) {
			$blog_config[ 'blog_ping_urls' ] = '';
		}

		if ( !isset( $blog_config[ 'blog_trackback_enabled' ] ) ) {
			$blog_config[ 'blog_trackback_enabled' ] = 0;
		}

		if ( !isset( $blog_config[ 'blog_trackback_auto_discovery' ] ) ) {
			$blog_config[ 'blog_trackback_auto_discovery' ] = 0;
		}

		if ( !isset( $blog_config[ 'blog_enable_cache' ] ) ) {
			$blog_config[ 'blog_enable_cache' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_calendar' ] ) ) {
			$blog_config[ 'blog_enable_calendar' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_archives' ] ) ) {
			$blog_config[ 'blog_enable_archives' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_title' ] ) ) {
			$blog_config[ 'blog_enable_title' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_permalink' ] ) ) {
			$blog_config[ 'blog_enable_permalink' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_capcha' ] ) ) {
			$blog_config[ 'blog_enable_capcha' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_stats' ] ) ) {
			$blog_config[ 'blog_enable_stats' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_lastcomments' ] ) ) {
			$blog_config[ 'blog_enable_lastcomments' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_lastentries' ] ) ) {
			$blog_config[ 'blog_enable_lastentries' ] = 1;
		}

		//'blog_calendar_start'
		if ( !isset( $blog_config[ 'blog_calendar_start' ] ) ) {
			$blog_config[ 'blog_calendar_start' ] = 'sunday';
		}

		if ( !isset( $blog_config[ 'blog_comment_days_expiry' ] ) ) {
			$blog_config[ 'blog_comment_days_expiry' ] = 0;
		}

		if ( !isset( $blog_config[ 'blog_enable_capcha_image' ] ) ) {
			$blog_config[ 'blog_enable_capcha_image' ] = function_exists( 'imagecreate' );
		}

		if ( !isset( $blog_config[ 'blog_enable_login' ] ) ) {
			$blog_config[ 'blog_enable_login' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_enable_counter' ] ) ) {
			$blog_config[ 'blog_enable_counter' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_footer_counter' ] ) ) {
			$blog_config[ 'blog_footer_counter' ] = 1;
		}

		if ( !isset( $blog_config[ 'blog_counter_hours' ] ) ) {
			$blog_config[ 'blog_counter_hours' ] = 24;
		}

		// READ META-DATA INFORMATION
		$contents = sb_read_file( 'config/metainfo.txt' );
		if ( $contents ) {
			$temp_configs = explode('|', $contents);
			$config_keys = array( 	'info_keywords',
									'info_description',
									'info_copyright', );

			for ( $i = 0; $i < count( $temp_configs ); $i++ ) {
				$key = $config_keys[ $i ];
				$blog_config[ $key ] = $temp_configs[ $i ];
			}
		}

		if ( !isset( $blog_config[ 'info_keywords' ] ) ) {
			$blog_config[ 'info_keywords' ] = '';
		}

		if ( !isset( $blog_config[ 'info_description' ] ) ) {
			$blog_config[ 'info_description' ]= '';
		}

		if ( !isset( $blog_config[ 'info_copyright' ] ) ) {
			$blog_config[ 'info_copyright' ] = '';
		}

		// READ BLACKLIST
		$contents = sb_read_file( 'config/blacklist.txt' );
		if ( $contents ) {
			$blog_config[ 'banned_address_list' ] = $contents;
		}

		if ( !isset( $blog_config[ 'banned_address_list' ] ) ) {
			$blog_config[ 'banned_address_list' ] = '';
		}

		// READ BANNED WORD LIST
		$contents = sb_read_file( 'config/bannedwordlist.txt' );
		if ( $contents ) {
			$blog_config[ 'banned_word_list' ] = $contents;
		}

		if ( !isset( $blog_config[ 'banned_word_list' ] ) ) {
			$blog_config[ 'banned_word_list' ] = '';
		}

		// LOAD THEME
		read_theme();

		global $blog_theme;
		require_once('themes/' . $blog_theme . '/themes.php');

		// LOAD COLORS
		read_colors();

		// Start GZIP Output
		if ( $blog_config[ 'blog_enable_gzip_output' ] ) {
			sb_gzoutput ();
		}
	}

	function write_config ( $blog_title, $blog_author, $blog_email, $blog_avatar, $blog_footer,
                          $blog_language, $blog_entry_order, $blog_comment_order, $blog_enable_comments,
                          $blog_max_entries, $blog_comments_popup, $comment_tags_allowed,
                          $blog_enable_gzip_txt, $blog_enable_gzip_output, $blog_email_notification,
                          $blog_send_pings, $blog_ping_urls, $blog_enable_voting, $blog_trackback_enabled,
                          $blog_trackback_auto_discovery, $blog_enable_cache, $blog_enable_calendar,
                          $blog_calendar_start, $blog_enable_title, $blog_enable_permalink, $blog_enable_stats,
                          $blog_enable_lastcomments, $blog_enable_lastentries, $blog_enable_capcha,
                          $blog_comment_days_expiry, $blog_enable_capcha_image, $blog_enable_archives,
                          $blog_enable_login, $blog_enable_counter, $blog_footer_counter, $blog_counter_hours ) {
		// Save config information to file.
		//
		$array = array( clean_post_text( $blog_title ),
						clean_post_text( $blog_author ),
						clean_post_text( $blog_footer ),
						$blog_language,
						$blog_entry_order,
						$blog_comment_order,
						$blog_enable_comments,
						$blog_max_entries,
						$blog_comments_popup,
						$comment_tags_allowed,
						clean_post_text( $blog_email ),
						$blog_avatar,
						$blog_enable_gzip_txt,
						$blog_enable_gzip_output,
						$blog_email_notification,
						$blog_send_pings,
						clean_post_text( $blog_ping_urls ),
						$blog_enable_voting,
			         	$blog_trackback_enabled,
			         	$blog_trackback_auto_discovery,
					 	$blog_enable_cache,
						$blog_enable_calendar,
						$blog_calendar_start,
						$blog_enable_title,
						$blog_enable_permalink,
						$blog_enable_stats,
						$blog_enable_lastcomments,
						$blog_enable_lastentries,
						$blog_enable_capcha,
						$blog_comment_days_expiry,
						$blog_enable_capcha_image,
						$blog_enable_archives,
						$blog_enable_login,
            $blog_enable_counter,
            $blog_footer_counter,
            $blog_counter_hours );

		$str = implode('|', $array);

		if (!file_exists('config')) {
			$oldumask = umask(0);
			$ok = mkdir( 'config', 0777 );
			umask( $oldumask );
		}

		$filename = 'config/config.txt';
		$result = sb_write_file( $filename, $str );

		$filename='config/~blog_entry_listing.tmp';
		sb_delete_file( $filename );

		if ( $result ) {
			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $filename );
		}
	}

	// ----------------
	// Meta Information
	// ----------------

	function write_metainfo ( $info_keywords, $info_description, $info_copyright ) {
		// Save information to file.
		//
		$array = array( clean_post_text( $info_keywords ),
						clean_post_text( $info_description ),
						clean_post_text( $info_copyright ) );

		$str = implode('|', $array);

		if (!file_exists('config')) {
			$oldumask = umask(0);
			$ok = mkdir( 'config', 0777 );
			umask( $oldumask );
		}

		$filename = 'config/metainfo.txt';
		$result = sb_write_file( $filename, $str );

		if ( $result ) {
			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $filename );
		}
	}

	// ----------------
	// Blacklist
	// ----------------

	function write_blacklist ( $address_list ) {
		// Save information to file.
		//
		if (!file_exists('config')) {
			$oldumask = umask(0);
			$ok = mkdir( 'config', 0777 );
			umask( $oldumask );
		}

		$filename = 'config/blacklist.txt';
		$result = sb_write_file( $filename, $address_list );

		if ( $result ) {
			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $filename );
		}
	}

	function write_bannedwordlist ( $banned_word_list ) {
		// Save information to file.
		//
		if (!file_exists('config')) {
			$oldumask = umask(0);
			$ok = mkdir( 'config', 0777 );
			umask( $oldumask );
		}

		$filename = 'config/bannedwordlist.txt';
		$result = sb_write_file( $filename, $banned_word_list );

		if ( $result ) {
			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $filename );
		}
	}

	function add_to_blacklist ( $new_address ) {
		// Save information to file.
		//
		if (!file_exists('config')) {
			$oldumask = umask(0);
			$ok = mkdir( 'config', 0777 );
			umask( $oldumask );
		}
		$filename = 'config/blacklist.txt';
		$old_address_list = sb_read_file( $filename );


		$result = sb_write_file( $filename, trim( $new_address . chr(13) .$old_address_list  ) );

		if ( $result ) {
			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $result );
		}
	}

	// --------------
	// Theme Settings
	// --------------

	function write_theme ( $blog_theme ) {
		// Save theme information to file.
		//
		$array = array( clean_post_text( $blog_theme ) );

		$str = implode('|', $array);

		if (!file_exists('config')) {
			$oldumask = umask(0);
			$ok = mkdir('config', 0777 );
			umask($oldumask);
		}

		$filename = 'config/theme.txt';
		$result = sb_write_file( $filename, $str );

		if ( $result ) {
			return ( true );
		} else {
			// Error:
			if ( file_exists( $filename ) ) {
				$str = 'Could not update file: '.$filename.'<br />';
			} else {
				$str = 'Could not create file: '.$filename.'<br />';
			}
			return ( $str );
		}
	}

	function read_theme ( ) {
		// Read theme information from file.
		//
		global $blog_theme;

		$blog_theme = 'default';

		$filename = 'config/theme.txt';
		$result = sb_read_file( $filename );

		if ( $result ) {
			list( $blog_theme ) = explode('|', $result);
		} else {
			// Error:
			// Probably couldn't read file.
			return ( $filename );
		}
	}

	// ----------------------
	// Color Config Functions
	// ----------------------

	function write_colors ( $post_array, $user_file ) {
		// Save color information to file.
		//
		global $blog_theme;

		$str = implode('|', $post_array);

		if ( isset( $user_file ) ) {
			if (!file_exists('config/schemes')) {
				$oldumask = umask(0);
				$ok = mkdir('config/schemes', 0777 );
				umask($oldumask);
			}
			$custom_file = 'config/schemes/' . $user_file . '.txt';
			$result = sb_write_file( $custom_file, $str );
		}

		$filename = 'config/colors-' . $blog_theme . '.txt';
		$result = sb_write_file( $filename, $str );

		if ( $result ) {
			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $filename );
		}
	}

	function read_colors ( ) {
		// Read color information from file.
		//
		global $user_colors, $blog_theme;
		$color_def = theme_default_colors();
		for ( $i = 0; $i < count( $color_def ); $i++ ) {
			$user_colors[ $color_def[$i][ 'id' ] ] = $color_def[$i][ 'default' ];
		}

		$filename = 'config/colors-' . $blog_theme . '.txt';
		$result = sb_read_file( $filename );
		if ( $result ) {
			$saved_colors = explode('|', $result);
			for ( $i = 0; $i < count( $saved_colors ); $i = $i + 2 ) {
				$id = $saved_colors[$i];
				$color = $saved_colors[$i+1];
				$user_colors[ $id ] = $color;
			}
		}
	}
?>
