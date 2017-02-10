<?php

	// Slovenian Language File
	// (c) 2005 sverde1, sverde1 <at> email <dot> si
	//

	// Simple PHP Version: 0.4.6.2
	// Language Version:   0.1


	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;

		// Language: Slovenian
		$lang_string[ 'locale' ] = array('si_SI', 'si');
		$lang_string['language'] = 'slovenian';
		$lang_string['rss_locale'] = 'si_SI';

		// ISO Charset: ISO-8859-2
		$lang_string['html_charset'] = 'ISO-8859-2';
		$lang_string['php_charset'] = 'ISO-8859-2';

		setlocale( LC_TIME, $lang_string['locale'] );

		// Some Global Strings

		// Menu
		$lang_string['menu_links'] = "Povezave";
		$lang_string['menu_home'] = "Domov";
		$lang_string['menu_contact'] = "Kontakt";
		$lang_string['menu_stats'] = "Statistika";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string[ 'menu_viewarchives' ] = "View Archives"; // New in 0.4.7
		$lang_string['menu_archive'] = "Zgodovina";
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Dodaj vnos";
		$lang_string['menu_add_static'] = "Dodaj dodatno stran";
		$lang_string['menu_upload'] = "Uploadaj sliko";
		$lang_string['menu_setup'] = "Nastavitve";
		$lang_string['menu_categories'] = "Kategorije";
		$lang_string['menu_info'] = "Meta tagi";
		$lang_string['menu_options'] = "Datum in &#269;as";
		$lang_string['menu_themes'] = "Teme";
		$lang_string['menu_colors'] = "Barve";
		$lang_string['menu_change_login'] = "Spremeni geslo";
		$lang_string['menu_logout'] = "Odjavi se";
		$lang_string['menu_login'] = "Prijavi se";
		$lang_string['menu_most_recent'] = "Zadnji komentarji";
		$lang_string['menu_most_recent_entries'] = "Zadnji vnosi";
		$lang_string['menu_most_recent_trackback'] = "Zadnji trackbacki";
		$lang_string['menu_add_block'] = "Bloki";
		$lang_string['menu_emoticons'] = "Sme&#353;ki"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Today:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Yesterday:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Counter Totals"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Vrni se na prvo stran';
		$lang_string['nav_next'] = 'Naprej';
		$lang_string['nav_back'] = 'Nazaj';
		$lang_string['search_title'] = 'I&#353;&#269;i:';
		$lang_string['search_go'] = 'Pojdi';
		$lang_string['page_generated_in'] = 'Stran je bila ustvarjena v %s sekundah';
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'Januar', 'Februar', 'Marec', 'April', 'Maj', 'Junij', 'Julij', 'August', 'September', 'Oktober', 'November', 'December' );
		$lang_string['sb_default_title'] = 'Ni naslova';
		$lang_string['sb_default_author'] = 'Ni avtorja';
		$lang_string['sb_default_footer'] = 'Ni noge';

		$lang_string['sb_edit'] = 'uredi';
		$lang_string['sb_delete'] = 'bri&#353;i';
		$lang_string['sb_permalink'] = 'povezava';
		$lang_string['sb_trackback'] = 'trackback';
		$lang_string['sb_relatedlink'] = 'povezana povezava'; // <-- New in 0.4.6

		$lang_string['sb_add_comment_btn'] = 'dodaj komentar';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'komentar';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'komentarji';

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' pogled';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' pogledi';

		$lang_string['sb_add_link_btn'] = '+ povezava';
		$lang_string['sb_rate_entry_btn'] = 'Klikni za oceno vnosa';

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Naslov:";
			$lang_string['label_insert'] = "Urejanje besedila:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
			$lang_string['view_images'] = "Pogled uploadanih slik";
			$lang_string['label_entry'] = "Vsebina:";
			$lang_string['btn_preview'] = "&nbsp;Predoglej&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Objavi&nbsp;";
			$lang_string['file_name'] = "Ime datoteke strani: (brez presledkov in kon&#269;nic)";

			// Javascript Strings
			$lang_string['insert_styles'] = "Vnsei besedilo, ki ga &#382;eli&#353; oblikovati:";
			$lang_string['insert_image'] = "Vnesi povezavo do slike:";
			$lang_string['insert_url1'] = "Vnesi besedilo, ki bo prikazano kot spletna povezava (Ni obvezno):";
			$lang_string['insert_url2'] = "Vnesi naslov spletne povezave:";
			$lang_string['insert_url3'] = "Odpiranje povezave v novem oknu (Ni obvezno):";
			$lang_string['form_error'] = "Prosim vnesi Naslov in Vsebino.";

			// More Javascript Strings
			$lang_string['insert_image_optional'] = 'Ni obvezno:';
			$lang_string['insert_image_width'] = '&#138;irina (Ni obvezno):';
			$lang_string['insert_image_height'] = 'Vi&#353;ina (Ni obvezno):';
			$lang_string['insert_image_popup'] = 'Ob kliku prikaz v celotni velikosti in v pop-up oknu (Ni obvezno):';
			$lang_string['insert_image_float'] = 'Lebde&#269;e (Ni obvezno):';

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
				$lang_string['title'] = "Dodaj vnos";
				$lang_string['instructions'] = "Si pripravljen na <b>blogiranje</b>? Izpolni spodnji obrazec in klikni 'Predoglej' za ogled tvojega vnosa ali pa klikni 'Objavi' in tvoj vnos bo objavlen.";
				$lang_string['title_ad'] = "Potrdi pinge";
				$lang_string['instructions_ad'] = "To so Automatsko-odkriti naslovi, ki jih namerava&#353; pingati. &#268;e ne &#382;eli&#353; pingati dolo&#269;enega naslova, ga spodaj odkljukaj. Nato pritisni 'V redu' in izvr&#353;ilo se bo pinganje obkljukanih naslovov, &#269;e pa ne &#382;eli&#353; pingati nobenega naslova pa pritisni 'Prekli&#269;i'.";
				$lang_string['label_tb_ping'] = "Seznam trackback pinga(ov) za poslati (lo&#269;eni z vejico)";
				$lang_string['label_tb_autodiscovery'] = "avtomatsko odgrivaje";
				$lang_string['label_relatedlink'] = "Povezana povezava";
				$lang_string['label_categories'] = "Category List";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Predogled / Urejanje vnosa";
				$lang_string['instructions_preview'] = "Tako zgleda tvoj vnos, &#269;e uporablja&#353; oblikovanje teksta ali si vstavil kak&#353;no sliko ne pozabi <b>zapreti</b> vseh 'tagov'.";
				$lang_string['title_update'] = "Posodobi vnos";
				$lang_string['instructions_update'] = "Svoj vnos lahko spremeni&#353; z uporabo spodnega obrazca. Klikni 'Predoglej' ali 'Objavi' ko kon&#269;a&#353;.";
				$lang_string['ok_btn'] = "&nbsp;V redu&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Prekli&#269;i&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Vnos ni bil shranjen. Naletel sem na te&#382;ave med shranjevanjem tvojega vnosa.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Dodaj stran";
				$lang_string['instructions'] = "Izpolni spodnji obrazec za izdelavo 'dodatne' strani. Za razliko od vnosa v blog se dodate strani pojavijo kot povezava v desnim meniju. Dodatne strani so namenjene za informacije kot npr.: O meni, Kontakt, Urnik,... Klikni 'Predoglej' za predogled svojega vnosa ali pa klikni 'Objavi' in tvoj vnos bo objavljen.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Predogled / Urejanje dodatne strani";
				$lang_string['instructions_preview'] = "Tako zgleda tvoja dodatna stran, &#269;e uporablja&#353; oblikovanje teksta ali si vstavil kak&#353;no sliko ne pozabi <b>zapreti</b> vseh 'tagov'.";
				$lang_string['title_update'] = "Posodobi dodatno stran";
				$lang_string['instructions_update'] = "Svoj vnos lahko spremeni&#353; z uporabo spodnega obrazca. Klikni 'Predoglej' ali 'Objavi' ko kon&#269;a&#353;.";
				$lang_string['form_error'] = "Prosim izpolni vsa vnosna polja!";

				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Vnos ni bil shranjen. Naletel sem na te&#382;ave med shranjevanjem tvojega vnosa.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Dodajanje / Urejaje blokov";
				$lang_string['instructions'] = "Dodaj poljubne bloke";
				$lang_string['up'] = "gor";
				$lang_string['down'] = "dol";
				$lang_string['edit'] = "uredi";
				$lang_string['delete'] = "bri&#353;i";
				$lang_string['block_name'] = "Ime bloka:";
				$lang_string['block_content'] = "Vsebina bloka:";
				$lang_string['instructions_edit'] = "Trenutno ureja&#353; blok:";
				$lang_string['instructions_modify'] = "Klikni spodaj za urejanje bloka:";
				$lang_string['submit_btn_edit'] = "Uredi blok";
				$lang_string['submit_btn_add'] = "Dodaj blok";
				$lang_string['form_error'] = "Prosim napi&#353;i ime bloka.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Dodatne strani:";

				// Add / Manage Links
				$lang_string['title'] = "Dodajanje / Urejajanje povezav";
				$lang_string['instructions'] = "Tukaj lahko dodaja&#353; svoje povezave na druge strani. Izpolni spodnji obrazec in klikni 'Dodaj povezavo'. Klikni gumba <b>gor</b> ali <b>dol</b> za spremembo vrstnega reda povezav. Klikni gumb uredi za urejanje povezave. Klikni gumb izbri&#353;i za izbris povezave.";
				$lang_string['up'] = "gor";
				$lang_string['down'] = "dol";
				$lang_string['edit'] = "uredi";
				$lang_string['delete'] = "izbri&#353;i";
				$lang_string['link_name'] = "Ime povezave:";
				$lang_string['link_url'] = "URL povezave: (Ni obvezno. Pusti prazno, da ustvari&#353; pre&#269;no &#269;rto).";
				$lang_string['instructions_edit'] = "Trenutno ureja&#353; povezavo:";
				$lang_string['instructions_modify'] = "Klikni spodaj za urejanje povezave:";
				$lang_string['submit_btn_edit'] = "Uredi povezavo";
				$lang_string['submit_btn_add'] = "Dodaj povezavo";
				$lang_string['form_error'] = "Prosim napi&#353;e Ime povezave.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Dodajanje / Urejajanje kategorij";
				$lang_string['instructions'] = "Tukaj lahko dodaja&#353; in ureja&#353; svoje kategorije. Vsaka kategorija mora biti napisana kot 'ime kategorije (zap. &#353;t.)'. Za ustvarjanje podkategorij uporabi presledke.<br /><br /><b>Primer:</b><br />Splo&#353;no (1)<br />Novice (3)<br />&nbsp;&nbsp;Obvestila (6)<br />&nbsp;&nbsp;Dogodki (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Razno (7)<br />Tehnologija (2)<br />";
				$lang_string['error'] = "Napaka";
				$lang_string['current_categories'] = "Trenutne kategorije";
				$lang_string['no_categories_found'] = "Ni kategorij";
				$lang_string['category_list'] = "Seznam kategorij:";
				$lang_string['validate'] = "Validiraj";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Spremeni barve";
				$lang_string['instructions'] = "Tukaj lahko spreminja&#353; barve, ki so uporabljene v tvojem blogu (ozadje, besedilo,...). Najprej izberi spodnje polje, nato uporabi barvno paleto in izberi poljubno barvo. Vrednost se spreminja avtomatsko.";
				$lang_string['bg_color'] = "Ozadje strani";
				$lang_string['main_bg_color'] = "Ozadje vsebinskega dela";
				$lang_string['border_color'] = "Rob strani";
				$lang_string['inner_border_color'] = "Notranji rob";
				$lang_string['header_bg_color'] = "Ozadje glave";
				$lang_string['header_txt_color'] = "Besedilo glave";
				$lang_string['menu_bg_color'] = "Ozadje menuja";
				$lang_string['footer_bg_color'] = "Ozadje noge";
				$lang_string['txt_color'] = "Vsebinsko besedilo";
				$lang_string['headline_txt_color'] = "Besedilo naslova";
				$lang_string['date_txt_color'] = "Besedilo datuma";
				$lang_string['footer_txt_color'] = "Besedilo noge";
				$lang_string['link_reg_color'] = "Povezava";
				$lang_string['link_hi_color'] = "Povezava - lebde&#269;e";
				$lang_string['link_down_color'] = "Povezava - aktivno";

				// More Colors
				$lang_string['entry_bg'] = "Ozadje vnosa";
				$lang_string['entry_title_bg'] = "Ozadje naslova vnosa";
				$lang_string['entry_border'] = "Rob vnosa";
				$lang_string['entry_title_text'] = "Besedilo naslova vnosa";
				$lang_string['entry_text'] = "Besedilo vnosa";
				$lang_string['menu_bg'] = "Ozadje menuja";
				$lang_string['menu_title_bg'] = "Ozadje menijskega naslova";
				$lang_string['menu_border'] = "Rob menuja";
				$lang_string['menu_title_text'] = "Besedilo menijskega naslova";
				$lang_string['menu_text'] = "Besedilo menuja";
				$lang_string['menu_link_reg_color'] = "Menijska povezava";
				$lang_string['menu_link_hi_color'] = "Menijska povezava - lebde&#269;e";
				$lang_string['menu_link_down_color'] = "Menijska povezava - aktivno";

				// Submit
				$lang_string['color_preset'] = "Barvne sheme:";
				$lang_string['scheme_name'] = "Vnesi ime svoje barvne sheme:";
				$lang_string['scheme_file'] = "Ime datoteke barvne sheme: (brez presledkov in kon&#269;nic)";
				$lang_string['save_btn'] = "&nbsp;Shrani&nbsp;";
				$lang_string['form_error'] = "Prosim vnesi ime svoje barvne sheme.";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Trenutno izbrana tema ne dopu&#353;&#269;a nastavljanja barv.';

				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Vnos ni bil shranjen. Naletel sem na te&#382;ave med shranjevanjem tvojega vnosa.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Ime:"; //New in 0.4.6.2
				$lang_string['email'] = "E-mail:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Doma&#269;a stran:"; //New in 0.4.6.2
				$lang_string['comment'] = "Komentar:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP Naslov:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Uporabnikov brskalnik:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>%s, je %s napisal:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				$lang_string['comment_capcha'] = "Anti-Spam: Vnesi <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Komentarji";
				$lang_string['header'] = "Dodaj komentar";
				$lang_string['instructions'] = "Izpolni spodnji obrazec in dodaj svoj komentar.";
				$lang_string['comment_name'] = "Tvoje ime:";
				$lang_string['comment_email'] = "E-mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Nov komentar objavljen: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Zapomni si me:";
				$lang_string['comment_text'] = "Komentar:";
				$lang_string['post_btn'] = "&nbsp;Objavi komentar&nbsp;";
				$lang_string['delete_btn'] = "izbri&#353;i";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8

				// Error Response
				$lang_string['error_add'] = "<h2>Opsss!</h2>Komentar ni bil shranjen. Naletel sem na te&#382;ave med shranjevanjem tvojega komentarja.<br /><br />Stre&#382;nik je javil:<br />";
				$lang_string['error_delete'] = "<h2>Opsss!</h2>Komentar ni bil izbrisan. Naletel sem na te&#382;ave med brisanjem tvojega komentarja.<br /><br />Stre&#382;nik je javil:<br />";
				$lang_string['form_error'] = "Prosim izpolni polja: Tvoje ime, Komentar in Anti-Spam.";
				break;

			case 'delete':
				$lang_string['title'] = "Izbris vnosa";
				$lang_string['instructions'] = "To je vnos, ki ga &#382;eli&#353; izbrisati. Si res prepri&#269;an, da se ga &#382;eli&#353; trajno izbrisati?";
				$lang_string['ok_btn'] = "&nbsp;Da&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Ne&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral izbrisati vnosa.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Izbris dodatne strani";
				$lang_string['instructions'] = "To je dodatna stran, ki jo &#382;eli&#353; izbrisati. Si res prepri&#269;an, da jo &#382;eli&#353; trajno izbrisati?";
				$lang_string['ok_btn'] = "&nbsp;Da&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Ne&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral izbrisati vnosa.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Seznam slik";
				$lang_string['instructions'] = "Klikni na spodnje povezave za ogled slik.<br /><br />Za dodajanje slike:To add an image to your entry:<br />1) Pritisni tipko Ctrl + klikni in izberi 'Kopiraj povezavo v odlo&#382;i&#353;&#269;e'.<br />2) Vrni se na Dodajanje oz. Urejanje vnosa.<br />3) Klikni gumb 'img' in prekopiraj povezavo v okence.";
				break;
			case 'info':
				$lang_string['title'] = "Informacije Meta tagov";
				$lang_string['instructions'] = "Spodnji podatki so uporabljeni za informacije v &quot;meta tagih&quot;, kar pomaga iskalnikom, da pravilno najdejo in indenficirajo tvojo stran. Te informacije uporablajo tudi RSS feedi.";
				$lang_string['info_keywords'] = "Klju&#269;ne besede: (Seznam klju&#269;nih besed lo&#269;enih z vejico).";
				$lang_string['info_description'] = "Opis: (Prosti opis tvoje strani.)";
				$lang_string['info_copyright'] = "Pravice: (Izjava o avtorskih pravicah, glede te strani).";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral shraniti informacij. Naletel sem na te&#382;ave med shranjevanjem tvojih informacij.<br /><br />Stre&#382;nik je javil:<br />";
				$lang_string['form_error'] = "Prosim izpolni polja: Naslov in Avtor.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral shraniti informacij. Naletel sem na te&#382;ave med shranjevanjem tvojih informacij.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Nadgradnja</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n komentarjev mora biti nadgrajenih:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Nadgradi komentarje"; // New 0.3.8
				$lang_string['title'] = "Prijava";
				$lang_string['instructions'] = "Prosim vnesi svoje Uporabi&#353;ko ime in Geslo";
				$lang_string['username'] = "Uporabni&#353;ko ime:";
				$lang_string['password'] = "Geslo";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Uspeh!</h2>Sedaj si prijavljen. Veselo blogiranje!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Opsss!</h2>Nisi bil prijavljen, prosim preveri, &#269;e si pravilno vpisal svoje Uporabni&#353;ko ime in Geslo in poskusi znova.<p />";
				$lang_string['form_error'] = "Prosim izpolni polja: Uporabni&#353;ko ime in Geslo.";
				break;
			case 'logout':
				$lang_string['title'] = "Odjava";
				$lang_string['instructions'] = "<h2>Opsss!</h2>Odjava je spodletela. Nisem moral izbrisati pi&#353;kotka. Zakaj si &#353;e prijavljen?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral shraniti informacij. Naletel sem na te&#382;ave med shranjevanjem tvojega vnosa.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Spremeni Uporabni&#353;ko ime in Geslo";
				$lang_string['instructions'] = "Uporabi spodnji obrazec za sprembo svojega Uporabni&#353;kega imena in/ali Gesla. Vnesi Uporabni&#353;ko ime in geslo, ki ga &#382;eli&#353; uporablati.";
				$lang_string['username'] = "Uporabni&#353;ko ime:";
				$lang_string['password'] = "Geslo:";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Uspeh!</h2>Tvoje Uporabni&#353;ko ime in/ali Geslo je aktivno. Veselo blogiranje!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Opsss!</h2>Nisem moral shraniti informacij. Naletel sem na te&#382;ave med shranjevanjem tvojega Uporabni&#353;kega imena in/ali Gesla.<br /><br />Stre&#382;nik je javil:<br />";
				$lang_string['form_error'] = "Prosim izpolni polja: Uporabni&#353;ko ime in Geslo.";
				$lang_string['explanation'] = "V zadnjih verzjah se je struktura gesla spremenila. Sedaj ne mora&#353; ve&#269; spreminjati gesel in/ali
					uporabni&#353;kih imen znotraj bloga. &#268;e &#382;eli&#353; spremeniti svoje geslo izbri&#353;i datoteko /config/password.php in se prepri&#269;aj da
					datoteka install*.php obstaja na stre&#382;niku. Ko to opravi&#353;, refreshaj (F5) to stran (ali se odjavi). Pri&#269;akoval te bo enak
					obrazec, za generiranje tvojega gesla, kot na za&#269;etku, ko si name&#353;&#269;al ta blog.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Dobrodo&#353;el";
				$lang_string['instructions'] = "Hvala ker si izbral Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Izberi jezik:";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "
				Hvala ker si izbral Simple PHP Blog!<br /><br />Simple PHP Blog je preprost blog. Zahteva PHP 4.1 ali novej&#353;i in pravice za pisanje na stre&#382;niku. Vse informacije so shranjene v (besedilnih) datotekah, zato ne rabi&#353; podatkovne baze.<br /><br />
				Za za&#269;etek mora Simple PHP Blog ustvariti 3 mape (<b>config</b>, <b>content</b>, and <b>images</b>) v katere bo shranjeval tvoje informacije. Potem bo&#353; ustvaril svoje geslo in potem lahko za&#269;ne&#353; z blogiranjem.<br /><br />
				<b>Klikni spodaj za za&#269;etek namestitve:</b>";
				$lang_string['begin'] = "[ Za&#269;ni namestitev ]";
				break;
			case 'install02':
				$lang_string['title'] = "Namestitev";
				$lang_string['instructions'] = "Posku&#353;am ustvariti mape <b>config</b>, <b>content</b>, and <b>images</b>:";
				$lang_string['folder_exists'] = "V redu! Mapa &#382;e obstajaja. Ni&#269; nisem spreminjal...";
				$lang_string['folder_failed'] = "Opsss! Nisem moral ustvariti map...";
				$lang_string['folder_success'] = "Uspeh! Mapa je bila uspe&#353;no ustvarjena...";
				// Help
				$lang_string['help'] = "
				<h2>Opsss!</h2>
				Nisem moral ustvariti ene ali ve&#269; map!<br /><br />To je najverjetneje zaradi:<br />
				<ol>
				<li><b>Pravice pisanja</b> niso nastavljene na <b>Read/Write</b> dostop.</li>
				<li><b>UID-i</b> (uporabnikovi ID-i) vseh datotek in map se morajo ujemati.</li>
				</ol>
				Za odpravljanje te&#382;av sledi spodnjim navodilom in klikni <b>Poskusi znova</b>:<br />
				<ol>
				<li>Ro&#269;no ustvari mape: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
				<li>Omogo&#269;i <b>pravice pisanja</b> za te mape: V tvojem FTP programu morajo Owner, User in Others imeti <b>Read</b> in <b>Write</b> pravice. <i>(Mogo&#269;e bo&#353; moral kontaktirati ponudnika dostopa, da spremeni le te...)</i></li>
				<li>Prepri&#269;aj se da so UID-i vseh datotek in map enaki. <i>(Mogo&#269;e bo&#353; moral kontaktirati ponudnika dostopa, da spremeni le te...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Poskusi znova ]";
				// Success
				$lang_string['success'] = "<h2>Uspeh!</h2>Mape so bile uspe&#353;no ustvarjene!<p /><b>Klikni spodaj za nadaljevanje:</b>";
				$lang_string['continue'] = "[ Nadaljuj ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Tvoj stre&#382;nik podpira naslednje na&#269;ie kodiranja:</b>";
				$lang_string['standard'] = "Standardno DES kodiranje: ";
				$lang_string['extended'] = "Raz&#353;irjeno DES kodiranje: ";
				$lang_string['MD5'] = "MD5 kodiranje: ";
				$lang_string['blowfish'] = "Blowfish kodiranje: ";
				$lang_string['enabled'] = "omogo&#269;eno";
				$lang_string['disabled'] = "onemogo&#269;eno";
				$lang_string['using_standard'] = "<b>Uporabljam standardno DES kodiranje...</b>";
				$lang_string['using_extended'] = "<b>Uporabljam raz&#353;irjeno DES kodiranje...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Uporabljam MD5 kodiranje...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Uporabljam Blowfish kodiranje...</b>";
				$lang_string['using_unknown'] = "<b>Uporabljam neznano kodiranje...</b>";
				$lang_string['salt_length'] = " <i>(Dol&#382;ina <b>salt</b>-a = %string)</i><br />";
				$lang_string['title'] = "Ustvari Uporabni&#353;ko ime in Geslo";
				$lang_string['instructions'] = "Uporabi spodnji obrazec, da ustvari&#353; Uporabni&#353;ko ime in Geslo.";
				$lang_string['username'] = "Uporabni&#353;ko ime:";
				$lang_string['password'] = "Geslo:";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				// Success
				$lang_string['success'] = "<h2>&#268;estitam!</h2>Sedaj si prijavljen. Klikni spodaj da nadaljuje&#353; na stran z nastavitvami, kjer bo&#353; lahko poimenoval svoj blog. Veselo blogiranje!<p />";
				$lang_string['btn_setup'] = "[ Nastavitve ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Opsss!</h2>Nisem moral shraniti informacij. Naletel sem na te&#382;ave med shranjevanjem tvojega Uporabni&#353;kega imena in/ali Gesla.<br /><br />Stre&#382;nik je javil:<br />";
				$lang_string['form_error'] = "Prosim izpolni polja: Uporabni&#353;ko ime in Geslo.";
				break;
			case 'install04':
				$lang_string['title'] = "Ustvarjanje datoteke z geslom";
				$lang_string['instructions'] = "Pozorno sledi navodilom:<br />
				<ol>
				<li>Odpri program za urejanje besedila. <i>(Note Pad, Notepad++, Word Pad, Word, ipd...)</i></li>
				<li>Ustvari nov dokument.</li>
				<li>Kopiraj in prilepi kodo iz spodnjega okvir&#269;ka v tvoj dokument.</li>
				<li>Shrani ta dokument in ga poimenuj <b>password.php</b> <i>(besedilo mora biti obvezno <b>&#269;isti tekst</b>.)</i></li>
				<li>Odpri svoj FTP program.</li>
				<li>Uploadaj datoteko <b>password.php</b> v mapo <b>config</b> na tvojem stre&#382;niku.</li>
				<li>Izbri&#353;i datoteko <b>password.php</b> iz svojega diska.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Opozorilo: &#268;e &#382;eli&#353; ponastaviti svoje uporabni&#353;ko ime in geslo (verjetno ker si ga pozabil), izbri&#353;i datoteko <b>password.php</b> v mapi <b>config</b> na tvojem stre&#382;niku. Naslednji&#269;, ko bo&#353; obiskal svojo stran, te bo vodilo &#269;ez namestitveni postopek &#353;e enkrat...</i>";
				$lang_string['code'] = "Koda za <b>password.php</b> file:";
				$lang_string['continue'] = "[ Nadaljuj ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Prijava";
				$lang_string['instructions'] = "Prosim vnesi svoje Uporabni&#353;ko ime in Geslo";
				$lang_string['username'] = "Uporabni&#353;ko ime:";
				$lang_string['password'] = "Geslo";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				// Success
				$lang_string['success'] = "<h2>&#268;estitam!</h2>Sedaj si prijavljen.<p />
				Klikni spodaj da nadaljuje&#353; na stran z <b>nastavitvami</b>, kjer si bo&#353; lahko prilagodil svoj blog.<p />
				<i>Opozorilo: Sedaj ko si kon&#269;al postopek namestitve priporo&#269;am, da izbri&#353;e&#353; datoteke <b>installXX.php</b> iz tvojega stre&#382;nika. (od install00.php do install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Opsss!</h2>Nisi bil prijavljen, prosim preveri, &#269;e si pravilno vpisal svoje Uporabni&#353;ko ime in Geslo in poskusi znova.<p />";
				$lang_string['form_error'] = "Prosim izpolni polja: Uporabni&#353;ko ime in Geslo.";
				// Success
				$lang_string['btn_setup'] = "[ Nastavitve ]";
				$lang_string['btn_try_again'] = "[ Poskusi znova ]";
				break;
			case 'setup':
				$lang_string['title'] = "Nastavitve";
				$lang_string['instructions'] = "Tukaj lahko spreminja&#353; ime svojega bloga in svoje osebne informacije.";
				$lang_string['blog_title'] = "Ime bloga:";
				$lang_string['blog_author'] = "Avtor:";
				$lang_string['blog_email'] = "E-mail:";
				$lang_string['blog_avatar'] = "Povezava do avatarja: (Pusti prazno, &#269;e ga no&#269;e&#353;)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Noga:";
				$lang_string['blog_choose_language'] = "Izberi jezik:";
				$lang_string['blog_enable_comments'] = "Omogo&#269;i komentarje";
				$lang_string['blog_comments_popup'] = "Odpri komentarje v pop-up oknu";
				$lang_string['blog_enable_voting'] = "Omogo&#269;i ocenjevanje vnosov";
				$lang_string['blog_enable_cache'] = "Omogo&#269;i predpomnenje vnosov v blog (na nekaterih stre&#382;nikih se lahko hitrost pove&#269;a)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Omogo&#269;i kolendar / Blok - zgodovina"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Enable Archives Block"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Enable Counter in Sidebar"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Number of hours to delay before hits are counted again (based on specific ip address):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Enable Login Link (Please bookmark \"login.php\" first...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Omogo&#269;i besedilni naslovni blok (Odklukaj, &#269;e je v glavi slika)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Omogo&#269;i stalne povezave pri vnosih"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Enable Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Enable Counter in Footer"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam Images (GD library only) / Anti-Spam Text Field"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Enable Stats Option in Menu"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Omogo&#269;i seznam zadnjih komentarjev"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Omogo&#269;i seznam zadnjih vnosov"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Po&#353;lji obvestilo po E-mailu, ob novih komentarjih";
				$lang_string['blog_send_pings'] = "Po&#353;lji &quot;pinge&quot;";
				$lang_string['blog_ping_urls'] = "Vnesi polni naslov (npr. http://rpc.weblogs.com/RPC2) servisa za &quot;pinganje&quot;.<br />(Lahko vnese&#353; ve&#269; naslovov, ki morajo biti lo&#269;eni z vejico).";
				$lang_string['blog_trackback_about'] = "Trackback je metoda obve&#353;&#269;anja med blogi. naj drugi blogi vedo
					da ima&#353; povezavo na njih z po&#353;iljanjem trackback pinga. Z sprejemanjem trackback pingov lahko vidi&#353;
					kdo ima na svojem blogu povezavo do tvojega.<br />
				   Lahko vnese&#353; naslove za avtomatsko pinganje, ali pa poskusi&#353; avtomatsko preko Avtodetekcije.";
				$lang_string['blog_trackback_enabled'] = "Omogo&#269;i trackback v mojem blogu";
				$lang_string['blog_trackback_auto_discovery'] = "Omogo&#269;i Avtodetekcijo ob objavi ki vsebuje povezave";
				$lang_string['blog_max_entries'] = "Najve&#269;je &#353;tevilo vnosov za prikaz:";
				$lang_string['blog_comment_tags'] = "Tagi, ki so dovoljeni v komentarjih:";
				$lang_string['blog_gzip_about'] = "
					Od PHP 4.0.4, PHP ima zmo&#382;nost da bere in pi&#353;e gzip (.gz) stisnjene datoteke, kar prihrani
					nekaj prostora na disku. Lahko tudi transparentno stisne strani, ki so poslane brskalniku,
					ki podpira gzip kompresijo, kar pripomore k hitrej&#353;em nalaganju strani.<br />
					<br />
					Zlib podpora ni privzeto omogo&#269;ena v PHP-ju. &#268;e so polja za obkljukati onemogo&#269;ena, potem tvoja
					namestitev PHP ja ne omogo&#269;a Zlib dodatka.";
				$lang_string['blog_enable_gzip_txt'] = "Omogo&#269;i GZIP kompresijo za datoteke na stre&#382;niku";
				$lang_string['blog_enable_gzip_output'] = "Omogo&#269;i GZIP kompresijo za HTML izhod";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral shraniti informacij. Naletel sem na te&#382;ave med shranjevanjem tvojih informacij.<br /><br />Stre&#382;nik je javil:<br />";
				$lang_string['form_error'] = "Prosim izpolni polja: Naslov in Avtor.";
				$lang_string['label_entry_order'] = "Zaporedje vnosov:";
				$lang_string['select_new_to_old'] = "Najprej novej&#353;i";
				$lang_string['select_old_to_new'] = "Najprej starej&#353;i";
				$lang_string['label_comment_order'] = "Zaporedje komentarjev:";
				$lang_string['cal_sunday'] = "Nedelja";
				$lang_string['cal_monday'] = "Ponedeljek";
				$lang_string['label_calendar_start'] = "Prvi dan v tednu";
				$lang_string['title_sidebar'] = "Menijska vrstica"; // New in 0.4.7
				$lang_string['title_comments'] = "Komentarji"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacki"; // New in 0.4.7
				$lang_string['title_compression'] = "Kompresija"; // New in 0.4.7
				$lang_string['title_entries'] = "Vnosi"; // New in 0.4.7
				$lang_string['title_general'] = "Splo&#353;no"; // New in 0.4.7
				$lang_string['title_language'] = "Jezik"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback povezava za ta vnos:";
				$lang_string['delete_btn'] = "izbri&#353;i";
				// Error Response
				$lang_string['error_add'] = "Napaka pri shranjevanju trackback podatkov.";
				break;
			case 'options':
				$lang_string['title'] = "Mo&#382;nosti";
				$lang_string['instructions'] = "Uporabi spodnji obrazec za nastavitev prikaza datuma in ure v komentarjih. Lahko izbere&#353; 12 ali 24 urni format. Kratki ali dolgi format datuma. Polje <b>Predogled</b> se avtomatsko osve&#382;i, tako takoj vidi&#353; kako bo zgledal datum in &#269;as.";
				// Long Date
				$lang_string['ldate_title'] = "Dolgi format datuma:";
				$lang_string['weekday'] = "Ime dneva";
				$lang_string['month'] = "Mesec";
				$lang_string['day'] = "Dan";
				$lang_string['year'] = "Leto";
				$lang_string['none'] = "Ni&#269;";
				// Short Date
				$lang_string['sdate_title'] = "Kratki format datuma:";
				$lang_string['s_month'] = "Mesec";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Dan";
				$lang_string['s_year'] = "Leto";
				$lang_string['zero_day'] = "Vodilna ni&#269;la pred dnevom";
				$lang_string['show_century'] = "Poka&#382;i stoletje";
				// Time
				$lang_string['time_title'] = "Format &#269;asa:";
				$lang_string['12hour'] = "12-urni format";
				$lang_string['24hour'] = "24-urni format";
				$lang_string['before_noon'] = "Pred popoldnevom";
				$lang_string['after_noon'] = "Po popoldnevu";
				// Date
				$lang_string['date_title'] = "Format datuma:";
				$lang_string['long_date'] = "Dolgi datum";
				$lang_string['short_date'] = "Kratek datum";
				$lang_string['time'] = "&#268;as";
				// Menu
				$lang_string['menu_title'] = "Format datuma v menuju:";
				$lang_string['long_date'] = "Dolgi datum";
				$lang_string['short_date'] = "Kratek datum";
				// Used in multiple places
				$lang_string['zero_day'] = "Vodilna ni&#269;la pred dnevom";
				$lang_string['zero_month'] = "Vodilna ni&#269;la pred mescem";
				$lang_string['zero_hour'] = "Vodilna ni&#269;la pred uro";
				$lang_string['separator'] = "Lo&#269;ilnik:";
				$lang_string['preview'] = "Predogled:";
				$lang_string['server_offset'] = "&#268;asovni zamik stre&#382;nika:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral shraniti informacij. Naletel sem na te&#382;ave med shranjevanjem tvojih informacij.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Teme";
				$lang_string['instructions'] = "Uporabi spustni meni za izbiro druga&#269;ne teme.";
				// Themes
				$lang_string['choose_theme'] = "Teme:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral shraniti informacij. Naletel sem na te&#382;ave med shranjevanjem tvojih informacij.<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Uploadaj sliko";
				$lang_string['instructions'] = "Klikni na spodnji gumb in izberi datoteko, ki jo &#382;eli&#353; uploadati.";
				$lang_string['select_file'] = "Izberi datoteko:";
				$lang_string['upload_btn'] = "Uploadaj";
				// Error Response
				$lang_string['error'] = "<h2>Opsss!</h2>Nisem moral uploadati sliko. Tukaj je nekaj dodatnih informacij:<br /><br />Stre&#382;nik je javil:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Zadetki iskanja";
				$lang_string['instructions'] = "Zadetki iskanja za <b>%string</b>:";
				$lang_string['not_found'] = "Ni zadetkov";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: Vnesi "; // 0.4.2
				$lang_string['title'] = "Kontakt";
				$lang_string['instructions'] = "Izpolni obrazec:";
				$lang_string['form_error'] = "Prosim izpolni polja: Zadeva in Komentar.";
				$lang_string['name'] = "Ime:";
				$lang_string['email'] = "E-mail:";
				$lang_string['subject'] = "Zadeva:";
				$lang_string['comment'] = "Komentar:";
				$lang_string['submit_btn'] = "&nbsp;Potrdi&nbsp;";
				$lang_string['success'] = "<h2>Uspeh!</h2>Tvoje sporo&#269;ilo je bilo poslano.<p />";
				$lang_string['failure'] = "<h2>Napaka!</h2>Tvoje sporo&#269;ilo ni bilo poslano. Najveretneje nisi izpolnil pravilno polja Anti-Spam.<p />";
				$lang_string['contactsent'] = "Kontakt poslan preko: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Naslov:";  // New for 0.4.6
				$lang_string['useragent'] = "Uporabnikov brskalnik:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>%s, je %s napisal:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Statistika";
				$lang_string["general"] = "Splo&#353;no";
				$lang_string["entry_info"] = "<b>%s</b> vnosov z uporabo <b>%s</b> besed shranjenih v <b>%s</b> bajtih";
				$lang_string["comment_info"] = "<b>%s</b> komentarjev z uporabo <b>%s</b> besed shranjenih v <b>%s</b> bajtih";
				$lang_string["trackback_info"] = "<b>%s</b> trackbackov shranjenih v <b>%s</b> bajtih";
				$lang_string["static_info"] = "<b>%s</b> dodatnih strani z uporabo <b>%s</b> besed shranjenih v <b>%s</b> bajtih";
				$lang_string["most_viewed_entries"] = "10 Najve&#269;krat ogledanih vnosov";
				$lang_string["most_commented_entries"] = "10 Najbolj komentiranih vnosov";
				$lang_string["most_trackbacked_entries"] = "10 Najve&#269;krat trackbackanih vnosov";
				$lang_string['vote_info'] = "<b>%s</b> glasov shranjenih v <b>%s</b> bajtih"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 Najve&#269;krat glasovanih vnosov"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 Vnosov z najvi&#353;jo oceno"; // 0.4.1
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
				$lang_string['title'] = "Sme&#353;ki";
				$lang_string['instructions'] = "
					Obkljukaj sma&#353;ke, ki jih &#382;eli&#353; uporabiti. V polja napi&#353;i tage za sme&#353;ke,
					ki bodo nato zamenjane z sliko sme&#353;ka. Uporabi&#353; lahko ve&#269; tagov, lo&#269;enih s presledkom.
					<br /><br />

					Primer:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />

					<i>(Priporo&#269;eno je, da uporabi&#353; tage dalj&#353;e od dveh znakov, saj se lahko druga&#269;e zgodi da,
					napi&#353;e&#353; kak&#353;en tag v besedilu...)</i>";
				$lang_string["upload_instructions"] = 'Uploadaj novega sme&#353;ka:';
				$lang_string["upload_success"] = 'Uspeh! Sme&#353;ek je bil uspe&#353;no uploadan!';
				$lang_string["upload_error"] = 'Napaka! Sme&#353;ek ni bil uploadan!';
				$lang_string["upload_invalid"] = 'Napaka! Napaèen format datoteke. Sme&#353;ek mora biti v formatu png, jpg, ali gif.';
				$lang_string["save_success"] = 'Nastavitve sme&#353;kov so bile uspe&#353;no shranjene!';
				$lang_string["save_error"] = 'Napaka! Nastavitve sme&#353;kov niso shranjene.';
				$lang_string["save_button"] = 'Shrani sme&#353;ke';
				break;
			default:
				break;
		}
	}
?>
