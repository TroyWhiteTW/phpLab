<?php
	// Malay Language Translation(s)
	// (c) 2004 Mohammad Fahmi Adam, farisi <at> hotmail <dot> com (0.3.7)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Malay
		$lang_string['language'] = 'malay';
		
		$lang_string[ 'locale' ] = array('ms_MY','malay');
		$lang_string['rss_locale'] = 'ms-MY'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Pautan";
		$lang_string['menu_home'] = "Utama";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Arkib";
		$lang_string['menu_viewarchives'] = "View Archives"; // New in 0.4.7
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Tambah Entri";
		$lang_string['menu_add_static'] = "Tambah Laman Statik";
		$lang_string['menu_upload'] = "Uplod Imej";
		$lang_string['menu_setup'] = "Setup";
		$lang_string['menu_categories'] = "Categories"; // 0.3.7q
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Option";
		$lang_string['menu_themes'] = "Tema";
		$lang_string['menu_colors'] = "Warna";
		$lang_string['menu_change_login'] = "Tukar Log Masuk";
		$lang_string['menu_logout'] = "Log Keluar";
		$lang_string['menu_login'] = "Log Masuk";
		$lang_string['menu_most_recent'] = "Komen Terbaru";
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
		$lang_string['home'] = "Kembali ke Laman Utama";
		$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Search:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Go'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember' );
		$lang_string['sb_default_title'] = 'Tiada Tajuk';
		$lang_string['sb_default_author'] = 'Tiada Penulis';
		$lang_string['sb_default_footer'] = 'Tiada Nota Kaki';
		
		$lang_string['sb_edit'] = 'kemas kini';
		$lang_string['sb_delete'] = 'buang';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'related link'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'Tambah Komen';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'Komen';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'Komen';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' lihat';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' lihat';
		
		$lang_string['sb_add_link_btn'] = '+ pautan';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Tajuk:";
				$lang_string['label_insert'] = "Masukkan Special:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "imj";
				$lang_string['btn_url'] = "url";
				$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Lihat Imej Uplod";
				$lang_string['label_entry'] = "Entri:";
				$lang_string['btn_preview'] = "&nbsp;Previu&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Hantar&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Masukkan teks untuk diformat";
				$lang_string['insert_image'] = "Masukkan URL imej";
				$lang_string['insert_url1'] = "Masukkan teks untuk dipaparkan sebagai Pautan (pilihan)";
				$lang_string['insert_url2'] = "Masukkan URL penuh pautan";
				$lang_string['insert_url3'] = "Open URL in new window (Optional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Sila penuhkan ruang Tajuk dan Entri.";	
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
				$lang_string['title'] = "Tambah Entri";
				$lang_string['instructions'] = "Anda bersedia untuk memulakan blog? Penuhkan ruang dibawah dan klik 'Previu' untuk melihat rupa sebenar entri anda, atau klik 'Hantar' untuk menyimpan entrinya.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previu / Kemas Kini Entri";
				$lang_string['instructions_preview'] = "Entri anda adalah seperti ini. Jika anda menggunakan 'text style' atau menggunakan imej, sila ingat untuk menututup kesemua tag anda.";
				$lang_string['title_update'] = "Kemas Kini Entri";
				$lang_string['instructions_update'] = "Anda boleh mengubah entri menggunakan form dibawah. Klik 'Previu' atau 'Hantar' apabila sudah selesai.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Entri tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan entri anda.<br /><br />Pelayan Melaporkan:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Tambah Laman Statik";
				$lang_string['instructions'] = "Isi form dibawah untuk membuat Halaman Statik. Tidak seperti Entri Blog biasa, Entri Statik muncul sebagai pautan dimenu sebelah kanan. Ia adalah untuk laman yang anda ingin anda perlihatkan setiap masa seperti: Tentang Saya, Kontek Kami, Jadual, dan lain-lain. Klik 'Previu' untuk melihat bagaimana rupa sebenar entri anda, atau klik 'Hantar' untuk menyimpannya.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previu / Kemas Kini Entri";
				$lang_string['instructions_preview'] = "Entri Laman Statik adalah seperti ini. Jika anda menggunakan 'text style' atau menggunakan imej, sila ingat untuk menutup kesemua tag anda.";
				$lang_string['title_update'] = "Kemas Kini Laman Statik";
				$lang_string['instructions_update'] = "Anda boleh mengubah entri menggunakan form dibawah. Klik 'Previu' atau 'Hantar' apabila sudah selesai.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Entri tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan entri anda.<br /><br />Pelayan Melaporkan:<br />";
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
				$lang_string['title'] = "Tambah / Kemas Kini Pautan";
				$lang_string['instructions'] = "Tambah pautan kehalaman lain. Isi form dibawah dan klik 'Tambah Pautan' untuk menambah senarai pautan. Klik butang atas dan bawah untuk mengubah susun atur pautan. Klik butang 'Kemas Kini' untuk mengubah pautan. Klik butang 'Buang' untuk membuang pautan";
				$lang_string['up'] = "atas";
				$lang_string['down'] = "bawah";
				$lang_string['edit'] = "kemas kini";
				$lang_string['delete'] = "buang";
				$lang_string['link_name'] = "Nama Pautan:";
				$lang_string['link_url'] = "URL Pautan: (Pilihan. Biar kosong untuk dijadikan pemisah.)";
				$lang_string['instructions_edit'] = "Anda sedang mengemas kini pautan:";
				$lang_string['instructions_modify'] = "Klik dibawah untuk kemas kini pautan:";
				$lang_string['submit_btn_edit'] = "Kemas Kini Pautan";
				$lang_string['submit_btn_add'] = "Tambah Pautan";
				$lang_string['form_error'] = "Sila penuhkan ruang Name.";
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
				$lang_string['title'] = "Ubah Warna";
				$lang_string['instructions'] = "Anda boleh mengubah warna teks dan latar belakang blog anda. Pilih ruang dibawah, dan gunakan pemilih warna untuk mencampur warna anda. Nilai akan berubah secara automatik.";
				$lang_string['bg_color'] = "LB Laman";
				$lang_string['main_bg_color'] = "LB Laman Utama";
				$lang_string['border_color'] = "Sempadan Laman";
				$lang_string['inner_border_color'] = "Sempadan Dalam";
				$lang_string['header_bg_color'] = "Kepala LB";
				$lang_string['header_txt_color'] = "Teks Kepala";
				$lang_string['menu_bg_color'] = "LB Menu";
				$lang_string['footer_bg_color'] = "LB Nota Kaki";
				$lang_string['txt_color'] = "Teks Utama";
				$lang_string['headline_txt_color'] = "Teks Hedline";
				$lang_string['date_txt_color'] = "Teks Tarikh";
				$lang_string['footer_txt_color'] = "Teks Nota Kaki";
				$lang_string['link_reg_color'] = "Pautan Biasa";
				$lang_string['link_hi_color'] = "Hover Pautan";
				$lang_string['link_down_color'] = "Pautan Aktif";
				// More Colors
				$lang_string['entry_bg'] = "LB Entri";
				$lang_string['entry_title_bg'] = "LB Tajuk Entri";
				$lang_string['entry_border'] = "Sempadan Entri";
				$lang_string['entry_title_text'] = "Teks Tajuk Entri";
				$lang_string['entry_text'] = "Teks Entri";
				$lang_string['menu_bg'] = "LB Menu";
				$lang_string['menu_title_bg'] = "LB Tajuk Menu";
				$lang_string['menu_border'] = "Sempadan Menu";
				$lang_string['menu_title_text'] = "Teks Tajuk Menu";
				$lang_string['menu_text'] = "Teks Menu";
				$lang_string['menu_link_reg_color'] = "Menu Pautan Biasa";
				$lang_string['menu_link_hi_color'] = "Menu Pautan Hover";
				$lang_string['menu_link_down_color'] = "Menu Pautan Aktif";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Hantar&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Informasi tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan maklumat anda.<br /><br />Pelayan Melaporkan:<br />";
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
				$lang_string['title'] = "Komen";
				$lang_string['header'] = "Tambah Komen";
				$lang_string['instructions'] = "Isi form dibawah untuk menambah komen anda.";
				$lang_string['comment_name'] = "Nama Anda:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "Komen:";
				$lang_string['post_btn'] = "&nbsp;Hantar Komen&nbsp;";
				$lang_string['delete_btn'] = "buang";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Alamak!</h2>Komen tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan komen anda.<br /><br />Pelayan Melaporkan:<br />";
				$lang_string['error_delete'] = "<h2>Alamak!</h2>Komen tidak dapat dibuang. Saya menghadapi masalah ketika ingin membuang komen anda.<br /><br />Pelayan Melaporkan:<br />";
				$lang_string['form_error'] = "Sila penuhkan ruang Nama dan Komen.";
				break;
			case 'delete':
				$lang_string['title'] = "Buang Entri";
				$lang_string['instructions'] = "Entri ini adalah untuk dibuang. Sila pastikan anda benar-benar mahu membuangnya, atau ia akan hilang selamanya...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Batal&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Entri tidak dapat dibuang.<br /><br />Pelayan Melaporkan:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Buang Laman Statik";
				$lang_string['instructions'] = "Laman statik ini adalah untuk dibuang. Sila pastikan anda benar-benar mahu membuangnya, atau ia akan hilang selamanya...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Batal&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Tidak dapat membuang laman tersebut.<br /><br />Pelayan Melaporkan:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "List Imej";
				$lang_string['instructions'] = "Klik pautan dibawah untuk memaparkan imej.<br /><br />Untuk menambah imej pada entri:<br />1) Kontrol+klik pada pautan dan pilih option 'Copy Link to Clipboard'.<br />2) Kembali ke ruangan Tambah Entri atau Kemas Kini Entri.<br />3) Klik butang 'imj' dan tampal URL pada tetingkap anda.";
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
				$lang_string['title'] = "Log Masuk";
				$lang_string['instructions'] = "Sila masukkan Nama Pengguna dan Kata Laluan";
				$lang_string['username'] = "Nama Pengguna:";
				$lang_string['password'] = "Kata Laluan:";
				$lang_string['submit_btn'] = "&nbsp;Hantar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Alamak!</h2>Anda sudah log masuk sekarang. Selamat memblog!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Alamak!</h2>Anda tidak dapat log masuk. Sila pastikan Nama Pengguna dan Kata Laluan anda betul dan sila cuba lagi.<p />";
				$lang_string['form_error'] = "Sila penuhkan ruangan Nama Pengguna dan Kata Laluan.";
				break;
			case 'logout':
				$lang_string['title'] = "Log Keluar";
				$lang_string['instructions'] = "<h2>Alamak!</h2>Gagal untuk log keluar. Tidak dapat buang cookie. Kenapa anda masih log lagi?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Informasi tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan entri anda.<br /><br />Pelayan Melaporkan:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Ubah Nama Pengguna &amp; Kata Laluan";
				$lang_string['instructions'] = "Guna form dibawah untuk mengubah Nama Pengguna dan/atau Kata Laluan. Masukkan Nama Pengguna dan Kata Laluan yang henda digunakan.";
				$lang_string['username'] = "Nama Pengguna:";
				$lang_string['password'] = "Kata Laluan:";
				$lang_string['submit_btn'] = "&nbsp;Hantar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Berjaya!</h2>Nama Pengguna dan/atau Kata Laluan anda berjaya di aktifkan. Selamah memblog!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Alamak!</h2>Informasi tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan Nama Pengguna dan/atau Kata Laluan anda.<br /><br />Pelayan Melaporkan:<br />";
				$lang_string['form_error'] = "Sila penuhkan ruang Nama Pengguna dan Kata Laluan.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Selamat Datang";
				$lang_string['instructions'] = "Terima kasih kerana memilih Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Pilih Bahasa:";
				$lang_string['submit_btn'] = "&nbsp;Hantar&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Selamat Datang";
				$lang_string['instructions'] = "
				Terima kasih kerana memilih Simple PHP Blog!<br /><br />
				Simple PHP Blog adalah blog sistem ter-ringan. Ia memerlukan PHP 4.1 atau terkini, dan keizinan menulis (write-permissions) pada server. Kesemua informasi disimpan didalam fail, jadi tiada pengkalan data (database) diperlukan.<br /><br />
				Untuk memulakannya, Simple PHP Blog memerlukan 3 folder ('config', 'content', dan 'images') dimana ia digunakan untuk menyimpan informasi anda.<br /><br /><b>
				Klik dibawah untuk memulakan setup:</b>";
				$lang_string['begin'] = "[ Mulakan Setup ]";
				break;
			case 'install02':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Cuba membuat folder 'config', 'content', dan 'images':";
				$lang_string['folder_exists'] = "Baiklah! Folder sudah ujud. Tiada perubahan dibuat...";
				$lang_string['folder_failed'] = "Alamak! Tak dapat membuat folder...";
				$lang_string['folder_success'] = "Berjaya! Folder siap...";
				// Help
				$lang_string['help'] = "
				<h2>Alamak!</h2>
				Tidak dapat membuat satu atau banyak folder! Ini berkemungkinan kerana:<br>
				<i>1) <b>Keizinan Menulis</b> tidak diset kepada membenarkan akses <b>Baca/Tulis</b>.</i><br>
				<i>2) <b>UID</b>'s (user ID) kesemua fail dan folder tidak sama.</i><p />
				
				Sila ikut cara penyelesaian masalah dan cuba lagi:<p />
				1) Buat folder tersebut : <b>config</b>, <b>content</b>, and <b>images</b> secara manual.<p />
				2) Benarkan <b>Keizinan Menulis</b> pada folder. Pada program FTP anda, Owner, User, dan World perlu diset kepada akses <b>Read</b> dan <b>Write</b>. <i>(Anda mungkin perlu menghubungi provider servis anda untuk mengubah setting ini...)</i><p />
				3) Sila pastikan UID kesemua fail dan folder anda adalah sama. <i>(Anda mungkin perlu menghubungi provider servis anda untuk mengubah setting ini...)</i>";
				$lang_string['try_again'] = "[ Cuba Lagi ]";
				// Success
				$lang_string['success'] = "<h2>Berjaya!</h2>Folder berjaya dibuat!<p /><b>Klik untuk sambung:</b>";
				$lang_string['continue'] = "[ Sambung ]";
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
				$lang_string['title'] = "Cipta Nama Pengguna &amp; Kata Laluan";
				$lang_string['instructions'] = "Guna form dibawah untuk mencipta Nama Pengguna dan Kata Laluan.";
				$lang_string['username'] = "Nama Pengguna:";
				$lang_string['password'] = "Kata Laluan:";
				$lang_string['submit_btn'] = "&nbsp;Hantar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Tahniah!</h2>Anda sudah log masuk. Klik untuk mengunjung laman Setup, dimana anda boleh menamakan blog anda. Selamat memblog!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Alamak!</h2>Informasi tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan Nama Pengguna dan/atau Kata Laluan.<br /><br />Pelayan Melaporkan:<br />";
				$lang_string['form_error'] = "Sila lengkapkan ruang Nama Pengguna dan Kata Laluan.";
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
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Anda boleh mengubah nama blog anda, dan informasi diri anda dibawah ini.";
				$lang_string['blog_title'] = "Nama Blog:";
				$lang_string['blog_author'] = "Penulis:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Nota Kaki:";
				$lang_string['blog_choose_language'] = "Pilih Bahasa:";
				$lang_string['blog_enable_comments'] = "Enable User Comments"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Open Comments in Popup Window"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted"; // <-- New 0.3.7
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)"; // <-- New 0.3.7
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
					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Hantar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Informasi tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan informasi diri anda.<br /><br />Pelayan Melaporkan:<br />";
				$lang_string['form_error'] = "Sila penuhkan ruangan Tajuk dan Penulis.";
				$lang_string['label_entry_order'] = "Susunan Entri:";
				$lang_string['select_new_to_old'] = "Utamakan List Terbaru";
				$lang_string['select_old_to_new'] = "Utamakan List Terlama";
				$lang_string['label_comment_order'] = "Susunan Komen:";
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
				$lang_string['title'] = "Option";
				$lang_string['instructions'] = "Guna form dibawah untuk membetulkan tarikh dan masa entri blog dan komen anda. Anda boleh memilih jenis waktu 12 atau 24. Format tarikh pendek atau panjang. Ruangan <b>Previu</b> akan dikemas kini secara automatik untuk menunjukkan bagaimana format akan dipaparkan.";
				// Long Date
				$lang_string['ldate_title'] = "Format Tarikh Panjang:";
				$lang_string['weekday'] = "Awal Minggu";
				$lang_string['month'] = "Bulan";
				$lang_string['day'] = "Hari";
				$lang_string['year'] = "Tahun";
				$lang_string['none'] = "Tiada";
				// Short Date
				$lang_string['sdate_title'] = "Format Tarih Pendek:";
				$lang_string['s_month'] = "Bulan";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Hari";
				$lang_string['s_year'] = "Tahun";
				$lang_string['zero_day'] = "Sifar dihadapan hari";
				$lang_string['show_century'] = "Papar abad";
				// Time
				$lang_string['time_title'] = "Format Masa:";
				$lang_string['12hour'] = "Waktu 12-jam";
				$lang_string['24hour'] = "Waktu 24-jam";
				$lang_string['before_noon'] = "Sebelum Tengahari";
				$lang_string['after_noon'] = "Selepas Tengahari";
				// Date
				$lang_string['date_title'] = "Format Paparan Tarikh:";
				$lang_string['long_date'] = "Tarikh Panjang";
				$lang_string['short_date'] = "Tarikh Pendek";
				$lang_string['time'] = "Masa";
				// Menu
				$lang_string['menu_title'] = "Menu Format Paparan Tarikh:";
				$lang_string['long_date'] = "Tarikh Panjang";
				$lang_string['short_date'] = "Tarikh Pendek";
				// Used in multiple places
				$lang_string['zero_day'] = "Sifar dihadapan hari";
				$lang_string['zero_month'] = "Sifar dihadapan bulan";
				$lang_string['zero_hour'] = "Sifar dihadapan jam";
				$lang_string['separator'] = "Sempadan:";
				$lang_string['preview'] = "Previu:";
				$lang_string['server_offset'] = "Ofset Pelayan:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Hantar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Informasi tidak dapat disimpan. Saya menghadapi masalah ketika ingin menyimpan informasi anda.<br /><br />Pelayan Melaporkan:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Tema";
				$lang_string['instructions'] = "Guna menu drop-down untuk memilih tema lain.";
				// Themes
				$lang_string['choose_theme'] = "Tema:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Hantar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Informasi tidak dapat disimpan. Saya menghadapi masalah ketika ingin meyimpan informasi anda.<br /><br />Pelayan Melaporkan:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Uplod Imej";
				$lang_string['instructions'] = "Klik pada butang dibawah untuk memilih fail yang hendak di uplod.";
				$lang_string['select_file'] = "Pilih fail:";
				$lang_string['upload_btn'] = "Uplod";
				// Error Response
				$lang_string['error'] = "<h2>Alamak!</h2>Uplod imej tidak berjaya. Informasi lanjut:<br /><br />Pelayan Melaporkan:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Search Results";
				$lang_string['instructions'] = "Search results for <b>%string</b>:";
				$lang_string['not_found'] = "No results found";
				break;
			case 'contact': // <-- New 0.3.8
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
				$lang_string['contact_capcha'] = "Anti-Spam: Enter <b>%s</b>"; // 0.4.2	
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
