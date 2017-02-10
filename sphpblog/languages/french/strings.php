<?php
	// Translation(s)
	// (c) 2004 Thibaud ChonŽ, thibaud <dot> chone <at> insa-lyon <dot> fr (0.3.7)
	// (c) 2005 Bill Bateman (0.4.6)
	// (c) 2006 Christian Clavet
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Francais
		$lang_string['language'] = 'french';
		$lang_string[ 'locale' ] = array('fr_FR','fra','french');
		$lang_string['rss_locale'] = 'fr-FR'; // New 0.4.8
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'iso-8859-1';
		$lang_string['php_charset'] = 'iso-8859-1';
		setlocale( LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Liens";
		$lang_string['menu_home'] = "Accueil";
		$lang_string['menu_contact'] = "Contactez-moi"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Statistiques"; // <-- New 0.3.7r
		$lang_string['menu_calendar'] = "Calendrier"; // New for 0.4.8
		$lang_string[ 'menu_viewarchives' ] = "Voir les archives"; // New in 0.4.7
		$lang_string['menu_archive'] = "Archives"; // <-- New
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Ajout contenu";
		$lang_string['menu_add_static'] = "Ajout page";
		$lang_string['menu_upload'] = "Image de t&eacute;l&eacute;chargement";
		$lang_string['menu_setup'] = "Configuration";
		$lang_string['menu_categories'] = "Cat&eacute;gories";
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Options";
		$lang_string['menu_themes'] = "Th&egrave;mes";
		$lang_string['menu_colors'] = "Couleurs";
		$lang_string['menu_change_login'] = "Changer de Login";
		$lang_string['menu_logout'] = "Déconnexion";
		$lang_string['menu_login'] = "Connexion";
		$lang_string['menu_most_recent'] = "Derniers commentaires";
		$lang_string['menu_most_recent_entries'] = "Entr&eacute;es les plus R&eacute;centes";
		$lang_string['menu_most_recent_trackback'] = "Trackbacks les plus R&eacute;cents"; // <-- New 0.3.8
		// DATOH_ADD
		$lang_string['menu_add_block'] = "Blocs";
		// DATOH_END
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Aujourd'hui:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Hier:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Compteur"; // New for 0.4.8
		
		// Other
		$lang_string['home'] = "Retour accueil";
		$lang_string['nav_next'] = 'Suivant'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Précédent'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Recherche:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Allez'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page générée en %s secondes'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Visites: '; // New in 0.4.8
		$lang_string['read_more'] = 'En savoir plus...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre' );
		$lang_string['sb_default_title'] = 'Sans Titre';
		$lang_string['sb_default_author'] = 'x';
		$lang_string['sb_default_footer'] = 'x';
		
		$lang_string['sb_edit'] = '&Eacute;diter';
		$lang_string['sb_delete'] = 'Supprimer';
		$lang_string['sb_permalink'] = 'Lien permanent'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'Trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'Lien relatif'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'Ajouter un commentaire';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'Commentaire';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'Commentaires';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '( ';
		$lang_string['sb_view_counter_post'] = ' vue )';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '( ';
		$lang_string['sb_view_counter_plural_post'] = ' vues )';
		
		$lang_string['sb_add_link_btn'] = '+ lien';
		
		$lang_string['sb_rate_entry_btn'] = "D&eacute;clic pour &eacute;valuer l'entr&eacute;e";
		
		// Entry Text Editor
		// DATOH_REPLACE
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
		// DATOH_END
				$lang_string['label_subject'] = "Sujet :";
				$lang_string['label_insert'] = "Insertion Sp&eacute;ciale :";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Voir les images t&eacute;l&eacute;charg&eacute;es";
				$lang_string['label_entry'] = "Contenu :";
				$lang_string['btn_preview'] = "&nbsp;Aper&ccedil;u&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Envoyer&nbsp;";
				$lang_string['file_name'] = "Nom de fichier statique: (les aucuns espaces ou prolongements de dossier)"; // <-- New 0.3.8
				// Javascript Strings <-- Need Translation
				$lang_string['insert_styles'] = "Entrez le texte &agrave; formater";
				$lang_string['insert_image'] = "Entrez l\'URL de l\'image";
				$lang_string['insert_url1'] = "Entrez le texte associ&eacute; au lien (optionnel)";
				$lang_string['insert_url2'] = "Entrez l&Acirc;URL compl&egrave;te du lien";
				$lang_string['insert_url3'] = "Ouvrir l&acute;URL dans une nouvelle fen&ecirc;tre (optionnel):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Compl&eacute;tez les champs Sujet et Contenu";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Optionnel:';
				$lang_string['insert_image_width'] = 'Largeur (optionnel):';
				$lang_string['insert_image_height'] = 'Taille (optionnel):';
				$lang_string['insert_image_popup'] = 'Ouvrir les images dans un popup une fois cliquée (optionnel):';
				$lang_string['insert_image_float'] = 'Flotteur (optionnel):';
				$lang_string['day'] = 'Jour';
				$lang_string['month'] = 'Mois';
				$lang_string['year'] = 'Année';
				$lang_string['hour'] = 'Heure';
				$lang_string['minute'] = 'Minute';
				$lang_string['second'] = 'Seconde';	
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Ajout de Contenu";
				$lang_string['instructions'] = "&Ecirc;tes vous pr&ecirc;t &agrave; bloguer ? Remplissez le formulaire ci dessous, puis cliquez sur 'Aper&ccedil;u' pour v&eacute;rifier la mise en page, ou sur 'Poster' pour sauvegarder votre envoi.";
				$lang_string['title_ad'] = "Confirmez les cinglements de Trackback"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "Ce sont l'URIs Automobile-D&eacute;couvert que vous etes sur le point pour cingler. Si vous ne voulez pas cingler un certain URI, uncheck il ci-dessous. Appuyez sur alors le bouton 'OK 'pour cingler l'URIs v&eacute;rifi&eacute; ou pour serrer l''annulation 'pour ne pas cingler du tout."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (la virgule a s&eacute;par&eacute;)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Catégories";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Aper&ccedil;u / &Eacute;dition de contenu";
				$lang_string['instructions_preview'] = "Voici &agrave; quoi ressemble votre entrée. Si vous utilisez diff&eacute;rents styles de texte ou si vous incluez des images, veillez &agrave; bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre &agrave; jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre &agrave; jour les informations en utilisant le formulaire ci-dessous. Cliquez sur 'Aper&ccedil;u' ou sur 'Envoi' lorque vous avez fini.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Annuler&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Contenu non sauvegard&eacute;. Une erreur est apparue lors de la sauvegarde.<br /><br />le serveur a rapport&eacute; :<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Ajouter une entr&eacute;e statique";
				$lang_string['instructions'] = "Remplissez le formulaire suivant pour cr&eacute;er une page statique. Contrairement à une entr&eacute;e classique, les pages statiques apparaissent en lien dans le menu de droite. Elles servent pour des pages toujours accessibles comme par exemple un CV, une page de contact, un agenda, etc. Cliquez sur 'Apercu' pour voir à quoi cette page ressemblera, ou sur 'Poster' pour la sauvegarder.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Aper&ccedil;u / &Eacute;dition de contenu";
				$lang_string['instructions_preview'] = "Voici &agrave; quoi ressemble votre entrée. Si vous utilisez diff&eacute;rents styles de texte ou si vous incluez des images, veillez a bien fermer toutes vos balises.";
				$lang_string['title_update'] = "Mettre à jour";
				$lang_string['instructions_update'] = "Vous pouvez mettre a jour les informations en utilisant le formulaire ci dessous. Cliquez sur 'Apercu' ou sur 'Poster' lorque vous avez fini.";
				$lang_string['form_error'] = "Veuillez completer les champs Sujet, Entrée et Nom de fichier.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Contenu non sauvegard&eacute;. Une erreur est apparue lors de la sauvegarde.<br /><br />le serveur a rapport&eacute; :<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Ajout / Gestion des liens";
				$lang_string['instructions'] = "Ajouts de blocs personalis&eacute;s";
				$lang_string['up'] = "Haut";
				$lang_string['down'] = "Bas";
				$lang_string['edit'] = "Editer";
				$lang_string['delete'] = "Effacer";
				$lang_string['block_name'] = "Nom du bloc:";
				$lang_string['block_content'] = "Contenu du bloc:";
				$lang_string['instructions_edit'] = "Vous &ecirc;tes en train d&acute;&eacute;diter le bloc:";
				$lang_string['instructions_modify'] = "Cliquez ci-dessus pour modifier le bloc:";
				$lang_string['submit_btn_edit'] = "Editer le bloc";
				$lang_string['submit_btn_add'] = "Ajouter le bloc";
				$lang_string['form_error'] = "Veuillez completer le champ Nom.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Pages statiques:";
				// Add / Manage Links
				$lang_string['title'] = "Ajouter / G&eacute;rer Les Liens";
				$lang_string['instructions'] = "Ajouter des liens vers d'autres sites. Remplissez le formulaire ci-dessous et cliquez sur 'Ajouter le lien' pour l'ajouter. Utilisez les boutons 'Haut' et 'Bas' pour changer l'ordre des liens. Cliquez sur le bouton 'Editer' pour modifier un lien. Cliquez sur le bouton 'Effacer' pour supprimer un lien.";
				$lang_string['up'] = "Haut";
				$lang_string['down'] = "Bas";
				$lang_string['edit'] = "Editer";
				$lang_string['delete'] = "Effacer";
				$lang_string['link_name'] = "Nom du Lien :";
				$lang_string['link_url'] = "Adresse du Lien : (Optionnel. Laissez vide pour cr&eacute;er une sous cat&eacute;gorie.)";
				$lang_string['instructions_edit'] = "Vous &eacute;ditez actuellement le lien :";
				$lang_string['instructions_modify'] = "Cliquez ci-dessous pour modifier le lien :";
				$lang_string['submit_btn_edit'] = "Editer";
				$lang_string['submit_btn_add'] = "Ajouter";
				$lang_string['form_error'] = "Compl&egrave;tez le champ Nom";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Ajoutez/Contr&ocirc;lez les cat&eacute;gories";
				$lang_string['instructions'] = "Employez le formulaire ci-dessous pour ajouter ou &eacute;diter une cat&eacute;gories. Chaque cat&eacute;gorie doit respecter le format suivant : 'nom de cat&eacute;gorie (num&eacute;ro d'identification) '.  Ajouter un espace devant une catégories pour en faire une sous-catégories.<br /><br /><b>Exemple:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)";
				$lang_string['error'] = "Erreur";
				$lang_string['current_categories'] = "Cat&eacute;gories actuelles";
				$lang_string['no_categories_found'] = "Aucunes tat&eacute;gories trouv&eacute;es";
				$lang_string['category_list'] = "Liste des cat&eacute;gorie:";
				$lang_string['validate'] = "Vérification";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Changer les couleurs";
				$lang_string['instructions'] = "Vous pouvez changer les couleurs du texte et du fond de votre blog. Utilisez la palette pour choisir votre couleur, puis recopiez la valeur HEX de cette couleur dans les champs correspondants.";
				$lang_string['bg_color'] = "Fond du site";
				$lang_string['main_bg_color'] = "Fond de page";
				$lang_string['border_color'] = "Bordure de page";
				$lang_string['inner_border_color'] = "Bordure interne";
				$lang_string['header_bg_color'] = "Fond de l'ent&ecirc;te";
				$lang_string['header_txt_color'] = "Texte de l ent&ecirc;te";
				$lang_string['menu_bg_color'] = "Fond du menu";
				$lang_string['footer_bg_color'] = "Fond du pied de page";
				$lang_string['txt_color'] = "Texte principal";
				$lang_string['headline_txt_color'] = "Texte Titre";
				$lang_string['date_txt_color'] = "Date";
				$lang_string['footer_txt_color'] = "Texte pied de page";
				$lang_string['link_reg_color'] = "Lien";
				$lang_string['link_hi_color'] = "Lien visité";
				$lang_string['link_down_color'] = "Survol de lien";
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
				$lang_string['color_preset'] = "Thème de couleur:"; // 0.3.7q
				$lang_string['scheme_name'] = "Entrez le nom de votre thème de couleur:"; // 0.3.7q
				$lang_string['scheme_file'] = "Entrez le nom du fichier de votre thème de couleur: (les aucuns espaces ou prolongements de dossier)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Sauver&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Veuillez entrer un nom pour votre thème de couleur personnalisé."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Le th&egrave;me actuellement choisi ne tient pas compte des couleurs personnalisées.';
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Param&egrave;tres de configuration non sauvegard&eacute;s. Probleme rencontr&eacute; durant l op&eacute;ration de sauvegarde.<br /><br />le serveur &agrave; report&eacute; :<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Nom:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Page web:"; //New in 0.4.6.2
				$lang_string['comment'] = "Commentaire:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "Adresse IP:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['commentposted'] = "Nouveau commentaire &agrave;: ";  // New for 0.4.6.2
				$lang_string['comment_capcha'] = "Anti-Pourriel: Enter <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Commentaires";
				$lang_string['header'] = "Ajouter commentaire";
				$lang_string['instructions'] = "Remplissez ce formulaire pour ajouter un commentaire.";
				$lang_string['comment_name'] = "Votre nom:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Se souvenir de moi:"; // 0.3.8
				$lang_string['comment_text'] = "Votre commentaire:";
				$lang_string['post_btn'] = "&nbsp;Poster&nbsp;";
				$lang_string['delete_btn'] = "Effacer";
				$lang_string['expired_comment1'] = "Désolé, les nouveaux commentaires ne sont plus admis."; // New for 0.4.8
				$lang_string['expired_comment2'] = " jours."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Désolé, votre adresse IP à été bannie. Vous n'ètes pas autorisé à écrire de nouveaux commentaires."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2> Commentaire non sauvegard&eacute;. Probl&egrave;me rencontr&eacute; durant l'&eacute;xecution du script.<br /><br />Le Serveur &agrave; report&eacute; :<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2> Commentaire non d&eacute;truit. Probl&egrave;me rencontr&eacute; durant l'op&eacute;ration de suppression de votre commentaire.<br /><br />le serveur &agrave; report&eacute; :<br />";
				$lang_string['form_error'] = "Veuillez remplir les champs NOM et COMMENTAIRE"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Titre";
				$lang_string['instructions'] = "Voici un aper&ccedil;u de ce que vous souhaitez effacer. Soyez certain de ce que vous faites, l'opération est irréversible...";
				$lang_string['ok_btn'] = "&nbsp;Je suis s&ucirc;r&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;J'annule&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Impossible de supprimer<br /><br />Le serveur &agrave; report&eacute; :<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Effacer une page statique";
				$lang_string['instructions'] = "Voici un aper&ccedil;u de la page que vous souhaitez effacer. Soyez certain de ce que vous faites, l'opération est irréversible...";
				$lang_string['ok_btn'] = "&nbsp;Je suis s&ucirc;r&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;J'annule&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Impossible de supprimer la page.<br /><br />Le Serveur &agrave; report&eacute; :<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Liste des images";
				$lang_string['instructions'] = "Cliquez sur ces liens pour voir les images.<br><br>Pour ajouter une image :<br>1) Copier l URL de votre image.<br>2) Retournez &agrave; la page d'ajout ou d'&eacute;dition.<br>3) Cliquez sur le bouton 'img' et collez l'URL de l'image dans la fenêtre.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "L'Information de M&eacute;ta-donn&eacute;es";
				$lang_string['instructions'] = "L'information ci-dessous est employ&eacute;e pour les Méta-données, lesquelles aides les moteurs de recherche à trouver votre site. L'information peut &eacute;galement &ecirc;tre employ&eacute;e pour alimenter des flux RSS.";
				$lang_string['info_keywords'] = "Mots-cl&eacute;s:  (liste de mots-cl&eacute;s s&eacute;par&eacute;s par des virgules.)";
				$lang_string['info_description'] = "Description:  (description libre de votre site.)";
				$lang_string['info_copyright'] = "Droits:  (Copyright, ou lien vers un document contenant l'information.)";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> L'information non sauv&eacute;e.  Un problème est survenu pendant l'opération de sauvegarde.<br /><br />Le Serveur a rapport&eacute;:<br />";
				$lang_string['form_error'] = "Veuillez completer les champs manquants.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2> L'information non sauv&eacute;e.  Un problème est survenu pendant l'opération de sauvegarde.<br /><br />Le Serveur a rapport&eacute;:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Mise à niveau</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n le besoin de dossiers de commentaire d'&ecirc;tre am&eacute;lior&eacute;:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Commentaires de mise a niveau"; // New 0.3.8
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Veuillez entrez votre nom d'utilisateur et votre mot de passe ci-dessous.";
				$lang_string['username'] = "Nom d'utilisateur :";
				$lang_string['password'] = "Mot de passe :";
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Success
				$lang_string['success'] = "Vous êtes maintenant identifié<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2> Erreur d'identification. V&eacute;rifiez que vous avez entr&eacute; correctement votre nom d'utilsateur et votre mot de passe, et r&eacute;essayez.<p />";
				$lang_string['form_error'] = "Compl&eacute;tez les champs NOM et MOT DE PASSE"; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Déconnexion";
				$lang_string['instructions'] = "<h2>Whoops!</h2> Impossible de se déconnecter car le cookie n'a put être supprimé !<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Sauvegarde impossible.<br /><br />Le Serveur a report&eacute; :<br />";
				break;
			case 'set_login': // <-- New
				$lang_string['title'] = "Changez le nom d'utilisateur et le mot de passe.";
				$lang_string['instructions'] = "Utiliser le formulaire ci-dessous pour changer votre nom d'utilisateur et votre mot de passe.";
				$lang_string['username'] = "Nom d'utilisateur:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Succ&egrave;s!</h2>Votre nom d'utilisateur et/ou votre mot de passe sont activés.<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2> L'information non sauv&eacute;e.  Un problème est survenu pendant l'opération de sauvegarde de votre nom d'utilisateur et/ou de votre mot de passe.<br /><br />Le serveur a rapport&eacute;:<br />";
				$lang_string['form_error'] = "Veuillez completer les champs de username et de mot de passe.";
				$lang_string['explanation'] = "Dans les nouvelles versions de SPhpB, pour modifier votre mot de passe, vous devez supprimer le fichier /config/password.php et vérifier que le ficher install*.php existe sur le serveur. Ensuite rechargez la page.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "Merci d'avoir choisi Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choisissez votre langue:";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Bienvenue";
				$lang_string['instructions'] = "
				Merci d'avoir choisi Simple PHP Blog!<br /><br />Simple PHP Blog est une plateforme de blog l&eacute;gère. Elle nécéssite au minimum PHP 4.1, ainsi que les droits d'écriture sur le serveur. Toutes les informations sont stockées dans des fichiers texte, aucune base de donnée n'est nécessaire.<br /><br />
				Afin de commencer, Simple PHP Blog doit cr&eacute;er trois dossiers (<b>config</b>, <b>content</b>, et <b>images</b>) afin de stocker vos informations.  Apr&egrave;s cela, vous cr&eacute;erez votre mot de passe pour pouvoir commencer à bloguer.<br /><br />
				<b>Cliquez ci-dessous pour commencer l'installation:</b>";
				$lang_string['begin'] = "[ Commencez l'installation ]";
				break;
			case 'install02':
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "Tentative de création des dossiers <b>config</b>, <b>content</b>, et <b>images</b>:";
				$lang_string['folder_exists'] = "Le dossier existe d&eacute;j&agrave;.  Aucuns changements n'a été effectués...";
				$lang_string['folder_failed'] = "La création de dossier à échouée...";
				$lang_string['folder_success'] = "La création de dossier à réussie...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				La création de dossier à échouée!<br /><br />Les raisons les plus probables sont:<br />
				<ol>
				<li>Vérifiez que vous disposer des droits de lecture/écriture suffisants.</li>
				<li>Le nom d'utilisateur de tous les dossiers doit être identique.</li>
				</ol>
				Suivez les instructions de d&eacute;pannage ci-dessous et cliquez sur REESSAYER:<br />
				<ol>
				<li>Cr&eacute;ez manuellement les dossiers suivants: <b>config</b>, <b>content</b>, et <b>images</b>.</li>
				<li>Définissez les droits de lecture/écriture nécessaire à l'aide d'un logiciel FTP (le CHMOD devrait être de 777). Pour modifier ce dernier il est possible que vous deviez prendre contact avec votre hébergeur.</li>
				<li>Assurez-vous que le nom d'utilisateur de tous vos dossiers est identique. Pour modifier ce dernier il est possible que vous deviez prendre contact avec votre hébergeur.</li>
				</ol>";
				$lang_string['try_again'] = "[ Réessayer ]";
				// Success
				$lang_string['success'] = "La création de dossier à réussie...  Cliquez ci-dessous pour continuer:";
				$lang_string['continue'] = "[ Continuer ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Votre serveur web supporte les protocoles de cryptage suiavants:</b>";
				$lang_string['standard'] = "Standard DES Encryption: ";
				$lang_string['extended'] = "Extended DES Encryption: ";
				$lang_string['MD5'] = "MD5 Encryption: ";
				$lang_string['blowfish'] = "Blowfish Encryption: ";
				$lang_string['enabled'] = "Activé";
				$lang_string['disabled'] = "Désactivé";
				$lang_string['using_standard'] = "<b>Utilise Standard DES Encryption...</b>";
				$lang_string['using_extended'] = "<b>Utilise Extended DES Encryption...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Utilise MD5 Encryption...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Utilise Blowfish Encryption...</b>";
				$lang_string['using_unknown'] = "<b>Utilise Unknown Encryption...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Changez le nom d'utilisateur/mot de passe";
				$lang_string['instructions'] = "Utilisez le formulaire ci-dessous pour changer votre nom d'utilisateur et/ou votre mot de passe.";
				$lang_string['username'] = "Nom d'utilisateur:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Success
				$lang_string['success'] = "F&eacute;licitations!  Vous &ecirc;tes maintenant enregistré.  Cliquez ci-dessous pour vous rendre sur la page d'installation où vous pourrez nommer votre blog.";
				$lang_string['btn_setup'] = "[ Installation ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2> Information non sauv&eacute;e.  Un problème est survenu durant l'opération de sauvegarde de votre nom d'utilisateur et/ou de votre mot de passe.<br /><br />Le serveur a rapport&eacute;:<br />";
				$lang_string['form_error'] = "Veuillez completer les champs NOM D'UTILISATEUR et MOT DE PASSE.";
				break;
			case 'install04':
				$lang_string['title'] = "Création du fichier contenant le mot de passe";
				$lang_string['instructions'] = "
				<ol>
				<li>Ouvrez un &eacute;diteur de texte. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Cr&eacute;ez un nouveau fichier texte.</li>
				<li>Copiez/collez le code contenu du champ texte ci-dessous dans le fichier texte.</li>
				<li>Sauvegardez votre fichier et appelez-le <b>password.php</b></li>
				<li>Ouvrez un logiciel FTP.</li>
				<li>T&eacute;l&eacute;chargez votre nouveau <b>password.php</b> dans le dossier <b>config</b></li>
				<li>Supprimez <b>password.php</b> de votre disque dur.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Note:  Si vous voulez réinitialiser votre nom d'utilisateur et votre mot de passe (en cas d'oubli par exemple), supprimez <b>password.php</b> dans <b>config</b> sur le serveur web. A votre prochaine visite, le processus d'installation vous demandera de définir un nouveau mot de passe.</i>";
				$lang_string['code'] = "Code du fichier <b>password.php</b>:";
				$lang_string['continue'] = "[ Continuer ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Connexion";
				$lang_string['instructions'] = "Veuillez entrer votre nom d'utilisateur et votre mot de passe ci-dessous";
				$lang_string['username'] = "Nom d'utilisateur:";
				$lang_string['password'] = "Mot de passe:";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				// Success
				$lang_string['success'] = "Félicitations! Vous êtes maintenant enregistré. Cliquez ci-dessous pour vous rendre sur la page d'installation, où vous pourrez personnaliser votre blog.  PS:  Maintenant que vous avez compl&eacute;t&eacute; le proc&eacute;d&eacute; d'installation, il est recommandé que vous supprimiez les dossiers installXX.php sur le serveur (c.-à-d. install00.php par install06.php)<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2> Vous n'&ecirc;tes pas connecté.  Veuillez v&eacute;rifier que vous avez correctement rentré votre nom d'utilisateur et votre mot de passe et essayez de nouveau.<p />";
				$lang_string['form_error'] = "Veuillez completer les champs NOM D'UTILISATEUR et MOT DE PASSE.";
				// Success
				$lang_string['btn_setup'] = "[ Installation ]";
				$lang_string['btn_try_again'] = "[ Réessayer ]";
				break;
			case 'setup':
				$lang_string['title'] = "Installation";
				$lang_string['instructions'] = "Vous pouvez modifier le nom de votre blog ainsi que vos informations personnelles.";
				$lang_string['blog_title'] = "Nom du Blog :";
				$lang_string['blog_author'] = "Auteur :";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "Avatar URL: (Laissez vide si aucun)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Pied de Page :";
				$lang_string['blog_choose_language'] = "Choisissez votre langue :";
				$lang_string['blog_enable_comments'] = "Autoriser les commentaires"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Ouvrir les commentaires dans un Popup"; // <-- New 0.3.6
				$lang_string['blog_enable_lastcomments'] = "Activer la liste des commentaires les plus réçents"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Activer la liste des entrées les plus réçentes"; // New for 0.4.7
				$lang_string['blog_enable_voting'] = "Autoriser les visiteurs à évaluer vos entrées"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Envoyez un email quand de nouveaux commentaires sont signal&eacute;s"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Activer l'envoi de &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_enable_stats'] = "Activer les statistiques"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Activer la liste des commentaires les plus réçents"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Activer la liste des entrées les plus réçentes"; // New for 0.4.7
        $lang_string['blog_enable_cache'] = "Autoriser la mise en cache (peut améliorer les performances sur certains serveurs)"; // New for 0.4.6
				$lang_string['blog_ping_urls'] = "&Eacute;crivez l'URL complète (i.e. http://rpc.weblogs.com/RPC2) du service à &quot;ping&quot;.<br />(Vous pouvez &eacute;crire plus d'une adresse s&eacute;par&eacute;e par des virgules.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Un rétrolien (trackback) est un système de liens inter-blogues semi-automatisé. Il permet aux auteurs de relier des billets de blogues différents et parlant du même sujet, ou se faisant référence (qu'elle soit unilatérale ou mutuelle, le second cas étant en pratique très rare)."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Autoriser les trackbacks"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Autoriser l'auto-découverte de trackbacks"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Entr&eacute;es maximum &agrave; afficher:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "&Eacute;tiquettes à permettre dans les commentaires:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Depuis PHP 4.0.4, il est possible de lire et &eacute;crire des dossiers compressés gzip (gz), 
					ainsi l'espace disque est économisé. Il peut &eacute;galement d'une mani&egrave;re transparente 
					compresser les pages qui sont envoy&eacute;es aux navigateurs qui supporte la compression 
					gzip, permettant ainsi une économie de bande passante.<br />
					<br />
					L'utilisation de Zlib dans PHP n'est pas permis par d&eacute;faut. Si les checkboxes sont désactivées, 
					alors votre serveur ne supporte pas Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Autoriser la compression GZIP pour les dossiers de base de donn&eacute;es"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Autoriser la compression GZIP pour HTTP"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Sauvegarde des param&egrave;tres de configuration impossibles. Probl&egrave;me recontr&eacute; durant l'&eacute;xecution du script.<br /><br />Le Serveur a report&eacute; :<br />";
				$lang_string['form_error'] = "Veuillez compl&eacute;ter les champs AUTEUR et TITRE";
				$lang_string['label_entry_order'] = "Ordre d'apparition :";
				$lang_string['select_new_to_old'] = "Plus récents en premier";
				$lang_string['select_old_to_new'] = "Plus anciens en premier";
				$lang_string['label_comment_order'] = "Ordre des commentaires:";
				$lang_string['cal_sunday'] = "Lundi"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Jour de d&eacute;but de Semaine dans le calendrier"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Activer le bloc calendrier/archives"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Activer le bloc archives"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Activer le bloc compteur"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Nombre d'heures minimum avant qu'une même adresse IP soit recomptée:"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Enable Login Link (Please bookmark \"login.php\" first...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Activer le titre du blog"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Activer les permaliens sur les entr&eacute;es"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Activer l'anti-spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Activer le compteur dans le pied de page"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam Images (Librairie GD seulement) / Anti-Spam Text Field"; // New for 0.4.8
				$lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
				$lang_string['title_comments'] = "Commentaires"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compression"; // New in 0.4.7
				$lang_string['title_entries'] = "Entrées"; // New in 0.4.7
				$lang_string['title_general'] = "Général"; // New in 0.4.7
				$lang_string['title_language'] = "Langage"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Nombre de jours durant lesquels les commentaires sont autorisés (0 = infini)"; // New in 0.4.8
        break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "URL de Trackback pour cette entr&eacute;e:";
				$lang_string['delete_btn'] = "Effacer";
				// Error Response
				$lang_string['error_add'] = "Erreur";
				break;
			case 'options':
				$lang_string['title'] = "Options";
				$lang_string['instructions'] = "Utilisez ce formulaire pour paramétrer les formats de date et d'heure utilis&eacute;s sur votre blog. Vous pouvez choisir une horloge à 12 ou 24 heures, une date à format long ou court. Les champs d'aper&ccedil;u se mettent automatiquement à jour et affichent le format choisi.";
				// Long Date
				$lang_string['ldate_title'] = "Format d&acute;une date longue :";
				$lang_string['weekday'] = "Jour de la semaine";
				$lang_string['month'] = "Mois";
				$lang_string['day'] = "Jour";
				$lang_string['year'] = "Ann&eacute;e";
				$lang_string['none'] = "Aucun";
				// Short Date
				$lang_string['sdate_title'] = "Format d&acute;une date courte :";
				$lang_string['s_month'] = "Mois";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Jour";
				$lang_string['s_year'] = "Ann&eacute;e";
				$lang_string['zero_day'] = "Afficher les z&eacute;ros devant les jours (01, 02, etc)";
				$lang_string['show_century'] = "Afficher les si&egrave;cles";
				// Time
				$lang_string['time_title'] = "Format de l'heure:";
				$lang_string['12hour'] = "Horloge &agrave; 12 heures";
				$lang_string['24hour'] = "Horloge &agrave; 24 heures";
				$lang_string['before_noon'] = "Matin";
				$lang_string['after_noon'] = "Apr&egrave;s Midi";
				// Date
				$lang_string['date_title'] = "Format d'affichage de la date :";
				$lang_string['long_date'] = "Date longue";
				$lang_string['short_date'] = "Date courte";
				$lang_string['time'] = "Horloge";
				// Menu
				$lang_string['menu_title'] = "Menu format d'affichage de la date:";
				$lang_string['long_date'] = "Date longue";
				$lang_string['short_date'] = "Date courte";
				// Used in multiple places
				$lang_string['zero_day'] = "Afficher les z&eacute;ros devant les jours (01, 02, etc)";
				$lang_string['zero_month'] = "Afficher les z&eacute;ros devant les mois (01, 02, etc)";
				$lang_string['zero_hour'] = "Afficher les z&eacute;ros devant les heures (01, 02, etc)";
				$lang_string['separator'] = "S&eacute;parateur :";
				$lang_string['preview'] = "Aper&ccedil;u :";
				$lang_string['server_offset'] = "Offset serveur:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Sauvegarde des param&egrave;tres de configuration impossibles. Probl&egrave;me recontr&eacute; durant l'&eacute;xecution du script.<br /><br />Le Serveur a report&eacute; :<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Th&egrave;mes";
				$lang_string['instructions'] = "Employez le menu drop-down pour choisir un th&egrave;me diff&eacute;rent.";
				// Themes
				$lang_string['choose_theme'] = "Th&egrave;mes:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Envoyer&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Information non sauvegardée. Un problème est survenu durant l'opération de sauvegarde.<br /><br />Le serveur à rapport&eacute;:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Upload d'image";
				$lang_string['instructions'] = "Cliquez sur le bouton ci-dessous pour choisir un fichier &agrave; uploader.";
				$lang_string['select_file'] = "Choisir un fichier";
				$lang_string['upload_btn'] = "Upload";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2> Upload d'image impossible. Voici quelques informations : <br /><br />Le serveur a report&eacute; :<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "R&eacute;sultats de la recherche";
				$lang_string['instructions'] = "R&eacute;sultats de la recherche pour <b>%string</b>:";
				$lang_string['not_found'] = "Aucun résultat n'a été trouvé";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contact";
				$lang_string['instructions'] = "Compl&eacute;tez le formulaire :";
				$lang_string['form_error'] = "Veuillez completer les champs SUJET et COMMENTAIRE.";
				$lang_string['name'] = "Nom:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Sujet:";
				$lang_string['comment'] = "Commentaire:";
				$lang_string['submit_btn'] = "&nbsp;Soumettre&nbsp;";
				$lang_string['success'] = "<h2>Succ&egrave;s !</h2>Votre message a &eacute;t&eacute; envoy&eacute;.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Entrez <b>%s</b>"; // 0.4.2
				$lang_string['failure'] = "<h2>Erreur !</h2> Votre message n'a pas &eacute;t&eacute; envoy&eacute;. Tr&egrave;s probablement car vous n'avez pas saisi correctement le code anti-spam<p />";
				$lang_string['contactsent'] = "Contact envoy&eacute; &agrave; travers: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "Adresse IP:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Statistiques";
				$lang_string['general'] = "G&eacute;n&eacute;ralit&eacute;s";
				$lang_string['entry_info'] = "<b>%s</b> entr&eacute;es <b>%s</b> mots stock&eacute;s pour <b>%s</b> octets";
				$lang_string['comment_info'] = "<b>%s</b> commentaires <b>%s</b> mots stock&eacute;s pour <b>%s</b> octets";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stock&eacute;s pour <b>%s</b> octets";
				$lang_string['static_info'] = "<b>%s</b> pages statiques <b>%s</b> mots stock&eacute;s pour <b>%s</b> octets";
				$lang_string['most_viewed_entries'] = "10 entr&eacute;es les plus vues";
				$lang_string['most_commented_entries'] = "10 entr&eacute;es les plus comment&eacute;es";
				$lang_string['most_trackbacked_entries'] = "10 entr&eacute;es contenant le plus de trackbacks";
				$lang_string['vote_info'] = "<b>%s</b> vote stock&eacute;es pour <b>%s</b> octets"; // 0.4.1
				$lang_string["most_voted_entries"] = "Entr&eacute;es les plus vot&eacute;es"; // 0.4.1
				$lang_string["most_rated_entries"] = "Entr&eacute;es les plus &eacute;valu&eacute;es"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Acc&egrave;s De Page/Function Ni&eacute;';
				$lang_string["errorline1"] = "La page que vous essayer de visualiser nécessite que votre naviguateur accepte les cookies.";
				$lang_string["errorline2"] = "Veuillez activer le support des cookies dans votre navigateur et recommencez";
				$lang_string["clientid"] = 'Id client: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Acc&egrave;s De Page/Function Ni&eacute;';
				$lang_string["404"] = "HTTP Error 404 - Page/Function N'existe pas";
				$lang_string["error_404"] = "La page demandée n'existe pas.";
				$lang_string["error_javascript"] = "La page que vous essayer de visualiser nécessite l'utilisation de Javascript.";
				$lang_string["error_emailnotsent"] = "Le message n'a pas été envoyé";
				$lang_string["error_emailnotsentcapcha"] = "Le message n'a pas été envoyé car le code anti-spam était incorrect.";
				$lang_string["clientid"] = 'Id client: ';
				break;
		 case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Admin Emoticons";
				$lang_string['instructions'] = "
					Renseignez les tags que vous voulez remplacer par des images. Les tags multiples sont acceptés, séparez les par des espaces.<br /><br />
					Exemple:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					<i>(Il est recommandé de choisir des tags de plus de 2 caratères pour éviter les remplacements non souhaités)</i>";
				$lang_string["upload_instructions"] = 'Upload de nouveaux Emoticons:';
				$lang_string["upload_success"] = 'Image uploadée avec succès!';
				$lang_string["upload_error"] = 'Erreur! Image non uploadée.';
				$lang_string["upload_invalid"] = "Erreur! Fichier image invalide. L'image doit être au format png, jpg, ou gif.";
				$lang_string["save_success"] = 'Paramètres sauvegardés avec succès!';
				$lang_string["save_error"] = 'Erreur! Paramètres non sauvegardés.';
				$lang_string["save_button"] = 'Sauvegarder les Emoticons';
				break;
			default:
				break;
		}

	}
		
?>
