<?php
	// Italian Language Translation(s)
	// (c) 2004 Porro Luciano (alias drudo), drudo3 <at> jumpy <dot> it, http://drudo.altervista.org/blog/ (0.4.8)
	// (c) 2006 Lizza Marco (a.k.a. deathwish), deathwish <at> altervista <dot> org, http://deathwish.altervista.org (0.4.6.2)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Italiano
		$lang_string['language'] = 'italiano';
		
		$lang_string[ 'locale' ] = array('it_IT','ita','italian');
		$lang_string['rss_locale'] = 'it-IT'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';

		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// men&ugrave;
		$lang_string['menu_links'] = "Collegamenti";
		$lang_string['menu_home'] = "Pagina iniziale";
		$lang_string['menu_contact'] = "Contattami"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Statistiche"; // <-- New 0.3.7r
		$lang_string['menu_calendar'] = "Calendario"; // New for 0.4.8
		$lang_string[ 'menu_viewarchives' ] = "Vedi archivio"; // New in 0.4.7
		$lang_string['menu_archive'] = "Archivio";
		$lang_string['menu_menu'] = "Men&ugrave;";
		$lang_string['menu_add'] = "Aggiungi notizia";
		$lang_string['menu_add_static'] = "Aggiungi pagina statica";
		$lang_string['menu_upload'] = "Carica immagine";
		$lang_string['menu_setup'] = "Preferenze";
		$lang_string['menu_categories'] = "Categorie"; // 0.3.7q
		$lang_string['menu_info'] = "Informazioni Meta-Data"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Opzioni date";
		$lang_string['menu_themes'] = "Temi";
		$lang_string['menu_colors'] = "Colori";
		$lang_string['menu_change_login'] = "Modifica login";
		$lang_string['menu_logout'] = "Logout";
		$lang_string['menu_login'] = "Login";
		$lang_string['menu_most_recent'] = "Ultimi commenti";
		$lang_string['menu_most_recent_entries'] = "Ultime notizie";
		$lang_string['menu_most_recent_trackback'] = "Ultimi trackback"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocchi";
		$lang_string['menu_emoticons'] = "Faccine"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Oggi:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Ieri:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Totale:"; // New for 0.4.8
		$lang_string['counter_title'] = "Contatore"; // New for 0.4.8
		
		// Other
		$lang_string['home'] = "Torna alla pagina iniziale";
		$lang_string['nav_next'] = 'Altre notizie'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Indietro'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Cerca:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Vai'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Pagina generata in %s secondi'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Visite sito: '; // New in 0.4.8
		$lang_string['read_more'] = 'Continua...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre' );
		$lang_string['sb_default_title'] = 'Senza titolo';
		$lang_string['sb_default_author'] = 'Senza autore';
		$lang_string['sb_default_footer'] = 'Pi&egrave;-pagina';
		
		$lang_string['sb_edit'] = 'modifica';
		$lang_string['sb_delete'] = 'cancella';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8 (non troduco)
		$lang_string['sb_trackback'] = 'trackback'; // <-- New 0.3.8 (non taduco)
		$lang_string['sb_relatedlink'] = 'riferimento'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'commenta';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'commento';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'commenti';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' visita';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' visite';
		
		$lang_string['sb_add_link_btn'] = 'Aggiungi collegamento';
		
		$lang_string['sb_rate_entry_btn'] = 'Clicca per votare la notizia!';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Titolo:";
				$lang_string['label_insert'] = "Inserisci formattazione testo:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Vedi immagini caricate";
				$lang_string['label_entry'] = "Notizia:";
				$lang_string['btn_preview'] = "&nbsp;Anteprima&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Inserisci&nbsp;";
				$lang_string['file_name'] = "Nome file statico (senza spazi ed estensioni)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Inserisci il testo";
				$lang_string['insert_image'] = "Inserisci indirizzo URL immagine";
				$lang_string['insert_url1'] = "Inserisci il testo del link";
				$lang_string['insert_url2'] = "Inserisci indirizzo URL del collegamento";
				$lang_string['insert_url3'] = "Apri URL in una nuova pagina (facoltativo):"; // <-- New 0.3.6
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi Titolo e Notizia";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opzioni:';
				$lang_string['insert_image_width'] = 'Larghezza (facoltativo):';
				$lang_string['insert_image_height'] = 'Altezza (facoltativo):';
				$lang_string['insert_image_popup'] = 'Vedi in una nuova finestra a tutto schermo (facoltativo):';
				$lang_string['insert_image_float'] = 'Allineamento (facoltativo):';
				
			  $lang_string['day'] = 'Giorno';
			  $lang_string['month'] = 'Mese';
			  $lang_string['year'] = 'Anno';
			  $lang_string['hour'] = 'Ora';
			  $lang_string['minute'] = 'Minuti';
			  $lang_string['second'] = 'Secondi';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Aggiungi notizia";
				$lang_string['instructions'] = "Per pubblicare una notizia compila i campi sottostanti e clicca su 'Anteprima' per visualizzare la notizia prima di pubblicarla o 'Inserisci' per pubblicarla subito.";				
				$lang_string['title_ad'] = "Conferma trackback"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "Questi sono gli URI rilevati a cui verra inviato un trackback. Se non si desidera tracciarne alcuni, deselezionare la casella associata. Quindi, clicca 'Conferma' effettuare i ping agli URI selezionati, oppure 'Annulla' per non effettuarne alcuno."; // <-- New 0.3.8 (??)
				$lang_string['label_tb_ping'] = "Trackback da inviare (separati da una virgola)"; // <-- New 0.3.8 (??)
				$lang_string['label_tb_autodiscovery'] = "Auto-segnalazione"; // <-- New 0.3.8 (??)
				$lang_string['label_relatedlink'] = "Riferimento"; // New for 0.4.6
				$lang_string['label_categories'] = "Lista categorie"; // new for 0.4.7
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Anteprima / modifica notizia";
				$lang_string['instructions_preview'] = "Ecco come apparir&agrave; la notizia. Se stai usando i 'tag' per la formattazione del testo, ricordarti di chiuderli tutti.";
				$lang_string['title_update'] = "Aggiorna notizia";
				$lang_string['instructions_update'] = "Puoi cambiare il contenuto della notizia usando il 'form' sottostante. Clicca su 'Anteprima' per rivedere la notizia o 'Inserisci' per pubblicarla.";
				$lang_string['ok_btn'] = "&nbsp;Conferma&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Annulla&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Notizia non pubblicata! Si &egrave; verificato un problema durante la pubblicazione della notizia.<br /><br />Il server ha risposto:<br />";
        break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Aggiungi pagina statica";
				$lang_string['instructions'] = "Per aggiungere una 'Pagina statica' compila i campi sottostanti. Tale pagina differisce da una normale notizia, poich&egrave; comparir&agrave; come link nel men&ugrave; destro del blog. Si usa normalmente per creare una pagina in evidenza e sempre raggiungibile.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Anteprima / Modifica pagina statica";
				$lang_string['instructions_preview'] = "Ecco come apparir&agrave; l'anteprima della Pagina statica. Se stai usando i 'tag' per la formattazione del testo, ricordati di chiuderli tutti.";
				$lang_string['title_update'] = "Aggiorna pagina statica";
				$lang_string['instructions_update'] = "Puoi cambiare il contenuto della notizia usando il 'form' sottostante. Clicca su 'Anteprima' per rivedere la notizia o 'Inserisci' per pubblicarla.";
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi Soggetto, Messaggio e Nome.";	
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Contenuto pagina statica non pubblicata! Si &egrave; verificato un problema durante la pubblicazione della notizia.<br /><br />Il server ha risposto:<br /><br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Aggiungi / Gestisci blocchi";
				$lang_string['instructions'] = "Per aggiungere un blocco basta compilare tutti i campi e premere su 'Aggiungi blocco'."; // verificare
				$lang_string['up'] = "su";
				$lang_string['down'] = "gi&ugrave;";
				$lang_string['edit'] = "modifica";
				$lang_string['delete'] = "cancella";
				$lang_string['block_name'] = "Nome blocco:";
				$lang_string['block_content'] = "Inserisci formattazione blocco:";
				$lang_string['instructions_edit'] = "Stai modificando il seguente blocco:";
				$lang_string['instructions_modify'] = "Clicca su 'modifica' per editare il blocco:";
				$lang_string['submit_btn_edit'] = "Invia modifica";
				$lang_string['submit_btn_add'] = "Aggiungi blocco";
				$lang_string['form_error'] = "&Egrave; necessario compilare il campo Nome.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Pagina statica:";
				// Add / Manage Links
				$lang_string['title'] = "Aggiungi / Gestisci collegamenti";
				$lang_string['instructions'] = "Per aggiungere collegamenti a siti esterni, o riferimenti interni al blog, compila i campi sottostanti. Per inserire un titolo prima della lista basta compilare il form lasciando in bianco il campo 'Indirizzo URL'. <br /><br />Clicca su:<br />1) 'Aggiungi collegamento' per inserire un collegamento.<br />2) 'su' o 'gi&ugrave;' per far cambiare posizione ai link<br />3) 'cancella' per eliminare il collegamento.";
				$lang_string['up'] = "su";
				$lang_string['down'] = "gi&ugrave;";
				$lang_string['edit'] = "modifica";
				$lang_string['delete'] = "cancella";
				$lang_string['link_name'] = "Nome del collegamento:";
				$lang_string['link_url'] = "Indirizzo URL: (lascia il campo vuoto se vuoi creare un titolo)";
				$lang_string['instructions_edit'] = "Stai modificando questo collegamento:";
				$lang_string['instructions_modify'] = "Collegamenti presenti:";
				$lang_string['submit_btn_edit'] = "Modifica collegamento";
				$lang_string['submit_btn_add'] = "Aggiungi collegamento";
				$lang_string['form_error'] = "&Egrave; necessario compilare il campo Nome.";
				break;
			case 'categories':
				// Add / Manage Categories
				$lang_string['title'] = "Aggiungi / Modifica categorie";
				$lang_string['instructions'] = "Usa il form sottostante per aggiungere le 'Categorie'. Devono avere una deterinata forma, ovvero, 'nome categoria (numero id)', inoltre per creare sottocategorie &egrave; necessario inserire spazi vuoti all'inizio del nome della categoria.<br /><br /><b>Esempio:</b><br />Generale (1)<br />News (3)<br />&nbsp;&nbsp;Annunci (6)<br />&nbsp;&nbsp;Eventi (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Varie (7)<br />Tecnologia (2)<br />";
				$lang_string['error'] = "Errore";
				$lang_string['current_categories'] = "Categorie in uso";
				$lang_string['no_categories_found'] = "Nessuna categoria trovata";
				$lang_string['category_list'] = "Lista categorie:";
				$lang_string['validate'] = "Controlla";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Colori";
				$lang_string['instructions'] = "Puoi cambiare i colori dello sfondo e del testo selezionando il colore direttamente nella maschera sottostante, in modo che il codice corrispondente cambi automaticamente.<br />La sigla <strong>SF</strong> significa 'Sfondo'.";
				$lang_string['bg_color'] = "SF pagina";
				$lang_string['main_bg_color'] = "SF corpo";
				$lang_string['border_color'] = "Bordi";
				$lang_string['inner_border_color'] = "Bordi interni";
				$lang_string['header_bg_color'] = "SF header";
				$lang_string['header_txt_color'] = "Testo header";
				$lang_string['menu_bg_color'] = "SF men&ugrave;";
				$lang_string['footer_bg_color'] = "SF pi&egrave;-pagina";
				$lang_string['txt_color'] = "Testo";
				$lang_string['headline_txt_color'] = "Titoli";
				$lang_string['date_txt_color'] = "Date";
				$lang_string['footer_txt_color'] = "Testo pi&egrave;-pagina";
				$lang_string['link_reg_color'] = "Link";
				$lang_string['link_hi_color'] = "Link hover";
				$lang_string['link_down_color'] = "Link active";
				// More Colors
				$lang_string['entry_bg'] = "SF notizie";
				$lang_string['entry_title_bg'] = "SF titolo";
				$lang_string['entry_border'] = "Bordo notizie";
				$lang_string['entry_title_text'] = "Titolo notizie";
				$lang_string['entry_text'] = "Testo notizie";
				$lang_string['menu_bg'] = "SF men&ugrave;";
				$lang_string['menu_title_bg'] = "SF titolo men&ugrave;";
				$lang_string['menu_border'] = "Bordo men&ugrave;";
				$lang_string['menu_title_text'] = "Titolo men&ugrave;";
				$lang_string['menu_text'] = "Testo men&ugrave;";
				$lang_string['menu_link_reg_color'] = "Link men&ugrave;";
				$lang_string['menu_link_hi_color'] = "Link men&ugrave; Hover";
				$lang_string['menu_link_down_color'] = "Link men&ugrave; Active";
				// Submit
				$lang_string['color_preset'] = "Schema colori:"; // 0.3.7q
				$lang_string['scheme_name'] = "Scrivi il nome di uno 'schema' presente:"; // 0.3.7q
				$lang_string['scheme_file'] = "Salva lo 'schema' con un altro nome: (NON inserire spazi e/o estensioni)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Salva&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Scrivi il nome di un tuo schema di colori!"; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Il tema attualmente selezionato non tiene conto i colori su ordinazione.';
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Nome:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Homepage:"; //New in 0.4.6.2
				$lang_string['comment'] = "Commento:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "Indirizzo IP:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User-Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>In data %s, %s ha scritto:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['commentposted'] = "Nuovo commento inviato da: ";  // New for 0.4.6.2
				$lang_string['comment_capcha'] = "[anti-spam] Inserisci <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Commenti";
				$lang_string['header'] = "Aggiungi commento";
				$lang_string['instructions'] = "Compilare i campi sottostanti per inserire un commento.<br /><br />";
				$lang_string['comment_name'] = "Nome (*):";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Ricordami:"; // 0.3.8
				$lang_string['comment_text'] = "Commento (*):";
				$lang_string['post_btn'] = "&nbsp;Inserisci&nbsp;";
				$lang_string['delete_btn'] = "Cancella";
				$lang_string['expired_comment1'] = "Spiacente. Non sono permessi nuovi commenti dopo "; // New for 0.4.8
				$lang_string['expired_comment2'] = " giorni."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Spiacente, il tuo indirizzo &egrave; stato bannato. Commento non permesso."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Opps!</h2>Commento non pubblicato! Si &egrave; verificato un problema durante la pubblicazione del commento.<br /><br />Il server ha risposto:<br />";
				$lang_string['error_delete'] = "<h2>Opps!</h2>Commento non cancellato! Si &egrave; verificato un problema durante la cancellazione del commento.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "&Egrave; necessario compilare tutti i campi obbligatori (*).";
				break;
			case 'delete':
				$lang_string['title'] = "Cancella notizia";
				$lang_string['instructions'] = "Sei <strong>sicuro</strong> di voler cancellare questa notizia? Non &egrave; possibile annullare l'operazione in seguito.";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annulla&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Notizia non cancellata!<br /><br />Il server ha risposto:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Cancella pagina statica";
				$lang_string['instructions'] = "Sei <strong>sicuro</strong> di voler cancellare questa pagina statica? Non &egrave; possibile annullare l'operazione in seguito.";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annulla&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Notizia non cancellata!<br /><br />Il server ha risposto:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista immagini";
				$lang_string['instructions'] = "Clicca sul collegamento per vedere l'immagine corrispondente.<br /><br />Per aggiungere un'immagine:<br />1) Clicca col tasto destro e 'Copia collegamento' (o simile).<br />2) Torna alla sezione 'Aggiungi notizia' o 'Modifica notizia'.<br />3) Clicca sul bottone 'img' e copia l'indirizzo URL nella finestra.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Informazioni Meta-Data";
				$lang_string['instructions'] = "Le informazioni sottostanti verranno usate per i &quot;meta-data&quot;, che aiutano i motori di ricerca ad individuare il tuo blog. Tali informazioni vengono usate anche dai Feed RSS.";
				$lang_string['info_keywords'] = "Parole chiave: (ricorda di separarle con una virgola)";
				$lang_string['info_description'] = "Descrizione: (inserisci una breve descrizione del sito)";
				$lang_string['info_copyright'] = "Diritti: (inserisci il Copyright o un link contenente informazioni a riguardo)";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi Titolo e Autore.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Aggiornamento</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n commenti da aggiornare:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Aggiorna commenti"; // New 0.3.8
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Inserire Username e Password per entrare nel pannello di controllo";
				$lang_string['username'] = "Username";
				$lang_string['password'] = "Password";
				$lang_string['submit_btn'] = "&nbsp;Login&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Login OK!</h2>Hai effettuato il login con successo. Buon blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Opps!</h2>Login non effettuato. Verificare che Username e Password siano scritti correttamente.<p />";
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi Username e Password.";
				break;
			case 'logout':
				$lang_string['title'] = "Logout";
				$lang_string['instructions'] = "<h2>Opps!</h2>Logout fallito. Cookie non cancellati. Riprovare, o modificare le impostazioni del browser.<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Cambia Username &amp; Password";
				$lang_string['instructions'] = "Compila i campi sottostanti per cambiare il tuo Username e/o la tua Password.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Login OK!</h2>Hai effettuato il login con successo. Buon blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi Username e Password.";
				$lang_string['explanation'] = "Nelle recenti versioni, il processo per salvare la password &egrave; stato cambiato. Non &egrave; pi&ugrave; possibile aggiornare e/o cambiare la password all'interno del blog. Per cambiarla &egrave; necessario cancellare il file /config/password.php ed assicurarsi che i file install*.php esistano sul proprio server web. Una volta terminato, aggiornare questa pagina (o effettuare il logout). Comparir&agrave; a questo punto lo stesso script originale che genera la password quando parte l'installazione del blog.";  // New for 0.4.6



				break;
			case 'install00':
				$lang_string['title'] = "Benvenuto";
				$lang_string['instructions'] = "
				Grazie per aver scelto Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Scegli la lingua:";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Benvenuto";
				$lang_string['instructions'] = "
				Grazie per aver scelto Simple PHP Blog!<br /><br />Simple PHP Blog &egrave; un semplice blog che richiede solo PHP 4.1 o versione superiore, ed i permessi di scrittura sul server. Tutte le informazioni vengono salvate su file di testo (flat-files), senza necessit&agrave; alcuna di database.<br /><br />
				Una volta eseguito, Simple PHP Blog crea, se non presenti, tre cartelle ('config', 'content', e 'images') dove vengono salvate tutte le informazioni.<br /><br />
				<b>Clicca per cominciare il setup:</b>";
				$lang_string['begin'] = "[ Inizia il setup ]";
				break;
			case 'install02':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Creazione cartelle 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "Le cartelle sono gi&agrave; presenti. Non &egrave; avvenuto nessun cambiamento.";
				$lang_string['folder_failed'] = "Opps! Cartelle non create!";
				$lang_string['folder_success'] = "Ok! Cartella creata.";
				// Help
				$lang_string['help'] = "
				<h2>Opps!</h2>
				Cartelle non create! Le cause possono essere le seguenti:<br>
				<i>1) Non hai i <b>permessi di scrittura</b> sul server. Abilita i permessi di lettura/scrittura!</i><br>
				<i>2) L'<b>UID</b>'s (user ID's) di tutti i file e cartelle deve essere uguale.</i><p /> // <-- verificare
				
				Segui le istruzioni riportate sotto e riprova:<p />				  
				1) Crea manualmente le cartelle: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Abilita i <b>Permessi di scrittura</b> sulle cartelle. Per farlo basta abilitare questa funzione sul proprio programma FTP. <i>In alcuni casi &egrave; necessario contattare il proprio provider!</i><p />
				3) Assicurati che UID's (user ID's) di tutti i file e tutte le cartelle sia lo stesso. <i>(In alcuni casi, per cambiare questo, &egrave; necessario contattare il proprio provider!)</i>";
				$lang_string['try_again'] = "[ Try Again ]";
				// Success
				$lang_string['success'] = "<h2>Ok!</h2>Cartelle create!<p /><b>Clicca per continuare:</b>";
				$lang_string['continue'] = "[ Continua ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Il tuo server web supporta i seguenti metodi di crittografia:</b>";
				$lang_string['standard'] = "Crittazione DES Standard : ";
				$lang_string['extended'] = "Crittazione DES Estesa: ";
				$lang_string['MD5'] = "Crittazione MD5: ";
				$lang_string['blowfish'] = "Crittazione Blowfish: ";
				$lang_string['enabled'] = "abilitato";
				$lang_string['disabled'] = "disabilitato";
				$lang_string['using_standard'] = "<b>Crittazione DES Standard in uso...</b>";
				$lang_string['using_extended'] = "<b>Crittazione DES Estesa in uso...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Crittazione MD5 in uso...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Crittazione Blowfish in uso...</b>";
				$lang_string['using_unknown'] = "<b>Metodo di crittografia sconosciuto in uso...</b>";
				$lang_string['salt_length'] = " <i>(Lunghezza 'seme' = %string)</i><br />";
				$lang_string['title'] = "Crea Username &amp; Password";
				$lang_string['instructions'] = "Usa i campi sottostanti per creare Username e Password.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulazioni!</h2>Hai effettuato il login correttamente. Ora puoi andare alla sezione Setup per modificare il tuo blog. Buon blogging!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio di Username e Password.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi Username e Password.";
				break;
			case 'install04':
				$lang_string['title'] = "Crea il file delle password";
				$lang_string['instructions'] = "Leggere con attenzione questa parte:<br />
				<ol>
				<li>Apri un editor di testo. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, ecc...)</i></li>
				<li>Crea un nuovo documento di testo.</li>
				<li>Copia ed incolla il codice nel box all' interno del nuovo documento.</li>
				<li>Salva e nomina il file come <b>password.php</b> <i>(Assicurati di salvarlo in semplice <b>formato testo</b>, ovvero senza formattazioni, come grassetto, corsivo, ecc.).</i></li>
				<li>Apri un' applicazione FTP.</li>
				<li>Carica sul server web il nuovo file <b>password.php</b> all' interno della cartella <b>config</b>.</li>
				<li>Cancella il file <b>password.php</b> dal tuo Hard Disk.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Nota: Se vuoi cambiare Username e Password (magari perch&egrave; te ne sei dimenticato), cancella il file <b>password.php</b> nella cartella <b>config</b> del tuo server web. Alla visita successiva del tuo sito, verr&agrave; ripetuto questo processo...</i>";
				$lang_string['code'] = "Codice per il file <b>password.php</b>:";
				$lang_string['continue'] = "[ Continua ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Inserisci Username e Password qu&agrave; sotto:";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulazioni!</h2>Sei riuscito ad effettuare il login.<p />
				Clicca sotto per visitare la pagina <b>Preferenze</b>, dove potrai personalizzare il tuo blog.<p />
				<i>Nota: Ora che hai completato il processo di installazione, si raccomanda di cancellare i file <b>installXX.php</b> dal tuo sito web. (da install00.php a install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Opps!</h2>Login non effettuato. Verificare che Username e Password siano scritti correttamente e tenta nuovamente.<p />";
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi Username e Password.";
				// Success
				$lang_string['btn_setup'] = "[ Preferenze ]";
				$lang_string['btn_try_again'] = "[ Tenta nuovamente ]";
				break;
			case 'setup':
				$lang_string['title'] = "Preferenze";
				$lang_string['instructions'] = "Puoi cambiare il nome del tuo blog, i dati personali, decidere il numero massimo di notizie visualizzabili nella pagina iniziale, abilitare i commenti da parte degli utenti e i tag in essi utilizzabili.";
				$lang_string['blog_title'] = "Nome blog:";
				$lang_string['blog_author'] = "Autore:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Pi&egrave;-pagina:";
				$lang_string['blog_avatar'] = "Avatar URL: (lasciare in bianco per non farlo apparire)."; // <-- New 0.4.7
        $lang_string['blog_choose_language'] = "Cambia lingua:";
				$lang_string['blog_enable_cache'] = "Abilita la cache delle notizie (su alcuni server pu&ograve; incrementare la velocit&agrave;)"; // New for 0.4.6
				$lang_string['blog_enable_comments'] = "Abilita i commenti da parte degli utenti"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Apri i commenti in una nuova finestra"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Consenti agli utenti di votare le notizie"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Notifica via email i nuovi commenti inseriti"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Invia &quot;ping&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Inserisci l'indirizzo URL completo (per es. http://rpc.weblogs.com/RPC2) del servizio di &quot;ping&quot;.<br />(separare con una virgola in caso di pi&ugrave; URL)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Il trackback &egrave; un sistema che permette la comunicazione automatica tra blog. &Egrave; possibile inviare un segnale dal tuo blog, chiamato 'ping', avvertendo un'altro blog di aver scritto qualcosa che fa riferimento a quell'articolo.<br />&Egrave; possibile inserire gli URI manualmente, oppure, automaticamente tramite l'auto-segnalazione."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Abilita il trackback nel blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Abilita auto-segnalazione quando la notizia contiene degli URL"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Numero massimo di notizie visualizzabili:"; // <-- New 0.3.6
				$lang_string['blog_enable_stats'] = "Abilita pagina \"Statistiche\" nel men&ugrave;"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Abilita lista commenti recenti"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Abilita lista ultime notizie"; // New for 0.4.7
				$lang_string['blog_comment_tags'] = "Tag consentiti nei commenti:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Dalla versione 4.0.4, PHP ha la possibilit&agrave; di leggere e scrivere file compressi gzip (.gz), 
					utili per risparmiare spazio sul disco.<br />
					<br />
					Solitamente nel PHP il supporto per le zlib (estensione per la compressione dei file) non 
					&egrave; abilitato di default. Se le caselle di spunta sono disabilitate significa che la vostra versione 
					di PHP non supporta tale funzione."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Abilita la compressione GZIP per i file del database"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Abilita la compressione GZIP nell'output HTTP"; // <-- New 0.3.7  <-- RIVEDERE
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi 'Nome blog' e 'Autore'.";
				$lang_string['label_entry_order'] = "Ordine delle notizie:";
				$lang_string['select_new_to_old'] = "Nuove in testa";
				$lang_string['select_old_to_new'] = "Nuove in basso";
				$lang_string['label_comment_order'] = "Ordine dei commenti:";
								$lang_string['cal_sunday'] = "Domenica"; // New for 0.4.6
				$lang_string['cal_monday'] = "Luned&igrave;"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Giorno di partenza del calendario"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Abilita calendario / blocco archivio"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Abilita i blocchi"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Abilita contatore nel men&ugrave;"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Numero di ore da posticipare prima che gli accessi siano contati ancora (in base all' indirizzo IP specifico):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Abilita link \"Login\" (Prima aggiungi ai segnalibri \"login.php\"...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Abilita il titolo del blog come testo semplice (deseleziona la checkbox se il titolo &egrave; all' interno di un header grafico)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Abilita il permalink nelle notizie."; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Abilita Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Abilita contatore a pi&egrave; pagina"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam con immagini (GD library necessarie) / Anti-Spam con testo semplice"; // New for 0.4.8
				$lang_string['title_sidebar'] = "Colonna laterale / Men&ugrave"; // New in 0.4.7
				$lang_string['title_comments'] = "Commenti"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compressione"; // New in 0.4.7
				$lang_string['title_entries'] = "Notizie"; // New in 0.4.7
				$lang_string['title_general'] = "Generale"; // New in 0.4.7
				$lang_string['title_language'] = "Lingua"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Commenti permessi per quanti giorni? (0 significa senza scadenza)"; // New in 0.4.8
        break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackback";
				$lang_string['header'] = "Trackback-URL di questa notizia:";
				$lang_string['delete_btn'] = "Cancella";
				// Error Response
				$lang_string['error_add'] = "Errore nel tracciare i trackback."; // ho personalizzato
				break;
			case 'options':
				$lang_string['title'] = "Opzioni";
				$lang_string['instructions'] = "Per personalizzare le date che appariranno sul blog usa i campi sottostanti. L'anteprima verr&agrave; aggiornata automaticamente ad ogni cambio di impostazione.";
				// Long Date
				$lang_string['ldate_title'] = "Formato data estesa:";
				$lang_string['weekday'] = "Nome giorno";
				$lang_string['month'] = "Mese";
				$lang_string['day'] = "Numero giorno";
				$lang_string['year'] = "Anno";
				$lang_string['none'] = "Niente";
				// Short Date
				$lang_string['sdate_title'] = "Formato data ridotta:";
				$lang_string['s_month'] = "Mese";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Giorno";
				$lang_string['s_year'] = "Anno";
				$lang_string['zero_day'] = "Antemponi lo zero al giorno";
				$lang_string['show_century'] = "Mostra il secolo";
				// Time
				$lang_string['time_title'] = "Formato ore:";
				$lang_string['12hour'] = "12-ore";
				$lang_string['24hour'] = "24-ore";
				$lang_string['before_noon'] = "Prima di mezzogiorno";
				$lang_string['after_noon'] = "Dopo mezzogiorno";
				// Date
				$lang_string['date_title'] = "Formato data nelle notizie:";
				$lang_string['long_date'] = "Data estesa";
				$lang_string['short_date'] = "Data ridotta";
				$lang_string['time'] = "Ore";
				// men&ugrave;
				$lang_string['menu_title'] = "Formato data nel men&ugrave;:";
				$lang_string['long_date'] = "Data estesa";
				$lang_string['short_date'] = "Data ridotta";
				// Used in multiple places
				$lang_string['zero_day'] = "Antemponi lo zero al giorno";
				$lang_string['zero_month'] = "Antemponi lo zero al mese";
				$lang_string['zero_hour'] = "Antemponi lo zero all'ora";
				$lang_string['separator'] = "Separatore:";
				$lang_string['preview'] = "Anteprima:";
				$lang_string['server_offset'] = "Fuso orario server:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temi";
				$lang_string['instructions'] = "Usa il men&ugrave; a tendina per selezionare il tema.";
				// Themes
				$lang_string['choose_theme'] = "Temi:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Carica immagine";
				$lang_string['instructions'] = "Seleziona l'immagine da caricare cliccando su 'Sfoglia' e poi su 'Carica' per eseguire l'operazione.";
				$lang_string['select_file'] = "Scegli il file:";
				$lang_string['upload_btn'] = "Carica";
				// Error Response
				$lang_string['error'] = "<h2>Opps!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Risultati della ricerca";
				$lang_string['instructions'] = "Risultati della ricerca per <b>%string</b>:";
				$lang_string['not_found'] = "Mi spiace. Nessun risultato trovato."; // Ho un po' personalizzato :D
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contattami";
				$lang_string['instructions'] = "Completa il form sottostante:";
				$lang_string['form_error'] = "&Egrave; necessario compilare i campi Soggetto e Commento.";
				$lang_string['name'] = "Nome:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Soggetto:";
				$lang_string['comment'] = "Commento:";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				$lang_string['success'] = "<h2>Ok!</h2>Messaggio inviato correttamente!<p />";
				$lang_string['failure'] = "<h2>Errore!</h2>Il vostro messaggio non &egrave; stato spedito. Probabilmente il codice anti-spam non &egrave; stato inserito correttamente.<p />";
				$lang_string['contact_capcha'] = "[anti-spam] Inserisci "; // 0.4.2
				$lang_string['contactsent'] = "Contatto inviato a: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "Indirizzo IP:";  // New for 0.4.6
				$lang_string['useragent'] = "User-Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>In data %s, %s ha scritto:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Statistiche";
				$lang_string['general'] = "Generale";
				$lang_string['entry_info'] = "<b>%s</b> notizie / <b>%s</b> parole / <b>%s</b> byte";
				$lang_string['comment_info'] = "<b>%s</b> commenti / <b>%s</b> parole / <b>%s</b> byte";

				$lang_string['trackback_info'] = "<b>%s</b> trackback / <b>%s</b> byte";
				$lang_string['static_info'] = "<b>%s</b> pagine statiche / <b>%s</b> parole / <b>%s</b> byte";
				$lang_string['most_viewed_entries'] = "Le 10 notizie pi visitate";
				$lang_string['most_commented_entries'] = "Le 10 notizie pi&ugrave; commentate";
				$lang_string['most_trackbacked_entries'] = "Le 10 notizie con maggior numero di trackback";
				$lang_string['vote_info'] = "<b>%s</b> voti / <b>%s</b> byte"; // 0.4.1
				$lang_string["most_voted_entries"] = "Le 10 notizie pi&ugrave; votate"; // 0.4.1
				$lang_string["most_rated_entries"] = "Le 10 notizie con voto pi&ugrave; alto"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'Errore HTTP 403.8 - Accesso negato alla pagina/funzione';
				$lang_string["errorline1"] = 'La pagina o la funzione a cui avete tentato di accedere richiede l\'uso dei dei cookies.';
				$lang_string["errorline2"] = 'Riabilita l\'uso dei cookie nel tuo browser o nel software di protezione (firewall, antivirus, ecc.) e tenta nuovamente l\'accesso.';
				$lang_string["clientid"] = 'Client-ID: '; // traduco?
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'Errore HTTP 403.8 - Accesso negato alla pagina/funzione';
				$lang_string["404"] = 'Errore HTTP 404 - Pagina/Funzione inesistente';
				$lang_string["error_404"] = 'La pagina o la funzione a cui avete tentato di accedere non esiste';
				$lang_string["error_javascript"] = 'La pagina o la funzione a cui avete tentato di accedere richiede il supporto a JavaScript per funzionare correttamente.';
				$lang_string["error_emailnotsent"] = 'Invio messaggio fallito.';
				$lang_string["error_emailnotsentcapcha"] = 'Il messaggio non stato inviato poich&egrave; il codice anti-spam non &egrave; stato inserito correttamente oppure &grave; stato proprio inserito.';
				$lang_string["clientid"] = 'Client-ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Amministra faccine";
				$lang_string['instructions'] = "
					Seleziona le faccine che vuoi usare. Scrivi nel campo testo il Tag corrispondente 
					per rimpiazzare l' immagine. Puoi usare Tag multipli, basta separarli con uno 
					spazio.<br /><br />
		
					Per esempio:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					
					<i>(Si raccomanda fortemente l' uso di Tag lunghi almeno 2 caratteri, 
					onde evitare sostituzioni non volute.)</i>";
				$lang_string["upload_instructions"] = 'Carica nuova faccina:';
				$lang_string["upload_success"] = 'Ok! Immagine caricata con successo!';
				$lang_string["upload_error"] = 'Errore! Immagine non caricata.';
				$lang_string["upload_invalid"] = 'Errore! File immagine non valida. L\' immagine deve essere una png, jpg, o gif.';
				$lang_string["save_success"] = 'Preferenze faccine salvate correttamente!';
				$lang_string["save_error"] = 'Errore! Preferenze faccine non salvate.';
				$lang_string["save_button"] = 'Salva faccine';
				break;
			default:
				break;
		}
		
	}
	
?>
