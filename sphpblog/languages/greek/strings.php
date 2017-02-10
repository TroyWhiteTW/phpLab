<?php
	// Greek Translations
	// (c) 2004 Alexander Palmo, apalmo <at> bigevilbrain <dot> com (0.4.1)
	//     2006 update & revision by George Yiftoyiannis 
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Greek
		$lang_string['language'] = 'greek';
		
		$lang_string['locale'] = array('el_GR', 'grc');
		$lang_string['rss_locale'] = 'el-GR'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-7'; // is utf-8 out of the question ???
		$lang_string['php_charset'] = 'ISO-8859-7'; // ditto ...
		
		setlocale( LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Σύνδεσμοι";
		$lang_string['menu_home'] = "Αρχική Σελίδα";
		$lang_string['menu_contact'] = "Επικοινωνία";
		$lang_string['menu_stats'] = "Στατιστικά";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string[ 'menu_viewarchives' ] = "View Archives"; // New in 0.4.7
		$lang_string['menu_archive'] = "Αρχείο";
		$lang_string['menu_menu'] = "Μενού";
		$lang_string['menu_add'] = "Εισαγωγή Εγγραφής";
		$lang_string['menu_add_static'] = "Εισαγωγή Στατικής Σελίδας";
		$lang_string['menu_upload'] = "Αποστολή Εικόνας";
		$lang_string['menu_setup'] = "Εγκατάσταση";
		$lang_string['menu_categories'] = "Κατηγορίες";
		$lang_string['menu_info'] = "Πληροφορίες"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Επιλογές";
		$lang_string['menu_themes'] = "Θέματα";
		$lang_string['menu_colors'] = "Χρώματα";
		$lang_string['menu_change_login'] = "Αλλαγή Login";
		$lang_string['menu_logout'] = "Έξοδος";
		$lang_string['menu_login'] = "Σύνδεση";
		$lang_string['menu_most_recent'] = "Πρόσφατα Σχόλια";
		$lang_string['menu_most_recent_entries'] = "Πρόσφατες Εγγραφές";
		$lang_string['menu_most_recent_trackback'] = "Πρόσφατα Trackbacks";
		$lang_string['menu_add_block'] = "Blocks";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Today:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Yesterday:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Counter Totals"; // New for 0.4.8
		
		// Other
		$lang_string['home'] = 'Επιστροφή στην Αρχική Σελίδα';
		$lang_string['nav_next'] = 'Επόμενο'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Πίσω'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Αναζήτηση:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Πάμε!'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Η σελίδα δημιουργήθηκε σε %s δευτερολέπτα'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Ιανουάριος', 'Φεβρουάριος', 'Μάρτιος', 'Απρίλιος', 'Μάϊος', 'Ιούνιος', 'Ιούλιος', 'Αύγουστος', 'Σεπτέμβριος', 'Οκτώβριος', 'Νοέμβριος', 'Δεκέμβριος' );
		$lang_string['sb_default_title'] = 'Χωρίς Τίτλο';
		$lang_string['sb_default_author'] = 'Χωρίς Συγγραφέα';
		$lang_string['sb_default_footer'] = 'Χωρίς Υποσέλιδο';
		
		$lang_string['sb_edit'] = 'επεξεργασία';
		$lang_string['sb_delete'] = 'διαγραφή';
		$lang_string['sb_permalink'] = 'permalink';
		$lang_string['sb_trackback'] = 'trackbacks';
		$lang_string['sb_relatedlink'] = 'σχετικός σύνδεσμος'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'εισαγωγή σχολίου';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'σχόλιο';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'σχόλια';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' εμφάνιση';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' εμφανίσεις';
		
		$lang_string['sb_add_link_btn'] = 'Προσθέστε σύνδεσμο';
		
		$lang_string['sb_rate_entry_btn'] = 'Βαθμολόγηση Εγγραφής';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Θέμα:";
				$lang_string['label_insert'] = "Εισαγωγή Ειδικού:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Επισκόπηση Απεσταλμένων Εικόνων";
				$lang_string['label_entry'] = "Εγγραφή:";
				$lang_string['btn_preview'] = "&nbsp;Προεπισκόπηση&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Δημοσίευση&nbsp;";
				$lang_string['file_name'] = "Όνομα αρχείου: (χωρίς διαστήματα ή καταλήξεις αρχείων)";
				// Javascript Strings
				$lang_string['insert_styles'] = "Εισάγετε το κείμενο προς επεξεργασία:";
				$lang_string['insert_image'] = "Εισάγετε το URL για την εικόνα:";
				$lang_string['insert_url1'] = "Εισάγετε το κείμενο για το σύνδεσμο (Προαιρετικό):";
				$lang_string['insert_url2'] = "Εισάγετε το πλήρες URL για το σύνδεσμο:";
				$lang_string['insert_url3'] = "Φόρτωση URL σε νέο παράθυρο (Προαιρετικό):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε τα πεδία Επικεφαλίδα και Εγγραφή.";	
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Προαιρετικό:';
				$lang_string['insert_image_width'] = 'Μήκος (Προαιρετικό):';
				$lang_string['insert_image_height'] = 'Ύψος (Προαιρετικό):';
				$lang_string['insert_image_popup'] = 'Επισκόπηση σε πλήρες μέγεθος pop-up (Προαιρετικό):';
				$lang_string['insert_image_float'] = 'Μη σταθερό (Προαιρετικό):';
				
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
				$lang_string['title'] = "Εισαγωγή Εγγραφής";
				$lang_string['instructions'] = "Έτοιμοι για blogging? Συμπληρώστε την παρακάτω φόρμα και κάντε κλικ στην 'Προεπισκόπηση' για να δείτε πως φαίνεται, ή κάντε κλικ στην 'Αποστολή' για να αποθηκεύσετε την Εγγραφή σας.";
				$lang_string['title_ad'] = "Επιβεβαιώστε τα Trackback Pings";
				$lang_string['instructions_ad'] = "Αυτά είναι τα Auto-Discovered URIs στα οποία θα γίνει ping. Εάν ΔΕΝ επιθυμείτε να γίνει ping σε κάποιο URI, απο-επιλέξτε το. Έπειτα πατήστε 'OK' για να γίνει ping στα επιλεγμένα URIs ή 'Cancel' για να μην γίνει καθόλου ping.";
				$lang_string['label_tb_ping'] = "Trackback στα οποία θα γίνει ping (χωρισμένα με κόμμα)";
				$lang_string['label_tb_autodiscovery'] = "Αυτόματη Εύρεση";
				$lang_string['label_relatedlink'] = "Σχετικός σύνδεσμος"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Προεπισκόπηση / Επεξεργασία Εγγραφής";
				$lang_string['instructions_preview'] = "Η Εγγραφή σας φαίνεται κάπως έτσι. Αν χρησιμοποιείτε text styles ή συμπεριλαμβάνετε εικόνες, μην ξεχάσετε να 'κλείσετε' όλα τα 'tags'.";
				$lang_string['title_update'] = "Ενημέρωση Εγγραφής";
				$lang_string['instructions_update'] = "Μπορείτε να αλλάξετε την εγγραφή σας χρησιμοποιώντας την παρακάτω φόρμα. Όταν τελειώσετε, κάντε κλικ στην 'Προεπισκόπηση' ή στην 'Δημοσίευση'.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Άκυρο&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Η Εγγραφή δεν καταχωρήθηκε. Υπήρξε ένα πρόβλημα κατά την καταχώρηση .<br /><br />Μήνυμα Server:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Εισαγωγή Στατικής Σελίδας";
				$lang_string['instructions'] = "Συμπληρώστε την παρακάτω φόρμα για να δημιουργήσετε μια Στατική Σελίδα. Σε αντίθεση με μια κανονική Εγγραφή του Blog, οι Στατικές Σελίδες εμφανίζονται σαν σύνδεσμοι στο δεξί menu και αφορούν σελίδες που θα θέλετε να είναι πάντα διαθέσιμες, όπως: Πληροφορίες, Επικοινωνία, κτλ. Κάντε κλικ στην 'Προεπισκόπηση' για να δείτε πως θα φαίνεται η εγγραφή σας ή 'Δημοσίευση' για να αποθηκευτεί η εγγραφή σας.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Προεπισκόπηση / Επεξεργασία Στατικής Σελίδας";
				$lang_string['instructions_preview'] = "Έτσι φαίνεται η Στατική Σελίδα. Αν χρησιμοποιείτε text styles ή έχετε επισυνάψει εικόνες, θυμηθείτε να κλείσετε όλα τα 'tags'.";
				$lang_string['title_update'] = "Ανανέωση Στατικής Σελίδας";
				$lang_string['instructions_update'] = "Μπορείτε να αλλάξετε την εισαγωγή χρησιμοποιώντας την παρακάτω φόρμα. Κάντε κλικ στο 'Προεπισκόπηση' ή στο 'Αποστολή' όταν έχετε τελειώσει.";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε τα πεδία Θέμα, Εγγραφή και Όνομα Αρχείου.";	
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Η εισαγωγή δεν αποθηκεύτηκε. Εμφανίστηκε το εξής πρόβλημα κατά την αποθήκευση:<br /><br />Μήνυμα λάθους του Server:<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Προσθήκη / Διαχείριση Συνδέσμων";
				$lang_string['instructions'] = "Προσθήκη custom Blocks";
				$lang_string['up'] = "επάνω";
				$lang_string['down'] = "κάτω";
				$lang_string['edit'] = "επεξεργασία";
				$lang_string['delete'] = "διαγραφή";
				$lang_string['block_name'] = "Όνομα Βlock:";
				$lang_string['block_content'] = "Περιεχόμενο Block:";
				$lang_string['instructions_edit'] = "Τώρα επεξεργάζεστε το block:";
				$lang_string['instructions_modify'] = "Κάντε κλικ για να μεταβάλλετε ένα block:";
				$lang_string['submit_btn_edit'] = "Επεξεργασία Block";
				$lang_string['submit_btn_add'] = "Προσθήκη Block";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε το πεδίο Όνομα.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Στατικές Σελίδες:";
				// Add / Manage Links
				$lang_string['title'] = "Προσθήκη / Διαχείριση Συνδέσμων";
				$lang_string['instructions'] = "Προσθήκη προσαρμοσμένων συνδέσμων σε άλλα sites. Συμπλήρωσε την παρακάτω φόρμα και κάνε κλικ στο 'Προσθήκη Συνδέσμου' για να προσθέσεις ένα σύνδεσμο. Κάνωντς κλικ στο πάνω ή κάτω βελάκι  μπορείς να αλλάξεις την σειρά των συνδέσμων. Για την επεξεργασία ενός συνδέσμου, κλικ στο αντίστοιχο πλήκτρο. Για την διαγραφή ενός συνδέσμου, κλικ στο αντίστοιχο πλήκτρο.";
				$lang_string['up'] = "πάνω";
				$lang_string['down'] = "κάτω";
				$lang_string['edit'] = "επεξεργασία";
				$lang_string['delete'] = "διαγραφή";
				$lang_string['link_name'] = "Όνομα Συνδέσμου:";
				$lang_string['link_url'] = "Σύνδεσμος URL: (Προαιρετικό. Άφηστε το κενό για την εισαγωγή διαχωριστικού.)";
				$lang_string['instructions_edit'] = "Επεξεργάζεστε το σύνδεσμο:";
				$lang_string['instructions_modify'] = "Για την αλλαγή συνδέσμου κάντε κλικ:";
				$lang_string['submit_btn_edit'] = "Επεξεργασία Συνδέσμου";
				$lang_string['submit_btn_add'] = "Προσθήκη Συνδέσμου";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε το πεδίο Όνομα.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Προσθήκη / Διαχείριση Κατηγοριών";
				$lang_string['instructions'] = "Χρησιμοποιείστε την παρακατω φόρμα για να προσθέσετε και να επεξεργαστείτε τις κατηγορίες σας. Κάθε αντικείμενο κατηγορίας πρέπει να ακολουθεί τον τύπο 'category name (id number)'.Χρησιμοποιήστε διαστήματα για να δημιουργήσετε ιεραρχία μεταξύ των αντικειμένων.<br /><br /><b>Παράδειγμα:</b><br />Γενικά (1)<br />Νέα (3)<br />&nbsp;&nbsp;Ανακοινώσεις (6)<br />&nbsp;&nbsp;Γεγονότα (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Διάφορα (7)<br />Τεχνολογία (2)<br />";
				$lang_string['error'] = "Σφάλμα";
				$lang_string['current_categories'] = "Τρέχουσες Κατηγορίες";
				$lang_string['no_categories_found'] = "Δεν βρέθηκαν Κατηγορίες";
				$lang_string['category_list'] = "Λίστα Κατηγοριών:";
				$lang_string['validate'] = "Validate";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Αλλαγή χρωμάτων";
				$lang_string['instructions'] = "Μπορείτε να αλλάξετε τα χρώματα του κειμένου και του φόντου του blog. Πρώτα επιλέξτε το επόμενο πεδίο, έπειτα χρησιμοποιήστε τον επεξεργαστή χρωμάτων για την μίξη χρώματος. Η Τιμή αλλάζει αυτόματα.";
				$lang_string['bg_color'] = "BG σελίδα";
				$lang_string['main_bg_color'] = "BG Αρχική Σελίδα";
				$lang_string['border_color'] = "Περιθώριο Σελίδας";
				$lang_string['inner_border_color'] = "Εσωτερικό Περιθώριο";
				$lang_string['header_bg_color'] = "BG Επικεφαλίδα";
				$lang_string['header_txt_color'] = "Κείμενο Επικεφαλίδας";
				$lang_string['menu_bg_color'] = "BG Μενού";
				$lang_string['footer_bg_color'] = "BG Υποσέλιδου";
				$lang_string['txt_color'] = "Κυρίως Κείμενο";
				$lang_string['headline_txt_color'] = "Κείμενο Επικεφαλίδας";
				$lang_string['date_txt_color'] = "Κείμενο Ημερομηνίας";
				$lang_string['footer_txt_color'] = "Κείμενο Υποσέλιδου";
				$lang_string['link_reg_color'] = "Προκαθορισμένο Χρώμα Συνδέσμου";
				$lang_string['link_hi_color'] = "Hover Σύνδεσμος";
				$lang_string['link_down_color'] = "Ενεργός Σύνδεσμος";
				// More Colors
				$lang_string['entry_bg'] = "Αρχικό BG";
				$lang_string['entry_title_bg'] = "Αρχικός Τίτλος BG";
				$lang_string['entry_border'] = "Αρχικό Περιθώριο";
				$lang_string['entry_title_text'] = "Αρχικό Κείμενο Τίτλου";
				$lang_string['entry_text'] = "Αρχικό Κείμενο";
				$lang_string['menu_bg'] = "Μενού BG";
				$lang_string['menu_title_bg'] = "Τίτλος Μενού BG";
				$lang_string['menu_border'] = "Περιθώριο Μενού";
				$lang_string['menu_title_text'] = "Κείμενο Τίτλου Μενού";
				$lang_string['menu_text'] = "Κείμενο Μενού";
				$lang_string['menu_link_reg_color'] = "Προεπιλεγμένος Σύνδεσμος Μενού";
				$lang_string['menu_link_hi_color'] = "Σύνδεσμος Μενού Hover";
				$lang_string['menu_link_down_color'] = "Σύνδεσμος Μενού Active";
				// Submit
				$lang_string['color_preset'] = "Σετ Χρωμάτων:";
				$lang_string['scheme_name'] = "Εισάγετε ένα όνομα για το custom σετ χρωμάτων:";
				$lang_string['scheme_file'] = "Εισάγετε όνομα αρχείου σετ: (χωρίς διαστήματα ή καταλήξεις αρχείων)";
				$lang_string['save_btn'] = "&nbsp;Αποθήκευση&nbsp;";
				$lang_string['form_error'] = "Παρακαλώ εισάγετε ένα όνομα για το custom σετ χρωμάτων.";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Το επιλεγμένο Θέμα δεν επιτρέπει custom χρώματα.';
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Η πληροφορία δεν καταχωρήθηκε. Εμφανίστηκε το εξής πρόβλημα:<br /><br />Μήνυμα Server:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Όνομα:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Website:"; //New in 0.4.6.2
				$lang_string['comment'] = "Σχόλιο:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "Διεύθυνση ΙP:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>Τη %s, %s έγραψε:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				$lang_string['commentposted'] = "Το Νέο Σχόλιο δημοσιεύθηκε στις: ";  // New for 0.4.6.2
				$lang_string['comment_capcha'] = "Anti-Spam: Εισάγετε <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Σχόλια";
				$lang_string['header'] = "Προσθήκη Σχολίου";
				$lang_string['instructions'] = "Συμπληρώστε την παρακάτω φόρμα για την προσθήκη των δικών σας σχολίων.";
				$lang_string['comment_name'] = "Το όνομά σας:";
				$lang_string['comment_email'] = "Email:";
				$lang_string['comment_url'] = "URL:";
				$lang_string['comment_remember'] = "Να με θυμάται:";
				$lang_string['comment_text'] = "Σχόλιο:";
				$lang_string['post_btn'] = "&nbsp;Δημοσίευση Σχολίου&nbsp;";
				$lang_string['delete_btn'] = "Διαγραφή";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Σφάλμα !</h2>Το Σχόλιο δεν αποθηκεύθηκε. Εμφανίστηκε το εξής πρόβλημα:<br /><br />Μήνυμα Server:<br />";
				$lang_string['error_delete'] = "<h2>Σφάλμα !</h2>Το Σχόλιο δεν διαγράφηκε. Εμφανίστηκε το εξής πρόβλημα:<br /><br />Μήνυμα Server:<br />";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε τα πεδία Όνομα και Σχόλιο.";
				break;
			case 'delete':
				$lang_string['title'] = "Διαγραφή Εισαγωγής";
				$lang_string['instructions'] = "Αυτή είναι η Εγγραφή που πρόκειται να διαγράψετε. Βεβαιωθείτε πως θέλετε να την διαγράψετε, διότι δεν είναι δυνατή η αναίρεση αυτής της πράξης...";
				$lang_string['ok_btn'] = "&nbsp;ΟΚ&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Ακύρωση&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Η Εγγραφή δεν διαγράφηκε.<br /><br />Μήνυμα Server:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Διαγραφή Στατικής Σελίδας";
				$lang_string['instructions'] = "Αυτή είναι η Στατική Σελίδα που πρόκειται να διαγράψετε. Βεβαιωθείτε πως θέλετε να την διαγράψετε διότι δεν είναι δυνατή η αναίρεση αυτής της πράξης...";
				$lang_string['ok_btn'] = "&nbsp;ΟΚ&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Ακύρωση&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Η Εγγραφή δεν διαγράφηκε.<br /><br />Μήνυμα Server:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Λίστα Εικόνων";
				$lang_string['instructions'] = "Κάνετε κλικ στους επόμενους Συνδέσμους για να δείτε τις εικόνες.<br /><br />Για την εισαγωγή μιας εικόνας στην Εγγραφή:<br />1) Control-click ένα σύνδεσμο και επιλέξτε 'Αντιγραφή Συνδέσμου στο Clipboard'.<br />2) Επιστρέψτε στην σελίδα Εισαγωγή Εγγραφής ή στην Επεξεργασία Εγγραφής.<br />3) Κάντε κλικ στο πλήκτρο 'img' και επικολλήστε το URL στο παράθυρο.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Μeta-data";
				$lang_string['instructions'] = "Η επόμενη πληροφορία χρησιμοποιείται για &quot;meta-data&quot;, τα οποία βοηθούν τις μηχανές αναζήτησης για να αναζητήσουν και να καταχωρήσουν το site σας. Αυτή η πληροφορία μπορεί επίσης να χρησιμοποιηθεί και από RSS feeds.";
				$lang_string['info_keywords'] = "Λέξεις Κλειδιά: (Λίστα από λέξεις-κλειδιά διαχωρισμένα από κόμματα.)";
				$lang_string['info_description'] = "Περιγραφή: (Απόσπασμα ή μια ελεύθερη περιγραφή του site σας.)";
				$lang_string['info_copyright'] = "Δικαιώματα: (Δήλωση δικαιωμάτων (copyright), ή σύνδεσμος στο κείμενο που περιέχει πληροφορίες.)";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Τα δεδομένα δεν καταχωρήθηκαν.<br /><br />Μήνυμα Server:<br />";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε τα πεδία Τίτλος και Συγγραφέας.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Οι πληροφορίες δεν αποθηκεύτηκαν. Υπήρξε πρόβλημα κατά την αποθήκευση των πληροφοριών σας.<br /><br />Μήνυμα Server:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Αναβάθμιση</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n αρχεία σχολίων χρειάζεται να αναβαθμιστούν:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Σχόλια Αναβάθμισης"; // New 0.3.8
				$lang_string['title'] = "Σύνδεση";
				$lang_string['instructions'] = "Παρακαλώ εισάγετε το Όνομα Χρήστη και τον Κωδικό σας";
				$lang_string['username'] = "Όνομα Χρήστη:";
				$lang_string['password'] = "Κωδικός";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Επιτυχές!</h2>Συνδεθήκατε. Καλό blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Σφάλμα !</h2>Σύνδεση ανεπιτυχής. Παρακαλώ επιβεβαιώστε ότι έχετε πληκτρολογήσει σωστά το Όνομα Χρήστη και τον Κωδικό σας και ξαναπροσπαθήστε.<p />";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε το Όνομα Χρήστη και τον Κωδικό σας.";
				break;
			case 'logout':
				$lang_string['title'] = "Έξοδος";
				$lang_string['instructions'] = "<h2>Σφάλμα !</h2>Έξοδος ανεπιτυχής. Αδυναμία διαγραφής cookie. Είστε ακόμη συνδεδεμένος-η;<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Τα δεδομένα δεν αποθηκεύτηκαν.<br /><br />Μήνυμα Server:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Αλλαγή Ονόματος Χρήστη &amp; Κωδικού";
				$lang_string['instructions'] = "Χρησιμοποιήστε την παρακάτω φόρμα για να αλλάξτε το Όνομα Χρήστη ή/και τον Κωδικό σας. Εισάγετε το Όνομα Χρήστη και Κωδικό τα οποία θέλετε να χρησιμοποιήσετε.";
				$lang_string['username'] = "Όνομα Χρήστη:";
				$lang_string['password'] = "Κωδικός:";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Επιτυχές!</h2>Το Όνομα Χρήστη ή/και Κωδικός σας αποθηκεύτηκαν. Καλό blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Σφάλμα !</h2>Τα δεδομένα δεν αποθηκεύτηκαν. Υπήρξε ένα πρόβλημα κατά την αποθήκευση του Ονόματος Χρήστη ή/και του Κωδικού.<br /><br />Μήνυμα Server:<br />";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε τα πεδία Όνομα Χρήστη και Κωδικός.";
				$lang_string['explanation'] = "Στις πρόσφατες εκδόσεις η δομή των κωδικών άλλαξε.  Πλέον, δεν υπάρχει τρόπος να ανανεώνονται οι κωδικοί
					ή και τα ονόματα χρηστών μέσα στον κώδικα του blog.  Για να αλλάξετε κωδικό, διαγράψτε το αρχείο /config/password.php και βεβαιωθείτε ότι το install*.php
					υπάρχει στον server.  Όταν γίνει αυτό, κάντε refresh αυτήν τη σελίδα (ή επιλέξετε Έξοδο). Θα ενεργοποιηθεί το ίδιο script
					δημιουργίας κωδικού, όπως και την πρώτη φορά που δημιουργηθηκε το blog.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Καλώς Ήλθατε";
				$lang_string['instructions'] = "Σας ευχαριστούμε που επιλέξατε το Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Επιλογή Γλώσσας:";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Καλώς Ήλθατε";
				$lang_string['instructions'] = "
				Σας ευχαριστούμε που επιλέξατε το Simple PHP Blog!<br /><br />Το Simple PHP Blog είναι ένα απλό σύστημα blogging. Απαιτεί PHP 4.1 ή νεώτερη, και δικαιώματα εγγραφής στον server. Όλα τα δεδομένα αποθηκεύονται σε απλά αρχεία κειμένου, ήτοι δεν απαιτεί βάση δεδομένων.<br /><br />
				Για να ξεκινήσετε, το Simple PHP Blog χρειάζεται να δημιουργήσετε τρεις φακέλους ('config', 'content', και 'images') στους οποίους αποθηκεύονται τα δεδομένα σας.<br /><br />
				<b>Κάντε κλικ παρακάτω για να ξεκινήσετε την εγκατάσταση:</b>";
				$lang_string['begin'] = "[ Εκκίνηση Εγκατάστασης ]";
				break;
			case 'install02':
				$lang_string['title'] = "Εγκατάσταση";
				$lang_string['instructions'] = "Δημιουργία 'config', 'content', και 'images' φακέλων:";
				$lang_string['folder_exists'] = "Ok! Ο φάκελος ήδη υπάρχει. Καμία αλλαγή δεν πραγματοποιήθηκε...";
				$lang_string['folder_failed'] = "Σφάλμα ! Αδυναμία δημιουργίας φακέλου...";
				$lang_string['folder_success'] = "Επιτυχές! Ο φάκελος δημιουργήθηκε...";
				// Help
				$lang_string['help'] = "
				<h2>Ούπς!</h2>
				Αδυναμία δημιουργίας ενός ή περισσοτέρων φακέλων! Πιθανόν επειδή:<br>
				<i>1) Τα <b>Write Permissions</b> δεν έχουν τεθεί σε <b>Read/Write</b>.</i><br>
				<i>2) Το <b>UID</b> (user ID's) πρέπει να είναι το ίδιο σε όλα τα αρχεία και φακέλους.</i><p />
				Ακολουθήστε τις επόμενες οδηγίες και ξαναδοκιμάστε:<p />
				1) Δημιουργήστε τους παρακάτω φακέλους: <b>config</b>, <b>content</b>, και <b>images</b>.<p />
				2) Θέσατε <b>Write Permissions</b> στους φακέλους. Στο FTP πρόγραμμά σας, Owner, User, και World πρέπει να έχουν <b>Read</b> και <b>Write</b> access. <i>(Πιθανόν να χρειάζεται να επικοινωνήστε με τον service provider σας για να τα αλλάξετε...)</i><p />
				3) Βεβαιωθείτε ότι τα UID's σε όλα τα αρχεία και τους φακέλους σας είναι τα ίδια. <i>(Πιθανόν να χρειάζεται να επικοινωνήστε με τον service provider σας για να τα αλλάξετε...)</i>";
				$lang_string['try_again'] = "[ Ξαναπροσπαθήστε ]";
				// Success
				$lang_string['success'] = "<h2>Επιτυχές!</h2>Οι φάκελοι δημιουργήθηκαν επιτυχώς!<p /><b>Κάντε κλικ παρακάτω για να συνεχίσετε:</b>";
				$lang_string['continue'] = "[ Συνέχεια ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Ο web server σας υποστηρίζει τους παρακάτω αλγορίθμους κρυπτογράφησης:</b>";
				$lang_string['standard'] = "Standard DES Encryption: ";
				$lang_string['extended'] = "Extended DES Encryption: ";
				$lang_string['MD5'] = "MD5 Encryption: ";
				$lang_string['blowfish'] = "Blowfish Encryption: ";
				$lang_string['enabled'] = "Ενεργοποιημένο";
				$lang_string['disabled'] = "Απενεργοποιημένο";
				$lang_string['using_standard'] = "<b>Γίνεται χρήση του Standard DES Encryption...</b>";
				$lang_string['using_extended'] = "<b>Γίνεται χρήση του Extended DES Encryption...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Γίνεται χρήση του MD5 Encryption...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Γίνεται χρήση του Blowfish Encryption...</b>";
				$lang_string['using_unknown'] = "<b>Γίνεται χρήση άγνωστης κρυπτογράφησης...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Δημιουργήστε Όνομα Χρήστη &amp; Κωδικό";
				$lang_string['instructions'] = "Χρησιμοποιήστε την επόμενη φόρμα για να δημιουργήστε ένα Όνομα Χρήστη και Κωδικό.";
				$lang_string['username'] = "Όνομα Χρήστη:";
				$lang_string['password'] = "Κωδικός:";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Συγχαρητήρια!</h2>Συνδεθήκατε. Κάντε κλικ παρακάτω για να επισκεφτείτε την Αρχική σελίδα, όπου και μπορείται να ονομάσετε το blog σας. Καλό blogging!<p />";
				$lang_string['btn_setup'] = "[ Εγκατάσταση ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ούπς!</h2>Τα δεδομένα δεν αποθηκεύτηκαν. Υπήρξε ένα πρόβλημα κατά την αποθήκευση του Ονόματος Χρήστη ή/και Κωδικού.<br /><br />Μήνυμα Server:<br />";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε τα πεδία Όνομα Χρήστη και Κωδικό.";
				break;
			case 'install04':
				$lang_string['title'] = "Δημιουργήστε ένα Αρχείο Κωδικών";
				$lang_string['instructions'] = "Προσοχή στα παρακάτω:<br />
				<ol>
				<li>Ανοίξτε έναν επεξεργαστή κειμένου. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Δημιουργήστε ένα νέο έγγραφο κειμένου.</li>
				<li>Αντιγράψτε και επικολλήστε τον παρακάτω κώδικα στο έγγραφό σας.</li>
				<li>Αποθηκεύστε το αρχείο και ονομάστε το <b>password.php</b> <i>(Βεβαιωθείτε ότι το αποθηκεύσατε με μορφή <b>κειμένου</b> ή <b>απλού κειμένου</b>.)</i></li>
				<li>Ανοίξτε ένα πρόγραμμα FTP.</li>
				<li>Ανεβάστε το νέο αρχείο <b>password.php</b> στον φάκελο <b>config</b> στο website σας.</li>
				<li>Διαγραψτε το <b>password.php</b> από τον σκληρό σας δίσκο.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Σημ.: Εάν επιθυμείτε να 'μηδενίσετε' το Όνομα χρήστη και Κωδικό (πιθανότερα επειδή τα ξεχάσατε), διαγράψτε το αρχείο <b>password.php</b> στον φάκελο <b>config</b> στο website σας. Την επόμενη φορά που θα επισκεφθείτε το site, θα εκτελεστεί εκ νέου η ίδια διαδικασία εγκατάστασης...</i>";
				$lang_string['code'] = "Κώδικας για το <b>password.php</b> file:";
				$lang_string['continue'] = "[ Συνέχεια ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Έίσοδος";
				$lang_string['instructions'] = "Παρακαλώ εισάγετε παρακάτω το Όνομα χρήστη και τον Κωδικό σας";
				$lang_string['username'] = "Όνομα χρήστη:";
				$lang_string['password'] = "Κωδικός";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Συγχαρητήρια!</h2>Συνδεθήκατε.<p />
				Κάντε κλικ παρακάτω για να επισκεφθείτε τη σελίδα <b>Εγκατάσταση</b>, όπου μπορείτε να δώσετε πνοή στο νέο σας blog !<p />
				<i>Σημ.: Τώρα που ολοκληρώσατε την διαδικασία εγκατάστασης, προτείνεται να σβήσετε τα αρχεία <b>installXX.php</b> από το website σας. (π.χ. install00.php έως και install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Σφάλμα !</h2>Δεν συνδεθήκατε. Παρακαλώ βεβαιωθείτε οτι πληκτρολογήσατε σωστά το Όνομα χρήστη και τον Κωδικό σας και προσπαθήστε ξανά.<p />";
				$lang_string['form_error'] = "Παρακαλώ συμπληρώστε τα πεδία Όνομα χρήστη και Κωδικός.";
				// Success
				$lang_string['btn_setup'] = "[ Εγκατάσταση ]";
				$lang_string['btn_try_again'] = "[ Επανάληψη ]";
				break;
			case 'setup':
				$lang_string['title'] = "Εγκατάσταση";
				$lang_string['instructions'] = "Μπορείτε να αλλάξετε το όνομα του blog σας, καθώς και τα προσωπικά σας στοιχεία παρακάτω.";
				$lang_string['blog_title'] = "Όνομα Blog:";
				$lang_string['blog_author'] = "Συγγραφέας:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Υποσέλιδο:";
				$lang_string['blog_choose_language'] = "Επιλογή γλώσσας:";
				$lang_string['blog_enable_comments'] = "Ενεργοποίηση Εντολών Χρήστη"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Άνοιγμα σχολίων σε καινούργιο παράθυρο"; // <-- New 0.3.6
				$lang_string['blog_enable_cache'] = "Ενεργοποίηση της Cache Εγγραφών (πιθανή επιτάχυνση σε μερικούς servers)"; // New for 0.4.6
				$lang_string['blog_enable_voting'] = "Επιτρέπεται οι χρήστες να βαθμολογούν Εγγραφές";
				$lang_string['blog_email_notification'] = "Ενημέρωση με email όταν αποστέλλονται σχόλια"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Αποστολή weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Το Trackback είναι μια μέθοδος αποστολής μηνυμάτων μεταξύ blogs.
				Μπορείτε να γνωστοποιείτε σε κάποιο blog ότι έχετε σύνδεσμο προς αυτό, στέλνοντάς του ένα trackback ping.
				Δείτε ποιός έχει σύνδεσμο προς το δικό σας blog, απλά λαμβάνοντας τα trackback pings.<br />
				Μπορείτε να εισάγετε τα URIs προς τα οποία θα γίνει ping είτε χειροκίνητα, είτε αυτόματα μέσω του 
				   Auto-Discovery.";
				$lang_string['blog_trackback_enabled'] = "Ενεργοποίηση του trackback στο blog μου";
				$lang_string['blog_trackback_auto_discovery'] = "Ενεργοποίηση του Auto-Discovery όταν υποβάλλεται μία εγγραφή που περιέχει URLs";
				$lang_string['blog_ping_urls'] = "Εισάγετε το πλήρες URL (π.χ.. http://rpc.weblogs.com/RPC2) ή υπηρεσία για &quot;ping&quot;.<br />(Μπορείτε να εισάγετε περισσότερες από μία διευθύνσεις διαχωριζόμενες με κόμματα.)"; // <-- New 0.3.7
				$lang_string['blog_max_entries'] = "Μέγιστος αριθμός προβολής Εγγραφών:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Tags τα οποία επιτρέπονται σε Σχόλια:"; // <-- New 0.3.6
				$lang_string['blog_enable_lastcomments'] = "Enable Most Recent Comments Listing"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Enable Most Recent Entries Listing"; // New for 0.4.7
				$lang_string['blog_enable_stats'] = "Enable Stats Option in Menu"; // New for 0.4.7
				$lang_string['blog_gzip_about'] = "
					Από την PHP 4.0.4, η PHP έχει την δυνατότητα να διαβάζει και να γράφει σε gzip (.gz) αρχεία συμπίεσης, 
					και έτσι να εξοικονομεί χώρο στον δίσκο. Μπορεί επίσης να συμπιέζει στο παρασκήνιο σελίδες οι οποίες διαβάζονται από browsers 
					οι οποίοι υποστηρίζουν gzip συμπίεση, και έτσι εξοικονομούν bandwidth.<br />
					<br />
					Η υποστήριξη Zlib στην PHP δεν είναι ενεργοποιημένη εξ' ορισμού. Εάν τα checkboxes είναι απενεργοποιημένα, τότε η
					PHP που διαθέτετε δεν υποστηρίζει την συμπίεση Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Ενεργοποίηση συμπίεσης GZIP για αρχεία Database"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Ενεργοποίηση συμπίεσης GZIP για HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Τα δεδομένα δεν αποθηκεύτηκαν.<br /><br />Μήνυμα Server:<br />";
				$lang_string['form_error'] = "Please complete the Title and Author fields.";
				$lang_string['label_entry_order'] = "Διάταξη ΕγγραφώνEntry Order:";
				$lang_string['select_new_to_old'] = "Διάταξη κατά την νεότερη";
				$lang_string['select_old_to_new'] = "Διάταξη κατά την παλαιότερη";
				$lang_string['label_comment_order'] = "Διάταξη σχολίων:";
								$lang_string['cal_sunday'] = "Κυριακή"; // New for 0.4.6
				$lang_string['cal_monday'] = "Δευτέρα"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Ημέρα έναρξης Ημερολογίου εβδομάδας"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Ενεργοποίηση Block Ημερολογίου / Αρχείου"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Enable Archives Block"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Enable Counter in Sidebar"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Number of hours to delay before hits are counted again (based on specific ip address):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Enable Login Link (Please bookmark \"login.php\" first...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Ενεργοποίηση του Block με απλό κειμένου στον τίτλο (Απενεργοποιήστε το checkbox εαν ο τίτλος βρίσκεται μέσα στο γραφικό της κεφαλίδας)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Ενεργοποίηση Permalink στις Εγγραφές του Blog"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Enable Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Enable Counter in Footer"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam Images (GD library only) / Anti-Spam Text Field"; // New for 0.4.8
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
				$lang_string['title'] = "Επιλογές";
				$lang_string['instructions'] = "Χρησιμοποιήστε την επόμενη φόρμα για την προσαρμογή της παρουσίασης της ημερομηνίας και της ώρας για τις εεγραφές του blog και των σχολίων. Μπορείτε να επιλέξετε 12-ωρό ή 24-ωρό ρολόϊ. Βραχύ ή μακροσκελή παρουσίαση της ημερομηνίας. Και η περιοχή <b>Προεπισκόπισης</b> ανανεώνονται αυτόματα για να σας παρουσιάσουν το πως θα φαίνεται στην πραγματικότητα οι επιλογές σας.";
				// Long Date
				$lang_string['ldate_title'] = "Μακροσκελή παρουσίαση της ημερομηνίας:";
				$lang_string['weekday'] = "Καθημερινή";
				$lang_string['month'] = "Μήνας";
				$lang_string['day'] = "Ημέρα";
				$lang_string['year'] = "Έτος";
				$lang_string['none'] = "None";
				// Short Date
				$lang_string['sdate_title'] = "Βραχύ παρουσίαση της ημερομηνίας:";
				$lang_string['s_month'] = "Μήνας";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Ημέρα";
				$lang_string['s_year'] = "Έτος";
				$lang_string['zero_day'] = "Αρχικό μηδέν για ημέρα";
				$lang_string['show_century'] = "Παρουσίαση αιώνα";
				// Time
				$lang_string['time_title'] = "Παρουσίαση Ώρας:";
				$lang_string['12hour'] = "12-ωρό ρολόϊ";
				$lang_string['24hour'] = "24-ωρό ρολόϊ";
				$lang_string['before_noon'] = "Πρό-μεσημβρία";
				$lang_string['after_noon'] = "Μέτα-μεσημβρία";
				// Date
				$lang_string['date_title'] = "Παρουσίαση Ημερομηνίας:";
				$lang_string['long_date'] = "Μακροσκελής ημερομηνία";
				$lang_string['short_date'] = "Βραχύς ημερομηνία";
				$lang_string['time'] = "Ώρα";
				// Menu
				$lang_string['menu_title'] = "Παρουσίαση Ημερομηνία Μενού:";
				$lang_string['long_date'] = "Μακροσκελής ημερομηνία";
				$lang_string['short_date'] = "Βραχύς ημερομηνία";
				// Used in multiple places
				$lang_string['zero_day'] = "Αρχικό μηδέν για ημέρα";
				$lang_string['zero_month'] = "Αρχικό μηδέν για μήνα";
				$lang_string['zero_hour'] = "Αρχικό μηδέν για ώρα";
				$lang_string['separator'] = "Διαχωριστής:";
				$lang_string['preview'] = "Προεπισκόπηση:";
				$lang_string['server_offset'] = "Server Offset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Τα δεδομένα δεν αποθηκεύτηκαν.<br /><br />Μήνυμα Server:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Στυλ";
				$lang_string['instructions'] = "Χρησιμοποιήστε το drop-down μενού για να επιλέξετε διαφορετικό στυλ.";
				// Themes
				$lang_string['choose_theme'] = "Στυλ:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Τα δεδομένα δεν αποθηκεύτηκαν.<br /><br />Μήνυμα Server:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Αποθήκευση Εικόνας";
				$lang_string['instructions'] = "Κάντε κλικ παρακάτω για να επιλέξετε αρχείο.";
				$lang_string['select_file'] = "Επιλογή αρχείου:";
				$lang_string['upload_btn'] = "Αποθήκευση";
				// Error Response
				$lang_string['error'] = "<h2>Σφάλμα !</h2>Αδυναμία αποθύκευσης εικόνας.<br /><br />Μήνυμα Server:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Αποτελέσματα Αναζήτησης";
				$lang_string['instructions'] = "Αποτελέσματα αναζήτησης για <b>%string</b>:";
				$lang_string['not_found'] = "Δεν βρέθηκαν αποτελέσματα";
				break;
			case 'contact':
				$lang_string['title'] = "Επικοινωνήστε";
				$lang_string['instructions'] = "Συμπληρώστε την φόρμα:";
				$lang_string['form_error'] = "Παρακαλώ συμπλητώστε τα πεδία Θέμα και Σχόλιο.";
				$lang_string['name'] = "Όνομα:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Θέμα:";
				$lang_string['comment'] = "Σχόλιο:";
				$lang_string['submit_btn'] = "&nbsp;Υποβολή&nbsp;";
				$lang_string['success'] = "<h2>Επιτυχές !</h2>Το μήνυμά σας εστάλη επιτυχώς.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Εισάγετε <b>%s</b>"; // 0.4.2
				$lang_string['failure'] = "<h2>Σφάλμα !</h2>Το μήνυμά σας δεν εστάλη. Κατά πάσα πιθανότητα το Αnti Spam δεν συμπληρώθηκε σωστά.<p />";
				$lang_string['contactsent'] = "Η επαφή εστάλη μέσω: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "Διεύθυνση IP:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>Την %s, %s έγραψε:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string["title"] = "Στατιστικά";
				$lang_string["general"] = "Γενικά</h3>";
				$lang_string["entry_info"] = "<b>%s</b> εγγραφές με <b>%s</b> λέξεις αποθηεκευμένες σε <b>%s</b> bytes";
				$lang_string["comment_info"] = "<b>%s</b> σχόλια με <b>%s</b> λέξεις αποθηεκευμένες σε <b>%s</b> bytes";
				$lang_string["trackback_info"] = "<b>%s</b> trackbacks αποθηκευμένα σε <b>%s</b> bytes";
				$lang_string["static_info"] = "<b>%s</b> στατικές σελίδες με <b>%s</b> λέξεις αποθηκευμένες σε <b>%s</b> bytes";
				$lang_string["most_viewed_entries"] = "10 πιο προβεβλημένες εγγραφές";
				$lang_string["most_commented_entries"] = "10 πιο προβεβλημένα σχόλια";
				$lang_string["most_trackbacked_entries"] = "10 πιο trackbacked εγγραφές";
				$lang_string['vote_info'] = "<b>%s</b> ψήφοι αποθηκευμένες σε <b>%s</b> bytes"; // 0.4.1
				$lang_string["most_voted_entries"] = "10 most voted εγγραφές"; // 0.4.1
				$lang_string["most_rated_entries"] = "10 most rated εγγραφές"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["errorline1"] = 'Η σελίδα ή λειτουργία που προσπελάστηκε απαιτεί την χρήση cookies.';
				$lang_string["errorline2"] = 'Επαναφέρετε την λειτουργία των cookies στον browser ή το firewall που χρησιμοποιείτε και προσπαθείστε ξανά.';
				$lang_string["clientid"] = 'ID Πελάτη: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Page/Function Access Denied';
				$lang_string["404"] = 'HTTP Error 404 - Page/Function Does Not Exist';
				$lang_string["error_404"] = 'Η σελίδα ή λειτουργία που ζητήθηκε δεν υπάρχει.';
				$lang_string["error_javascript"] = 'Η σελίδα ή λειτουργία που προσπελάστηκε απαιτεί την χρήση javascript.';
				$lang_string["error_emailnotsent"] = 'Το μήνυμα που προσπαθήσατε να στείλετε, απέτυχε.';
				$lang_string["error_emailnotsentcapcha"] = 'Το μήνυμα που προσπαθήσατε να στείλετε απέτυχε, επειδή η εγγραφή anti-spam ήταν δεν ήταν σωστή ή έλειπε.';
				$lang_string["clientid"] = 'ID Πελάτη: ';
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
