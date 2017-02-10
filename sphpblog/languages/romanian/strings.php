<?php

	// English Language File
	// (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com
	//

	// Simple PHP Version: 0.4.1
	// Language Version:   0.4.1.0	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;			

		// Language: English
		$lang_string['language'] = 'românã';	
		
		$lang_string['locale'] = array('ro_RO', 'ro');
		$lang_string['rss_locale'] = 'ro-RO'; // New 0.4.8

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-2';
		$lang_string['php_charset'] = 'ISO-8859-2';	

		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Legãturi";
		$lang_string['menu_home'] = "Prima paginã";
		$lang_string['menu_contact'] = "Contact";
		$lang_string['menu_stats'] = "Statistici";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Arhivã";
		$lang_string['menu_viewarchives'] = "Vezi Arhiva";
		$lang_string['menu_menu'] = "Meniu";
		$lang_string['menu_add'] = "Adaugã articol";
		$lang_string['menu_add_static'] = "Adaugã paginã";
		$lang_string['menu_upload'] = "Adaugã imagine";
		$lang_string['menu_setup'] = "Preferinþe";
		$lang_string['menu_categories'] = "Categoriii";
		$lang_string['menu_info'] = "Meta Tag-uri";
		$lang_string['menu_options'] = "Datã &amp; Orã";
		$lang_string['menu_themes'] = "Teme";
		$lang_string['menu_colors'] = "Culori";
		$lang_string['menu_change_login'] = "Schimbã utilizatorul";
		$lang_string['menu_logout'] = "Ieºire";
		$lang_string['menu_login'] = "Autentificare";
		$lang_string['menu_most_recent'] = "Comentarii recente";
		$lang_string['menu_most_recent_entries'] = "Articole recente";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks";
		$lang_string['menu_add_block'] = "Blocuri";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Azi:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Ieri:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Contoare"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Înapoi acasã';
		$lang_string['nav_next'] = 'Înaine';
		$lang_string['nav_back'] = 'Înapoi';
		$lang_string['search_title'] = 'Cautã';
		$lang_string['search_go'] = 'Go';
		$lang_string['page_generated_in'] = 'Paginã generatã în %s secunde';
		$lang_string['counter_total'] = 'Total vizualizãri: '; // New in 0.4.8
		$lang_string['read_more'] = 'Mai mult...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octombrie', 'Noiembrie', 'Decembrie' );
		$lang_string['sb_default_title'] = 'Fãrã titlu';
		$lang_string['sb_default_author'] = 'Anonim';
		$lang_string['sb_default_footer'] = 'Nimic';

		$lang_string['sb_edit'] = 'editeazã';
		$lang_string['sb_delete'] = 'ºterge';
		$lang_string['sb_permalink'] = 'legatura permanentã';
		$lang_string['sb_trackback'] = 'trackbacks';
		$lang_string['sb_relatedlink'] = 'legãturi similare'; // <-- New in 0.4.6		

		$lang_string['sb_add_comment_btn'] = 'comenteazã';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'comentariu';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comentarii';		

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' afiºare';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' afiºãri';		

		$lang_string['sb_add_link_btn'] = 'adaugã legãturã';
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';		

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Subiect:";
			$lang_string['label_insert'] = "Insereazã:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "mai mult..."; // 0.4.8
			$lang_string['view_images'] = "Vezi imagini";
			$lang_string['label_entry'] = "Articol:";
			$lang_string['btn_preview'] = "&nbsp;Previzualizare&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Publicã&nbsp;";
			$lang_string['file_name'] = "Nume fiºier: (fãrã spaþii ºi extensie)";

			// Javascript Strings
			$lang_string['insert_styles'] = "Introdu textul de formatat:";
			$lang_string['insert_image'] = "Introdu adresa imaginii (URL):";
			$lang_string['insert_url1'] = "Introdu textul legãturii (Optional):";
			$lang_string['insert_url2'] = "Introdu adresa completã pentru aceastã legãturã:";
			$lang_string['insert_url3'] = "Deschide legãtura în fereastrã nouã (opþional):";
			$lang_string['form_error'] = "Te rog completeazã câmpurile Subiect ºi Articol.";	

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Opþional:';
			$lang_string['insert_image_width'] = 'Lãþime (opþional):';
			$lang_string['insert_image_height'] = 'Înãlþime (opþional):';
			$lang_string['insert_image_popup'] = 'Afiºeazã la marime realã in fereastrã nouã (opþional):';
			$lang_string['insert_image_float'] = 'Float (opþional):';
		
			$lang_string['day'] = 'Zi';
			$lang_string['month'] = 'Lunã';
			$lang_string['year'] = 'An';
			$lang_string['hour'] = 'Orã';
			$lang_string['minute'] = 'Minut';
			$lang_string['second'] = 'Secundã';
		}	

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Adaugã articol";
				$lang_string['instructions'] = "Eºti gata sã publici? Completeazã formularul de mai jos ºi apasã pe 'Prevzualizare' ca sã vezi cum va arãta articolul, sau apasã pe 'Publicã' ca sã salvezi articolul.";
				$lang_string['title_ad'] = "Confirm Trackback Pings";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
				$lang_string['label_tb_autodiscovery'] = "autodiscovery";
				$lang_string['label_relatedlink'] = "Legãturã similarã";
				$lang_string['label_categories'] = "Listã categorii";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previzualizeazã / Editeazã articol";
				$lang_string['instructions_preview'] = "Here's how your entry looks. If you're using text styles or including images, remember to 'close' all your 'tags'.";
				$lang_string['title_update'] = "Update Entry";
				$lang_string['instructions_update'] = "You can change your entry using the form below. Click 'Preview' or 'Post' when you're done.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entry not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Adaugã paginã staticã";
				$lang_string['instructions'] = "Fill out the form below to create a Static Page. Unlike a regular Blog Entry, Static Entries appear as a links in the right-hand menu. They are for pages that you always want available such as: About Me, Contact Us, Schedule, etc. Click 'Preview' to see how your entry will look, or click 'Post' to save your entry.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previzualizeazã / Editeazã paginã staticã";
				$lang_string['instructions_preview'] = "Here's how your Static Page looks. If you're using text styles or including images, remember to 'close' all your 'tags'.";
				$lang_string['title_update'] = "Update Static Page";
				$lang_string['instructions_update'] = "You can change your entry using the form below. Click 'Preview' or 'Post' when you're done.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	

				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entry not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Adaugã / Organizeazã blocuri";
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
				$lang_string['static_pages'] = "Pagini statice";

				// Add / Manage Links
				$lang_string['title'] = "Add / Manage Links";
				$lang_string['instructions'] = "Add custom links to other sites. Fill out the form below and click 'Add Link' to add a link. Click the up or down buttons to change the order of the links. Click the edit button to modify a link. Click the delete button to remove a link";
				$lang_string['up'] = "up";
				$lang_string['down'] = "down";
				$lang_string['edit'] = "edit";
				$lang_string['delete'] = "delete";
				$lang_string['link_name'] = "Link Name:";
				$lang_string['link_url'] = "Link URL: (Optional. Leave empty to create separator.)";
				$lang_string['instructions_edit'] = "You are currently editing link:";
				$lang_string['instructions_modify'] = "Click below to modify a link:";
				$lang_string['submit_btn_edit'] = "Edit Link";
				$lang_string['submit_btn_add'] = "Add Link";
				$lang_string['form_error'] = "Please complete the Name field.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Adaugã / Organizeazã categoriile";
				$lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Categoriile curente:";
				$lang_string['no_categories_found'] = "Nici o categorie";
				$lang_string['category_list'] = "Listã categorii:";
				$lang_string['validate'] = "Valideazã";
				$lang_string['submit_btn'] = "&nbsp;Salveazã&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Schimbã paleta de culori";
				$lang_string['instructions'] = "You can change the text and background colors for your blog. First select the field below, then use the color picker to mix your color. The Value changes automatically.";
				$lang_string['bg_color'] = "BG Page";
				$lang_string['main_bg_color'] = "BG Main Page";
				$lang_string['border_color'] = "Page Border";
				$lang_string['inner_border_color'] = "Inner Border";
				$lang_string['header_bg_color'] = "BG Header";
				$lang_string['header_txt_color'] = "Header Text";
				$lang_string['menu_bg_color'] = "BG Menu";
				$lang_string['footer_bg_color'] = "BG Footer";
				$lang_string['txt_color'] = "Main Text";
				$lang_string['headline_txt_color'] = "Headline Text";
				$lang_string['date_txt_color'] = "Date Text";
				$lang_string['footer_txt_color'] = "Footer Text";
				$lang_string['link_reg_color'] = "Link Default";
				$lang_string['link_hi_color'] = "Link Hover";
				$lang_string['link_down_color'] = "Link Active";

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
				$lang_string['color_preset'] = "Color Schemes:";
				$lang_string['scheme_name'] = "Enter a custom color scheme name:";
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)";
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;";
				$lang_string['form_error'] = "Please enter a name for your custom color scheme.";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';

				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Nume:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Paginã de WEB:"; //New in 0.4.6.2
				$lang_string['comment'] = "Comentariu:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "Adresã IP:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Browser:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>În %s, %s a scris:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				
				$lang_string['comment_capcha'] = "Anti-Spam: Introdu <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Comentarii";
				$lang_string['header'] = "Adaugã comentariu";
				$lang_string['instructions'] = "Fill out the form below to add your own comments.";
				$lang_string['comment_name'] = "Numele tãu:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Remember me:";
				$lang_string['comment_text'] = "Comentariu:";
				$lang_string['post_btn'] = "&nbsp;Publicã comentariul&nbsp;";
				$lang_string['delete_btn'] = "ºterge";
				$lang_string['expired_comment1'] = "Îmi pare rãu dar nu se mai poate comenta dupã ce au trecut "; // New for 0.4.8
				$lang_string['expired_comment2'] = " zile."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Îmi pare rãu dar adresa ta de IP este în lista neagrã. Nu ai voie sã publici comentarii!."; // New for 0.4.8
        
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comment not saved. I ran into a problem while saving your comment.<br /><br />Server Reported:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comment not deleted. I ran into a problem while deleting your comment.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Te rog completeazã câmpuril Nume, Comentariu ºi Anti-Spam.";
				break;

			case 'delete':
				$lang_string['title'] = "ªterge articol";
				$lang_string['instructions'] = "This is the entry you are about to delete. Please make sure you really want to get rid of it, there's no undo...";
				$lang_string['ok_btn'] = "&nbsp;ªterge&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Renuþã&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't delete entry.<br /><br />Server Reported:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "ªterge pagina staticã";
				$lang_string['instructions'] = "This is the static page you are about to delete. Please make sure you really want to get rid of it, there's no undo...";
				$lang_string['ok_btn'] = "&nbsp;ªterge&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Renunþã&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't delete entry.<br /><br />Server Reported:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Listã imagini";
				$lang_string['instructions'] = "Click on the links below to view images.<br /><br />To add an image to your entry:<br />1) Control-click a link and choose 'Copy Link to Clipboard'.<br />2) Return to the Add Entry or Edit Entry page.<br />3) Click the 'img' button and paste the URL into the window.";
				break;
			case 'info':
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
			case 'rating':
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "Autentificare";
				$lang_string['instructions'] = "Te rog introdu numele ºi parola.";
				$lang_string['username'] = "Nume:";
				$lang_string['password'] = "Parolã";
				$lang_string['submit_btn'] = "&nbsp;Autentificare&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>Eºti autentificat. Succes la publicare!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ups!</h2>Autentificarea a eºuat. Verificã numele ºi parola ºi încearcã din nou.<p />";
				$lang_string['form_error'] = "Te rog completeazã câmpurile Nume ºi Parolã.";
				break;
			case 'logout':
				$lang_string['title'] = "Ieºire";
				$lang_string['instructions'] = "<h2>Ups!</h2>Operaþiunea de deautentificare a eºuat!. Could not delete cookie. Why are you still logged in?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'set_login':
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
				$lang_string['title'] = "Bine ai venit!";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog is a light-weight blogging system. It requires PHP 4.1 or greater, and write-permissions on the server. All information is stored in flat-files, so no database is required.<br /><br />
				In order to begin, Simple PHP Blog needs to create three folders (<b>config</b>, <b>content</b>, and <b>images</b>) in which to store your information. After that, you will create your password and then you can start blogging.<br /><br />
				<b>Click below to begin setup:</b>";
				$lang_string['begin'] = "[ Porneºte instalarea ]";
				break;
			case 'install02':
				$lang_string['title'] = "Instalare";
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
				$lang_string['title'] = "Autentificare";
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
				$lang_string['title'] = "Setãri";
				$lang_string['instructions'] = "You can change the name of your blog, and your personal information below.";
				$lang_string['blog_title'] = "Nume Blog:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Email: (Separate email address should be separated by a , comma - blank disables Contact Me option)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Footer:";
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['blog_enable_comments'] = "Enable User Comments";
				$lang_string['blog_comments_popup'] = "Open Comments in Popup Window";
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries";
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Enable Calendar"; // New for 0.4.6
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
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted";
				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;";
				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)";
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery.";
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog";
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs";
				$lang_string['blog_max_entries'] = "Maximum Entries to Display:";
				$lang_string['blog_comment_tags'] = "Tags to Allow in Comments:";
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension.";
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files";
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Title and Author fields.";
				$lang_string['label_entry_order'] = "Entry Order:";
				$lang_string['select_new_to_old'] = "List Newest First";
				$lang_string['select_old_to_new'] = "List Oldest First";
				$lang_string['label_comment_order'] = "Comment Order:";
				$lang_string['cal_sunday'] = "Sunday";
				$lang_string['cal_monday'] = "Monday";
				$lang_string['label_calendar_start'] = "Calendar Week Start Day";
				$lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
				$lang_string['title_comments'] = "Comments"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compression"; // New in 0.4.7
				$lang_string['title_entries'] = "Entries"; // New in 0.4.7
				$lang_string['title_general'] = "General"; // New in 0.4.7
				$lang_string['title_language'] = "Language"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
				
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL for this entry:";
				$lang_string['delete_btn'] = "delete";
				// Error Response
				$lang_string['error_add'] = "Error storing trackback data.";
				break;
			case 'options':
				$lang_string['title'] = "Options";
				$lang_string['instructions'] = "Use the form below to customize the date and time display for blog and comment entries. You can select 12 or 24 hour clocks. Short or long date format. And the <b>Preview</b> areas update automatically to show you how you formatting will appear.";
				// Long Date
				$lang_string['ldate_title'] = "Long Date Format:";
				$lang_string['weekday'] = "Weekday";
				$lang_string['month'] = "Month";
				$lang_string['day'] = "Day";
				$lang_string['year'] = "Year";
				$lang_string['none'] = "None";
				// Short Date
				$lang_string['sdate_title'] = "Short Date Format:";
				$lang_string['s_month'] = "Month";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Day";
				$lang_string['s_year'] = "Year";
				$lang_string['zero_day'] = "Leading zero for day";
				$lang_string['show_century'] = "Show century";
				// Time
				$lang_string['time_title'] = "Time Format:";
				$lang_string['12hour'] = "12-hour clock";
				$lang_string['24hour'] = "24-hour clock";
				$lang_string['before_noon'] = "Before Noon";
				$lang_string['after_noon'] = "After Noon";
				// Date
				$lang_string['date_title'] = "Date Display Format:";
				$lang_string['long_date'] = "Long Date";
				$lang_string['short_date'] = "Short Date";
				$lang_string['time'] = "Time";
				// Menu
				$lang_string['menu_title'] = "Menu Date Display Format:";
				$lang_string['long_date'] = "Long Date";
				$lang_string['short_date'] = "Short Date";
				// Used in multiple places
				$lang_string['zero_day'] = "Leading zero for day";
				$lang_string['zero_month'] = "Leading zero for Month";
				$lang_string['zero_hour'] = "Leading zero for Hour";
				$lang_string['separator'] = "Separator:";
				$lang_string['preview'] = "Preview:";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
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
				$lang_string['title'] = "Upload Image";
				$lang_string['instructions'] = "Click on the button below to select a file to upload.";
				$lang_string['select_file'] = "Select file:";
				$lang_string['upload_btn'] = "Upload";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't upload image. Here's some more information:<br /><br />Server Reported:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Search Results";
				$lang_string['instructions'] = "Search results for <b>%string</b>:";
				$lang_string['not_found'] = "No results found";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: Enter "; // 0.4.2
				$lang_string['title'] = "Contact Me";
				$lang_string['instructions'] = "Fill in the form:";
				$lang_string['form_error'] = "Please complete the Subject and Comment fields.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "Email:";				
				$lang_string['subject'] = "Subject:";
				$lang_string['comment'] = "Comment:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['success'] = "<h2>Success!</h2>Your message has been sent.<p />";
				$lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Statistics";
				$lang_string["general"] = "General";
				$lang_string["entry_info"] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["comment_info"] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["trackback_info"] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string["static_info"] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string["most_viewed_entries"] = "10 Most viewed entries";
				$lang_string["most_commented_entries"] = "10 Most commented entries";
				$lang_string["most_trackbacked_entries"] = "10 Most trackbacked entries";
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
