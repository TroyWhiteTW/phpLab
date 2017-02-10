<?php

	// Magyar nyelvi file
	// (c) 2006 BuBukák Team
	//

	// Simple PHP Version: 0.4.1
	// Language Version:   0.4.1.0	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
		

		// Language: Magyar
		$lang_string['language'] = 'magyar';	
		
		$lang_string['locale'] = array('hu_HU', 'hu');
		$lang_string['rss_locale'] = 'hu-HU'; // New 0.4.8

		// ISO Charset: ISO-8859-2
		$lang_string['html_charset'] = 'ISO-8859-2';
		$lang_string['php_charset'] = 'ISO-8859-1';	

		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Linkek";
		$lang_string['menu_home'] = "Fõoldal";
		$lang_string['menu_contact'] = "Kapcsolat";
		$lang_string['menu_stats'] = "Statisztika";
		$lang_string['menu_archive'] = "Arhívum";
		$lang_string[ 'menu_viewarchives' ] = "Arhívum megtekintése";
		$lang_string['menu_menu'] = "Menü";
		$lang_string['menu_add'] = "Hozzáad";
		$lang_string['menu_add_static'] = "Statikus oldal hozzáadása";
		$lang_string['menu_upload'] = "Kép feltöltése";
		$lang_string['menu_setup'] = "Beállítások";
		$lang_string['menu_categories'] = "Kategóriák";
		$lang_string['menu_info'] = "Meta elemek";
		$lang_string['menu_options'] = "Dátum &amp; Idõ";
		$lang_string['menu_themes'] = "Témák";
		$lang_string['menu_colors'] = "Színek";
		$lang_string['menu_change_login'] = "Bejelentkezés változtatása";
		$lang_string['menu_logout'] = "Kijelentkezés";
		$lang_string['menu_login'] = "Admin Bejelentkezés";
		$lang_string['menu_most_recent'] = "Legújabb hozzászólások";
		$lang_string['menu_most_recent_entries'] = "Legújabb bejegyzések";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks";
		$lang_string['menu_add_block'] = "Blokkok";
		$lang_string['menu_emoticons'] = "Emotikonok"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		$lang_string['menu_name'] = "Név: ";
		$lang_string['menu_pass'] = "Jelszó: ";

		// Other
		$lang_string['home'] = 'Vissza a fõoldalra';
		$lang_string['nav_next'] = 'Következõ';
		$lang_string['nav_back'] = 'Elõzõ';
		$lang_string['search_title'] = 'Keresés';
		$lang_string['search_go'] = 'Mehet';
		$lang_string['page_generated_in'] = 'Az oldal %s másodperc alatt generálódott';		

		// SB Functions
		$lang_string['sb_months'] = array( 'Január', 'Február', 'Március', 'Április', 'Május', 'Június', 'Július', 'Augusztus', 'Szeptember', 'Octóber', 'November', 'December' );
		$lang_string['sb_default_title'] = 'Nincs cím';
		$lang_string['sb_default_author'] = 'Nincs szerzõ';
		$lang_string['sb_default_footer'] = 'Nincs lábjegyzet';

		$lang_string['sb_edit'] = 'szerkeszt';
		$lang_string['sb_delete'] = 'töröl';
		$lang_string['sb_permalink'] = 'permalink';
		$lang_string['sb_trackback'] = 'trackbackek';
		$lang_string['sb_relatedlink'] = 'kapcsolódó link'; // <-- New in 0.4.6		

		$lang_string['sb_add_comment_btn'] = 'hozzászólás';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'hozzászólás';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'hozzászólás';		

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' megtekintés';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' megtekintés';		

		$lang_string['sb_add_link_btn'] = 'Linkek módosítása';
		$lang_string['sb_rate_entry_btn'] = 'Bejegyzés osztályzása';		

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Tárgy:";
			$lang_string['label_insert'] = "Speciális karakter:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['view_images'] = "Feltöltött képek beillesztése";
			$lang_string['label_entry'] = "Bejegyzés:";
			$lang_string['btn_preview'] = "&nbsp;Megtekintés&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Küldés&nbsp;";
			$lang_string['file_name'] = "Statikus File Neve: (szóközök és kiterjesztés nélkül)";

			// Javascript Strings
			$lang_string['insert_styles'] = "Írd be a formázandó szöveget:";
			$lang_string['insert_image'] = "Írd be a kép URL-ét:";
			$lang_string['insert_url1'] = "Írd be a linknak szolgáló szöveget (Opcionális):";
			$lang_string['insert_url2'] = "Írd be a kép teljes URL-ét:";
			$lang_string['insert_url3'] = "URL-t új ablakban nyit (Opcionális):";
			$lang_string['form_error'] = "Töltsd ki a Tárgy és Bevitel mezõket.";	

			// More Javascript Strings
			$lang_string['insert_image_Opcionális'] = 'Optionális:';
			$lang_string['insert_image_width'] = 'Szélesség (Opcionális):';
			$lang_string['insert_image_height'] = 'Magasság (Opcionális):';
			$lang_string['insert_image_popup'] = 'Teljes méretben mutassa, ha új ablakban nyílik (Opcionális):';
			$lang_string['insert_image_float'] = 'Lebegõ (Opcionális):';
		
			$lang_string['day'] = 'Nap';
			$lang_string['month'] = 'Hónap';
			$lang_string['year'] = 'Év';
			$lang_string['hour'] = 'Óra';
			$lang_string['minute'] = 'Perc';
			$lang_string['second'] = 'Másodperc';
		}	

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Szöveg bevitele";
				$lang_string['instructions'] = "Kész vagy a blogolásra? Töltsd ki az ívet és kattints az 'Elõnézetre', hogy meglásd, hogy néznek ki a bevitt adatok, vagy kattints a 'Küldésre', hogy mentsd a bevitt adatokat.";
				$lang_string['title_ad'] = "Trackback Pingek jóváhagyása";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(ek) küldése (vesszõvel elválasztva)";
				$lang_string['label_tb_autodiscovery'] = "önfeltárás";
				$lang_string['label_relatedlink'] = "Kapcsolódó link";
				$lang_string['label_categories'] = "Kategória lista";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Elõnézet / Bejegyzés szerkesztése";
				$lang_string['instructions_preview'] = "Így néz ki a bejegyzésed. Ha szövegstílusokat alkalmazol, ne felejtsd el bezárni az összes jelölõelemet.";
				$lang_string['title_update'] = "A bejegyzés frissítése";
				$lang_string['instructions_update'] = "Az alábbi kérdõív segítségével változtathatod a bejegyzésedet. Kattints az 'Elõnézetre' vagy a 'Küldésre', ha készen vagy.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Mégsem&nbsp;";

				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>A bejegyzés nincs elmentve. Probléma adódott a mentéskor.<br /><br />A szerver üzenete:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Statikus oldal hozzáadása";
				$lang_string['instructions'] = "Töltsd ki a kérdõívet a statikus oldal hozzáadásához. A többi blogbejegyzéstõl eltérõen, a statikus bejegyzések a jobb oldali menüben jelennek meg.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Elõnézet / Statikus oldal módosítása";
				$lang_string['instructions_preview'] = "Így néz ki a statikus oldalad. Ha szövegstílusokat vagy képeket alkalmazol, ne felejtsd el bezárni az összes jelölõelemet.";
				$lang_string['title_update'] = "Statikus oldal frissítése";
				$lang_string['instructions_update'] = "Itt javíthatod a bejegyzésedet. Kattints az 'Elõnézetre' vagy a 'Küldésre', ha készen vagy.";
				$lang_string['form_error'] = "Töltsd ki a Tárgy, Bejegyzés és Filenév mezõket!";	

				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>A bejegyzés nincs elmentve. Probléma adódott a mentéskor.<br /><br />A szerver üzenete:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Blokkok hozzáadása / kezelése";
				$lang_string['instructions'] = "Saját blokkok hozzáadása";
				$lang_string['up'] = "fel";
				$lang_string['down'] = "le";
				$lang_string['edit'] = "szerkeszt";
				$lang_string['delete'] = "töröl";
				$lang_string['block_name'] = "Blokk neve:";
				$lang_string['block_content'] = "Blokk tartalma:";
				$lang_string['instructions_edit'] = "Pillanatnyilag ezt a blokkot szerkeszted:";
				$lang_string['instructions_modify'] = "Kattints ide a blokk szerkesztéséhez:";
				$lang_string['submit_btn_edit'] = "Blokk szerkesztése";
				$lang_string['submit_btn_add'] = "Blokk hozzáadása";
				$lang_string['form_error'] = "Töltsd ki a Név mezõt.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Statikus oldalak:";

				// Add / Manage Links
				$lang_string['title'] = "Linkek hozzáadása / kezelése";
				$lang_string['instructions'] = "Saját linkek hozzáadása más oldalakhoz. Töltsd ki az alábbi kérdõívet, és kattints a 'Link hozzáadására'. Kattints a 'Fel' vagy 'Le' gombokra, hogy megváltoztasd a linkok sorrendjét. Kattints a 'Szerkesztés' gombra a link szerkesztéséhez. Kattints a 'Törlés' gombra a link törléséhez.";
				$lang_string['up'] = "fel";
				$lang_string['down'] = "le";
				$lang_string['edit'] = "szerkeszt";
				$lang_string['delete'] = "töröl";
				$lang_string['link_name'] = "A link neve:";
				$lang_string['link_url'] = "A link címe: (Opcionális. Hagyd üresen, hogy megjelenjen egy elválasztó.)";
				$lang_string['instructions_edit'] = "Pillanatnyilag ezt a linket szerkeszted:";
				$lang_string['instructions_modify'] = "Kattints a link szerkesztéséhez:";
				$lang_string['submit_btn_edit'] = "Link szerkesztése";
				$lang_string['submit_btn_add'] = "Link hozzáadása";
				$lang_string['form_error'] = "Töltsd ki a Név mezõt.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Kategóriák hozzáadása / kezelése";
				$lang_string['instructions'] = "Kategóriák hozzáadásához és szerkesztéséhez használd az alábbi kérdõívet. Mindegyik kategóriaelemnek 'kategórianév (szám)' formában kell lennie. Szóközökkel készíthetsz hierarchikus listát.<br /><br /><b>Például:</b><br />Általános (1)<br />Hírek (3)<br />&nbsp;&nbsp;Ünnepek (6)<br />&nbsp;&nbsp;Események (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Különféle (7)<br />Tehnológia (2)<br />";
				$lang_string['error'] = "Hiba";
				$lang_string['current_categories'] = "Jelenlegi kategóriák";
				$lang_string['no_categories_found'] = "Nincsenek kategóriák";
				$lang_string['category_list'] = "Kategórialista:";
				$lang_string['validate'] = "Érvényesít";
				$lang_string['submit_btn'] = "Mehet";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Színek cseréje";
				$lang_string['instructions'] = "Itt cserélheted a szövegek és hátterek színeit. Elõször válaszd ki a mezõt, majd használd a színpalettát a színek keveréséhez. Az érték automatikusan változik kattintáskor.";
				$lang_string['bg_color'] = "Az oldal háttere";
				$lang_string['main_bg_color'] = "A fõoldal háttere";
				$lang_string['border_color'] = "Az oldal szegélye";
				$lang_string['inner_border_color'] = "Belsõ szegély";
				$lang_string['header_bg_color'] = "A fejléc háttere";
				$lang_string['header_txt_color'] = "A fejléc szövege";
				$lang_string['menu_bg_color'] = "A menü háttere";
				$lang_string['footer_bg_color'] = "A lábléc háttere";
				$lang_string['txt_color'] = "Fõszöveg";
				$lang_string['headline_txt_color'] = "A címsor szövege";
				$lang_string['date_txt_color'] = "A dátum szövege";
				$lang_string['footer_txt_color'] = "A lábléc szövege";
				$lang_string['link_reg_color'] = "Alapértelmezett link";
				$lang_string['link_hi_color'] = "Fedett link";
				$lang_string['link_down_color'] = "Aktív link";

				// More Colors
				$lang_string['entry_bg'] = "A bejegyzés háttere";
				$lang_string['entry_title_bg'] = "A bejegyzés címének háttere";
				$lang_string['entry_border'] = "A bejegyzés szegélye";
				$lang_string['entry_title_text'] = "A bejegyzés címének szövege";
				$lang_string['entry_text'] = "A bejegyzés szövege";
				$lang_string['menu_bg'] = "A menü háttere";
				$lang_string['menu_title_bg'] = "A menü címének háttere";
				$lang_string['menu_border'] = "A menü szegélye";
				$lang_string['menu_title_text'] = "A menü címének szövege";
				$lang_string['menu_text'] = "A menü szövege";
				$lang_string['menu_link_reg_color'] = "Alapértelmezett menülink";
				$lang_string['menu_link_hi_color'] = "Fedett menülink";
				$lang_string['menu_link_down_color'] = "Aktív menülink";

				// Mehet
				$lang_string['color_preset'] = "Színsémák:";
				$lang_string['scheme_name'] = "Írj be saját sémanevet:";
				$lang_string['scheme_file'] = "Írd be a séma nevét: (helyek és kiterjesztések nélkül)";
				$lang_string['save_btn'] = "&nbsp;Mentés&nbsp;";
				$lang_string['form_error'] = "Írj be saját sémanevet.";
				$lang_string['submit_btn'] = "Mehet";
				$lang_string['theme_doesnt_allow_colors'] = 'A jelenleg kiválasztott téma nem engedélyez saját színeket.';

				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>Az információ nincs elmentve. Probléma adódott a mentéskor.<br /><br />A szerver üzenete:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Név:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Honlap:"; //New in 0.4.6.2
				$lang_string['comment'] = "Megjegyzés:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP cím:";  // New for 0.4.6.2
				$lang_string['useragent'] = "A felhasználó programa:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>%s -kor, %s ezt írta:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				
				$lang_string['comment_capcha'] = "Anti-Spam: Írd be ezt a számot: <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Megjegyzések";
				$lang_string['header'] = "Megjegyzés hozzáadása";
				$lang_string['instructions'] = "Töltsd ki az alábbi kérdõívet a megjegyzés hozzáadásához.";
				$lang_string['comment_name'] = "Neved:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Új megjegyzés küldése ekkor: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Jegyezz meg:";
				$lang_string['comment_text'] = "Megjegyzés:";
				$lang_string['post_btn'] = "&nbsp;Megjegyzés küldése&nbsp;";
				$lang_string['delete_btn'] = "töröl";

				// Hiba Response
				$lang_string['error_add'] = "<h2>Hoppá, vazze!</h2>A megjegyzés nincs elmentve. Probléma adódott a megjegyzés mentése közben.<br /><br />A szerver üzenete:<br />";
				$lang_string['error_delete'] = "<h2>Hoppá, vazze!</h2>A megjegyzés nincs törölve. Probléma adódott a megjegyzés törlése közben.<br /><br />A szerver üzenete:<br />";
				$lang_string['form_error'] = "Töltsd ki a Név, Megjegyzés és Anti-Spam mezõket.";
				break;

			case 'delete':
				$lang_string['title'] = "Bejegyzés törlése";
				$lang_string['instructions'] = "Ezt a bejegyzést akarod törölni. Gondold meg, biztos vagy-e benne!";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Mégsem&nbsp;";
				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>A bejegyzés nem lett törölve.<br /><br />A szerver üzenete:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Statikus oldal törlése";
				$lang_string['instructions'] = "Ezt a statikus oldalt akarod törölni. Gondold meg, biztos vagy-e benne!";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Mégsem&nbsp;";
				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>A bejegyzés nem lett törölve.<br /><br />A szerver üzenete:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Képlista";
				$lang_string['instructions'] = "Kattints az alábbi linkre a képek megtekintéséhez.<br /><br />Kép hozzáadásához a bejegyzéshez:<br />1) CTRL-kattintás a linkre és válaszd a 'Link vágólapra másolását'.<br />2) Térj vissza a bejegyzéshez vagy a szerkesztéshez.<br />3) Kattints a 'Kép' gombra, és illeszd be az URL az ablakba.";
				break;
			case 'info':
				$lang_string['title'] = "Meta-információ";
				$lang_string['instructions'] = "Az alábbi adatok metainformációk, amelyek a keresõmotorokat segítik, hogy megtalálják az oldalt.";
				$lang_string['info_keywords'] = "Kulcsszavak: (vesszõvel elválasztva)";
				$lang_string['info_description'] = "Leírás: (Az oldalad körülírása.)";
				$lang_string['info_copyright'] = "Jogok: (Másolásvédelem, stb.)";
				$lang_string['submit_btn'] = "Mehet";
				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>Az információ nincs mentve. Probléma adódott az információ mentése közben.<br /><br />A szerver üzenete:<br />";
				$lang_string['form_error'] = "Töltsd ki a Cím és Feladó mezõket.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>Az információ nincs mentve. Probléma adódott az információ mentése közben.<br /><br />A szerver üzenete:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Frissítés</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n megjegyzést kell frissíteni:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Megjegyzések frissítése"; // New 0.3.8
				$lang_string['title'] = "Admin Bejelentkezés";
				$lang_string['instructions'] = "Írd be a felhasználónevedet és a jelszót.";
				$lang_string['username'] = "Felhasználónév:";
				$lang_string['password'] = "Jelszó";
				$lang_string['submit_btn'] = "Mehet";
				// Success
				$lang_string['success'] = "<h2>Siker!</h2>Be vagy jelentkezve! Élvezd a blogodat!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppá, vazze!</h2>Nem vagy bejelentkezve! Ellenõrizd, hogy helyesen írtad-e be a felhasználónevedet és a jelszavadat!<p />";
				$lang_string['form_error'] = "Írd be a felhasználónevedet és a jelszót.";
				break;
			case 'logout':
				$lang_string['title'] = "Kijelentkezés";
				$lang_string['instructions'] = "<h2>Hoppá, vazze!</h2>A kijelentkezés nem sikerült. A cookiet nem lehet törölni. Miért vagy még mindig bejelentkezve?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>Az információ nincs mentve. Probléma adódott a bejegyzés mentése közben.<br /><br />A szerver üzenete:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Felhasználónév és jelszó cseréje";
				$lang_string['instructions'] = "Az alábbi kérdõív segítségével változtathatod a felhasználónevedet és jelszavadat. Írd be a felhasználónevet és a jelszót, amit használni szeretnél.";
				$lang_string['username'] = "Felhasználónév:";
				$lang_string['password'] = "Jelszó:";
				$lang_string['submit_btn'] = "Mehet";
				// Success
				$lang_string['success'] = "<h2>Siker!</h2>A felhasználóneved és jelszavad aktív! Élvezd a blogodat!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppá, vazze!</h2>Az információ nincs mentve. Probléma adódott a felhasználónév és/vagy jelszó mentése közben.<br /><br />A szerver üzenete:<br />";
				$lang_string['form_error'] = "Írd be a felhasználónevedet és a jelszót.";
				$lang_string['explanation'] = "Az utóbbi verziókban a jelszóstruktúránk megváltozott. Ezentúl nincs mód a jelszavak frissítésére a blog kódján belül. Ha változtatni akarod a jelszót, töröld a /config/password.php file-t, és ellenõrizd, hogy az install*.php fájlok léteznek a szerveren. Amint ez kész, frissítsd ezt az oldalt, vagy jelentkezz ki. Azt az oldalt fogod kapni, amit elõször is kaptál, mikor megadtad az eredeti jelszót.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Isten hozott";
				$lang_string['instructions'] = "Köszönjük, hogy a Simple PHP Blogot használod!";
				$lang_string['blog_choose_language'] = "Válassz nyelvet:";
				$lang_string['submit_btn'] = "Mehet";
				break;
			case 'install01':
				$lang_string['title'] = "Isten hozott";
				$lang_string['instructions'] = "
				Köszönjük, hogy a Simple PHP Blogot választottad!<br /><br />A Simple PHP Blog egy egyszerû blogrendszer. PHP 4.1-et vagy jobbat, valamint írásjogot igényel a szerveren. Minden információ egyszerû fájlokban tárolódik, tehát nincs szükség adatbázisra.<br /><br />
				Elsõ lépésként a Simple PHP Blog 3 könyvtárat fog készíteni (<b>config</b>, <b>content</b>, és <b>images</b>), amelyekben az információkat tárolja majd. Utána megadhatod a felhasználónevet és a jelszót, majd kezdheted a blogolást!<br /><br />
				<b>Kattints alább a telepítés elkezdéséhez:</b>";
				$lang_string['begin'] = "[ A telepítés kezdése ]";
				break;
			case 'install02':
				$lang_string['title'] = "Telepítés";
				$lang_string['instructions'] = "A <b>config</b>, <b>content</b>, és <b>images</b> könyvtárak létrehozása:";
				$lang_string['folder_exists'] = "OK! A könyvtár már létezik. Nem történt változtatás.";
				$lang_string['folder_failed'] = "Hoppá, vazze! Nem jött létre a könyvtár...";
				$lang_string['folder_success'] = "Siker! A könyvtár létrejött...";
				// Help
				$lang_string['help'] = "
				<h2>Hoppá, vazze!</h2>
				Egy vagy több könyvtár nem jött létre!<br /><br />Talán ezek miatt van:<br />
				<ol>
				<li><b>Nincsenek engedélyezve az <b>olvasási/írási</b> jogok.</li>
				<li>Minden file és könyvtár <b>felhasználói azonosítója</b> meg kell, hogy egyezzen.</li>
				</ol>
				Kövesd az alábbi hibaelhárítási tanácsokat, és <b>próbáld újra</b>:<br />
				<ol>
				<li>Manuálisan hozd létre ezeket a könyvtárakat: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
				<li>Engedélyezett <b>írásjogok</b> a könyvtárakon: az FTP programodban, a tulajdonosnak, a felhasználónak, és a világnak is legyenek <b>olvasási</b> és <b>írási</b> jogai. <i>(Esetleg lépj kapcsolatba a rendszeradminisztrátorral...)</i></li>
				<li>Ellenõrizd, hogy minden file és könyvtár felhasználói azonosítója megegyezik. <i>(Esetleg lépj kapcsolatba a rendszeradminisztrátorral...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Próbáld újra ]";
				// Success
				$lang_string['success'] = "<h2>Siker!</h2>A könyvtárak sikeresen létrejöttek!<p /><b>Kattints alább a folytatáshoz:</b>";
				$lang_string['continue'] = "[ Folytatás ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>A webszervered az alább titkosításokat ismeri:</b>";
				$lang_string['standard'] = "Standard DES Titkosítás: ";
				$lang_string['extended'] = "Bõvített DES Titkosítás: ";
				$lang_string['MD5'] = "MD5 Titkosítás: ";
				$lang_string['blowfish'] = "Blowfish Titkosítás: ";
				$lang_string['enabled'] = "engedélyezve";
				$lang_string['disabled'] = "tiltva";
				$lang_string['using_standard'] = "<b>Standard DES Titkosítás használata...</b>";
				$lang_string['using_extended'] = "<b>Extended DES Titkosítás használata...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">MD5 Titkosítás... használata</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Blowfish Titkosítás használata...</b>";
				$lang_string['using_unknown'] = "<b>Ismeretlen Titkosítás használata...</b>";
				$lang_string['salt_length'] = " <i>(Salt hossz = %string)</i><br />";
				$lang_string['title'] = "Felhasználónév és jelszó létrehozása";
				$lang_string['instructions'] = "Az alábbi kérdõívvel hozz létre felhasználónevet és jelszót.";
				$lang_string['username'] = "Felhasználónév:";
				$lang_string['password'] = "Jelszó:";
				$lang_string['submit_btn'] = "Mehet";
				// Success
				$lang_string['success'] = "<h2>Gratula!</h2>Be vagy jelentkezve. Kattints alább a Telepítéshez, ahol elnevezheted a blogot. Élvezd a blogodat!<p />";
				$lang_string['btn_setup'] = "[ Telepítés ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppá, vazze!</h2>Az információ nincs mentve. Probléma adódott a felhasználónév és/vagy a jelszó mentése közben.<br /><br />A szerver üzenete:<br />";
				$lang_string['form_error'] = "Írd be a felhasználónevedet és a jelszót.";
				break;
			case 'install04':
				$lang_string['title'] = "A jelszót tartalmazó file létrehozása";
				$lang_string['instructions'] = "Itt a trükkös része:<br />
				<ol>
				<li>Nyiss meg egy szövegszerkesztõ-alkalmazást: <i>(NotePad, WordPad, Word, BBEdit, Pico, VI, stb...)</i></li>
				<li>Hozz létre egy új üres dokumentumot.</li>
				<li>Másold és illeszd be az alábbi kódot a dokumentumba.</li>
				<li>Mentsd el a file-t <b>password.php</b> néven. <i>(Figyelj oda, hogy sima szövegként mentsd el!)</i></li>
				<li>Nyisd meg az FTP programodat.</li>
				<li>Töltsd fel a <b>password.php</b>-t a <b>config</b> könyvtárba.</li>
				<li>Töröld a <b>password.php</b>-t a merevlemezedrõl.</li>
				</ol>
				";
				$lang_string['code'] = "A <b>password.php</b> kódja:";
				$lang_string['information'] = "<i>Megjegyzés: Ha ki akarod cserélni a felhasználóneved és a jelszavad, töröld a <b>password.php</b> file-t a <b>config</b> könyvtárból. Amikor legközelebb látogatsz az oldalra, újra végigmehetsz a telepítési folyamaton.</i>";
				$lang_string['continue'] = "[ Folytatás ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Admin Bejelentkezés";
				$lang_string['instructions'] = "Írd be a felhasználóneved és a jelszavad:";
				$lang_string['username'] = "Felhasználónév:";
				$lang_string['password'] = "Jelszó";
				$lang_string['submit_btn'] = "Mehet";
				// Success
				$lang_string['success'] = "<h2>Gratula!</h2>Be vagy jelentkezve.<p />
				Kattints <b>IDE</b>, hogy személyre szabd a blogot.<p />
				<i>Megjegyzés: Most, hogy a telepítés befejezõdött, ajánlott törölni a <b>installXX.php</b> file-okat a weboldalról. (install00.php -> install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Hoppá, vazze!</h2>Nem vagy bejelentkezve. Ellenõrizd, hogy helyesen írtad-e be a felhasználónevedet és a jelszavadat, majd próbáld újra.<p />";
				$lang_string['form_error'] = "Írd be a felhasználónevedet és a jelszót.";
				// Success
				$lang_string['btn_setup'] = "[ Telepítés ]";
				$lang_string['btn_try_again'] = "[ Próbáld újra ]";
				break;
			case 'setup':
				$lang_string['title'] = "Telepítés";
				$lang_string['instructions'] = "Alább cserélheted a blogod nevét és a személyes információkat.";
				$lang_string['blog_title'] = "A blog neve:";
				$lang_string['blog_author'] = "Szerzõ:";
				$lang_string['blog_email'] = "Email: (Vesszõvel válaszd el az email-címeket - ha üresen hagyod, a Kapcsolat opció hatását veszti)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "Avatar URL: (Hagyd üresen, ha nincs)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Lábléc:";
				$lang_string['blog_choose_language'] = "Válassz nyelvet:";
				$lang_string['blog_enable_comments'] = "Kommentárok engedélyezése";
				$lang_string['blog_comments_popup'] = "Kommentárok új ablak való megnyitása";
				$lang_string['blog_enable_voting'] = "A bejegyzések értékelésének engedélyezése";
				$lang_string['blog_enable_cache'] = "Blog-gyorsítótár engedélyezése)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Naptár / Archívum blokkok engedélyezése"; // New for 0.4.6
				$lang_string['blog_enable_title'] = "Sima szöveges cím engedélyezése (Töröld a bejelölést, ha a cím a fejléc grafikájában van)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Permalink engedélyezése bejegyzéseknél"; // New for 0.4.6
				$lang_string['blog_enable_stats'] = "Statisztika engedélyezése a menüben"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Legújabb kommentárok listázásának engedélyezése"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Legújabb bejegyzések listázásának engedélyezése"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Email-figyelmeztetés küldése új beíráskor";
				$lang_string['blog_send_pings'] = "Webnapló &quot;pingek&quot; küldése";
				$lang_string['blog_ping_urls'] = "Írd be a teljes URL-t (pl. http://rpc.weblogs.com/RPC2) &quot;pingeléshez&quot;.<br />(Több címet is beírhatsz vesszõkkel elválasztva.)";
				$lang_string['blog_trackback_about'] = "A trackback blogok közötti értesítést biztosít. A trackpack ping által a blog megtudja, hogy linkelsz rá. Általuk megláthatod, ki linkel a blogodra.<br />
				   A pingelési URI-t megadhatod magad is, vagy automatikusan kiderítheted.";
				$lang_string['blog_trackback_enabled'] = "Trackback engedélyezése a blogban";
				$lang_string['blog_trackback_auto_discovery'] = "Auto-Discovery engedélyezése URL-t tartalmazó küldéskor";
				$lang_string['blog_max_entries'] = "Maximum kijelzendõ bejegyzések száma:";
				$lang_string['blog_comment_tags'] = "Megjegyzésekben engedélyezett jelölõelemek:";
				$lang_string['blog_gzip_about'] = "
					A PHP 4.0.4 óta, a PHP-nek lehetõsége van a gzip (.gz) tömörített fájlok írására és olvasására, a helyspórolás érdekében.
					 Láthatatlanul tömörítheti a böngészõbe küldött oldalakat is, amelyek támogatják a gzip-tömörítést, a sebességnövelés érdekében.<br />
					<br />
					A Zlib-támogatás a PHP-ben alapértelmezettként nincs bekapcsolva. Ha a jelölõnégyzet nincs bepipálva, akkor a PHP nem támogatja a Zlibet.";
				$lang_string['blog_enable_gzip_txt'] = "GZIP tömörítés engedélyezése az adatbázisban levõ fileok számára";
				$lang_string['blog_enable_gzip_output'] = "GZIP tömörítés engedélyezése a HTTP kimenet számára";
				$lang_string['submit_btn'] = "Mehet";
				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>Az információ nincs mentve. Probléma adódott az információ mentése közben.<br /><br />A szerver üzenete:<br />";
				$lang_string['form_error'] = "Sziveskedj a Cím és a Szerzõ mezõket kitölteni.";
				$lang_string['label_entry_order'] = "Bejegyzés Sorrend:";
				$lang_string['select_new_to_old'] = "Újat elõre";
				$lang_string['select_old_to_new'] = "Régit elõre";
				$lang_string['label_comment_order'] = "Megjegyzés Sorrend:";
				$lang_string['cal_sunday'] = "Vasárnap";
				$lang_string['cal_monday'] = "Hétfõ";
				$lang_string['label_calendar_start'] = "Naptári Hét Kezdõ Napja";
				$lang_string['title_sidebar'] = "Oldalsáv"; // New in 0.4.7
				$lang_string['title_comments'] = "Megjegyzések"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbackek"; // New in 0.4.7
				$lang_string['title_compression'] = "Tömörítés"; // New in 0.4.7
				$lang_string['title_entries'] = "Bejegyzések"; // New in 0.4.7
				$lang_string['title_general'] = "Általános"; // New in 0.4.7
				$lang_string['title_language'] = "Nyelv"; // New in 0.4.7
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbackek";
				$lang_string['header'] = "Trackback cím ehhez a bejegyzéshez:";
				$lang_string['delete_btn'] = "törlés";
				// Hiba Response
				$lang_string['error_add'] = "Hiba a trackback elmentése közben.";
				break;
			case 'options':
				$lang_string['title'] = "Opciók";
				$lang_string['instructions'] = "Használd a lejjebb található ûrlapot a blogban és a bejegyzésekben található dátum és idõ kijelzésének testreszabásához. Választhatsz 12 és 24 órás idõkijelzést. Rövid és hosszú dátumkijelzést.  És a  <b>Megtekintés</b> részben megnézheted hogy fog megjelenni a formázásod.";
				// Long Date
				$lang_string['ldate_title'] = "Hosszú dátumformátum:";
				$lang_string['weekday'] = "Hétköznap";
				$lang_string['month'] = "Hónap";
				$lang_string['day'] = "Nap";
				$lang_string['year'] = "Év";
				$lang_string['none'] = "Semmi";
				// Short Date
				$lang_string['sdate_title'] = "Rövid dátumformátum:";
				$lang_string['s_month'] = "Hónap";
				$lang_string['s_mon'] = "HHH";
				$lang_string['s_day'] = "Nap";
				$lang_string['s_year'] = "Év";
				$lang_string['zero_day'] = "Kezdeti nulla a napokhoz";
				$lang_string['show_century'] = "Évszázad mutatása";
				// Time
				$lang_string['time_title'] = "Idõformátum:";
				$lang_string['12hour'] = "12-órás nézet";
				$lang_string['24hour'] = "24-órás nézet";
				$lang_string['before_noon'] = "Délelõtt";
				$lang_string['after_noon'] = "Délután";
				// Date
				$lang_string['date_title'] = "Dátum kijelzésének módja:";
				$lang_string['long_date'] = "Hosszú dátum";
				$lang_string['short_date'] = "Rövid dátum";
				$lang_string['time'] = "Idõ";
				// Menu
				$lang_string['menu_title'] = "Menü dátumának kijelzési módja:";
				$lang_string['long_date'] = "Hosszú dátum";
				$lang_string['short_date'] = "Rövid dátum";
				// Used in multiple places
				$lang_string['zero_day'] = "Kezdeti nulla a napokhoz";
				$lang_string['zero_month'] = "Kezdeti nulla a hónapokhoz";
				$lang_string['zero_hour'] = "Kezdeti nulla az órákhoz";
				$lang_string['separator'] = "Elválasztó:";
				$lang_string['preview'] = "Megtekintés:";
				$lang_string['server_offset'] = "Szerver-üzemszünet:";
				// Buttons
				$lang_string['submit_btn'] = "Mehet";
				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>Az információ nincs mentve. Probléma adódott az információ mentése közben.<br /><br />A szerver üzenete:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Témák";
				$lang_string['instructions'] = "Használd a lenyíló menüt különbözõ témák kiválasztásához.";
				// Themes
				$lang_string['choose_theme'] = "Témák:";
				// Buttons
				$lang_string['submit_btn'] = "Mehet";
				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>Az információ nincs mentve. Probléma adódott az információ mentése közben.<br /><br />A szerver üzenete:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Kép feltöltése";
				$lang_string['instructions'] = "Kattints a gombra képek feltöltéséhez.";
				$lang_string['select_file'] = "Válassz file-t:";
				$lang_string['upload_btn'] = "Feltöltés";
				// Hiba Response
				$lang_string['error'] = "<h2>Hoppá, vazze!</h2>A kép nem lett feltöltve. További információk:<br /><br />A szerver üzenete:<br />";
				break;
			case 'search':
				$lang_string['title'] = "A keresés eredménye";
				$lang_string['instructions'] = "A keresés eredménye ehhez: <b>%string</b>:";
				$lang_string['not_found'] = "Nincs eredmény!";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: Írd be ezt a számot: "; // 0.4.2
				$lang_string['title'] = "Kapcsolat";
				$lang_string['instructions'] = "Töltsd ki a kérdõívet:";
				$lang_string['form_error'] = "Töltsd ki a tárgy és megjegyzés mezõket.";
				$lang_string['name'] = "Név:";
				$lang_string['email'] = "Email:";				
				$lang_string['subject'] = "Tárgy:";
				$lang_string['comment'] = "Megjegyzés:";
				$lang_string['submit_btn'] = "Mehet";
				$lang_string['success'] = "<h2>Siker!</h2>Az üzenet el lett küldve.<p />";
				$lang_string['failure'] = "<h2>Hiba!</h2>Az üzenet nem lett elküldve. Valószínûleg az Anti Spam rosszul lett beírva.<p />";
				$lang_string['contactsent'] = "Kontakt keresztülküldve ezen: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP cím:";  // New for 0.4.6
				$lang_string['useragent'] = "A felhasználó programa:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>%s, %s írta:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Statisztika";
				$lang_string["general"] = "Általános";
				$lang_string["entry_info"] = "<b>%s</b> bejegyzés, melyben <b>%s</b> szó található, <b>%s</b> byte méretû.";
				$lang_string["comment_info"] = "<b>%s</b> bejegyzés, melyben <b>%s</b> szó található, <b>%s</b> byte méretû.";
				$lang_string["trackback_info"] = "<b>%s</b> trackbackek nagysága <b>%s</b> byte.";
				$lang_string["static_info"] = "<b>%s</b> statikus oldal, melyben <b>%s</b> szó található, <b>%s</b> byte méretû";
				$lang_string["most_viewed_entries"] = "10 Legtöbbször megtekintett bejegyzés";
				$lang_string["most_commented_entries"] = "10 Legtöbb megjegyzést kapott bejegyzés";
				$lang_string["most_trackbacked_entries"] = "10 Legtöbb trackback-et kapott bejegyzés";
				$lang_string['vote_info'] = "<b>%s</b> szavazatok mérete <b>%s</b> byte."; // 0.4.1
				$lang_string["most_voted_entries"] = "10 Legtöbb szavazatot kapott bejegyzés"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 Legtöbbre értékelt bejegyzés"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Hiba 403.8 - Oldal/Funkció Belépés Megtagadva';
				$lang_string["errorline1"] = 'Az oldal vagy funkció amelyet megpróbált lekérni, cookie-k használatát igényli!';
				$lang_string["errorline2"] = 'Cookie-k használatát visszaállítása a böngészõben vagy a védelmi software-ben, vagy próbáld meg mégeszer.';
				$lang_string["clientid"] = 'Kliens ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Hiba 403.8 - Oldal/Funkció Belépés Megtagadva';
				$lang_string["404"] = 'HTTP Hiba 404 - Oldal/Funkció Nem Létezik';
				$lang_string["error_404"] = 'Az oldal vagy funkció amelyet megpróbáltál lekérni nem létezik!';
				$lang_string["error_javascript"] = 'Az oldal vagy funkció amelley próbálkoztál java szkriptet követel a helyes mûködéshez!';
				$lang_string["error_emailnotsent"] = 'Az üzenet elküldése sikertelen!';
				$lang_string["error_emailnotsentcapcha"] = 'Az üzenet elküldése sikertelen, mert a spam védelmi mezõ üres vagy hibásan lett kitöltve!';
				$lang_string["clientid"] = 'Kliens ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Admin Emotikonok";
				$lang_string['instructions'] = "
					Pipáld be az emotikonokat, amelyeket használni akarsz.
					Írd be a hozzá tartozó mezõbe azt a kifejezést, amelyet 
					majd helyettesít az emotikon. Több kifejezés is használható
					üres hellyel szétválasztva.<br /><br />
		
					Például:<br />
					:) :-) :MOSOLY: :BOLDOG:<br /><br />
					
					<i>(Ajánlott hogy a kifejezések 2 karakternél hosszabbak legyenek,
					különben váratlan helyettesítések következhetnek be.)</i>";
				$lang_string["upload_instructions"] = 'Új emotikon feltöltése:';
				$lang_string["upload_success"] = 'Siker! A kép sikeresen fel lett töltve!';
				$lang_string["upload_error"] = 'Hiba! A kép nem lett feltöltve!';
				$lang_string["upload_invalid"] = 'Hiba! Érvénytelen képfile. A kiterjesztés png, jpg vagy gif kell hogy legyen.';
				$lang_string["save_success"] = 'Az emotikonok beállításai sikeresen el lettek mentve!';
				$lang_string["save_error"] = 'Hiba! Az emotikonok beállításai nem lettek elmentve!';
				$lang_string["save_button"] = 'Emotikonok mentése';
				break;
			default:
				break;
		}
	}
?>
