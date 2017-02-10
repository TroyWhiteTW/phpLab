<?php
	function MenuPlugin_links_init ( $plugin ) {
		// Initialization Code
		
		$preferences = sb_read_file( 'config/' . $plugin[ 'NAME' ] . '_prefs.txt' );
		if ( $preferences == NULL) {
			// This is the first time that this plugin has been run
			
			// Set up default values
			$preferences = "enabled";
			
			// Save preferences
			$result = sb_write_file( 'config/' . $plugin[ 'NAME' ] . '_prefs.txt', $preferences );
			
		}
		
		// Do something with preferences... or not.
	}
	
	function MenuPlugin_links_activate( $plugin, $enable=true ) {
		// Enable or Disable the plugin
		
		/*
		// Some error checking... Shouldn't be necessary.
		$status = MenuPlugin_links_getStatus( $plugin );
		if ( $status == "enabled" && $enable == true ) {
			// Already enabled... dummy!
			return;
		} else if ( $status == "disabled" && $enable == false ) {
			// Already disabled... dummy!
			return;
		}
		*/
		
		// Save enable/disable state
		$result = false;
		if ( $enable == true ) {
			$preferences = "enabled";
			$result = sb_write_file( 'config/' . $plugin[ 'NAME' ] . '_prefs.txt', $preferences );
		} else {
			$preferences = "disabled";
			$result = sb_write_file( 'config/' . $plugin[ 'NAME' ] . '_prefs.txt', $preferences );
		}
	}
	
	function MenuPlugin_links_getStatus ( $plugin ) {
		// Returns the status of the plugin ( "enabled" | "disabled" )
		
		$result = sb_read_file( 'config/' . $plugin[ 'NAME' ] . '_prefs.txt' );
		
		if ( $result ) {
			return( $result );
		} else {
			// By default, should be enabled...
			return( "enabled" );
		}		
	}
	
	function  MenuPlugin_links_display ( $plugin ) {
		// Display Code
		global $lang_string, $logged_in, $blog_config;
		
		// Home
		$str = '<a href="index.php">' . $lang_string[ 'menu_home' ] . '</a><br />';
		if ( !empty( $blog_config[ 'blog_email' ] ) ) {
			// Contact
			$str .= '<a href="contact.php">' . $lang_string[ 'menu_contact' ] . '</a><br />';
		}
		// Stats
		$str .= '<a href="stats.php">' . $lang_string[ 'menu_stats' ] . '</a><br />';
		
		// User Links
		$filename = 'config/links.txt';
		$result = sb_read_file( $filename );
		
		// Append new links.
		if ( $result ) {
			$array = explode('|', $result);
			for ( $i = 0; $i < count( $array ); $i = $i + 2 ) {
				if ( $array[$i+1] == '' ) {
					$str .= '<br />' . $array[$i] . '<br />';
				} else {
					$str .= '<a href="' . $array[$i+1] . '">' . $array[$i] . '</a><br />';
				}
			}
		}
		
		if ( $logged_in === true ) {
			$str .= '<a href="add_link.php">[ ' . $lang_string[ 'sb_add_link_btn' ]  . ' ]</a><br />';
		}
		
		// Return Result
		$result = array();
		$result[ 'title' ] = $lang_string[ 'menu_links' ];
		$result[ 'content' ] = $str;
		
		return( $result );
	}
?>