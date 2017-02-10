<?php
	// Turkish Language Translation(s)
	// (c) 2004 A. Murat Eren, meren <at> uludag <dot> org <dot> tr (0.3.7)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Turkish
		$lang_string['language'] = 'türkçe';
		
		$lang_string[ 'locale' ] = array('tr_TR', 'trk', 'turkish');
		$lang_string['rss_locale'] = 'tr-TR'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-0';
		$lang_string['php_charset'] = 'ISO-8859-9';
		
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Linkler";
		$lang_string['menu_home'] = "Anasayfa";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Arþivler";
		$lang_string['menu_viewarchives'] = "View Archives"; // New in 0.4.7
		$lang_string['menu_menu'] = "Menü";
		$lang_string['menu_add'] = "Girdi Ekle";
		$lang_string['menu_add_static'] = "Sabit Sayfa Ekle";
		$lang_string['menu_upload'] = "Resim Yükle";
		$lang_string['menu_setup'] = "Ayarlar";
		$lang_string['menu_categories'] = "Categories"; // 0.3.7q
		$lang_string['menu_info'] = "Bilgi"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Seçenekler";
		$lang_string['menu_themes'] = "Temalar";
		$lang_string['menu_colors'] = "Renkler";
		$lang_string['menu_change_login'] = "Login'i Deðiþtir";
		$lang_string['menu_logout'] = "Çýkýþ";
		$lang_string['menu_login'] = "Giriþ";
		$lang_string['menu_most_recent'] = "En Son Yorumlar";
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
		$lang_string['home'] = 'Anasayfaya Dönüþ';
		$lang_string['nav_next'] = 'Sonraki'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Önceki'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Ara:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Bul'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Sayfa %s saniyede oluþturuldu'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'More...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Ocak', 'Þubat', 'Mart', 'Nisan', 'Mayýs', 'Haziran', 'Temmuz', 'Aðustos', 'Eylül', 'Ekim', 'Kasým', 'Aralýk' );
		$lang_string['sb_default_title'] = 'Konusuz';
		$lang_string['sb_default_author'] = 'Sahipsiz';
		$lang_string['sb_default_footer'] = 'Son Eksiz';
		
		$lang_string['sb_edit'] = 'deðiþtir';
		$lang_string['sb_delete'] = 'sil';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'related link'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'yorum ekle';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'yorum';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'yorum';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' gösterim';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' gösterim';
		
		$lang_string['sb_add_link_btn'] = '+ link';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Konu:";
				$lang_string['label_insert'] = "Özel Ekle:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Yüklenmiþ Resimleri Göster";
				$lang_string['label_entry'] = "Girdi:";
				$lang_string['btn_preview'] = "&nbsp;Önizleme&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Gönder&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Formatalanacak metni girin:";
				$lang_string['insert_image'] = "Resmin bulunduðu URL'i girin:";
				$lang_string['insert_url1'] = "Link için gösterilecek metni girin (opsiyonel):";
				$lang_string['insert_url2'] = "Linkin tam URL'ini girin:";
				$lang_string['insert_url3'] = "Adresi yeni pencerede aç (opsiyonel):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Lütfen konu ve girdi alanlarýný tamamlayýn.";	
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opsiyonel:';
				$lang_string['insert_image_width'] = 'Geniþlik (Opsiyonel):';
				$lang_string['insert_image_height'] = 'Yükseklik (Opsiyonel):';
				$lang_string['insert_image_popup'] = 'Pop-up içerisinde tam boyutunu göster (Opsiyonel):';
				$lang_string['insert_image_float'] = 'Float (Opsiyonel):';
		
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
				$lang_string['title'] = "Girdi Ekle";
				$lang_string['instructions'] = "Blog'a hazýr mýsýnýz? Girdinizin nasýl görüneceðini görmek için Önizleme'ye, kaydetmek için de Gönder butonunu kullanabilirsiniz.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Önizleme / Girdi Düzenle";
				$lang_string['instructions_preview'] = "Ýþte girdinizin görünüþü. Eðer metin düzenleyici 'tag'lar kullanýyorsanýz, onlarý kapatmayý unutmayýn.";
				$lang_string['title_update'] = "Girdiyi Güncelle";
				$lang_string['instructions_update'] = "Girdinizi aþaðýdaki form yardýmýyla güncelleyebilirsiniz. Ýþiniz bittiðinde 'Önizleme' ya da 'Gönder' butonunu kullanabilirsiniz.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Girdiniz kaydedilemedi. Girdinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Sabit Sayfa Ekle";
				$lang_string['instructions'] = "Sabit bir sayfa oluþturmak için aþaðýdaki formu doldurun. Normal girdilerden farklý olarak sabit sayfalar linkler gibi sað tarafta sürekli görünürler. Bunlar her zaman görünmesini isteyebileceðiniz 'Benimle ilgili', 'Benimle baðlantýya geçin', 'Proje bilgisi' benzeri sayfalar olabilirler. 'Önizleme'ye týklayarak girdinizin nasýl göründüðünü kontrol edebilir, 'Gönder' butonu ile kaydedebilirsiniz.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Sabit Sayfayý Önizle / Deðiþtir";
				$lang_string['instructions_preview'] = "Ýþte sabit sayfanýzýn nasýl görüneceði. Eðer metin formatlamak için kullandýðýnýz 'tag'lar varsa onlarý kapamayý ihmal etmeyin.";
				$lang_string['title_update'] = "Sabit Sayfayý Güncelle";
				$lang_string['instructions_update'] = "Girdinizi deðiþtirmek için aþaðýdaki formu kullanabilirsiniz. Ýþiniz bittiðinde 'Önizleme' ya da 'Gönder' butonunu kullanabilirsiniz.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Girdiniz kaydedilemedi. Girdinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
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
				$lang_string['title'] = "Link Ekle / Linkleri Yönet";
				$lang_string['instructions'] = "Diðer sitelere linkler ekleyin. formu doldurduktan sonra 'Link Ekle' butonuna týklayarak linkinizi kaydedebilirsiniz. Linkliern sýrasýný deðiþtirmek için yukarý / aþaðý butonlarýný kullanabilirsiniz. Bir linki deðiþtirmek için 'Deðiþtir' butonunu kullanabilirsiniz. Bir linki silmek için ise 'Sil' butonunu kullanabilirsiniz";
				$lang_string['up'] = "yukarý";
				$lang_string['down'] = "aþaðý";
				$lang_string['edit'] = "düzenle";
				$lang_string['delete'] = "sil";
				$lang_string['link_name'] = "Link Adý:";
				$lang_string['link_url'] = "Link URL: (Opsiyonel. Ayraç oluþturmak için boþ býrakabilirsiniz.)";
				$lang_string['instructions_edit'] = "Þu anda bu linki deðiþtiriyorsunuz:";
				$lang_string['instructions_modify'] = "Bir linki editlemek için þuraya týklayýn:";
				$lang_string['submit_btn_edit'] = "Linki Deðiþtir";
				$lang_string['submit_btn_add'] = "Linki ekle";
				$lang_string['form_error'] = "Lütfen isim alanýný tamamlayýn.";
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
				$lang_string['title'] = "Renkleri Deðiþtir";
				$lang_string['instructions'] = "Blog'unuzun arka plan ve metin renklerini deðiþtirebilirsiniz. Önce aþaðýdan rengini deðiþtireceðiniz alaný seçin, daha sonra renk seçici ile renginizi oluþturun. Deðer otomatik olarak deðiþecektir.";
				$lang_string['bg_color'] = "BG Sayfasý";
				$lang_string['main_bg_color'] = "BG Ana Sayfa";
				$lang_string['border_color'] = "Sayfa Kenarlýðý";
				$lang_string['inner_border_color'] = "Ýç Kenarlýk";
				$lang_string['header_bg_color'] = "BG Baþlýðý";
				$lang_string['header_txt_color'] = "Tepe Metni";
				$lang_string['menu_bg_color'] = "BG Menü";
				$lang_string['footer_bg_color'] = "BG Alt Metni";
				$lang_string['txt_color'] = "Ana Metin";
				$lang_string['headline_txt_color'] = "Tepe Metni";
				$lang_string['date_txt_color'] = "Tarih Metni";
				$lang_string['footer_txt_color'] = "Alt Metin";
				$lang_string['link_reg_color'] = "Link";
				$lang_string['link_hi_color'] = "Fare Link Üzerindeyken (FLÜ)";
				$lang_string['link_down_color'] = "Linke Týklandýðý Anda (LTA)";
				// More Colors
				$lang_string['entry_bg'] = "girdi Arkaplaný";
				$lang_string['entry_title_bg'] = "Girdi Konusu Arkaplaný";
				$lang_string['entry_border'] = "Girdi Kenarlýðý";
				$lang_string['entry_title_text'] = "Girdi Baþlýðý Metni";
				$lang_string['entry_text'] = "Girdi Metni";
				$lang_string['menu_bg'] = "Menü Arkaplaný";
				$lang_string['menu_title_bg'] = "Menü Baþlýðý Arkaplaný";
				$lang_string['menu_border'] = "Menü Kenarlýðý";
				$lang_string['menu_title_text'] = "Menü Baþlýðý Metni";
				$lang_string['menu_text'] = "Menü Metni";
				$lang_string['menu_link_reg_color'] = "Menü Linki";
				$lang_string['menu_link_hi_color'] = "Menü (FLÜ)";
				$lang_string['menu_link_down_color'] = "Menu (LTA)";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
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
				$lang_string['title'] = "Yorumlar";
				$lang_string['header'] = "Yorum Ekle";
				$lang_string['instructions'] = "Yorumunuzu aþaðýdaki forma yazýn.";
				$lang_string['comment_name'] = "Adýnýz:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "Yorumunuz:";
				$lang_string['post_btn'] = "&nbsp;Yorumu Gönder&nbsp;";
				$lang_string['delete_btn'] = "sil";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Yorumunuz kaydedilemedi. Yorumunuzu kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Yorumunuz silinemedi. Yorumunuzu simeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				$lang_string['form_error'] = "Lütfen isim ve yorum alanlarýný doldurunuz"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Girdiyi Sil";
				$lang_string['instructions'] = "Silmek istediðinizden emin deðilseniz, bu adýmý geri almanýn mümkün olmadýðýný bilmenizde fayda var :)";
				$lang_string['ok_btn'] = "&nbsp;Tamam&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Ýptal&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entry silinemedi.<br /><br />Sunucu þöyle demiþ:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Sabit Sayfayý Sil";
				$lang_string['instructions'] = "Silmek istediðinizden emin deðilseniz, bu adýmý geri almanýn mümkün olmadýðýný bilmenizde fayda var :)";
				$lang_string['ok_btn'] = "&nbsp;Tamam&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Ýptal&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sayfa silinemedi.<br /><br />Sunucu þöyle demiþ:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Resim Listesi";
				$lang_string['instructions'] = "Resimleri görüntülemek için linklere týklayýn.<br /><br />Girdinize bir resim eklemek için:<br />1) Linke Control ile birlikte týklayýn ve 'Copy Link to Clipboard'ý seçin.<br />2) Girdi ekleme sayfasýna geri dönün.<br />3) 'img' butonuna týklayýn ve kopyaladýðýnýz adresi buraya yapýþtýrýn.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data Bilgisi";
				$lang_string['instructions'] = "Aþaðýdaki bilgi arama motorlarýnýn sayfalarýnýza daha kolay ulaþabilmesi için &quot;meta-data&quot; olarak kullanýlacak. Ayrýca ayný bilgi RSS beslemelerinde de kullanýlabilir.";
				$lang_string['info_keywords'] = "Anahtar Kelimeler: (Anahtar kelimeleri birbirinden virgül ile ayýrabilirsiniz.)";
				$lang_string['info_description'] = "Açýklama: (Siteniz ile ilgili öze bir açýklama giriniz.)";
				$lang_string['info_copyright'] = "Haklar: (Kopyalama haklarý ile ilgili bilgileri giriniz, boþ býrakabilirsiniz.)";
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				$lang_string['form_error'] = "Lütfen Konu ve Author bilgilerini doldurunuz.";
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
				$lang_string['title'] = "Giriþ";
				$lang_string['instructions'] = "Lütfen kulanýcý adýnýzý ve parolanýzý giriniz";
				$lang_string['username'] = "Kullanýcý Adý:";
				$lang_string['password'] = "Parola:";
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Tamamdýr!</h2>Baþarý ile log-in oldunuz. Mutlu bloglar!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Log-in olamadýnýz. Lütfen kullanýcý adý ve parolanýzý doðru yazdýðýnýzdan emin olun.<p />";
				$lang_string['form_error'] = "Lütfen kullanýcý adý ve parola alanlarýný doldurun.";
				break;
			case 'logout':
				$lang_string['title'] = "Çýkýþ";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Logout baþarýsýz oldu. Cookie silinemedi?. Enteresan..<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Kullanýcý &amp; Parola Deðiþtir";
				$lang_string['instructions'] = "Aþaðýdaki forma kullanmak istediðiniz kullanýcý adý ve parolasýný girin.";
				$lang_string['username'] = "Kullanýcý adý:";
				$lang_string['password'] = "Parola:";
				$lang_string['submit_btn'] = "&nbsp;Tamamdýr&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Evet!</h2>Yeni kullanýcý adýnýz ve parolanýz kaydedildi. Mutlu bloglar!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				$lang_string['form_error'] = "Lütfen kullanýcý adý ve parola alanlarýný doldurun.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Hoþgeldiniz";
				$lang_string['instructions'] = "Simple PHP Blog'u seçtiðiniz için telekkürler!";
				
				$lang_string['blog_choose_language'] = "Dil Seçin:";
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Hoþgeldiniz";
				$lang_string['instructions'] = "
				Simple PHP Blog'u seçtiðiniz için teþekkürler!<br /><br />Simple PHP Blog, hafif bir blog sistemidir. PHP 4.1 ya da üstü, ve sunucunun blog'a ait bölümüne yazma hakký çalýþmasý için yeterlidir. Tüm bilgi düz metin dosyalarýnda saklanýr, dolayýsýyla veritabaný gerektirmez.<br /><br />
				Baþlamak içib simple PHP Blog bilgilerinizin saklanmasý için kullanýlacak ('config', 'content', ve 'images') dizinlerini yaratmak zorunda.<br /><br />
				<b>Kuruluma baþlamak için aþaðýdaki linke týklayýnýz:</b>";
				$lang_string['begin'] = "[ Kuruluma Baþla ]";
				break;
			case 'install02':
				$lang_string['title'] = "Ayarlar";
				$lang_string['instructions'] = "'config', 'content', ve 'images' dizinleri yaratýlýyor:";
				$lang_string['folder_exists'] = "Okay! Zaten dizinler mevcut. Herhangi bir deðiþiklik yapýlmadý...";
				$lang_string['folder_failed'] = "Whoops! Dizin yaratýlamadý";
				$lang_string['folder_success'] = "Tamamdýr! Dizin yaratýldý...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Dizin ya da dizinler yaratýlamýyor! Sebepler þunlar olabilir:<br>
				<i>1) <b>Ýzinler</b>, <b>Okuma / Yazma</b>ya izin vermiyor.</i><br>
				<i>2) Tüm dosya ve dizinlerin kullanýcý ID'leri uygun olmalý.</i><p />
				
				Aþaðýdaki adýmlarý uygulayarak yeniden deneyin:<p />				
				1) Dizinleri elle yaratýn: <b>config</b>, <b>content</b>, ve <b>images</b>.<p />
				2) Dizinlere <b>Yazma Hakký</b> verin. Eðer FTP istemcisi ile baðlý iseniz, Owner, User, ve World'ün dizinler üzerinde <b>okuma</b> ve <b>yazma</b> haklarý olmalýdýr. <i>(Bunlarý deðþtirmke için sistem yöneticisi ile baðlantýya geçmeniz de gerekebilir...)</i><p />
				3) Tüm dosya ve dizinlerin kullanýcýsýnýn ayný olduðuna emin olun. <i>(bunun için de sistem yöneticisi ile temasa geçmeniz gerekebilir...)</i>";
				$lang_string['try_again'] = "[ Yeniden Dene ]";
				// Success
				$lang_string['success'] = "<h2>Harika!</h2>Dizinler baþarýyla yaratýldý :)<p /><b>Devam etmek için týklayýn:</b>";
				$lang_string['continue'] = "[ Devam Et ]";
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
				$lang_string['title'] = "Kullanýcý adý &amp; Parola";
				$lang_string['instructions'] = "Bir kullanýcý adý ve parolasý yaratmak için aþaðýdaki formu kullanýn.";
				$lang_string['username'] = "Kullanýcý adý:";
				$lang_string['password'] = "Parola:";
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Tebrikler!</h2>Log-in oldunuz. Ayarlar sayfasýna girmek ve blog'unuz ile ilgili ilk ayarlamalarý yapmak için aþaðýdaki linke týklayýn!<p />";
				$lang_string['btn_setup'] = "[ Ayarlar ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				$lang_string['form_error'] = "Lütfen kullanýcý adý ve parola alanlarýný doldurun.";
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
				$lang_string['title'] = "Ayarlar";
				$lang_string['instructions'] = "Aþaðýdaki form sayesinde blog'unuzun adýný ve kiþisel bilgilerinizi deðiþtirebilirsiniz:";
				$lang_string['blog_title'] = "Blog Adý:";
				$lang_string['blog_author'] = "Sahibi:";
				$lang_string['blog_email'] = "E-Posta Adresi:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Son ek:";
				$lang_string['blog_choose_language'] = "Dil:";
				$lang_string['blog_enable_comments'] = "Kullanýcýlar Yorum Girebilir"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Yorumlarý Pop-up pencerede aç"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_email_notification'] = "Yeni yorum girildiðinde e-posta gönder"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Weblog &quot;pings&quot; gönder"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Pinglenecek servisin tam URL'ini girin (örneðin http://rpc.weblogs.com/RPC2 gibi).<br />Virgüller ile ayýrarak birden fazla servis girebilirsiniz."; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Gösterilecek minimum girdi sayýsý:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Yorumlarda 'tag' kullanýmý mümkün:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					PHP 4.0.4'ten beri, PHP disk alanýndan kazanmak için (.gz) sýkýþtýrýlmýþ dosyalarý okuyup yazabiliyor.
					Ayrýca tarayýcýya gönderilen dosyalarý bant geniþliðini iyi kullanmak için transparan olarak sýkýþtýrabiliyor. 
					<br />
					<br />
					Öntanýmlý olarak Zlib desteði PHP içinde etkin olmuyor. Eðer kutucuklar seçisiz ise
					PHP kurulumunuz Zlib desteklemiyor demektir."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Veri dosyalarý iöin GZIP sýkýþtýrmasýný etkin kýl"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "HTTP çýktýsý için GZIP sýkýþtýrmasýný etkin kýl"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				$lang_string['form_error'] = "Lütfen Sahibi ve Blog adý alanlarýný doldurun.";
				$lang_string['label_entry_order'] = "Girdi dizilimi:";
				$lang_string['select_new_to_old'] = "En yeni en önce";
				$lang_string['select_old_to_new'] = "En eski en önce";
				$lang_string['label_comment_order'] = "Yorum dizilimi:";
								$lang_string['cal_sunday'] = "Sunday"; // New for 0.4.6
				$lang_string['cal_monday'] = "Monday"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Calendar Week Start Day"; // New for 0.4.6
				$lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
				$lang_string['title_comments'] = "Comments"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compression"; // New in 0.4.7
				$lang_string['title_entries'] = "Entries"; // New in 0.4.7
				$lang_string['title_general'] = "General"; // New in 0.4.7
			   $lang_string['title_language'] = "Language"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Comments Allowed For How Many Days? (0 means no expiry)"; // New in 0.4.8
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
				$lang_string['title'] = "Seçenekler";
				$lang_string['instructions'] = "Aþaðýdaki formu kullanarak blog girdilerinizdeki tarih ve saat bilgilerinin gösterim formatýný deðiþtirebilirsiniz. 12 ya da 24 saat görünümlerinden birisini seçebilirsiniz. <b>Önizleme</b> ile ayarlarýnýzýn nasýl göründüðünü görme þansýnýz da var.";
				// Long Date
				$lang_string['ldate_title'] = "Uzun Zaman Formatý:";
				$lang_string['weekday'] = "Haftanýn Günü";
				$lang_string['month'] = "Ay";
				$lang_string['day'] = "Gün";
				$lang_string['year'] = "Yýl";
				$lang_string['none'] = "hiçbiri";
				// Short Date
				$lang_string['sdate_title'] = "Kýsa Zaman Formatý:";
				$lang_string['s_month'] = "Ay";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Gün";
				$lang_string['s_year'] = "Yýl";
				$lang_string['zero_day'] = "Gün önünde 0 eki";
				$lang_string['show_century'] = "Yüzyýlý göster";
				// Time
				$lang_string['time_title'] = "Zaman Formatý:";
				$lang_string['12hour'] = "12-saat formatý";
				$lang_string['24hour'] = "24-saat formatý";
				$lang_string['before_noon'] = "Öðleden Önce";
				$lang_string['after_noon'] = "Öðleden Sonra";
				// Date
				$lang_string['date_title'] = "Tarih Gösterim Formatý:";
				$lang_string['long_date'] = "Uzun Tarih";
				$lang_string['short_date'] = "Kýsa Tarih";
				$lang_string['time'] = "Zaman";
				// Menu
				$lang_string['menu_title'] = "Menü Tarihi Gösterim Formatý:";
				$lang_string['long_date'] = "Uzun Tarih";
				$lang_string['short_date'] = "Kýsa Tarih";
				// Used in multiple places
				$lang_string['zero_day'] = "Gün önünde 0 eki";
				$lang_string['zero_month'] = "Ay önünde 0 eki";
				$lang_string['zero_hour'] = "Saat önünde 0 eki";
				$lang_string['separator'] = "Ayraç:";
				$lang_string['preview'] = "Önizleme:";
				$lang_string['server_offset'] = "Sunucu Ofset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temalar";
				$lang_string['instructions'] = "Menüden farklý bir tema seçebilirsiniz.";
				// Themes
				$lang_string['choose_theme'] = "Temalar:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye çalýþýrken bir sorun ile karþýlaþtým.<br /><br />Server þöyle demiþ:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Resim Yükle";
				$lang_string['instructions'] = "Yüklemek için bir dosya seçmek için butona týklayýnýz.";
				$lang_string['select_file'] = "Dosya Seç:";
				$lang_string['upload_btn'] = "Yükle";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Resim yüklenemedi!<br /><br />Server þöyle demiþ:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Arama Sonuçlarý";
				$lang_string['instructions'] = "<b>%string</b> için arama sonuçlarý:";
				$lang_string['not_found'] = "Sonuç bulunamadý";
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
