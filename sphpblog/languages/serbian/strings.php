<?php

	// Serbian Language File
	// (c) 2006. Milan Milanovic, milan <at> milanovic <dot> org
	//

	// Simple PHP Version: 0.4.1
	// Language Version:   0.4.1.0

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;

		// Language: Serbian latin
		$lang_string['language'] = 'serbian';

		$lang_string['locale'] = array('sr', 'srp'); 'SRP';
		$lang_string['rss_locale'] = 'sr'; // New 0.4.8

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'UTF-8';
		$lang_string['php_charset'] = 'UTF-8';

		setlocale( LC_TIME, $lang_string['locale'] );

		// Some Global Strings

		// Menu
		$lang_string['menu_links'] = "Linkovi";
		$lang_string['menu_home'] = "Glavna";
		$lang_string['menu_contact'] = "Kontakt";
		$lang_string['menu_stats'] = "Statistike";
		$lang_string['menu_calendar'] = "Kalendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Arhiva";
		$lang_string['menu_viewarchives'] = "Pogledaj arhive";
		$lang_string['menu_menu'] = "Meni";
		$lang_string['menu_add'] = "Dodaj unos";
		$lang_string['menu_add_static'] = "Dodaj staticku stranicu";
		$lang_string['menu_upload'] = "Prenesi sliku";
		$lang_string['menu_setup'] = "Podesavanja";
		$lang_string['menu_categories'] = "Kategorije";
		$lang_string['menu_info'] = "Meta Tagovi";
		$lang_string['menu_options'] = "Datum &amp; Vreme";
		$lang_string['menu_themes'] = "Teme";
		$lang_string['menu_colors'] = "Boje";
		$lang_string['menu_change_login'] = "Promeni prijavu";
		$lang_string['menu_logout'] = "Odjava";
		$lang_string['menu_login'] = "Prijava";
		$lang_string['menu_most_recent'] = "Poslednji komentari";
		$lang_string['menu_most_recent_entries'] = "Poslednji unosi";
		$lang_string['menu_most_recent_trackback'] = "Poslednja pracenja";
		$lang_string['menu_add_block'] = "Blokovi";
		$lang_string['menu_emoticons'] = "Ikonice"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7

		// Counter
		$lang_string['counter_today'] = "Danas:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Juce:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Ukupno:"; // New for 0.4.8
		$lang_string['counter_title'] = "Ukupno brojac"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Povratak na glavnu';
		$lang_string['nav_next'] = 'Sledeca';
		$lang_string['nav_back'] = 'Nazad';
		$lang_string['search_title'] = 'Pretraga:';
		$lang_string['search_go'] = 'Idi';
		$lang_string['page_generated_in'] = 'Stranica kreirana za %s sekundi';
		$lang_string['counter_total'] = 'Pregleda sajta: '; // New in 0.4.8
		$lang_string['read_more'] = 'Citaj dalje...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'Januar', 'Februar', 'Mart', 'April', 'Maj', 'Jun', 'Jul', 'Avgust', 'Septembar', 'Oktobar', 'Novembar', 'Decembar' );
		$lang_string['sb_default_title'] = 'Nema naslova';
		$lang_string['sb_default_author'] = 'Nema Autora';
		$lang_string['sb_default_footer'] = 'Nema tekst na dnu';

		$lang_string['sb_edit'] = 'izmeni';
		$lang_string['sb_delete'] = 'brisi';
		$lang_string['sb_permalink'] = 'stalni link';
		$lang_string['sb_trackback'] = 'pracenja';
		$lang_string['sb_relatedlink'] = 'vezani link'; // <-- New in 0.4.6

		$lang_string['sb_add_comment_btn'] = 'dodaj komentar';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'komentar';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'komentari';

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' pregled';

		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' pregleda';

		$lang_string['sb_add_link_btn'] = '+ link';
		$lang_string['sb_rate_entry_btn'] = 'Klik za rangiranje unosa';

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Naslov:";
				$lang_string['label_insert'] = "Unesi specijalno:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['btn_readmore'] = "citaj dalje"; // 0.4.8
				$lang_string['view_images'] = "Pogledaj prenesene slike";
				$lang_string['label_entry'] = "Unos:";
				$lang_string['btn_preview'] = "&nbsp;Pregled&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Postavi&nbsp;";
				$lang_string['file_name'] = "Naziv staticke datoteke: (bez praznih mesta i ekstenzije)";

				// Javascript Strings
				$lang_string['insert_styles'] = "Unesi tekst koji ce biti formatiran:";
				$lang_string['insert_image'] = "Unesi URL za sliku:";
				$lang_string['insert_url1'] = "Unesi tekst koji ce biti prikazan za link (Opcionalno):";
				$lang_string['insert_url2'] = "Unesi puni URL za link:";
				$lang_string['insert_url3'] = "Otvori URL u novom prozoru (Opcionalno):";
				$lang_string['form_error'] = "Molim vas zavrsite sa Naslovom i unosom teksta.";

				// More Javascript Strings
				$lang_string['insert_image_optional'] = 'Opcionalno:';
				$lang_string['insert_image_width'] = 'Širina (Opcionalno):';
				$lang_string['insert_image_height'] = 'Visina (Opcionalno):';
				$lang_string['insert_image_popup'] = 'Poglead punu velicinu u pop-upu kada se klikne (Opcionalno):';
				$lang_string['insert_image_float'] = 'Plutajuce (Opcionalno):';

				$lang_string['day'] = 'Dan';
				$lang_string['month'] = 'Mesec';
				$lang_string['year'] = 'Godina';
				$lang_string['hour'] = 'Sat';
				$lang_string['minute'] = 'Minut';
				$lang_string['second'] = 'Sekund';
		}

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Dodaj unos";
				$lang_string['instructions'] = "Da li ste spremi za? Popunite formu ispod i kliknite 'Pregled' da biste videli kako izgleda vas unos, ili kliknite or click 'Postavi' da ga sacuvate.";
				$lang_string['title_ad'] = "Potvrdite povratne pingove";
				$lang_string['instructions_ad'] = "Ovo su automatski otkriveni URI-ji koje ce te pingovati. Ako ne zelite ping-ovati odredeni URI, deselektujte ga. Onda pritisnite 'OK' dugnic da ping-ujete izabrane URI-je ili pritisnite 'Otkazi' da ne ping-ujete nista.";
				$lang_string['label_tb_ping'] = "Povratni ping(ovi) za slanje (odvojeni zarezom)";
				$lang_string['label_tb_autodiscovery'] = "automatski pronadji";
				$lang_string['label_relatedlink'] = "Povezani link";
				$lang_string['label_categories'] = "Lista kategorija";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Pregled / Izmeni unos";
				$lang_string['instructions_preview'] = "Ovako izgleda vas unos. Ako koristite tekstualne stilove ili ukljucujete slike, treba da 'zatvorite' sve vase 'tag-ove'.";
				$lang_string['title_update'] = "Izmeni unos";
				$lang_string['instructions_update'] = "Mozete izmeniti unos koristeci formu ispod. Kliknite 'Pregled' ili 'Postavi' kada ste zavrsili.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Otkazi&nbsp;";

				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Unos nije sacuvan. Desila se greska tokom pokusaja cuvanja unosa.<br /><br />Server je prijavio:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Dodaj staticku stranicu";
				$lang_string['instructions'] = "Popunite formu ispod da biste kreirali staticku stranicu. Za razliku od regularnog unosa u blog, staticki unosi izgledaju kao linkovi u desnom meniju. To su stranice koje zelite uvek da imate prikazane, kao sto su: O meni, Kontakt, Raspored predavanja, itd. Kliknite 'Pregled' da vidite kako ce vas unos izgledati, ili kliknite 'Postavi' da sacuvate vas unos.";

				// Preview / Edit Entry
				$lang_string['title_preview'] = "Pregled / Izmeni staticku stranicu";
				$lang_string['instructions_preview'] = "Ovako izgleda vasa staticka stranica. Ako koristite tekstualne stilove ili ukljucujete slike, treba da 'zatvorite' sve vase 'tag-ove'.";
				$lang_string['title_update'] = "Izmeni staticku stranicu";
				$lang_string['instructions_update'] = "Mozete izmeniti unos koristeci formu ispod. Kliknite 'Pregled' ili 'Postavi' kada ste zavrsili.";
				$lang_string['form_error'] = "Zavrsite sa unosom naslov, unos i nazivom datoteke.";

				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Unos nije sacuvan. Desila se greska tokom pokusaja cuvanja unosa.<br /><br />Server je prijavio:<br />";
				break;
			case 'add_block':

				// Add / Manage Blocks
				$lang_string['title'] = "Dodaj / Izmeni linkove";
				$lang_string['instructions'] = "Dodaj sopstvene blokove";
				$lang_string['up'] = "gore";
				$lang_string['down'] = "dole";
				$lang_string['edit'] = "izmeni";
				$lang_string['delete'] = "brisi";
				$lang_string['block_name'] = "Naziv bloka:";
				$lang_string['block_content'] = "Sadrzaj bloka:";
				$lang_string['instructions_edit'] = "Trenutno menjate blok:";
				$lang_string['instructions_modify'] = "Kliknite ispod da izmenite blok:";
				$lang_string['submit_btn_edit'] = "Izmeni blok";
				$lang_string['submit_btn_add'] = "Dodaj blok";
				$lang_string['form_error'] = "Zavrsite sa kompletiranje polja 'Naziv'.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Staticke stranice:";

				// Add / Manage Links
				$lang_string['title'] = "Dodaj / Izmeni linkove";
				$lang_string['instructions'] = "Dodaj sopstvene linkove ka drugim sajtovima. Popunite formu ispod i kliknite  na 'Dodaj link' da dodate link. Klinite na dugmice 'gore' ili 'dole' da promenite redosled linkova. Kliknite 'izmeni' dugmence da izmenite dugmic da izmenu linka. Kliknite 'brisi' dugmic da uklonite link";
				$lang_string['up'] = "gore";
				$lang_string['down'] = "dole";
				$lang_string['edit'] = "izmeni";
				$lang_string['delete'] = "brisi";
				$lang_string['link_name'] = "Naziv linka:";
				$lang_string['link_url'] = "URL linka: (Opcionalno. Ostavite prazno da kreirate liniju.)";
				$lang_string['instructions_edit'] = "Trenutno menjate link:";
				$lang_string['instructions_modify'] = "Kliknite ispod da izmenite link:";
				$lang_string['submit_btn_edit'] = "Izmeni link";
				$lang_string['submit_btn_add'] = "Dodaj link";
				$lang_string['form_error'] = "Kompletirajte polje 'Naziv'.";
				break;
			case 'categories':

				// Add / Manage Links
				$lang_string['title'] = "Dodaj / Izmeni kategorije";
				$lang_string['instructions'] = "Koristi formu ispod da dodas ili izmenis svoje kategorije. Svaka kategorija bi trebala da bute u ovom formatu 'naziv kategorije (id broj)'. Stavite zarez iza stavke sa razmakom da kreirate hijerarhiju.<br /><br /><b>Primer:</b><br />Opsto (1)<br />Vesti (3)<br />&nbsp;&nbsp;Najave (6)<br />&nbsp;&nbsp;Dogadjaji (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Razno (7)<br />Tehnologija (2)<br />";
				$lang_string['error'] = "Greske";
				$lang_string['current_categories'] = "Trenutne kategorije";
				$lang_string['no_categories_found'] = "Nema kategorija";
				$lang_string['category_list'] = "Lista kategorija:";
				$lang_string['validate'] = "Overi";
				$lang_string['submit_btn'] = "&nbsp;Posalji&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Izmeni boje";
				$lang_string['instructions'] = "Mozete promeniti boju teksta i pozadine za vas blog. Prvo izaberite polja ispod, onda koristite polje za izbor boje da pronadjete vasu boju. Vrednost se menja automatski.";
				$lang_string['bg_color'] = "BG Strana";
				$lang_string['main_bg_color'] = "BG Glavna strana";
				$lang_string['border_color'] = "Ivica strane";
				$lang_string['inner_border_color'] = "Unutrasnja granica";
				$lang_string['header_bg_color'] = "BG Zaglavlje";
				$lang_string['header_txt_color'] = "Tekst zaglavlja";
				$lang_string['menu_bg_color'] = "BG Meni";
				$lang_string['footer_bg_color'] = "BG Tekst na dnu";
				$lang_string['txt_color'] = "Glavni tekst";
				$lang_string['headline_txt_color'] = "Tekst naslova";
				$lang_string['date_txt_color'] = "Tekst datuma";
				$lang_string['footer_txt_color'] = "Tekst na dnu";
				$lang_string['link_reg_color'] = "Podrazumevani link";
				$lang_string['link_hi_color'] = "Prelaz preko linka";
				$lang_string['link_down_color'] = "Aktivan link";

				// More Colors
				$lang_string['entry_bg'] = "Unos BG";
				$lang_string['entry_title_bg'] = "Nslov unosa BG";
				$lang_string['entry_border'] = "Granica unosa";
				$lang_string['entry_title_text'] = "Naslovni tekst unosa";
				$lang_string['entry_text'] = "Tekst unosa";
				$lang_string['menu_bg'] = "Meni BG";
				$lang_string['menu_title_bg'] = "Meni naslov BG";
				$lang_string['menu_border'] = "Granica menija";
				$lang_string['menu_title_text'] = "Naslovni tekst menija";
				$lang_string['menu_text'] = "Tekst menija";
				$lang_string['menu_link_reg_color'] = "Podrazumevani link menija";
				$lang_string['menu_link_hi_color'] = "Prelaz preko linka menija";
				$lang_string['menu_link_down_color'] = "Aktivni link menija";

				// Submit
				$lang_string['color_preset'] = "Seme boja:";
				$lang_string['scheme_name'] = "Unesite vas naziv seme boja:";
				$lang_string['scheme_file'] = "Unesite naziv datoteke seme boja: (bez razmaka ili ekstenzija datoteke)";
				$lang_string['save_btn'] = "&nbsp;Sacuvaj&nbsp;";
				$lang_string['form_error'] = "Unesite naziv za vasu semu boje.";
				$lang_string['submit_btn'] = "&nbsp;Postavi&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Trenutno izabrana tema ne dozvoljava izmenu boja.';

				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Unos nije sacuvan. Desila se greska tokom pokusaja cuvanja unosa.<br /><br />Server je prijavio:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Ime:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Web strana:"; //New in 0.4.6.2
				$lang_string['comment'] = "Komentar:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP Adresa:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Browser";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>U %s, %s je napisao:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				$lang_string['comment_capcha'] = "Anti-Spam: Unesite <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Komentari";
				$lang_string['header'] = "Dodaj komentar";
				$lang_string['instructions'] = "Popunite formu ispod da bi ste dodali komentar.";
				$lang_string['comment_name'] = "Vase ime:";
				$lang_string['comment_email'] = "E-mail:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['commentposted'] = "Novi komentar je postavljen u: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Zapamti me:";
				$lang_string['comment_text'] = "Komentar:";
				$lang_string['post_btn'] = "&nbsp;Posalji komentar&nbsp;";
				$lang_string['delete_btn'] = "brisi";
				$lang_string['expired_comment1'] = "Zao nam je. Novi komentari nisu dozvoljeni posle "; // New for 0.4.8
				$lang_string['expired_comment2'] = " dana."; // New for 0.4.8

				$lang_string['blacklisted'] = "Zao nam je, vasa IP adresa je odbijena. Komentari nisu dozvoljeni."; // New for 0.4.8

				// Error Response
				$lang_string['error_add'] = "<h2>Ooops!</h2>Komentar nije sacuvan. Desila se greska tokom pokusaja cuvanja komentara.<br /><br />Server je prijavio:<br />";
				$lang_string['error_delete'] = "<h2>Ooops!</h2>Komentar nije izbrisan. Desila se greska tokom pokusaja brisanja vaseg komentara.<br /><br />Server je prijavio:<br />";
				$lang_string['form_error'] = "Navedite ime, komentar i Anti-spam polja.";
				break;

			case 'delete':
				$lang_string['title'] = "Brisi unos";
				$lang_string['instructions'] = "Ovo je unos koji cete izbrisati. Da li ste sigurni da ga zelite izbrisati, posto ga kasnije ne mozete vratiti...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Otkazi&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Ne mogu da izbrisem unos.<br /><br />Server je prijavio:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Izbrisi staticu stranicu";
				$lang_string['instructions'] = "Ovo je staticka stranica koju cete izbrisati. Da li ste sigurni da je zelite izbrisati, posto ga kasnije ne mozete vratiti...";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Otkazi&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Ne mogu da izbrisem staticku stranicu.<br /><br />Server je prijavio:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista slika";
				$lang_string['instructions'] = "Klinite na link ispod da pregledate slike.<br /><br />Da dodate sliku u vas unos:<br />1) Ctrl-klik link i izaberite 'Kopiraj link u Klikboard'.<br />2) Nazad u Dodaj unos ili Izmeni unos stranicu.<br />3) Kliknite 'img' dugmic i vratite URL u prozor iz Klipboard-a.";
				break;
			case 'info':
				$lang_string['title'] = "Meta-Podaci informacije";
				$lang_string['instructions'] = "Informacije ispod se koriste za &quot;meta-podatke&quot;, koji pomazu masinama za pretragu da tacno pronadju i identifikuju vas sajt. Informacije se takodje mogu koristiti u RSS feed-ovima.";
				$lang_string['info_keywords'] = "Kljucne reci: (Lista kljucnih reci razdvojenih zarezima.)";
				$lang_string['info_description'] = "Opis: (Slobodan opis vaseg sajta.)";
				$lang_string['info_copyright'] = "Prava: (Zastita intelektualnog dela, ili link ka dokumentu koji sadrzi tu informaciju.)";
				$lang_string['submit_btn'] = "&nbsp;Postavi&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Informacija nije sacuvana. Desio se problem tokom cuvanja vase informacije.<br /><br />Server je prijavio:<br />";
				$lang_string['form_error'] = "Kompletirajte naslov i autor polja.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Ooops!</h2>Informacija nije sacuvana. Desio se problem tokom cuvanja vase informacije.<br /><br />Server je prijavio:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Dogradnja</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n komentarisane datoteke ne moraju da se dograde:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Dogradnja komentara"; // New 0.3.8
				$lang_string['title'] = "Prijava";
				$lang_string['instructions'] = "Unesite vase korisnicko ime i lozinku";
				$lang_string['username'] = "Korisnicko ime:";
				$lang_string['password'] = "Lozinka:";
				$lang_string['submit_btn'] = "&nbsp;Prijavi se!&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Uspesno!</h2>Prijavljeni ste. Uspesan rad!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ooops!</h2>Niste prijavljeni. Potvrdite da se uneli ispravno Korisnicko ime i Lozinku i pokusajte ponovo.<p />";
				$lang_string['form_error'] = "Unesite Korisnicko ime i Lozinku.";
				break;
			case 'logout':
				$lang_string['title'] = "Odjava";
				$lang_string['instructions'] = "<h2>Ooops!</h2>Odjava neuspesna. Ne mogu izbrisati kuki. Zasto ste i dalje prijavljeni?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Promeni Korisnicko ime &amp; Lozinku";
				$lang_string['instructions'] = "Koristite formu ispod da promenite vase Korisnicko ime i/ili lozinku. Unesite Korisnicko ime i Lozinku koju hocete da koristite.";
				$lang_string['username'] = "Korisnicko ime:";
				$lang_string['password'] = "Lozinka:";
				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Uspesno!</h2>Vasi Korisnicko ime i/ili lozinka su aktivni. Uspesno bloogvanje!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ooops!</h2>Informacije nisu sacuvane. Naisao sam na problem tokom cuvanja Korisnickog imena i/ili lozinke.<br /><br />Server je prijavio:<br />";
				$lang_string['form_error'] = "Unesite Korisnicko ime i lozinku.";
				$lang_string['explanation'] = "U novijim verzijama, nasa struktura lozinke je promenjena. Vise ne postoji nacin za izmenu lozinke
						i/ili lozinki u okviru bloga. Da bi promenili vasu lozinku, izbrisite /config/password.php i proverite da li postoje install*.php
						datoteke na lokalnom serveru. Kada je to uradjeno, osvezite stranicu (ili se odjavite). Bice vam prezentovana ista skripta
						za generisanje lozinke kao i kad ste originalno kreirali blog sajt."; // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Dobrodosli";
				$lang_string['instructions'] = "Zahvaljujem zato sto se izabrali Jednostavan PHP blog!";
				$lang_string['blog_choose_language'] = "Izaberite jezik:";
				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Dobrodosli";
				$lang_string['instructions'] = "
				Hvala sto ste izabrali Jednostavan PHP Blog!<br /><br /> Jednostavan PHP Blog je sistem za blog. Zahteva PHP 4.1 ili veci, i mogucnost upisa na serveru. Sve informacije se cuvaju u datotekama, tako da baza nije potrebna.<br /><br />
				Da bi poceli, Jednostavan PHP Blog treba da kreira tri foldera (<b>config</b>, <b>content</b>, and <b>images</b>) u kojem cuva informacije. Posle toga, cete kreirati lozinku i onda cete startovati blogovanje.<br /><br />
				<b>Kliknite ispod da pokrenete setup:</b>";
				$lang_string['begin'] = "[ Pocni setup ]";
				break;
			case 'install02':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Pokusavam da kreiram <b>config</b>, <b>content</b>, i <b>images</b> foldere:";
				$lang_string['folder_exists'] = "OK! Direktorij vec postoji. Nisu napravljene izmene...";
				$lang_string['folder_failed'] = "Ooops! Ne mogu da kreiram foldere...";
				$lang_string['folder_success'] = "Uspesno! Folder je kreiran...";
				// Help
				$lang_string['help'] = "
				<h2>Ooops!</h2>
				Ne mogu da kreirak jedan ili vise direktorija!<br /><br />To je najverovatnije zbog:<br />
				<ol>
				<li><b>Dozvola upisa</b> nisu dozvoljene <b>Citanje/Upis</b> dozvola.</li>
				<li><b>UID</b> (korisnikov ID) svih datoteka i direktorija mora biti isti.</li>
				</ol>
				Pratite informacije za resavanje problema ispod i kliknite <b>Pokusajte ponovo</b>:<br />
				<ol>
				<li>Kreirajte rucno sledece direktorije: <b>config</b>, <b>content</b>, i <b>images</b>.</li>
				<li>Omogucite <b>Dozvolu upisa</b> za direktorije: U vasem FTP programu, Vlasnik, Korisnik, i Svet moraju imati <b>Citanje</b> i <b>Upis</b> pristup. <i>(Mozda morate kontaktirati provajdera da bi ovo uradili...)</i></li>
				<li>Osigurajte da je UID svih vasih direktorija i datoteka isti. <i>(Mozda morate kontaktirati provajdera da bi ovo uradili...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Pokusajte ponovo ]";
				// Success
				$lang_string['success'] = "<h2>Uspesno!</h2>Direktoriji su uspesno kreirani!<p /><b>Kliknite ispod za nastavak:</b>";
				$lang_string['continue'] = "[ Dalje ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Vas web server dozvoljava sledece seme zastite:</b>";
				$lang_string['standard'] = "Standarddnu DES zastitu: ";
				$lang_string['extended'] = "Prosirenu DES zastitu: ";
				$lang_string['MD5'] = "MD5 zastitu: ";
				$lang_string['blowfish'] = "Blowfish zastitu: ";
				$lang_string['enabled'] = "omoguceno";
				$lang_string['disabled'] = "onemoguceno";
				$lang_string['using_standard'] = "<b>Koriscenje standardne DES zastite...</b>";
				$lang_string['using_extended'] = "<b>Koriscenje prosirene DES zastite...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Koriscenje MD5 zastite...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Koriscenje Blowfish zastite...</b>";
				$lang_string['using_unknown'] = "<b>Koriscenje nepoznate zastite...</b>";
				$lang_string['salt_length'] = " <i>(Salt duzina = %string)</i><br />";
				$lang_string['title'] = "Kreiraj korisnicko ime &amp; Lozniku";
				$lang_string['instructions'] = "Koristite formu ispod da kreirate korisnicko ime i lozinku.";
				$lang_string['username'] = "Korisnicko ime:";
				$lang_string['password'] = "Lozinka:";
				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Cestitamo!</h2>Sada ste prijavljeni. Kliknite ispod da pokrenete setup, gde mozete dati naziv vasem blog-u. Uspesno blogovanje!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ooops!</h2>Informacije nisu sacuvane. Naisao sam na problem tokom cuvanja vaseg korisnickog imena i/ili lozinke.<br /><br />Server je prijavio:<br />";
				$lang_string['form_error'] = "Kompletirajte korisnicko ime i lozinku.";
				break;
			case 'install04':
				$lang_string['title'] = "Kreiraj datoteku koja sadrzi lozinku";
				$lang_string['instructions'] = "Ovde je komplikovan deo:<br />
				<ol>
				<li>Otvorite bilo koji tekst editor. <i>(NotePad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Kreirajte novi tekst dokument.</li>
				<li>Kopirajte i nalepite kod iz boksa ispod u vas dokument.</li>
				<li>Sacuvajte vasu datoteku i dajte joj naziv <b>password.php</b> <i>(Obavezn oje sacuvajte u <b>tekstulanom</b> ili <b>jednostavno tekstulanom</b> formatu.)</i></li>
				<li>Otvorite FTP aplikaciju.</li>
				<li>Prenesite vas novi <b>password.php</b> u <b>config</b> direktorijum na web sajtu.</li>
				<li>Izbrisite <b>password.php</b> sa vaseg hard diska.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Napomena: Ako budete zeleli da resetujete korisnicko ime i lozinku (to je verovatno, ako je zaboravite), izbrisite <b>password.php</b> datoteku u <b>config</b> direktoriju na vasem web sajtu. Sledeci put kada posetite sajt, bicete provedeni ponovo kroz proces instalacije...</i>";
				$lang_string['code'] = "Kod za <b>password.php</b> datoteku:";
				$lang_string['continue'] = "[ Dalje ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Prijava";
				$lang_string['instructions'] = "Unesite korisnicko ime i lozinku ispod";
				$lang_string['username'] = "Korisnicko ime:";
				$lang_string['password'] = "Lozinka";
				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Cestitamo!</h2>Sada ste prijavljeni.<p />
				Kliknite ispod da posetite <b>Setup</b> stranicu, gde mozete da prilagodite vas blog.<p />
				<i>Napomena: Sada kada ste kompletirali instalacioni proces, preporucljivo je da izbrisete <b>installXX.php</b> datoteke sa vaseg web sajta. (od install00.php do install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ooops!</h2>Niste prijavljeni. Proverite da li su korisnicko ime i lozinka ispravni pa pokusajte ponovo.<p />";
				$lang_string['form_error'] = "Unesite korisnicko ime i lozinku.";
				// Success
				$lang_string['btn_setup'] = "[ Setup ]";
				$lang_string['btn_try_again'] = "[ Pokusajte ponovo ]";
				break;
			case 'setup':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Mozete promeniti naziv vasem blog-u, i vase licne informacije ispod.";
				$lang_string['blog_title'] = "Naziv blog-a:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "E-mail:";
				$lang_string['blog_avatar'] = "Avatar URL: (ostavite prazno ako ne zelite)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Tekst na dnu:";
				$lang_string['blog_choose_language'] = "Izaberite jezik:";
				$lang_string['blog_enable_comments'] = "Omogucite posetiocima komentare";
				$lang_string['blog_comments_popup'] = "Otvori komentar u iskakajucem prozoru";
				$lang_string['blog_enable_voting'] = "Omogucite posetiocima da rangiraju unose";
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Omoguci kalendar"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Omoguci blok arhiva"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Omoguci brojac u traci sa strane"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Broj sati pre nego sto se posetioc pocnu brojati ponovo (bazirano na specificnoj ip addresi):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Omoguci Login link (Prvo stavite \"login.php\" u listu favorita...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Omoguci blok obicng teksta u naslovu (Deselektujte polje za potvrdu ako je naslov u zaglavlju graficki)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Omoguci Permalink u unosima u blog"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Omoguci Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Omoguci brojac u dnu strane"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam slike (GD biblioteka samo) / Anti-Spam tekst polje"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Omoguci opciju za statistike u meniju"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Omoguci listu poslednjih komentara"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Omoguci listu poslednjih unosa"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Posaljite e-mail obavestenja kada je komentar postavljen";
				$lang_string['blog_send_pings'] = "Posaljite web-log &quot;pingove&quot;";
				$lang_string['blog_ping_urls'] = "Unesite pun URL (npr. http://rpc.weblogs.com/RPC2) za servis &quot;ping-a&quot;.<br />(Mozete uneti vise adresa razdvojenih zarezom.)";
				$lang_string['blog_trackback_about'] = "Pracenja omogucavaju nacin obavestavanja izmecu blog-ova. Dopustite drugom blog-u
					da ste ga linkovali tako sto cete im poslati ping pracenja. Pogledajte ko se linkuje na vas blog
					primanjem pinga pracenja.<br />
				    Mozete uneti URI-je za rucno ping-ovanje, ili pokusati da to uradite automatski kroz Automatsko-Oktrivanje.";
				$lang_string['blog_trackback_enabled'] = "Omogucite pracenja u blog-u";
				$lang_string['blog_trackback_auto_discovery'] = "Omogucite Automatsko-Oktrivanje kada posaljete stavku koja sadrzi URL-ove";
				$lang_string['blog_max_entries'] = "Maksimum unosa za prikaz:";
				$lang_string['blog_comment_tags'] = "Tag-ovi za dozvolu u komentarima:";
				$lang_string['blog_gzip_about'] = "
					Od PHP-a 4.0.4, PHP ima mogucnost citanja i upisa gzip (.gz) kompresovanih datoteka,
					cuvajuci disk prostor. On takodje moze transparentno kompresovati stranice koje su poslate ka web citacima
					koji podrzavaju gzip kompresiju.<br />
					<br />
					Zlib podrska u PHP-u nije podrazumevano omogucena. Ako su polja sa cekiranje onemogucena, tada vasa instalacija PHP-a
					ne podrzava Zlib ekstenziju.";
				$lang_string['blog_enable_gzip_txt'] = "Omoguci GZIP kompresiju za datoteke baze podataka";
				$lang_string['blog_enable_gzip_output'] = "Omoguci GZIP kompresiju za HTTP izlaz";
				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Informacije nisu sacuvane. Naisao sam na problem tokom cuvanja vasih informacija. <br /><br />Server je prijavio:<br />";
				$lang_string['form_error'] = "Kompletirajte polja naslov i autor.";
				$lang_string['label_entry_order'] = "Redosled unosa:";
				$lang_string['select_new_to_old'] = "Izlistaj novije prvo";
				$lang_string['select_old_to_new'] = "Izlistaj starije prvo";
				$lang_string['label_comment_order'] = "Redosled kometara:";
				$lang_string['cal_sunday'] = "Nedelja";
				$lang_string['cal_monday'] = "Ponedeljak";
				$lang_string['label_calendar_start'] = "Prvi dan u nedelji";
				$lang_string['title_sidebar'] = "Traka sa strane"; // New in 0.4.7
				$lang_string['title_comments'] = "Komentari"; // New in 0.4.7
				$lang_string['title_trackback'] = "Pracenja"; // New in 0.4.7
				$lang_string['title_compression'] = "Kompresija"; // New in 0.4.7
				$lang_string['title_entries'] = "Unosi"; // New in 0.4.7
				$lang_string['title_general'] = "Generalno"; // New in 0.4.7
				$lang_string['title_language'] = "Jezik"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Broj dana za koje su komentari dozvoljeni ? (0 znaci bez isteka vremena)"; // New in 0.4.8

				break;
			case 'trackbacks':
				// Trackbacks
				$lang_string['title'] = "Pracenja";
				$lang_string['header'] = "URL pracenja za ovaj unos:";
				$lang_string['delete_btn'] = "brisi";
				// Error Response
				$lang_string['error_add'] = "Greska kod cuvanja podataka za pracenje.";
				break;
			case 'options':
				$lang_string['title'] = "Opcije";
				$lang_string['instructions'] = "Koristite formu ispod da prilagodite prikaz datuma i vremena za blog i komentarisanje unosa. Mozete izabrati prikaze sa 12 ili 24 sata. Kratki ili dugi format datuma. I oblasti <b>Pregleda</b> ce prikaz biti automatski osvezen i bice prikazane izabrane promene.";
				// Long Date
				$lang_string['ldate_title'] = "Dugi format datuma:";
				$lang_string['weekday'] = "Vikend";
				$lang_string['month'] = "Mesec";
				$lang_string['day'] = "Dan";
				$lang_string['year'] = "Godina";
				$lang_string['none'] = "Prazno";
				// Short Date
				$lang_string['sdate_title'] = "Kratki format datuma:";
				$lang_string['s_month'] = "Mesec";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Dan";
				$lang_string['s_year'] = "Godina";
				$lang_string['zero_day'] = "Vodeca nula za dan";
				$lang_string['show_century'] = "Prikazi vek";
				// Time
				$lang_string['time_title'] = "Format vremena:";
				$lang_string['12hour'] = "12-satni sat";
				$lang_string['24hour'] = "24-satni sat";
				$lang_string['before_noon'] = "Pre popodneva";
				$lang_string['after_noon'] = "Posle popodneva";
				// Date
				$lang_string['date_title'] = "Format prikaza datuma:";
				$lang_string['long_date'] = "Dugi datum";
				$lang_string['short_date'] = "Kratki datum";
				$lang_string['time'] = "Vreme";
				// Menu
				$lang_string['menu_title'] = "Format prikaza datuma u meniju:";
				$lang_string['long_date'] = "Dugi datum";
				$lang_string['short_date'] = "Kratki datum";
				// Used in multiple places
				$lang_string['zero_day'] = "Vodeca nula za dan";
				$lang_string['zero_month'] = "Vodeca nula za mesec";
				$lang_string['zero_hour'] = "Vodeca nula za sat";
				$lang_string['separator'] = "Separator:";
				$lang_string['preview'] = "Pregled:";
				$lang_string['server_offset'] = "Pomeraj servera:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Informacije nisu sacuvane. Naisao sam na problem tokom cuvanja informacija.<br /><br />Server je prijavio:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Teme";
				$lang_string['instructions'] = "Koristite padajuci meni da izaberete razlicite teme.";
				// Themes
				$lang_string['choose_theme'] = "Teme:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Informacije nisu sacuvane. Naisao sam na problem tokom cuvanja informacija.<br /><br />Server je prijavio:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Posalji sliku";
				$lang_string['instructions'] = "Kliknite na dugmic ispod da izaberete datoteku za slanje.";
				$lang_string['select_file'] = "Izaberite datoteku:";
				$lang_string['upload_btn'] = "Posalji";
				// Error Response
				$lang_string['error'] = "<h2>Ooops!</h2>Nisam poslao sliku. Evo nekih informacija:<br /><br />Server je prijavio:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Rezultati pretrage";
				$lang_string['instructions'] = "Rezultati pretrage za <b>%string</b>:";
				$lang_string['not_found'] = "Nista nije pronadjeno";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Anti-Spam: Unesite <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Kontaktirajte me";
				$lang_string['instructions'] = "Popunite formu:";
				$lang_string['form_error'] = "Unesite naslov i komentar.";
				$lang_string['name'] = "Naziv:";
				$lang_string['email'] = "E-mail:";
				$lang_string['subject'] = "Naslov:";
				$lang_string['comment'] = "Komentar:";
				$lang_string['submit_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['success'] = "<h2>Uspesno!</h2>Vasa poruka je poslata.<p />";
				$lang_string['failure'] = "<h2>Greska!</h2>Vasa poruka nije poslata. Najverovatnije da Anti Spam kod nije unet pravilno.<p />";
				$lang_string['contactsent'] = "Kontakt je poslat kroz: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Adresa:";  // New for 0.4.6
				$lang_string['useragent'] = "Korisnikov agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>U %s, %s je napisao:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Statistike";
				$lang_string["general"] = "Opste";
				$lang_string["entry_info"] = "<b>%s</b> unosa koristeci <b>%s</b> reci sacuvanih u <b>%s</b> bajtova";
				$lang_string["comment_info"] = "<b>%s</b> komentara koristeci <b>%s</b> reci sacuvanih u <b>%s</b> bajtova";
				$lang_string["trackback_info"] = "<b>%s</b> pracenja sacuvano u <b>%s</b> bajtova";
				$lang_string["static_info"] = "<b>%s</b> statickih stranica koristeci <b>%s</b> reci sacuvanih u <b>%s</b> bajtova";
				$lang_string["most_viewed_entries"] = "10 Najcesce pregledanih unosa";
				$lang_string["most_commented_entries"] = "10 Najvise komentarisanih unosa";
				$lang_string["most_trackbacked_entries"] = "10 Najvecih unosa pracenja";
				$lang_string['vote_info'] = "<b>%s</b> glasova sacuvano u <b>%s</b> bajtova"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 Unosa za koje se najvise glasalo"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 Unosa koji sa najboljim ocenama"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Greska 403.8 - Pristup stranici/funkciji je odbijen';
				$lang_string["errorline1"] = 'Stranica ili funkcija koju pokusavate procesirati zahteva upotrebu cookie-ja.';
				$lang_string["errorline2"] = 'Vratite funkcionalnost cookie-ja u browser-u ili softver za zastitu pa pokusajte ponovo.';
				$lang_string["clientid"] = 'ID klijenta: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Greska 403.8 - Pristup stranici/funkciji je odbijen';
				$lang_string["404"] = 'HTTP Greska 404 - stranica/funkcija ne postoji';
				$lang_string["error_404"] = 'Stranica ili funkcija kojk pokusavate procesirati ne postojiThe page or function you attempted to process does not exist.';
				$lang_string["error_javascript"] = 'Stranica ili funkcija koju zelite zahteva javascript da bi funkcionisala ispravno.';
				$lang_string["error_emailnotsent"] = 'Poruka koju ste pokusali poslati nije uspesno poslata.';
				$lang_string["error_emailnotsentcapcha"] = 'Poruka koju ste pokusali poslati nije uspesno poslata zato sto anti-spam nije unesen ispravno.';
				$lang_string["clientid"] = 'ID klijenta: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administracija ikonica";
				$lang_string['instructions'] = "
								Izaberite ikonice koje zelite koristiti. Upisite u polje tag-ove koje zelite
								zameniti slikom. Mozete koristiti vise tag-ova, samo ih odvojite razmacima.<br /><br />

								Na primer:<br />
								:) :-) :SMILE: :HAPPY:<br /><br />

								<i>(Preporucljivo je da vasi tag-ovi imaju vise od 2 karaktera,
								jer se u suprotnom mogu desiti neocekivane zamene.)</i>";
				$lang_string["upload_instructions"] = 'Posaljite novu ikonicu:';
				$lang_string["upload_success"] = 'Uspesno! Slika je uspesno poslata!';
				$lang_string["upload_error"] = 'Greska! Slika nije poslata.';
				$lang_string["upload_invalid"] = 'Greska! Pogresan format datoteke sa slikom. Slika mora biti png, jpg, ili gif.';
				$lang_string["save_success"] = 'Podesavanja ikonica su uspesno sacuvana!';
				$lang_string["save_error"] = 'Greska! Podesavanja ikonica nisu uspesno sacuvana.';
				$lang_string["save_button"] = 'Sacuvaj ikonice';
				break;
			default:
				break;
		}
	}
?>