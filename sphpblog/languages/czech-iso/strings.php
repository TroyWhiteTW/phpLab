<?php

	// Czech Language File
	// (c) 2006 Josef Klimosz, jklimosz <at> gmail <dot> com
	//

	// Simple PHP Version: 0.4.8
	// Czech Language Version:   0.4.8.2	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;			

		// Language: Czech
		$lang_string['language'] = 'czech';	
		
		$lang_string['locale'] = array('cs_CZ', 'cs','czech');
		$lang_string['rss_locale'] = 'cs-CZ'; // New 0.4.8

		// ISO Charset: iso-8859-2
		$lang_string['html_charset'] = 'ISO-8859-2';
		$lang_string['php_charset'] = 'ISO-8859-2';	

		setlocale( LC_TIME, $lang_string['locale'] );		

		// Some Global Strings		

		// Menu
		$lang_string['menu_links'] = "Odkazy";
		$lang_string['menu_home'] = "Hlavní stránka";
		$lang_string['menu_contact'] = "Kontaktujte mne";
		$lang_string['menu_stats'] = "Statistiky";
		$lang_string['menu_calendar'] = "Kalendáø"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archivy";
		$lang_string['menu_viewarchives'] = "Ukázat archivy";
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Pøidat záznam";
		$lang_string['menu_add_static'] = "Pøidat stránku";
		$lang_string['menu_upload'] = "Nahrát obrázek";
		$lang_string['menu_setup'] = "Nastavení";
		$lang_string['menu_categories'] = "Kategorie";
		$lang_string['menu_info'] = "Meta data";
		$lang_string['menu_options'] = "Datum a èas";
		$lang_string['menu_themes'] = "Vzhledy";
		$lang_string['menu_colors'] = "Barvy";
		$lang_string['menu_change_login'] = "Zmìnit pøihlá¹ení";
		$lang_string['menu_logout'] = "Odhlá¹ení";
		$lang_string['menu_login'] = "Pøihlá¹ení";
		$lang_string['menu_most_recent'] = "Nejnovìj¹í komentáøe";
		$lang_string['menu_most_recent_entries'] = "Nejnovìj¹í záznamy";
		$lang_string['menu_most_recent_trackback'] = "Nejnovìj¹í odezvy";
		$lang_string['menu_add_block'] = "Bloky";
		$lang_string['menu_emoticons'] = "Smajlíky"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Dnes:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Vèera:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Celkem:"; // New for 0.4.8
		$lang_string['counter_title'] = "Náv¹tìvy"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Zpìt na hlavní stránku';
		$lang_string['nav_next'] = 'Dal¹í';
		$lang_string['nav_back'] = 'Zpìt';
		$lang_string['search_title'] = 'Hledání';
		$lang_string['search_go'] = 'Jdi';
		$lang_string['page_generated_in'] = 'Stránka generována %s sekund';
		$lang_string['counter_total'] = 'Zobrazení webu: '; // New in 0.4.8
		$lang_string['read_more'] = 'Èíst dále...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'ledna', 'února', 'bøezna', 'dubna', 'kvìtna', 'èervna', 'èervence', 'srpna', 'záøí', 'øíjna', 'listopadu', 'prosince' );
		$lang_string['sb_default_title'] = 'Bez názvu';
		$lang_string['sb_default_author'] = 'Neznámý autor';
		$lang_string['sb_default_footer'] = '';

		$lang_string['sb_edit'] = 'editovat';
		$lang_string['sb_delete'] = 'vymazat';
		$lang_string['sb_permalink'] = 'trvalý odkaz';
		$lang_string['sb_trackback'] = 'zpìtné sledování';
		$lang_string['sb_relatedlink'] = 'související odkaz'; // <-- New in 0.4.6		

		$lang_string['sb_add_comment_btn'] = 'pøidat komentáø';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = ' komentáø';
		$lang_string['sb_comments_plural_btn_number_first'] = false;
		$lang_string['sb_comments_plural_btn'] = 'komentáøe:';		

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' zobrazení';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' zobrazení';		

		$lang_string['sb_add_link_btn'] = 'pøidat odkaz';
		$lang_string['sb_rate_entry_btn'] = 'Kliknìte a ohodno»te záznam';		

		// Záznam Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Název:";
			$lang_string['label_insert'] = "Vlo¾it:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "Dále..."; // 0.4.8
			$lang_string['view_images'] = "Ukázat obrázky";
			$lang_string['label_entry'] = "Záznam:";
			$lang_string['btn_preview'] = "&nbsp;Ukázat&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Odeslat&nbsp;";
			$lang_string['file_name'] = "Název souboru (bez mezer a pøípony):";

			// Javascript Strings
			$lang_string['insert_styles'] = "Vlo¾te text, který bude formátován:";
			$lang_string['insert_image'] = "Vlo¾te URL obrázku:";
			$lang_string['insert_url1'] = "Vlo¾te text, zobrazovaný pod odkazem (      volitelnì):";
			$lang_string['insert_url2'] = "Vlo¾te úplnou URL odkazu:";
			$lang_string['insert_url3'] = "Otevøít odkaz v novém oknì (volitelnì):";
			$lang_string['form_error'] = "Vyplòte pole s názvem a záznamem.";	

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Volby:';
			$lang_string['insert_image_width'] = '©íøka (volitelnì):';
			$lang_string['insert_image_height'] = 'Vý¹ka (volitelnì):';
			$lang_string['insert_image_popup'] = 'Po kliknutí zobrazit celý obrázek v novém oknì (volitelnì):';
			$lang_string['insert_image_float'] = 'Umístìní (volitelnì):';
		
			$lang_string['day'] = 'Den';
			$lang_string['month'] = 'Mìs.';
			$lang_string['year'] = 'Rok';
			$lang_string['hour'] = 'Hod.';
			$lang_string['minute'] = 'Min.';
			$lang_string['second'] = 'Sek.';
		}	

		switch ($page) {
			case 'add':
				// Add Záznam
				$lang_string['title'] = "Pøidat záznam";
				$lang_string['instructions'] = "Chcet pøidat záznam do stránek? Vyplòte formuláø ní¾e a kliknìte na 'Ukázat' pro náhled nebo na 'Odeslat' pro ulo¾ení záznamu.";
				$lang_string['title_ad'] = "Potvrzení pingù o odezvách";
				$lang_string['instructions_ad'] = "Toto jsou automaticky rozpoznané URI, kam mohou být odesílány pingy. Jestli¾e na urèitou URI ping posílat nechcete, odznaète ji. Kliknìte na 'OK' pro odesílání pingù na oznaèené URI, nebo kliknìte na 'Zru¹it' a pingy nebudou odesílány.";
				$lang_string['label_tb_ping'] = "Pingy o odezvách odesílat na (oddìlit èárkami):";
				$lang_string['label_tb_autodiscovery'] = "Autorozpoznání";
				$lang_string['label_relatedlink'] = "Související odkaz";
				$lang_string['label_categories'] = "Seznam kategorií";

				// Preview / Edit Záznam
				$lang_string['title_preview'] = "Ukázat/editovat záznam";
				$lang_string['instructions_preview'] = "Takto vypadá vá¹ záznam. Pokud pou¾íváte stylování textu nebo vkládáte obrázky, nezapomeòte 'uzavøít' v¹echny 'tagy'.";
				$lang_string['title_update'] = "Úpravy záznamu";
				$lang_string['instructions_update'] = "Vá¹ záznam mù¾ete upravit ve formuláøi ní¾e. Po dokonèení kliknìte na 'Ukázat' nebo 'Odeslat'.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru¹it&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Záznam nebyl ulo¾en. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'add_static':
				// Add Záznam
				$lang_string['title'] = "Pøidat stránku";
				$lang_string['instructions'] = "Vyplòte formuláø ní¾e a pøidejte novou statickou stránku. Na rozdíl od záznamù se statické stránky objeví jako polo¾ky v menu. To je vhodné pro stránky, které chcete mít stále k dispozici, jako napø. Informace, Kontakty, Plány a pod. Kliknìte na 'Ukázat' pro náhled nebo na 'Odeslat' pro ulo¾ení stránky.";

				// Preview / Edit Záznam
				$lang_string['title_preview'] = "Ukázat/editovat stránku";
				$lang_string['instructions_preview'] = "Takto vypadá va¹e stránka. Pokud pou¾íváte stylování textu nebo vkládáte obrázky, nezapomeòte 'uzavøít' v¹echny 'tagy'.";
				$lang_string['title_update'] = "Úpravy stránky";
				$lang_string['instructions_update'] = "Va¹i stránku mù¾ete upravit ve formuláøi ní¾e. Po dokonèení kliknìte na 'Ukázat' nebo 'Odeslat'.";
				$lang_string['form_error'] = "Vyplòte  pole s názvem, textem a názvem souboru.";	

				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Záznam nebyl ulo¾en. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Pøidat/upravit bloky";
				$lang_string['instructions'] = "Pøidání vlastních blokù. Vyplòte formuláø ní¾e a kliknìte na 'Pøidat blok'. Kliknutím na tlaèítka vý¹ a ní¾ upravíte umístìní bloku v postranním sloupci. Kliknutím na tlaèítko editovat blok upravíte. Kliknutím na tlaèítko vymazat blok zru¹íte";
				$lang_string['up'] = "vý¹";
				$lang_string['down'] = "ní¾";
				$lang_string['edit'] = "editovat";
				$lang_string['delete'] = "vymazat";
				$lang_string['block_name'] = "Název bloku:";
				$lang_string['block_content'] = "Obsah bloku:";
				$lang_string['instructions_edit'] = "Právì editujete blok:";
				$lang_string['instructions_modify'] = "Kliknìte ní¾e a editujte blok:";
				$lang_string['submit_btn_edit'] = "Editovat blok";
				$lang_string['submit_btn_add'] = "Pøidat blok";
				$lang_string['form_error'] = "Vyplòte pole s názvem bloku.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Statické stránky:";

				// Add / Manage Links
				$lang_string['title'] = "Pøidat/upravit odkazy";
				$lang_string['instructions'] = "Pøidání vlastních odkazù na jiné weby. Vyplòte formuláø ní¾e a kliknìte na 'Pøidat odkaz'. Kliknutím na tlaèítka vý¹ a ní¾ upravíte umístìní odkazu v menu. Kliknutím na tlaèítko editovat odkaz upravíte. Kliknutím na tlaèítko vymazat odkaz zru¹íte";
				$lang_string['up'] = "vý¹";
				$lang_string['down'] = "ní¾";
				$lang_string['edit'] = "editovat";
				$lang_string['delete'] = "vymazat";
				$lang_string['link_name'] = "Název odkazu:";
				$lang_string['link_url'] = "URL odkazu (Volitelnì. Nevyplnìním vytvoøíte oddìlovaè):";
				$lang_string['instructions_edit'] = "Právì editujete odkaz:";
				$lang_string['instructions_modify'] = "Kliknìte ní¾e a upravte odkaz:";
				$lang_string['submit_btn_edit'] = "Editovat odkaz";
				$lang_string['submit_btn_add'] = "Pøidat odkaz";
				$lang_string['form_error'] = "Vyplòte pole s názvem odkazu.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Pøidat/upravit kategorie";
				$lang_string['instructions'] = "Pou¾ijte formuláø ní¾e pro vytvoøení kategorií. Ka¾dou kategorii zadejte ve formátu 'Název kategorie (id èíslo)'. Hierarchii vytvoøíte odsazením polo¾ek mezerami.<br /><br /><b>Pøíklad:</b><br />Hlavní (1)<br />Novinky (3)<br />&nbsp;&nbsp;Nabídky (6)<br />&nbsp;&nbsp;Události (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Rùzné (7)<br />Technologie (2)<br />";
				$lang_string['error'] = "Chyba";
				$lang_string['current_categories'] = "Vytvoøené kategorie";
				$lang_string['no_categories_found'] = "Nejsou ¾ádné kategorie";
				$lang_string['category_list'] = "Seznam kategorií:";
				$lang_string['validate'] = "Ovìøení";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Zmìna barev";
				$lang_string['instructions'] = "Zde mù¾ete zmìnit barvy textù a pozadí stránek. Nejprve vyberte pole ní¾e a pak pou¾ijte nabídku barev. Pøíslu¹né hodnoty se zmìní automaticky.";
				$lang_string['bg_color'] = "Pozadí stránky";
				$lang_string['main_bg_color'] = "Pozadí hlavní stránky";
				$lang_string['border_color'] = "Okraj stránky";
				$lang_string['inner_border_color'] = "Vnitøní okraj";
				$lang_string['header_bg_color'] = "Pozadí záhlaví";
				$lang_string['header_txt_color'] = "Text záhlaví";
				$lang_string['menu_bg_color'] = "Pozadí menu";
				$lang_string['footer_bg_color'] = "Pozadí zápatí";
				$lang_string['txt_color'] = "Hlavní text";
				$lang_string['headline_txt_color'] = "Text nadpisu";
				$lang_string['date_txt_color'] = "Text data";
				$lang_string['footer_txt_color'] = "Text zápatí";
				$lang_string['link_reg_color'] = "Klidový odkaz";
				$lang_string['link_hi_color'] = "Zvolený odkaz";
				$lang_string['link_down_color'] = "Aktivní odkaz";

				// More Colors
				$lang_string['entry_bg'] = "Pozadí záznamu";
				$lang_string['entry_title_bg'] = "Pozadí názvu záznamu";
				$lang_string['entry_border'] = "Okraj záznamu";
				$lang_string['entry_title_text'] = "Text názvu záznamu";
				$lang_string['entry_text'] = "Text záznamu";
				$lang_string['menu_bg'] = "Pozadí menu";
				$lang_string['menu_title_bg'] = "Pozadí názvu menu";
				$lang_string['menu_border'] = "Okraj menu";
				$lang_string['menu_title_text'] = "Text názvu menu";
				$lang_string['menu_text'] = "Text menu";
				$lang_string['menu_link_reg_color'] = "Klidový odkaz menu";
				$lang_string['menu_link_hi_color'] = "Zvolený odkaz menu";
				$lang_string['menu_link_down_color'] = "Aktivní odkaz menu";

				// Submit
				$lang_string['color_preset'] = "Barevné schéma:";
				$lang_string['scheme_name'] = "Vlo¾te název vlastního barevného schéma:";
				$lang_string['scheme_file'] = "Vlo¾te název souboru (bez mezer a pøípony):";
				$lang_string['save_btn'] = "&nbsp;Ulo¾it&nbsp;";
				$lang_string['form_error'] = "Vlo¾te název va¹eho barevného schéma.";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Vybraný vzhled neumo¾òuje volbu vlastního barevného schéma.';

				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo¾eny. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Jméno:"; //New in 0.4.6.2
				$lang_string['email'] = "E-mail:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Stránky:"; //New in 0.4.6.2
				$lang_string['komentáø'] = "Komentáø:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP adresa:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Pou¾íváte:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>Na %s, %s napsal:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				
				$lang_string['comment_capcha'] = "Antispam: Vlo¾te øetìzec <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Komentáøe";
				$lang_string['header'] = "Vlo¾it komentáø";
				$lang_string['instructions'] = "Vyplòte formuláø ní¾e a pøidejte vá¹ vlastní komentáø.";
				$lang_string['comment_name'] = "Va¹e jméno:";
				$lang_string['comment_email'] = "E-mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Nový komentáø odeslán: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Zapamatovat:";
				$lang_string['comment_text'] = "Text komentáøe:";
				$lang_string['post_btn'] = "&nbsp;Odeslat komentáø&nbsp;";
				$lang_string['delete_btn'] = "vymazat";
				$lang_string['expired_comment1'] = "Litujeme. Komentáøe byly umo¾nìny po dobu "; // New for 0.4.8
				$lang_string['expired_comment2'] = " dní."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Promiòte, va¹e IP adresa byla zablokována. Nemù¾ete vkládat ¾ádné komentáøe."; // New for 0.4.8
        
				// Error Response
				$lang_string['error_add'] = "<h2>Ouha!</h2>Komentáø nebyl ulo¾en. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['error_delete'] = "<h2>Ouha!</h2>Komentáø nebyl vymazán. Bìhem mazání se objevil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole se jménem, textem komentáøe a Antispamem.";
				break;

			case 'delete':
				$lang_string['title'] = "Vymazat záznam";
				$lang_string['instructions'] = "Chcete vymazat tento záznam? Ujistìte se, ¾e to opravdu chcete provést, akci nelze vrátit...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru¹it&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Nelze vymazat záznam.<br /><br />Server ohlásil:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Vymazat stránku";
				$lang_string['instructions'] = "Chcete vymazat tuto stránku? Ujistìte se, ¾e to opravdu chcete provést, akci nelze vrátit......";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Zru¹it&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Nelze vymazat stránku.<br /><br />Server ohlásil:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Seznam obrázkù";
				$lang_string['instructions'] = "Kliknutím na odkazy ní¾e zobrazíte obrázky.<br /><br />Pøidání obrázku do záznamu:<br />1) Ctrl (nebo pravý) klik na odkaz, vyberte 'Kopírovat odkaz do schránky'.<br />2) Vra»te se na pøidání nebo editaci záznamu.<br />3) Kliknìte na tlaèítko 'img' a vlo¾te adresu obrázku do formuláøe.";
				break;
			case 'info':
				$lang_string['title'] = "Meta data";
				$lang_string['instructions'] = "Informace ní¾e jsou pou¾ity jako &quot;meta data&quot;, která pomáhají vyhledávaèùm v nalezení správných informací o va¹ich stránkách. Informace mohou být vyu¾ívány také v RSS kanálech.";
				$lang_string['info_keywords'] = "Klíèová slova (seznam klíèových slov, oddìlených èárkami):";
				$lang_string['info_description'] = "Popis (obsah nebo volný textový popis va¹ich stránek):";
				$lang_string['info_copyright'] = "Práva (copyright nebo odkaz na pøíslu¹ný dokument):";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo¾eny. Bìhem ukládání informací se objevil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole s názvem a jménem autora.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyla ulo¾ena. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Obnovení</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n komentáøových souborù vy¾aduje obnovení:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Obnovit komentáøe"; // New 0.3.8
				$lang_string['title'] = "Pøihlá¹ení";
				$lang_string['instructions'] = "Vlo¾te pøihla¹ovací jméno a heslo";
				$lang_string['username'] = "Pøihla¹ovací jméno:";
				$lang_string['password'] = "Heslo";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Úspìch!</h2>Jste pøihlá¹en. Pøíjemnou práci se stránkami!<p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Ouha!</h2>Nejste pøihlá¹en. Zadejte své pøihla¹ovací jméno a heslo správnì a zkuste to znovu.<p />";
				$lang_string['form_error'] = "Vyplòte pole se jménem a heslem.";
				break;
			case 'logout':
				$lang_string['title'] = "Odhlá¹ení";
				$lang_string['instructions'] = "<h2>Ouha!</h2>Odhlá¹ení neprobìhlo korektnì. Nelze vymazat cookie. Nebo jste stále pøihlá¹en?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo¾eny. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Zmìna pøihla¹ovacího jména a hesla";
				$lang_string['instructions'] = "Pou¾ijte formuláø ní¾e a zmìòte va¹e pøihla¹ovací jméno a/nebo heslo. Vlo¾te nové pøihla¹ovací jméno a heslo, které chcete pou¾ívat.";
				$lang_string['username'] = "Pøihla¹ovací jméno:";
				$lang_string['password'] = "Heslo:";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Úspìch!</h2>Your Pøihla¹ovací jméno a/nebo heslo je aktivní. Pøíjemnou práci se stránkami!<p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Ouha!</h2>Informace nebyla ulo¾ena. Pøi ukládání va¹eho jména a/nebo hesla se objevil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole se jménem a heslem.";
				$lang_string['explanation'] = "V aktuální verzi programu byla zmìnìna struktura pøihla¹ování.  Nadále nelze zmìnit hesla a/nebo pøihlá¹ení pøímo na stránkách. Pokud chcete zmìnit heslo, vyma¾te soubor /config/password.php a ujistìte se, ¾e soubory install*.php jsou ulo¾eny na serveru. Poté obnovte tuto stránku nebo se odhla¹te. Skript, pou¾itý pøi vytváøení stránek, se spustí znovu.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Vítejte";
				$lang_string['instructions'] = "Dìkujeme, ¾e jste si vybrali Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Volba jazyka:";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Vítejte";
				$lang_string['instructions'] = "
				Dìkujeme, ¾e jste si vybrali Simple PHP Blog!<br /><br />Simple PHP Blog je jednoduchý blogovací systém. Vy¾aduje PHP 4.1 nebo vy¹¹í a nastavení práv zápisu na serveru. V¹echny informace jsou ulo¾eny v textových souborech, tak¾e není vy¾adována databáze.<br /><br />
				Nejprve je potøeba vytvoøit tøi adresáøe (<b>config</b>, <b>content</b> a <b>images</b>) pro ukládání va¹ich informací. Pak zadáte heslo a mù¾ete zaèít pracovat.<br /><br />
				<b>Kliknìte ní¾e a zahajte nastavení:</b>";
				$lang_string['begin'] = "[ Zahájit nastavení ]";
				break;
			case 'install02':
				$lang_string['title'] = "Nastavení";
				$lang_string['instructions'] = "Vytvoøení adresáøù <b>config</b>, <b>content</b> a <b>images</b>:";
				$lang_string['folder_exists'] = "OK! Adresáøe existují. Není tøeba ¾ádných úprav...";
				$lang_string['folder_failed'] = "Ouha! Nelze vytvoøit adresáø...";
				$lang_string['folder_success'] = "Úspìch! Adresáø vytvoøen...";
				// Help
				$lang_string['help'] = "
				<h2>Ouha!</h2>
				Nelze vytvoøit jeden nebo více adresáøù!<br /><br />To mù¾e být zpùsobeno:<br />
				<ol>
				<li><b>Práva zápisu</b> nejsou správnì nastavena na pøístup <b>Read/Write</b>.</li>
				<li><b>UID</b> (identifikace u¾ivatele) v¹ech souborù a adresáøù musí být toto¾né.</li>
				</ol>
				Zkuste provést opravy popsané ní¾e a pak kliknìte na <b>Zkusit znovu</b>:<br />
				<ol>
				<li>Manuálnì vytvoøte následující adresáøe: <b>config</b>, <b>content</b> a <b>images</b>.</li>
				<li>Zajistìte <b>práva zápisu</b> pro tyto adresáøe: Pou¾ijte vá¹ FTP program: vlastník (Owner), u¾ivatel (User) a svìt (World) by mìli mít pøístup <b>Read</b> a <b>Write</b>. <i>(Pøípadnì mù¾ete kontaktovat va¹eho poskytovatele a po¾ádat o zmìnu...)</i></li>
				<li>Ujistìte se, ¾e UID v¹ech va¹ich souborù a adresáøù jsou shodné. <i>(Pøípadnì mù¾ete kontaktovat va¹eho poskytovatele a po¾ádat o zmìnu...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Zkusit znovu ]";
				// Success
				$lang_string['success'] = "<h2>Úspìch!</h2>Adresáøe byly úspì¹nì vytvoøeny!<p /><b>Kliknìte ní¾e pro pokraèování:</b>";
				$lang_string['continue'] = "[ Pokraèovat ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Vá¹ webový server podporuje následující kryptokódování:</b>";
				$lang_string['standard'] = "Standardní DES: ";
				$lang_string['extended'] = "Roz¹íøené DES: ";
				$lang_string['MD5'] = "MD5: ";
				$lang_string['blowfish'] = "Blowfish: ";
				$lang_string['enabled'] = "zapnuto";
				$lang_string['disabled'] = "vypnuto";
				$lang_string['using_standard'] = "<b>Pou¾ito standardní DES...</b>";
				$lang_string['using_extended'] = "<b>Pou¾ito roz¹íøené DES...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Pou¾ito MD5...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Pou¾ito Blowfish...</b>";
				$lang_string['using_unknown'] = "<b>Pou¾ito neznámé kódování...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Zadat pøihla¹ovací jméno a heslo";
				$lang_string['instructions'] = "Pou¾ijte formuláø ní¾e a zadejte pøihla¹ovací jméno a heslo.";
				$lang_string['username'] = "Pøihla¹ovací jméno:";
				$lang_string['password'] = "Heslo:";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulujeme!</h2>Jste pøihlá¹en. Kliknìte ní¾e a pøjdìte na nastavení, kde mù¾ete zadat název va¹ich stránek. Pøíjemnou práci se stránkami!<p />";
				$lang_string['btn_setup'] = "[ Nastavení ]";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Ouha!</h2>Informace nebyly ulo¾eny. Pøi ukládání va¹eho pøihla¹ovacího jména a/nebo hesla se objevil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole se jménem a heslem.";
				break;
			case 'install04':
				$lang_string['title'] = "Vytvoøení souboru s heslem";
				$lang_string['instructions'] = "Toto je dùle¾itá èást:<br />
				<ol>
				<li>Spus»e nìjaký textový editor <i>(Notepad, WordPad, Word, BBEdit, Pico, VI atd...).</i></li>
				<li>Vytvoøte nový textový soubor.</li>
				<li>Zkopírujte a vlo¾te do souboru kód z okna ní¾e.</li>
				<li>Soubor ulo¾te a pojmenujte <b>password.php</b> <i>(soubor ulo¾te jako <b>text</b> nebo <b>èistý (plain) text</b>).</i></li>
				<li>Spus»te FTP program.</li>
				<li>Nahrejte soubor <b>password.php</b> do adresáøe <b>config</b> na va¹em serveru.</li>
				<li>Vyma¾te <b>password.php</b> z va¹eho disku.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Poznámka: Pokud chcete zmìnit va¹e pøihla¹ovací jméno a heslo (zøejmì zapomenuté), vyma¾te soubor <b>password.php</b> v adresáøi <b>config</b>. Pøi pøí¹tí náv¹tìvì stránek si celý postup zopakujete...</i>";
				$lang_string['code'] = "Kód pro soubor <b>password.php</b>:";
				$lang_string['continue'] = "[ Pokraèovat ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Pøihlá¹ení";
				$lang_string['instructions'] = "Vlo¾te pøihla¹ovací jméno a heslo";
				$lang_string['username'] = "Pøihla¹ovací jméno:";
				$lang_string['password'] = "Heslo";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Gratulujeme!</h2>Jste pøihlá¹en.<p />
				Kliknìte ní¾e a pøejdìte na stránku <b>Nastavení</b>, kde mù¾ete upøesnit ostatní vlastnosti stránek.<p />
				<i>Poznámka: Nyní je proces nastavení dokonèen. Doporuèujeme vymazat soubory <b>installXX.php</b> z va¹eho webu (tj. install00.php a¾ install06.php).</i><p />";
				// Wrong Heslo
				$lang_string['wrong_password'] = "<h2>Ouha!</h2>Nejste pøihlá¹en. Provìøte, zda je zadané pøihla¹ovací jméno a heslo správné a zkuste to znovu.<p />";
				$lang_string['form_error'] = "Vyplòte pole se jménem a heslem.";
				// Success
				$lang_string['btn_setup'] = "[ Nastavení ]";
				$lang_string['btn_try_again'] = "[ Zkusit znovu ]";
				break;
			case 'setup':
				$lang_string['title'] = "Nastavení";
				$lang_string['instructions'] = "Ní¾e mù¾ete zmìnit název va¹ich stránek a osobní informace.";
				$lang_string['blog_title'] = "Název stránek:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "E-mail (více e-mailových adres by mìlo být oddìleno èárkami, nevyplnìním vypnete stránku Kontaktujte mne)"; // Updated 0.4.7
				$lang_string['blog_avatar'] = "URL avataru (ponechte nevyplnìné pro ¾ádný):"; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Zápatí:";
				$lang_string['blog_choose_language'] = "Volba jazyka:";
				$lang_string['blog_enable_comments'] = "Povolit komentáøe";
				$lang_string['blog_comments_popup'] = "Komentáøe otevírat ve vyskakovacím oknì";
				$lang_string['blog_enable_voting'] = "Povolit ètenáøùm hodnocení záznamù";
				$lang_string['blog_enable_cache'] = "Povolit ke¹ování záznamù (mù¾e zrychlit naèítání u nìkterých serverù)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Zobrazit kalendáø"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Zobrazit archivy"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Zobrazit èítaè pøístupù v postranním sloupci"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Poèet hodin do vynulování pøístupu (pro specifickou IP adresu):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Zobrazit pøihlá¹ení (jinak si nejdøíve vytvoøte zálo¾ku \"login.php\"...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Povolit textový název blokù (odznaète, pokud chcete pou¾ívat grafiku)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Povolit pevné odkazy na záznamy"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Povolit antispam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Zobrazit èítaè pøístupù v zápatí"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Grafický (musí být instalována GD knihovna) / textový antispam"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Zobrazit statistiku v menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Zobrazit seznam nejnovìj¹ích komentáøù"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Zobrazit seznam nejnovìj¹ích záznamù"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Posílat e-mailovou notifikaci komentáøù";
				$lang_string['blog_send_pings'] = "Posílat &quot;pingy&quot;";
				$lang_string['blog_ping_urls'] = "Vlo¾te kompletní URL (napø. http://rpc.weblogs.com/RPC2) slu¾by posílání &quot;pingù&quot;.<br />(Mù¾ete vlo¾it více adres, oddìlených èárkami)";
				$lang_string['blog_trackback_about'] = "Zpìtné sledování (trackbacks) zaji¹»uje notifikaci mezi weby. Web dostane informaci o tom, ¾e je na nìj odkazováno, pomocí odesílaných pingù. Tak lze zjistit, kdo je pøipojen na va¹e stránky.<br />
				   URI pingù mù¾ete vlo¾it manuálnì, nebo zkusit automatické rozpoznání.";
				$lang_string['blog_trackback_enabled'] = "Povolit zpìtné sledování odkazù a záznamù";
				$lang_string['blog_trackback_auto_discovery'] = "Povolit automatické rozpoznávání v záznamech, obsahujících URL adresy";
				$lang_string['blog_max_entries'] = "Nejvy¹¹í poèet zobrazených záznamù:";
				$lang_string['blog_comment_tags'] = "Tagy, povolené v komentáøích:";
				$lang_string['blog_gzip_about'] = "
					Poèínaje PHP 4.0.4 lze èíst a zapisovat soubory, komprimované metodou GZIP (.gz),	a u¹etøit tak diskový prostor. Také lze komprimovat stránky odesílané prohlí¾eèùm, podporujícím tuto kompresi, a tím u¹etøit objem pøenosu dat.<br />
					<br />
					Podpora knihovny Zlib v PHP není pøedem zapnuta. Pokud jsou volby neaktivní, va¹e instalace PHP neumo¾òuje GZIP kompresi.";
				$lang_string['blog_enable_gzip_txt'] = "Povolit kompresi GZIP pro databázové soubory";
				$lang_string['blog_enable_gzip_output'] = "Povolit kompresi GZIP pro HTTP výstup";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo¾eny. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				$lang_string['form_error'] = "Vyplòte pole s názvem a jménem autora.";
				$lang_string['label_entry_order'] = "Poøadí záznamù:";
				$lang_string['select_new_to_old'] = "Od nejnovìj¹ího";
				$lang_string['select_old_to_new'] = "Od nejstar¹ího";
				$lang_string['label_comment_order'] = "Poøadí komentáøù:";
				$lang_string['cal_sunday'] = "Nedìle";
				$lang_string['cal_monday'] = "Pondìlí";
				$lang_string['label_calendar_start'] = "První den v týdnu";
				$lang_string['title_sidebar'] = "Postranní sloupec"; // New in 0.4.7
				$lang_string['title_comments'] = "Komentáøe"; // New in 0.4.7
				$lang_string['title_trackback'] = "Zpìtná sledování"; // New in 0.4.7
				$lang_string['title_compression'] = "Komprese"; // New in 0.4.7
				$lang_string['title_entries'] = "Záznamy"; // New in 0.4.7
				$lang_string['title_general'] = "V¹eobecné"; // New in 0.4.7
				$lang_string['title_language'] = "Jazyk"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Kolik dní budou umo¾nìny komentáøe? (0 znamená neomezenì)"; // New in 0.4.8
				
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Zpìtná sledování (trackbacks)";
				$lang_string['header'] = "URL tohoto záznamu pro zpìtné sledování:";
				$lang_string['delete_btn'] = "vymazat";
				// Error Response
				$lang_string['error_add'] = "Chyba pøi ukládání sledování.";
				break;
			case 'options':
				$lang_string['title'] = "Volby";
				$lang_string['instructions'] = "Pou¾ijte formuláø ní¾e pro nastavení formátu data a èasu va¹ich záznamù. Mù¾ete zvolit 12 nebo 24 hodinový formát èasu a  krátký nebo dlouhý formát pro datum. <b>Náhled</b> bude upraven automaticky po ka¾dé zmìnì.";
				// Long Date
				$lang_string['ldate_title'] = "Dlouhý formát data:";
				$lang_string['weekday'] = "Den v týdnu";
				$lang_string['month'] = "Mìsíc";
				$lang_string['day'] = "Den";
				$lang_string['year'] = "Rok";
				$lang_string['none'] = "®ádný";
				// Short Date
				$lang_string['sdate_title'] = "Krátký formát data:";
				$lang_string['s_month'] = "Mìsíc";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Den";
				$lang_string['s_year'] = "Rok";
				$lang_string['zero_day'] = "Úvodní nula pro den";
				$lang_string['show_century'] = "Ukázat století";
				// Time
				$lang_string['time_title'] = "Formát èasu:";
				$lang_string['12hour'] = "12 hodinový";
				$lang_string['24hour'] = "24 hodinový";
				$lang_string['before_noon'] = "Dopoledne";
				$lang_string['after_noon'] = "Odpoledne";
				// Date
				$lang_string['date_title'] = "Zobrazení data:";
				$lang_string['long_date'] = "Dlouhé";
				$lang_string['short_date'] = "Krátké";
				$lang_string['time'] = "Èas";
				// Menu
				$lang_string['menu_title'] = "Zobrazení data v menu:";
				$lang_string['long_date'] = "Dlouhé";
				$lang_string['short_date'] = "Krátké";
				// Used in multiple places
				$lang_string['zero_day'] = "Úvodní nula pro den";
				$lang_string['zero_month'] = "Úvodní nula pro mìsíc";
				$lang_string['zero_hour'] = "Úvodní nula pro hodinu";
				$lang_string['separator'] = "Oddìlovaè:";
				$lang_string['preview'] = "Náhled:";
				$lang_string['server_offset'] = "Posun èasu na serveru:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo¾eny. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Vzhledy";
				$lang_string['instructions'] = "Pou¾ijte rozbalovací menu a vyberte vzhled.";
				// Themes
				$lang_string['choose_theme'] = "Vzhledy:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Informace nebyly ulo¾eny. Bìhem ukládání se objevil problém.<br /><br />Server ohlásil:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Nahrát obrázek";
				$lang_string['instructions'] = "Kliknìte na tlaèítko ní¾e a vyberte soubor k nahrání.";
				$lang_string['select_file'] = "Vybrat soubor:";
				$lang_string['upload_btn'] = "Nahrát";
				// Error Response
				$lang_string['error'] = "<h2>Ouha!</h2>Nelze nahrát obrázek. Zde jsou podrobnìj¹í informace:<br /><br />Server ohlásil:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Výsledky hledání";
				$lang_string['instructions'] = "Výsledky hledání pro <b>%string</b>:";
				$lang_string['not_found'] = "Nic nebylo nalezeno";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Antispam: Vlo¾te "; // 0.4.2
				$lang_string['title'] = "Kontaktujte mne";
				$lang_string['instructions'] = "Vyplòte formuláø:";
				$lang_string['form_error'] = "Vyplòte pole Vìc a Text zprávy.";
				$lang_string['name'] = "Jméno:";
				$lang_string['email'] = "E-mail:";				
				$lang_string['subject'] = "Vìc:";
				$lang_string['comment'] = "Text zprávy:";
				$lang_string['submit_btn'] = "&nbsp;Odeslat&nbsp;";
				$lang_string['success'] = "<h2>Úspìch!</h2>Va¹e zpráva byla odeslána.<p />";
				$lang_string['failure'] = "<h2>Chyba!</h2>Va¹e zpráva nebyla odeslána. Nejèastìj¹í dùvod je ¹patnì zadaný antispamový øetìzec.<p />";
				$lang_string['contactsent'] = "Kontakt odeslán ze stránek: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP adresa:";  // New for 0.4.6
				$lang_string['useragent'] = "Pou¾íváte:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>%s %s napsal:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Statistiky";
				$lang_string["general"] = "V¹eobecné";
				$lang_string["entry_info"] = "<b>%s</b> záznamù obsahuje <b>%s</b> slov, ulo¾ených v <b>%s</b> bajtech";
				$lang_string["comment_info"] = "<b>%s</b> komentáøù obsahuje <b>%s</b> slov ulo¾ených v <b>%s</b> bajtech";
				$lang_string["trackback_info"] = "<b>%s</b> zpìtných sledování ulo¾ených v <b>%s</b> bajtech";
				$lang_string["static_info"] = "<b>%s</b> statických stránek obsahuje <b>%s</b> slov ulo¾ených v <b>%s</b> bajtech";
				$lang_string["most_viewed_entries"] = "10 nejèastìji zobrazených záznamù";
				$lang_string["most_commented_entries"] = "10 nejèastìji komentovaných záznamù";
				$lang_string["most_trackbacked_entries"] = "10 nejvíce zpìtnì sledovaných záznamù";
				$lang_string['vote_info'] = "<b>%s</b> hodnocení ulo¾ených v <b>%s</b> bajtech"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 nejvíce hodnocených záznamù"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 nejlépe hodnocených záznamù"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP chyba 403.8 - Pøístup na stránku/funkci zakázán';
				$lang_string["errorline1"] = 'Stránka nebo funkce, kterou jste se pokusili vyvolat vy¾aduje pou¾ití cookies.';
				$lang_string["errorline2"] = 'Obnovte funkènost cookie ve va¹em prohlí¾eèi nebo ochranném software a zkuste vá¹ po¾adavek znovu.';
				$lang_string["clientid"] = 'ID klienta: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Chyba 403.8 - Pøístup na stránku/funkci zakázán';
				$lang_string["404"] = 'HTTP Chyba 404 - Stránka/funkce neexistuje';
				$lang_string["error_404"] = 'Stránka nebo funkce, kterou jste se pokusili vyvolat neexistuje.';
				$lang_string["error_javascript"] = 'Stránka nebo funkce, kterou jste se pokusili vyvolat vy¾aduje javascript.';
				$lang_string["error_emailnotsent"] = 'Zpráva, kterou jste se pokusili odeslat je vadná.';
				$lang_string["error_emailnotsentcapcha"] = 'Zpráva, kterou jste se pokusili odeslat, je vadná, proto¾e antispamový øetìzec byl vlo¾en nesprávnì nebo vùbec.';
				$lang_string["clientid"] = 'ID klienta: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administrace smajlíkù";
				$lang_string['instructions'] = "
					Vyberte smajlíky, které chcete pou¾ívat. Do políèek formuláøe zapi¹te øetìzce, které budou nahrazovány smajlíky. Mù¾ete pou¾ít nìkolik rùzných øetìzcù, oddìlených èárkami.<br /><br />
		
					Napøíklad:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(Doporuèujeme pou¾ívat del¹í ne¾ dvouznakové øetìzce, 
					aby nedocházelo k nepøedpokládaným náhradám v bì¾ném textu)</i>";
				$lang_string["upload_instructions"] = 'Nahrát nový smajlík:';
				$lang_string["upload_success"] = 'Úspìch! Obrázek byl úspì¹nì nahrán!';
				$lang_string["upload_error"] = 'Chyba! Obrázek nebyl nahrán.';
				$lang_string["upload_invalid"] = 'Chyba! Nesprávný soubor s obrázkem. Obrázek musí být png, jpg nebo gif.';
				$lang_string["save_success"] = 'Nastavení smajlíkù bylo úspì¹nì ulo¾eno!';
				$lang_string["save_error"] = 'Chyba! Nastavení smajlíkù nebylo ulo¾eno.';
				$lang_string["save_button"] = 'Ulo¾it smajlíky';
				break;
			default:
				break;
		}
	}
?>
