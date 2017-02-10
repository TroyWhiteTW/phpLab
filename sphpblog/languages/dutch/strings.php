<?php
	// Dutch Language File
	// (c) 2004 S. Klippert, klippy@users.sourceforge.net
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string['language'] = 'dutch';
		
		$lang_string[ 'locale' ] = array('nl_NL','dutch','nld');
		$lang_string['rss_locale'] = 'nl-NL'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		
		setlocale(LC_TIME, $lang_string['locale'] );
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "Home";
		$lang_string['menu_contact'] = "Contact Me";
		$lang_string['menu_stats'] = "Stats";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archives";
		$lang_string[ 'menu_viewarchives' ] = "View Archives"; // New in 0.4.7
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Bericht toevoegen";
		$lang_string['menu_add_static'] = "Vaste pagina toevoegen";
		$lang_string['menu_upload'] = "Afbeelding uploaden";
		$lang_string['menu_setup'] = "Instellingen";
		$lang_string['menu_categories'] = "Categories"; // 0.3.7q
		$lang_string['menu_info'] = "Information";
		$lang_string['menu_options'] = "Opties";
		$lang_string['menu_themes'] = "Themes";
		$lang_string['menu_colors'] = "Kleuren";
		$lang_string['menu_change_login'] = "Login wijzigen";
		$lang_string['menu_logout'] = "Uitloggen";
		$lang_string['menu_login'] = "Inloggen";
		$lang_string['menu_most_recent'] = "Nieuwste reacties";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocks";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Today:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Yesterday:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Counter Totals"; // New for 0.4.8
		
		// Other
		$lang_string['home'] = "Terug naar startpagina";
		$lang_string['nav_next'] = 'Next';
		$lang_string['nav_back'] = 'Back';
		$lang_string['search_title'] = 'Search:';
		$lang_string['search_go'] = 'Go';
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds';
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december' );
		$lang_string['sb_default_title'] = 'Geen titel';
		$lang_string['sb_default_author'] = 'Geen auteur';
		$lang_string['sb_default_footer'] = 'Geen ondertitel';
		
		$lang_string['sb_edit'] = 'bewerk';
		$lang_string['sb_delete'] = 'verwijder';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'related link'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'reactie toevoegen';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'reactie';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'reacties';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' keer bekeken';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' keer bekeken';
		
		$lang_string['sb_add_link_btn'] = '+ link';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Onderwerp:";
				$lang_string['label_insert'] = "Code invoegen:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Bekijk afbeeldingen";
				$lang_string['label_entry'] = "Bericht:";
				$lang_string['btn_preview'] = "&nbsp;Bekijk&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Verstuur&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings <-- Need Translation
				$lang_string['insert_styles'] = "Vul de tekst in die opgemaakt moet worden";
				$lang_string['insert_image'] = "Vul de URL van de afbeelding in";
				$lang_string['insert_url1'] = "Vul de tekst in die bij de link komt te staan (optioneel)";
				$lang_string['insert_url2'] = "Vul de volledige URL van de lnik in";
				$lang_string['insert_url3'] = "Open URL in new window (Optional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Vul onderwerp en bericht in.";		
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Optional:';
				$lang_string['insert_image_width'] = 'Width (Optional):';
				$lang_string['insert_image_height'] = 'Height (Optional):';
				$lang_string['insert_image_popup'] = 'View full-size in pop-up when clicked (Optional):';
				$lang_string['insert_image_float'] = 'Float (Optional):';
		
				$lang_string['day'] = 'Day';
				$lang_string['month'] = 'Month';
				$lang_string['year'] = 'Year';
				$lang_string['hour'] = 'Hour';
				$lang_string['minute'] = 'Minute';
				$lang_string['second'] = 'Second';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Voeg bericht toe";
				$lang_string['instructions'] = "Vul het formulier in klik op 'Bekijk' om te zien hoe het bericht geplaatst zal worden, of klik op 'Verstuur' om het bericht te plaatsen.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Bekijk / Wijzig bericht";
				$lang_string['instructions_preview'] = "Het bericht zal als volgt uit komen te zien. Als je opmaakcodes of afbeeldingen gebruikt, vergeet dan niet de 'tags' te sluiten.";
				$lang_string['title_update'] = "Wijzig bericht";
				$lang_string['instructions_update'] = "Het bericht kan hieronder gewijzigd worden. Klik op 'Bekijk' of 'Verstuur' als het bericht klaar is.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Bericht niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Voeg vaste pagina toe";
				$lang_string['instructions'] = "Vul het formulier in om een vaste pagina te maken. Een vaste pagina verschijnt, in tegenstelling tot gewone berichten, als een link in het menu aan de rechterkant. Ze kunnen gebruikt worden voor pagina's die altijd toegankelijk moeten zijn, zoals: Info, Contact, Agenda, etc. Klik op 'Bekijk' om te zien hoe de pagina uit zal zien, of klik op 'Verstuur' om de pagina op te slaan.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Bekijk / Wijzig vaste pagina";
				$lang_string['instructions_preview'] = "De vaste pagina zal als volgt uit komen te zien. Als je opmaakcodes of afbeeldingen gebruikt, vergeet dan niet de 'tags' te sluiten.";
				$lang_string['title_update'] = "Wijzig vaste pagina";
				$lang_string['instructions_update'] = "De vaste pagina kan hieronder gewijzigd worden. Klik op 'Bekijk' of 'Verstuur' als de pagina klaar is.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Pagina niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Add / Manage Links";
				$lang_string['instructions'] = "Add custom Blocks";
				$lang_string['up'] = "up";
				$lang_string['down'] = "down";
				$lang_string['edit'] = "edit";
				$lang_string['delete'] = "delete";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block content:";
				$lang_string['instructions_edit'] = "You are currently editing block:";
				$lang_string['instructions_modify'] = "Click below to modify a block:";
				$lang_string['submit_btn_edit'] = "Edit Block";
				$lang_string['submit_btn_add'] = "Add Block";
				$lang_string['form_error'] = "Please complete the Name field.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
				// Add / Manage Links
				$lang_string['title'] = "Links toevoegen / beheren";
				$lang_string['instructions'] = "Voeg links naar andere websites toe. Vul het formulier in en klik op 'Link toevoegen' om een link toe te voegen. Klik op de omhoog/omlaag knoppen om de volgorde van de links te veranderen. Klik op de wijzigen knop om een link aan te passen. Klik op verwijderen om een link te verwijderen";
				$lang_string['up'] = "omhoog";
				$lang_string['down'] = "omlaag";
				$lang_string['edit'] = "wijzigen";
				$lang_string['delete'] = "verwijderen";
				$lang_string['link_name'] = "Link naam:";
				$lang_string['link_url'] = "Link URL: (Optioneel. Leeglaten om een scheidingsteken te maken.)";
				$lang_string['instructions_edit'] = "Je bewerkt deze link:";
				$lang_string['instructions_modify'] = "Klik hieronder om een link te wijzigen:";
				$lang_string['submit_btn_edit'] = "Wijzig Link";
				$lang_string['submit_btn_add'] = "Link toevoegen";
				$lang_string['form_error'] = "Vul een naam in.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Add / Manage Categories";
				$lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Current Categories";
				$lang_string['no_categories_found'] = "No Categories Found";
				$lang_string['category_list'] = "Category List:";
				$lang_string['validate'] = "Validate";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Kleuren wijzigen";
				$lang_string['instructions'] = "Je kan de tekst- en achtergrondkleuren van je blog wijzigen. Gebruik de kleurkiezer om je kleur te wijzigen, of typ de HEX waarde in het veld.";
				$lang_string['bg_color'] = "Pagina kleur";
				$lang_string['main_bg_color'] = "Hoofdpagina kleur";
				$lang_string['border_color'] = "Pagina rand";
				$lang_string['inner_border_color'] = "Binnenste rand";
				$lang_string['header_bg_color'] = "Titel achtergrond";
				$lang_string['header_txt_color'] = "Titel tekst";
				$lang_string['menu_bg_color'] = "Menu achtergrond";
				$lang_string['footer_bg_color'] = "Ondertitel kleur";
				$lang_string['txt_color'] = "Gewone tekst";
				$lang_string['headline_txt_color'] = "Titel text";
				$lang_string['date_txt_color'] = "Datum tekst";
				$lang_string['footer_txt_color'] = "Ondertitel tekst";
				$lang_string['link_reg_color'] = "Gewone link";
				$lang_string['link_hi_color'] = "Actieve link";
				$lang_string['link_down_color'] = "Bezochte link";
				// More Colors
				$lang_string['entry_bg'] = "Entry BG";
				$lang_string['entry_title_bg'] = "Entry Title BG";
				$lang_string['entry_border'] = "Entry Border";
				$lang_string['entry_title_text'] = "Entry Title Text";
				$lang_string['entry_text'] = "Entry Text";
				$lang_string['menu_bg'] = "Menu BG";
				$lang_string['menu_title_bg'] = "Menu Title BG";
				$lang_string['menu_border'] = "Menu Border";
				$lang_string['menu_title_text'] = "Menu Title Text";
				$lang_string['menu_text'] = "Menu Text";
				$lang_string['menu_link_reg_color'] = "Menu Link Default";
				$lang_string['menu_link_hi_color'] = "Menu Link Hover";
				$lang_string['menu_link_down_color'] = "Menu Link Active";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Name:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Homepage:"; //New in 0.4.6.2
				$lang_string['comment'] = "Comment:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
				$lang_string['comment_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Reacties";
				$lang_string['header'] = "Plaats reactie";
				$lang_string['instructions'] = "Vul het formulier in om een reactie te plaatsen.";
				$lang_string['comment_name'] = "Naam:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "Bericht:";
				$lang_string['post_btn'] = "&nbsp;Reactie Versturen&nbsp;";
				$lang_string['delete_btn'] = "verwijder";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Oeps!</h2>Reactie niet geplaatst. De reactie kan helaas niet worden opgeslagen.<br /><br />Melding:<br />";
				$lang_string['error_delete'] = "<h2>Oeps!</h2>Reactie niet verwijderd. De reactie kan helaas niet worden verwijderd.<br /><br />Melding:<br />";
				$lang_string['form_error'] = "Vul een Naam en een Bericht in."; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Verwijder bericht";
				$lang_string['instructions'] = "Het onderstaande bericht wordt verwijderd. Dit bericht echt verwijderen? Dit kan niet ongedaan worden gemaakt...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annuleren&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Kan bericht niet verwijderen.<br /><br />Melding:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Verwijder vaste pagina";
				$lang_string['instructions'] = "De onderstaande vaste pagina wordt verwijderd. Deze pagina echt verwijderen? Dit kan niet ongedaan worden gemaakt...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annuleren&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Kan pagina niet verwijderen.<br /><br />Melding:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Afbeeldingen lijst";
				$lang_string['instructions'] = "Klik op de links hieronder om afbeeldingen te bekijken.<br /><br />Om een afbeelding aan een bericht toe te voegen:<br />1) Control-klik op een link en kies 'Kopieer link naar klembord'.<br />2) Ga terug naar de 'Bericht toevoegen / verwijderen' pagina.<br />3) Klik op de 'img' knop en kopieer de URL in het venster.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data Information";
				$lang_string['instructions'] = "The information below is used for &quot;meta-data&quot;, which helps search engines correctly find and identify your site. Information may also be used in RSS feeds.";
				$lang_string['info_keywords'] = "Keywords: (List of keywords separated by commas.)";
				$lang_string['info_description'] = "Description: (An abstract or a free-text description of your site.)";
				$lang_string['info_copyright'] = "Rights: (Copyright statement, or link to document containing information.)";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Title and Author fields.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "Inloggen";
				$lang_string['instructions'] = "Vul gebruikersnaam en wachtwoord in:";
				$lang_string['username'] = "Gebruikersnaam:";
				$lang_string['password'] = "Wachtwoord";
				$lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gelukt!</h2>Je bent nu ingelogd<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Oeps!</h2>Inloggen mislukt. Controleer gebruikersnaam en wachtwoord en probeer opnieuw.<p />";
				$lang_string['form_error'] = "Vul gebruikersnaam en wachtwoord in."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Uitloggen";
				$lang_string['instructions'] = "<h2>Oeps!</h2>Uitloggen mislukt. Kan cookie niet verwijderen.<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'set_login': // <-- New
				$lang_string['title'] = "Change Username &amp; Password";
				$lang_string['instructions'] = "Use the form below to change your Username and/or Password. Enter the Username and Password that you want to use.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>Your Username and/or Password is active. Happy blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog is a light-weight blogging system. It requires PHP 4.1 or greater, and write-permissions on the server. All information is stored in flat-files, so no database is required.<br /><br />
				In order to begin, Simple PHP Blog needs to create three folders (<b>config</b>, <b>content</b>, and <b>images</b>) in which to store your information. After that, you will create your password and then you can start blogging.<br /><br />
				<b>Click below to begin setup:</b>";
				$lang_string['begin'] = "[ Begin Setup ]";
				break;
			case 'install02':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Trying to create <b>config</b>, <b>content</b>, and <b>images</b> folders:";
				$lang_string['folder_exists'] = "Okay! Folder already exists. No changes made...";
				$lang_string['folder_failed'] = "Whoops! Could not create folder...";
				$lang_string['folder_success'] = "Success! Folder created...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Could not create one or more folders!<br /><br />This is most likely because:<br />
				<ol>
				<li><b>Write Permissions</b> aren't set to allow <b>Read/Write</b> access.</li>
				<li>The <b>UID</b>'s (user ID's) of all files and folder must match.</li>
				</ol>
				Follow the trouble-shooting instructions below and click <b>Try Again</b>:<br />
				<ol>
				<li>Manually create the following folders: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
				<li>Enabled <b>Write Permissions</b> on the folders: In your FTP program, Owner, User, and World should have <b>Read</b> and <b>Write</b> access. <i>(You may need to contact your service provider to change these...)</i></li>
				<li>Make sure the UID's of all your files and folders are the same. <i>(You may need to contact your service provider to change these...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Try Again ]";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>Folders created successfully!<p /><b>Click below to continue:</b>";
				$lang_string['continue'] = "[ Continue ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Your web server supports the following encryption schemes:</b>";
				$lang_string['standard'] = "Standard DES Encryption: ";
				$lang_string['extended'] = "Extended DES Encryption: ";
				$lang_string['MD5'] = "MD5 Encryption: ";
				$lang_string['blowfish'] = "Blowfish Encryption: ";
				$lang_string['enabled'] = "enabled";
				$lang_string['disabled'] = "disabled";
				$lang_string['using_standard'] = "<b>Using Standard DES Encryption...</b>";
				$lang_string['using_extended'] = "<b>Using Extended DES Encryption...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Using MD5 Encryption...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Using Blowfish Encryption...</b>";
				$lang_string['using_unknown'] = "<b>Using Unknown Encryption...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Create Username &amp; Password";
				$lang_string['instructions'] = "Use the form below to Create a Username and Password.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in. Click below to visit the Setup page, where you can name your blog. Happy blogging!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				break;
			case 'install04':
				$lang_string['title'] = "Create Password File";
				$lang_string['instructions'] = "Here's the tricky part:<br />
				<ol>
				<li>Open a Text Editor application. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Create a New Text Document.</li>
				<li>Copy and paste the code in the box below into your document.</li>
				<li>Save your file and name it <b>password.php</b> <i>(Be sure to save it in <b>text</b> or <b>plain text</b> format.)</i></li>
				<li>Open a FTP application.</li>
				<li>Upload your new <b>password.php</b> into the <b>config</b> folder on your web site.</li>
				<li>Delete the <b>password.php</b> from your hard drive.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note: If you want to reset your username and password (probably because you forgot it), delete the <b>password.php</b> file in the <b>config</b> folder on your web site. The next time you visit your site, it will walk you through this installation process again...</i>";
				$lang_string['code'] = "Code for <b>password.php</b> file:";
				$lang_string['continue'] = "[ Continue ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Please enter your Username and Password below";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in.<p />
				Click below to visit the <b>Setup</b> page, where you can personalize your new blog.<p />
				<i>Note: Now that you've completed the installation process, it is recommended that you delete the <b>installXX.php</b> files from your web site. (i.e. install00.php through install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>You are not logged in. Please verify that you typed your Username and Password correctly and try again.<p />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
				// Success
				$lang_string['btn_setup'] = "[ Setup ]";
				$lang_string['btn_try_again'] = "[ Try Again ]";
				break;
			case 'setup':
				$lang_string['title'] = "Instellingen";
				$lang_string['instructions'] = "Je kan de naam van je blog en andere informatie hier wijzigen.";
				$lang_string['blog_title'] = "Blog naam:";
				$lang_string['blog_author'] = "Auteur:";
				$lang_string['blog_email'] = "Email:";
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Ondertitel:";
				$lang_string['blog_choose_language'] = "Kies taal:";
				$lang_string['blog_enable_comments'] = "Enable User Comments"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Open Comments in Popup Window"; // <-- New 0.3.6
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted";
				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;";
				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)";
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Maximum Entries to Display:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Tags to Allow in Comments:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension.";
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files";
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output";
				$lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				$lang_string['form_error'] = "Vul titel en auteur in:";
				$lang_string['label_entry_order'] = "Bericht volgorde:";
				$lang_string['select_new_to_old'] = "Nieuwste berichten bovenaan";
				$lang_string['select_old_to_new'] = "Oudste berichten bovenaan";
				$lang_string['label_comment_order'] = "Reactie volgorde:";
				$lang_string['cal_sunday'] = "Sunday"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Calendar Week Start Day"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Enable Calendar / Archives Block"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Enable Archives Block"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Enable Counter in Sidebar"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Number of hours to delay before hits are counted again (based on specific ip address):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Enable Login Link (Please bookmark \"login.php\" first...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Enable Plain Text Title Block (Clear checkbox if the title is in the header graphic)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Enable Permalink on Blog Entries"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Enable Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Enable Counter in Footer"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam Images (GD library only) / Anti-Spam Text Field"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Enable Stats Option in Menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Enable Most Recent Comments Listing"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Enable Most Recent Entries Listing"; // New for 0.4.7
				$lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
				$lang_string['title_comments'] = "Comments"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compression"; // New in 0.4.7
				$lang_string['title_entries'] = "Entries"; // New in 0.4.7
				$lang_string['title_general'] = "General"; // New in 0.4.7
				$lang_string['title_language'] = "Language"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL for this entry:";
				$lang_string['delete_btn'] = "delete";
				// Error Response
				$lang_string['error_add'] = "Error storing trackback data.";
				break;
			case 'options':
				$lang_string['title'] = "Opties";
				$lang_string['instructions'] = "Gebruik dit formulier om datum en tijd instellingen voor berichten te wijzigen. Je kan 12 of 24 urige tijdsaanduidingen gebruiken en kort of lang datum formaat. De <b>Voorbeeld</b> velden worden automatisch gewijzigd om de instellingen te bekijken.";
				// Long Date
				$lang_string['ldate_title'] = "Lange datum instelling:";
				$lang_string['weekday'] = "Weekdag";
				$lang_string['month'] = "Maand";
				$lang_string['day'] = "Dag";
				$lang_string['year'] = "Jaar";
				$lang_string['none'] = "Niks";
				// Short Date
				$lang_string['sdate_title'] = "Korte Datum instelling:";
				$lang_string['s_month'] = "Maand";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Dag";
				$lang_string['s_year'] = "Jaar";
				$lang_string['zero_day'] = "Extra 0 voor de dag";
				$lang_string['show_century'] = "Show century";
				// Time
				$lang_string['time_title'] = "Tijd instelling:";
				$lang_string['12hour'] = "12-urige klok";
				$lang_string['24hour'] = "24-urige klok";
				$lang_string['before_noon'] = "Voor de middag";
				$lang_string['after_noon'] = "Na de middag";
				// Date
				$lang_string['date_title'] = "Datum aanduiding:";
				$lang_string['long_date'] = "Lange datum";
				$lang_string['short_date'] = "Korte datum";
				$lang_string['time'] = "Tijd";
				// Menu
				$lang_string['menu_title'] = "Menu Date Display Format:";
				$lang_string['long_date'] = "Long Date";
				$lang_string['short_date'] = "Short Date";
				// Used in multiple places
				$lang_string['zero_day'] = "Voorloop 0 voor de dag";
				$lang_string['zero_month'] = "Voorloop 0 voor de maand";
				$lang_string['zero_hour'] = "Voorloop 0 voor het uur";
				$lang_string['separator'] = "Scheidingsteken:";
				$lang_string['preview'] = "Voorbeeld:";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Verstuur&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Instellingen niet opgeslagen. Er is een probleem opgetreden bij het opslaan.<br /><br />Melding:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Themes";
				$lang_string['instructions'] = "Use the drop-down menu to select a different theme.";
				// Themes
				$lang_string['choose_theme'] = "Themes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Afbeelding uploaden";
				$lang_string['instructions'] = "Klik op de knop de afbeelding te selecteren.";
				$lang_string['select_file'] = "Selecteer afbeelding:";
				$lang_string['upload_btn'] = "Uploaden";
				// Error Response
				$lang_string['error'] = "<h2>Oeps!</h2>Kan afbeelding niet uploaden. Extra informatie:<br /><br />Melding:<br />";
				break;
			case 'search':
				$lang_string['title'] = "De Resultaten van het onderzoek";
				$lang_string['instructions'] = "De resultaten van het onderzoek voor <b>%string</b>:";
				$lang_string['not_found'] = "Geen gevonden resultaten";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contact Me";
				$lang_string['instructions'] = "Vul de vorm in:";
				$lang_string['form_error'] = "Gelieve te voltooien de gebieden van het Onderwerp en van de Commentaar.";
				$lang_string['name'] = "Naam:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Onderwerp:";
				$lang_string['comment'] = "Commentaar:";
				$lang_string['submit_btn'] = "&nbsp;Leg voor&nbsp;";
				$lang_string['success'] = "<h2>Succes!</h2>Uw bericht is verzonden.<p />";
				$lang_string['failure'] = "<h2>Fout!</h2>Uw bericht is niet verzonden. Waarschijnlijkst was Antispam niet behoorlijk ingegaan.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Ga binnen <b>%s</b>"; // 0.4.2
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Statistics";
				$lang_string['general'] = "General";
				$lang_string['entry_info'] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10 Most viewed entries";
				$lang_string['most_commented_entries'] = "10 Most commented entries";
				$lang_string['most_trackbacked_entries'] = "10 Most trackbacked entries";
				$lang_string['vote_info'] = "<b>%s</b> votes stored in <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 Most voted entries"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 Most rated entries"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["errorline1"] = 'The page or function you attempted to process requires the use of cookies.';
				$lang_string["errorline2"] = 'Restore cookie functionality within your browser or protection software and attempt your request again.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["404"] = 'HTTP Error 404 - Page/Function Does Not Exist';
				$lang_string["error_404"] = 'The page or function you attempted to process does not exist.';
				$lang_string["error_javascript"] = 'The page or function you attempted requires javascript in order to properly function.';
				$lang_string["error_emailnotsent"] = 'The message you attempted to send has failed.';
				$lang_string["error_emailnotsentcapcha"] = 'The message you attempted to send has failed because the anti-spam entry was incorrect or missing.';
				$lang_string["clientid"] = 'Client ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Admin Emoticons";
				$lang_string['instructions'] = "
					Check the emoticons you want to use. Write in the box the Tags you want 
					to be replaced by the image. Multiple tags may be used, just separated them 
					by spaces.<br /><br />
		
					For instance:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(It is highly recommended that you make the Tags longer than 2 characters, 
					otherwise unexpected substitutions may occur.)</i>";
				$lang_string["upload_instructions"] = 'Upload New Emoticon:';
				$lang_string["upload_success"] = 'Success! Image uploaded successfully!';
				$lang_string["upload_error"] = 'Error! Image was not uploaded.';
				$lang_string["upload_invalid"] = 'Error! Invalid image file. Image must be a png, jpg, or gif.';
				$lang_string["save_success"] = 'Emoticon preferences saved successfully!';
				$lang_string["save_error"] = 'Error! Emoticon preferences not saved.';
				$lang_string["save_button"] = 'Save Emoticons';
				break;
			default:
				break;
		}

	}
		
?>
