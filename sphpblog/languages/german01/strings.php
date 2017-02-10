<?php
	// German Translation(s)
	// (c) 2004 Josef Angstenberger, jtxa <at> users <dot> sourceforge <dot> net (0.4.0)

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;

		// Language: German
		$lang_string['language'] = 'german';

		$lang_string[ 'locale' ] = array('de_DE','german');
		$lang_string['rss_locale'] = 'de-DE'; // New 0.4.8

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		
		setlocale(LC_TIME, $lang_string['locale'] );

		// Some Global Strings

		// Menu
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "Startseite";
		$lang_string['menu_contact'] = "Kontakt";
		$lang_string['menu_stats'] = "Statistik";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archiv";
		$lang_string['menu_viewarchives'] = "View Archives"; // New in 0.4.7
		$lang_string['menu_menu'] = "Menü";
		$lang_string['menu_add'] = "Eintrag hinzufügen";
		$lang_string['menu_add_static'] = "Statische Seite hinzufügen";
		$lang_string['menu_upload'] = "Bild hochladen";
		$lang_string['menu_setup'] = "Einstellungen";
		$lang_string['menu_categories'] = "Kategorien";
		$lang_string['menu_info'] = "Informationen";
		$lang_string['menu_options'] = "Optionen";
		$lang_string['menu_themes'] = "Theme";
		$lang_string['menu_colors'] = "Farben";
		$lang_string['menu_change_login'] = "Benutzerdaten";
		$lang_string['menu_logout'] = "[ Abmelden ]";
		$lang_string['menu_login'] = "[ Anmelden ]";
		$lang_string['menu_most_recent'] = "Die neuesten Kommentare";
		$lang_string['menu_most_recent_entries'] = "Die neuesten Einträge";
		$lang_string['menu_most_recent_trackback'] = "Die neuesten Trackbacks";
		$lang_string['menu_add_block'] = "Blöcke";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Today:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Yesterday:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Counter Totals"; // New for 0.4.8

		// Other
		$lang_string['home'] = "Zurück zur Startseite";
		$lang_string['nav_next'] = 'Weiter';
		$lang_string['nav_back'] = 'Zurück';
		$lang_string['search_title'] = 'Suche:';
		$lang_string['search_go'] = 'Los!';
		$lang_string['page_generated_in'] = 'Seite in %s Sekunden generiert';
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember' );
		$lang_string['sb_default_title'] = 'Kein Titel';
		$lang_string['sb_default_author'] = 'Kein Autor';
		$lang_string['sb_default_footer'] = 'Keine Fußzeile';

		$lang_string['sb_edit'] = 'Ändern';
		$lang_string['sb_delete'] = 'Löschen';
		$lang_string['sb_permalink'] = 'Permalink';
		$lang_string['sb_trackback'] = 'Trackbacks';
		$lang_string['sb_relatedlink'] = 'Related Link'; // <-- New in 0.4.6

		$lang_string['sb_add_comment_btn'] = 'Kommentar hinzufügen';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'Kommentar';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'Kommentare';

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' mal angeschaut';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' mal angeschaut';

		$lang_string['sb_add_link_btn'] = '+ Link';

		$lang_string['sb_rate_entry_btn'] = 'Hier klicken um Eintrag zu bewerten';

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Titel:";
				$lang_string['label_insert'] = "Spezial-Code einfügen:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Vorschau der hochgeladenen Bilder (Bilderliste)";
				$lang_string['label_entry'] = "Eintrag:";
				$lang_string['btn_preview'] = "Vorschau";
				$lang_string['btn_post'] = "Eintrag speichern";
				$lang_string['file_name'] = "Statischer Dateiname: (keine Leerzeichen / ohne Dateiendung)";
				// Javascript Strings
				$lang_string['insert_styles'] = "Den zu formatierenden Text eingeben.";
				$lang_string['insert_image'] = "Die URL für das Bild eingeben.";
				$lang_string['insert_url1'] = "Den anzuzeigenden Text für den Link eingeben (optional).";
				$lang_string['insert_url2'] = "Die vollständige URL für den Link eingeben.";
				$lang_string['insert_url3'] = "Öffne URL in einem neuen Fenster (optional):";
				$lang_string['form_error'] = "Bitte die Felder Betreff und Eintrag vervollständigen.";
				// More Javascript Strings
				$lang_string['insert_image_optional'] = 'Optional:';
				$lang_string['insert_image_width'] = 'Breite (optional):';
				$lang_string['insert_image_height'] = 'Höhe (optional):';
				$lang_string['insert_image_popup'] = 'Beim Anklicken Bild in voller Größe als Pop-Up anzeigen (optional):';
				$lang_string['insert_image_float'] = 'Schwebend (optional):';
		
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
				$lang_string['title'] = "Eintrag hinzufügen";
				$lang_string['instructions'] = "<p>Bereit zum Bloggen? Formular ausfüllen und auf 'Vorschau' klicken um zu sehen, wie der Eintrag aussehen wird; Oder auf 'Eintrag speichern', um den Eintrag zu veröffentlichen.</p>";
				$lang_string['title_ad'] = "Trackback Pings bestätigen";
				$lang_string['instructions_ad'] = "<p>Dies sind die automatisch erkannten URLs, welche angepingt werden sollen. Unerwünschte URLs müssen unten abgewählt werden. Danach 'OK' drücken, um die angewählten URLs anzupingen oder 'Abbruch', um überhaupt keine anzupingen.</p>";
				$lang_string['label_tb_ping'] = "Zu sendende Trackback Pings (durch Komma getrennt)";
				$lang_string['label_tb_autodiscovery'] = "Auto-Erkennung";
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Eintrag Vorschau / Änderung";
				$lang_string['instructions_preview'] = "<p>So sieht der Eintrag aus. Bei der Verwendung von Textformatierungen oder Bilder daran denken, die 'Tags' zu schließen.</p>";
				$lang_string['title_update'] = "Eintrag aktualisieren";
				$lang_string['instructions_update'] = "<p>Der Eintrag kann in dem unteren Formular geändert werden. Zum Abschluß auf 'Vorschau' oder 'Abschicken' drücken.</p>";
				$lang_string['ok_btn'] = "OK";
				$lang_string['cancel_btn'] = "Abbruch";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Eintrag nicht gespeichert. Es gab ein Problem beim Speichern dieses Eintrags.</p>Server meldet:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Statische Seite hinzufügen";
				$lang_string['instructions'] = "<p>Das Formular ausfüllen, um eine statische Seite zu erzeugen. Anders als bei einem Blog Eintrag, erscheinen statische Seiten als Links im Menü. Sie sind für Seiten gedacht, die immmer verfügbar sein sollen, wie etwa: Über mich, Kontakt, Termine, etc.</p>
				<p>Auf 'Vorschau' klicken, um zu sehen, wie der Eintrag aussehen wird, oder auf 'speichern' klicken, um den Eintrag zu speichern.</p>";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Statische Seite Vorschau / Änderung";
				$lang_string['instructions_preview'] = "<p>So sieht die statische Seite aus. Wenn man Textformatierungen oder Bilder verwendet auch daran denken, die 'Tags' zu schließen.</p>";
				$lang_string['title_update'] = "Statische Seite aktualisieren";
				$lang_string['instructions_update'] = "<p>Die statische Seite kann in dem unteren Formular geändert werden. Zum Abschluß auf 'Vorschau' oder 'Abschicken' drücken.</p>";
				$lang_string['form_error'] = "Bitte Titel, Eintrag und Dateinamen vervollständigen.";	
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Eintrag nicht gespeichert. Es gab ein Problem beim Speichern dieses Eintrags.</p>Server meldet:<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Blöcke hinzufügen / verwalten";
				$lang_string['instructions'] = "<p>Eigenen Block hinzufügen.</p>";
				$lang_string['up'] = "hoch";
				$lang_string['down'] = "runter";
				$lang_string['edit'] = "ändern";
				$lang_string['delete'] = "löschen";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block Inhalt:";
				$lang_string['instructions_edit'] = "<p>Momentan editierter Block:</p>";
				$lang_string['instructions_modify'] = "<p>Unten klicken, um den Block zu ändern:</p>";
				$lang_string['submit_btn_edit'] = "Block ändern";
				$lang_string['submit_btn_add'] = "Block hinzufügen";
				$lang_string['form_error'] = "Bitte das Namensfeld vervollständigen.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Statische Seiten:";
				// Add / Manage Links
				$lang_string['title'] = "Links hinzufügen / verwalten";
				$lang_string['instructions'] = "<p>Hier lassen sich Links auf andere Seiten hinzufügen. Formular unten ausfüllen und auf 'Link hinzufügen' klicken. Mit 'hoch' und 'runter' kann man die Reihenfolge der Links ändern. Einträge lassen sich mit dem 'ändern' bearbeiten oder mit 'löschen' entfernen.</p>";
				$lang_string['up'] = "hoch";
				$lang_string['down'] = "runter";
				$lang_string['edit'] = "ändern";
				$lang_string['delete'] = "löschen";
				$lang_string['link_name'] = "Link Name:";
				$lang_string['link_url'] = "Link URL (optional). Um eine Unterteilung zu erzeugen keinen Text eingeben.";
				$lang_string['instructions_edit'] = "Folgender Link wird gerade bearbeitet:";
				$lang_string['instructions_modify'] = "Unten klicken, um den Link zu ändern:";
				$lang_string['submit_btn_edit'] = "Link ändern";
				$lang_string['submit_btn_add'] = "Link hinzufügen";
				$lang_string['form_error'] = "Namensfeld bitte vervollständigen.";
				break;
			case 'categories':
				// Add / Manage Categories
				$lang_string['title'] =  "Kategorien hinzufügen / verwalten";
				$lang_string['instructions'] = "<p>In dem unteren Formular lassen sich die Kategories ändern und hinzufügen. Jeder Eintrag sollte in dem Format 'Kategoriename (eindeutige Nummer)' sein. Um Hierarchien zu erstellen, die entsprechenden Einträge mit Leerzeichen einrücken.</p>
				<p><b>Beispiel:</b><br />Allgemein (1)<br />Neuigkeit (3)<br />&nbsp;&nbsp;Ankündigung (6)<br />&nbsp;&nbsp;Veranstaltung (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Verschiedenes (7)<br />Technologie (2)</p>";
				$lang_string['error'] = "Fehler";
				$lang_string['current_categories'] = "Aktuelle Kategorien";
				$lang_string['no_categories_found'] = "Keine Kategorien gefunden";
				$lang_string['category_list'] = "Liste der Kategorien:";
				$lang_string['validate'] = "Überprüfen";
				$lang_string['submit_btn'] = "Speichern";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Farben ändern";
				$lang_string['instructions'] = "<p>Hier können Text- und Hintergrundfarbe des Blogs geändert werden.</p>
				<p>Zuerst das zu ändernde Feld wählen und danach die gewünschte Farbe auswählen. Es lassen sich auch fertige Farbschemata laden und neue speichern.</p>";
				$lang_string['bg_color'] = "Seiten Hintergrund";
				$lang_string['main_bg_color'] = "Hauptseite Hintergrund";
				$lang_string['border_color'] = "Seitenrand";
				$lang_string['inner_border_color'] = "Innerer Rand";
				$lang_string['header_bg_color'] = "Kopfzeile Hintergrund";
				$lang_string['header_txt_color'] = "Kopfzeile Text";
				$lang_string['menu_bg_color'] = "Menü Hintergrund";
				$lang_string['footer_bg_color'] = "Fußzeile Hintergrund";
				$lang_string['txt_color'] = "Text";
				$lang_string['headline_txt_color'] = "Kopfzeile Text";
				$lang_string['date_txt_color'] = "Datum Text";
				$lang_string['footer_txt_color'] = "Fußzeile Text";
				$lang_string['link_reg_color'] = "Link Standard";
				$lang_string['link_hi_color'] = "Link Hervorgehoben";
				$lang_string['link_down_color'] = "Link Aktiv";
				// More Colors
				$lang_string['entry_bg'] = "Eintrag Hintergrund";
				$lang_string['entry_title_bg'] = "Eintrag Titel Hintergrund";
				$lang_string['entry_border'] = "Eintrag Rand";
				$lang_string['entry_title_text'] = "Eintrag Titel Text";
				$lang_string['entry_text'] = "Eintrag Text";
				$lang_string['menu_bg'] = "Menü Hintergrund";
				$lang_string['menu_title_bg'] = "Menü Titel Hintergrund";
				$lang_string['menu_border'] = "Menü Rand";
				$lang_string['menu_title_text'] = "Menü Titel Text";
				$lang_string['menu_text'] = "Menü Text";
				$lang_string['menu_link_reg_color'] = "Menü Link Standard";
				$lang_string['menu_link_hi_color'] = "Menü Link Hervorgehoben";
				$lang_string['menu_link_down_color'] = "Menü Link Aktiv";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Submit
				$lang_string['color_preset'] = "Farbschema laden:";
				$lang_string['scheme_name'] = "Name für das Farbschema:";
				$lang_string['scheme_file'] = "Dateiname für das Farbschema (keine Leerzeichen / ohne Dateiendung):";
				$lang_string['save_btn'] = "Farbschema speichern";
				$lang_string['form_error'] = "Bitte Namen für das Farbschema eingeben.";
				$lang_string['submit_btn'] = "Farbwahl speichern";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Eintrag nicht gespeichert. Es gab ein Problem beim Speichern der Farbwahl.</p>Server meldet:<br />";
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
				$lang_string['title'] = "Kommentare";
				$lang_string['header'] = "Kommentar hinzufügen";
				$lang_string['instructions'] = "<p>Bitte das Formular ausfüllen, um Deinen Kommentar hinzuzufügen.</p>";
				$lang_string['comment_name'] = "Dein Name:";
				$lang_string['comment_email'] = "E-Mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['comment_remember'] = "Meine Daten merken:";
				$lang_string['comment_text'] = "Kommentar:";
				$lang_string['post_btn'] = "Kommentar speichern";
				$lang_string['delete_btn'] = "löschen";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Hoppla!</h2><p>Kommentar nicht gespeichert. Es gab ein Problem beim Speichern dieses Eintrags.</p>Server meldet:<br />";
				$lang_string['error_delete'] = "<h2>Hoppla!</h2><p>Kommentar nicht gelöscht. Es gab ein Problem beim Löschen dieses Kommentars.</p>Server meldet:<br />";
				$lang_string['form_error'] = "Bitte Namens- und Kommentarfeld vervollständigen.";
				break;
			case 'delete':
				$lang_string['title'] = "Eintrag löschen";
				$lang_string['instructions'] = "<p>Dieser Eintrag soll gelöscht werden. Bitte sicherstellen, daß dies wirklich der Eintrag ist, den man loswerden will.</p><p>Es gibt keine Möglichkeit das Löschen rückgängig zu machen...</p>";
				$lang_string['ok_btn'] = "OK";
				$lang_string['cancel_btn'] = "Nicht löschen";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Eintrag nicht gelöscht. Es gab ein Problem beim Löschen dieses Eintrags.</p>Server meldet:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Statische Seite löschen";
				$lang_string['instructions'] = "Diese statische Seite soll gelöscht werden. Bitte sicherstellen, daß dies wirklich die Seite ist, die man loswerden will. Es gibt keine Möglichkeit das Löschen rückgängig zu machen...";
				$lang_string['ok_btn'] = "OK";
				$lang_string['cancel_btn'] = "Abbruch";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Statische Seite nicht gelöscht. Es gab ein Problem beim Löschen dieser statischen Seite.</p>Server meldet:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Bilderliste";
				$lang_string['instructions'] = "<p>Um die Bilder anzuschauen auf die unteren Links klicken.</p>
				<p>So wird ein Bild zum Eintrag hinzugefügt:
				<ol>
					<li>Rechte Maustaste auf einem Link und 'Link-Adresse kopieren' auswählen.</li>
					<li>Zurück zur &quot;Eintrag hinzufügen&quot; oder &quot;Eintrag ändern&quot; Seite.</li>
					<li>Auf den 'img' Knopf drücken und die URL im Fenster einfügen.</li>
				</ol></p>";
				break;
			case 'info':
				$lang_string['title'] = "Meta-Daten Informationen";
				$lang_string['instructions'] = "<p>Die folgenden Informationen werden für die &quot;Meta-Daten&quot; benutzt. Sie helfen den Suchmaschinen die Seite korrekt zu erkennen. Informationen können auch für die RSS Feeds benutzt werden.</p>";
				$lang_string['info_keywords'] = "Stichwörter: (Liste der Stichwörter mit Komma getrennt.)";
				$lang_string['info_description'] = "Beschreibung: (Eine Zusammenfassung oder ein freie Beschreibung der Seite.)";
				$lang_string['info_copyright'] = "Rechte: (Copyright Erklärung oder ein Link zu einem Dokument mit solchen Informationen.)";
				$lang_string['submit_btn'] = "Informationen speichern";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.</p>Server meldet:<br />";
				$lang_string['form_error'] = "Bitte Feld für Titel und Autor vervollständigen.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.</p>Server meldet:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Aktualisierung</h2>";
				$lang_string['upgrade_count'] = "%n Kommentardateien benötigen ein Aktualisierung:";
				$lang_string['upgrade_url'] = "Aktualisiere Kommentera";
				$lang_string['title'] = "Anmeldung";
				$lang_string['instructions'] = "<p>Benutzername and Paßwort eingeben</p>";
				$lang_string['username'] = "Benutzername:";
				$lang_string['password'] = "Paßwort";
				$lang_string['submit_btn'] = "Anmelden";
				// Success
				$lang_string['success'] = "<h2>Anmeldung erfolgreich!</h2><p>Fröhliches bloggen!</p>";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppla!</h2><p>Anmeldung fehlgeschlagen. Benutzername und Paßwort auf korrekte Schreibweise überprüfen und es nochmal probieren.</p>";
				$lang_string['form_error'] = "Benutzername und Paßwort vervollständigen.";
				break;
			case 'logout':
				$lang_string['title'] = "Abmelden";
				$lang_string['instructions'] = "<h2>Hoppla!</h2><p>Abmelden fehlgeschlagen. Cookie konnte nicht gelöscht werden. Immer noch eingeloggt?</p>";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.</p>Server meldet:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Benutzernamen und Paßwort ändern";
				$lang_string['instructions'] = "<p>Im unteren Formular kann man den neuen Benutzernamen und das neue Paßwort setzen.</p>";
				$lang_string['username'] = "Benutzername:";
				$lang_string['password'] = "Paßwort:";
				$lang_string['submit_btn'] = "Name und Paßwort speichern";
				// Success
				$lang_string['success'] = "<h2>Erfolgreich!</h2><p>Dein neuer Benutzername und Paßwort sind aktiv. Fröhliches bloggen!</p>";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppla!</h2><p>Information nicht gesichert. Es gab ein Problem beim Speichern des Benutzernamens und/oder Paßworts.</p>Server meldet:<br />";
				$lang_string['form_error'] = "Bitte vervollständige das Benutzernamen- und Paßwort-Feld.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Willkommen";
				$lang_string['instructions'] = "<p>Danke für die Wahl von Simple PHP Blog!</p>";
				$lang_string['blog_choose_language'] = "Bitte die Sprache für die Installation auswählen:";
				$lang_string['submit_btn'] = "Weiter";
				break;
			case 'install01':
				$lang_string['title'] = "Herzlich Willkommen";
				$lang_string['instructions'] = "<p>Vielen Dank für die Wahl von Simple PHP Blog!</p>
				<p>Simple PHP Blog ist ein schlankes Blogging System. Es benötigt PHP 4.1 oder neuer und Schreibberechtigung auf dem Server. Alle Informationen sind in Textdateien gespeichert, so daß keine Datenbank benötigt wird.</p>
				<p>Zum Beginn muß Simple PHP Blog drei Verzeichisse ('config', 'content' und 'images') erstellen, in denen die Informationen gespeichert werden.</p>";
				$lang_string['begin'] = "[ Mit der Installation beginnen ]";
				break;
			case 'install02':
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "<p>Versuche die Verzeichnisse 'config', 'content' und 'images' zu erstellen:</p>";
				$lang_string['folder_exists'] = "OK! Verzeichnis existiert schon. Keine Änderung gemacht...";
				$lang_string['folder_failed'] = "Hoppla! Verzeichnis konnte nicht erstellt werden...";
				$lang_string['folder_success'] = "Erfolg! Verzeichnis wurde erstellt...";
				// Help
				$lang_string['help'] = "<h2>Hoppla!</h2>
				<p>Konnte ein odere mehrere Verzeichnisse nicht erstellen! Dies geschah wahrscheinlich aus einem der folgenden Gründen:
				<ol>
					<li><i><b>Schreibberechtigung</b> erlaubt keine <b>Lese-/Schreib-</b>Zugriffe.</i></li>
					<li><i>Die <b>UID</b>s (Benutzer IDs) aller Dateien und Verzeichnisse stimmen nicht überein.</i></li>
				</ol>
				</p>
				<p>Bitte diese Hinweise zur Fehlerbehebung befolgen und erneut versuchen:</p>
				<ol>
					<li>Folgende Verzeichnisse von Hand erzeugen: <b>config</b>, <b>content</b> und <b>images</b>.</li>
					<li><b>Schreibberechtigung</b> für die Verzeichnisse einschalten. Im FTP Programm sollten Owner, User und World <b>Lese-</b> und <b>Schreib-</b>Zugriff haben. <i>(Vielleicht muß man hierfür seinen Provider kontaktieren...)</i></li>
					<li>Sicherstellen, ob die <b>UID</b>s aller Dateien und Verzeichnisse gleich sind. <i>(Vielleicht muß man hierfür seinen Provider kontaktieren...)</i></li>
				</ol>
				</p>";
				$lang_string['try_again'] = "[ Nochmals versuchen ]";
				// Success
				$lang_string['success'] = "<h2>Erfolg!</h2><p>Verzeichnis wurden erstellt!</p>";
				$lang_string['continue'] = "[ Weiter ]";
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
				$lang_string['title'] = "Benutzernamen und Paßwort erzeugen";
				$lang_string['instructions'] = "<p>In dem Formular bitte Benutzernamen und Paßwort eingeben. Dieser Benutzer ist berechtigt, Einstellungen im Blog vorzunehmen und Nachrichten einzustellen.</p>";
				$lang_string['username'] = "Benutzername:";
				$lang_string['password'] = "Paßwort:";
				$lang_string['submit_btn'] = "Namen und Paßwort speichern";
				// Success
				$lang_string['success'] = "<h2>Glückwunsch!</h2><p>Anmeldung erfolgreich. Nun können die Einstellungen vorgenommen werden. Fröhliches bloggen!</p>";
				$lang_string['btn_setup'] = "[ Zu den Einstellungen ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppla!</h2><p>Informationen nicht gespeichert. Es gab ein Problem beim Speichern des Benutzernamens und/oder Paßworts.</p>Server meldet:<br />";
				$lang_string['form_error'] = "Bitte Benutzernamen- und Paßwort-Feld vervollständigen.";
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
				$lang_string['title'] = "Einstellungen";
				$lang_string['instructions'] = "<p>Hier können der Name des Blogs und die persönlichen Informationen geändert werden.</p>
				<p>Desweiteren werden hier die grundlegenden Einstellungen für das Blog vorgenommen.</p>";
				$lang_string['blog_title'] = "Blog Name:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "E-Mail:";
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Fußzeile:";
				$lang_string['blog_choose_language'] = "Sprache auswählen:";
				$lang_string['blog_enable_comments'] = "Besucher können Kommentare schreiben";
				$lang_string['blog_comments_popup'] = "Kommentare in einem Popup Fenster darstellen";
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_voting'] = "Besucher können die Einträge benoten";
				$lang_string['blog_email_notification'] = "Bei neuen Kommentaren E-Mail Benachrichtigung senden";
				$lang_string['blog_send_pings'] = "Weblog &quot;pings&quot; senden";
				$lang_string['blog_ping_urls'] = "Eingabe der vollständigen URL (z.B. http://rpc.weblogs.com/RPC2), die man &quot;anpingen&quot; möchte.<br />(Es könnnen mit Komma getrennt mehrere Adressen eingegeben werden.)";
				$lang_string['blog_trackback_about'] = "<p>Trackback bietet eine Methode, wie Blogs sich gegenseitig benachrichtigen können.
				Mit einem Trackback Ping wird ein anderes Blog benachrichtigt, daß es von hier verlinkt wird.
				Durch die empfangenen Trackback Pings kann man sehen, wer auf das eigene Blog verweist.</p>
				<p>Man kann die URL von Hand eingeben oder versuchen, es automatisch erkennen lassen.</p>";
				$lang_string['blog_trackback_enabled'] = "Trackback aktivieren";
				$lang_string['blog_trackback_auto_discovery'] = "Auto-Erkennung von URLs in Einträgen aktivieren";
				$lang_string['blog_max_entries'] = "Maximalanzahl der angezeigten Einträge:";
				$lang_string['blog_comment_tags'] = "In Kommentaren erlaubte Tags:";
				$lang_string['blog_gzip_about'] = "<p>Seit der Version 4.0.4 von PHP gibt es die Möglichkeit gzip (.gz) komprimierte Dateien zu lesen und zu schreiben. 
				Hiermit läßt sich Plattenplatz sparen. Um Bandbreite (Traffic) zu sparen, kann PHP außerdem die HTML Seiten
				automatisch komprimieren. Dies geschieht für die Browser, welche die gzip Komprimierung unterstützen.</p>
				<p>Zlib Unterstützung ist nicht standardmäßig bei PHP aktiviert. Wenn die Ankreuzfelder deaktiviert sind,
				dann unterstützt diese PHP Installation keine Zlib Erweiterung.</p>";
				$lang_string['blog_enable_gzip_txt'] = "GZIP Kompression für Datenbank Dateien einschalten";
				$lang_string['blog_enable_gzip_output'] = "GZIP Kompression für HTTP Ausgabe einschalten";
				$lang_string['submit_btn'] = "Einstellungen speichern";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.<br /><br />Server meldet:<br />";
				$lang_string['form_error'] = "Blog Name und Autor vervollständigen.";
				$lang_string['label_entry_order'] = "Reihenfolge der Einträge:";
				$lang_string['select_new_to_old'] = "Neue Einträge zuerst";
				$lang_string['select_old_to_new'] = "Alte Einträge zuerst";
				$lang_string['label_comment_order'] = "Kommentar Reihenfolge:";
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
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL für diesen Eintrag:";
				$lang_string['delete_btn'] = "Trackback entfernen";
				// Error Response
				$lang_string['error_add'] = "Problem beim Speichern der Trackback Daten.";
				break;
			case 'options':
				$lang_string['title'] = "Optionen";
				$lang_string['instructions'] = "<p>In dem unteren Formular kann man die Datums- und Zeitanzeige für die Blog Einträge und Kommentare ändern. Man kann 12 und 24 Stunden Zeitformat, kurzes oder langes Daum auswählen. Die <b>Vorschau</b> Felder aktualisieren automatisch, um die zukünfitge Formatierung anzuzeigen.</p>";
				// Long Date
				$lang_string['ldate_title'] = "Langes Datum:";
				$lang_string['weekday'] = "Wochentag";
				$lang_string['month'] = "Monat";
				$lang_string['day'] = "Tag";
				$lang_string['year'] = "Jahr";
				$lang_string['none'] = "Keines davon";
				// Short Date
				$lang_string['sdate_title'] = "Kurzes Datum:";
				$lang_string['s_month'] = "Monat";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Tag";
				$lang_string['s_year'] = "Jahr";
				$lang_string['zero_day'] = "Führende Null für Tag";
				$lang_string['show_century'] = "Jahrhundert anzeigen";
				// Time
				$lang_string['time_title'] = "Zeitformat:";
				$lang_string['12hour'] = "12-Stunden Format";
				$lang_string['24hour'] = "24-Stunden Format";
				$lang_string['before_noon'] = "Vormittag";
				$lang_string['after_noon'] = "Nachmittag";
				// Date
				$lang_string['date_title'] = "Datumsanzeige:";
				$lang_string['long_date'] = "Langes Datum";
				$lang_string['short_date'] = "Kurzes Datum";
				$lang_string['time'] = "Zeit";
				// Menu
				$lang_string['menu_title'] = "Datumsanzeige im Menü:";
				$lang_string['long_date'] = "Langes Datum";
				$lang_string['short_date'] = "Kurzes Datum";
				// Used in multiple places
				$lang_string['zero_day'] = "Führende Null für Tag";
				$lang_string['zero_month'] = "Führende Null für Monat";
				$lang_string['zero_hour'] = "Führende Null für Stunde";
				$lang_string['separator'] = "Trennzeichen:";
				$lang_string['preview'] = "Vorschau:";
				$lang_string['server_offset'] = "Zeitabweichung des Servers:";
				// Buttons
				$lang_string['submit_btn'] = "Optionen speichern";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.<br /><br />Server meldet:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Standard Theme ändern";
				$lang_string['instructions'] = "<p>Benutze das Auswahlmenü um ein anderes Theme zu aktivieren.</p>";
				// Themes
				$lang_string['choose_theme'] = "Verfügbare Themes:";
				// Buttons
				$lang_string['submit_btn'] = "Theme aktivieren";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Information nicht gespeichert. Es gab ein Problem beim Speichern der Information.</p>Server meldet:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Bild hochladen";
				$lang_string['instructions'] = "<p>Auf den unteren Knopf klicken, um ein Bild hochzuladen.</p>";
				$lang_string['select_file'] = "Datei auswählen:";
				$lang_string['upload_btn'] = "Bild hochladen";
				// Error Response
				$lang_string['error'] = "<h2>Hoppla!</h2><p>Bild konnte nicht hochgeladen werden.</p>Server meldet:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Suchergebnisse";
				$lang_string['instructions'] = "<p>Suchergebnisse für <b>%string</b>:</p>";
				$lang_string['not_found'] = "Nichts gefunden";
				break;
			case 'contact':
				$lang_string['title'] = "Kontakt";
				$lang_string['instructions'] = "<p>Bitte das Formular ausfüllen:</p>";
				$lang_string['form_error'] = "Bitte Betreff- und Kommentar-Felder vervollständigen.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "E-Mail:";
				$lang_string['subject'] = "Betreff:";
				$lang_string['comment'] = "Kommentar:";
				$lang_string['submit_btn'] = "Nachricht absenden";
				$lang_string['success'] = "<h2>Erfolg!</h2><p>Die Nachricht wurde versandt.</p>";
				$lang_string['failure'] = "<h2>Störung!</h2>Ihre Anzeige ist nicht gesendet worden. Am wahrscheinlichsten wurde das Anti- Spam nicht richtig eingetragen.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Kommen Sie herein <b>%s</b>"; // 0.4.2
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Statistik";
				$lang_string['general'] = "Allgemein";
				$lang_string['entry_info'] = "<b>%s</b> Einträge mit <b>%s</b> Wörtern verbrauchen <b>%s</b> Bytes";
				$lang_string['comment_info'] = "<b>%s</b> Kommentare mit <b>%s</b> Wörtern verbrauchen <b>%s</b> Bytes";
				$lang_string['trackback_info'] = "<b>%s</b> Trackbacks verbrauchen <b>%s</b> Bytes";
				$lang_string['static_info'] = "<b>%s</b> Statische Seiten mit <b>%s</b> Wörtern verbrauchen <b>%s</b> Bytes";
				$lang_string['most_viewed_entries'] = "Die 10 meist betrachteten Einträge";
				$lang_string['most_commented_entries'] = "Die 10 meist kommentierten Einträge";
				$lang_string['most_trackbacked_entries'] = "Die 10 meist verlinkten Eintrage (durch Trackbacks)";
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
