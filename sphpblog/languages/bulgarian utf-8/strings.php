<?php
	      // Bulgarian Language Translation(s)
	      // (c) 2005 Lucy Pearl, lusinda <at> gbg <dot> bg
            //

	      // Simple PHP Version: 0.4.1
	      // Language Version:   0.4.1.0

	      function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;

		// Language: English
		$lang_string['language'] = 'bulgarian';

		$lang_string['locale'] = array('bg_BG', 'bulgaria', 'bul');
		$lang_string['rss_locale'] = 'bg-BG'; // New 0.4.8

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'utf-8';
		$lang_string['php_charset'] = 'utf-8';

		setlocale(LC_TIME, $lang_string['locale'] );

		// Some Global Strings

		// Menu
		$lang_string['menu_links'] = "Връзки";
		$lang_string['menu_home'] = "Начало";
		$lang_string['menu_contact'] = "За контакти";
		$lang_string['menu_stats'] = "Статистики";
		$lang_string['menu_calendar'] = "Календар"; // New for 0.4.8
		$lang_string['menu_archive'] = "Архив";
		$lang_string['menu_viewarchives'] = "Виж Архив";
		$lang_string['menu_menu'] = "Меню";
		$lang_string['menu_add'] = "Добави новина";
		$lang_string['menu_add_static'] = "Добави страница";
		$lang_string['menu_upload'] = "Добави изображение";
		$lang_string['menu_setup'] = "Настройки";
		$lang_string['menu_categories'] = "Категории";
		$lang_string['menu_info'] = "Информация";
		$lang_string['menu_options'] = "Параметри";
		$lang_string['menu_themes'] = "Теми";
		$lang_string['menu_colors'] = "Цветове";
		$lang_string['menu_change_login'] = "Смени потребителя";
		$lang_string['menu_logout'] = "Изход";
		$lang_string['menu_login'] = "Вход";
		$lang_string['menu_most_recent'] = "Последни коментари";
		$lang_string['menu_most_recent_entries'] = "Последни новини";
		$lang_string['menu_most_recent_trackback'] = "Последни препратки";
		$lang_string['menu_add_block'] = "Блокове";
		$lang_string['menu_emoticons'] = "Емотикони"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Здравей :)"; // New for 0.4.7
		$lang_string['menu_moderation'] = "Moderation"; // New for 0.4.9

		// Counter
		$lang_string['counter_today'] = "Днес:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Вчера:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Всичко:"; // New for 0.4.8
		$lang_string['counter_title'] = " Посещения"; // New for 0.4.8

		// Other
		$lang_string['home'] = "Начало";
		$lang_string['nav_next'] = 'Следваща';
		$lang_string['nav_back'] = 'Предишна';
		$lang_string['search_title'] = 'Търсене:';
		$lang_string['search_go'] = 'Търси';
		$lang_string['page_generated_in'] = ' Страницата зареди за %s секунди';
		$lang_string['counter_total'] = 'Посещения '; // New in 0.4.8
		$lang_string['read_more'] = 'Още...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( 'Януари', 'Февруари', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември' );
		$lang_string['sb_default_title'] = 'Без име';
		$lang_string['sb_default_author'] = 'Без автор';
		$lang_string['sb_default_footer'] = 'Без подтекст';

		$lang_string['sb_edit'] = 'редактирай';
		$lang_string['sb_delete'] = 'изтрий';
		$lang_string['sb_permalink'] = 'линк';
		$lang_string['sb_trackback'] = 'препратки';
		$lang_string['sb_relatedlink'] = 'свързан линк'; // <-- New in 0.4.6

		$lang_string['sb_add_comment_btn'] = 'добави коментар';
		$lang_string['sb_comment_btn_number_first'] = успех;
		$lang_string['sb_comment_btn'] = 'коментар';
		$lang_string['sb_comments_plural_btn_number_first'] = успех;
		$lang_string['sb_comments_plural_btn'] = 'коментара';

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' преглед';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = 'прегледа: ';
		$lang_string['sb_view_counter_plural_post'] = '';

		$lang_string['sb_add_link_btn'] = 'добави връзка';

		$lang_string['sb_rate_entry_btn'] = 'Кликни за оценка';

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "Име:";
			$lang_string['label_insert'] = "Специални възможности:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['view_images'] = "Прегледай прикачените изображения";
			$lang_string['label_entry'] = "Текст:";
			$lang_string['btn_preview'] = "&nbsp;Преглед&nbsp;";
			$lang_string['btn_post'] = "&nbsp;Изпрати&nbsp;";
			$lang_string['file_name'] = "Име на статичния файл (без интервали или файлови разширения):";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8

            // Javascript Strings
			$lang_string['insert_styles'] = "Въведи стил на текста";
			$lang_string['insert_image'] = "Въведи пълен URL на изображението";
			$lang_string['insert_url1'] = "Въведи текста, който ще се изписва при връзката (незадължително)";
			$lang_string['insert_url2'] = "Въведи пълен URL на връзката";
			$lang_string['insert_url3'] = "Oтвори URL в нов прозорец (незадължително):";
			$lang_string['form_error'] = "Моля, попълни полетата за тема и съдържание.";

           // More Javascript Strings
			$lang_string['insert_image_optional'] = 'Незадължително:';
			$lang_string['insert_image_width'] = 'Ширина (незадължително):';
			$lang_string['insert_image_height'] = 'Височина (незадължително):';
			$lang_string['insert_image_popup'] = 'Виж в пълен размер в нов прозорец при кликване (незадължително):';
			$lang_string['insert_image_float'] = 'Свободно (незадължително):';

			$lang_string['day'] = 'Ден';
			$lang_string['month'] = 'Месец';
			$lang_string['year'] = 'Година';
			$lang_string['hour'] = 'Час';
			$lang_string['minute'] = 'Минута';
			$lang_string['second'] = 'Секунда';
		}

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Добавяне на новина";
				$lang_string['instructions'] = "Попълни формата, след завършване кликни <strong>'Преглед'</strong> за предварителен преглед на новината или <strong>'Изпрати'</strong> за публикуване новината на сайта.";
				$lang_string['title_ad'] = "Потвърди Пингване на Препратка";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
				$lang_string['label_tb_autodiscovery'] = "автоматично откриване";
				$lang_string['label_relatedlink'] = "Свързан Линк"; // New for 0.4.6
				$lang_string['label_categories'] = "Списък на категориите";

                        // Preview / Edit Entry
				$lang_string['title_preview'] = "Преглед / редактиране на новината";
				$lang_string['instructions_preview'] = "Така ще изглежда новината. <strong>Обърни внимание,</strong>: че ако използваш разделяне на текста, прикачил си изоображение или си дал линк, трябва да се увериш, че всички тагове са затворени.";
				$lang_string['title_update'] = "Обновяване на новината";
				$lang_string['instructions_update'] = "Можеш да промениш новината, използвайки следната форма. Когато завършиш, използвай бутоните <strong>'Преглед'</strong> и '<strong>Изпрати'</strong>.";
				$lang_string['ok_btn'] = "&nbsp;ОК&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Отмени&nbsp;";

                        // Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Новината не е запазена! При опита за запазване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1

				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Добави статична страница";
				$lang_string['instructions'] = "Попълни следната форма за създаване на статична страница. За разлика от обичайните, статичните страници се показват в менюто от другата страна. На тях е удобно да се помества информация, която трябва да бъде винаги достъпна: контакти, отговори на често задавани въпроси, график за работа и т.н. Използвай бутона 'Преглед' за предварителен преглед на страницата и 'Изпрати' за запазване на страницата.";

                        // Preview / Edit Entry
				$lang_string['title_preview'] = "Преглед / редактиране на статична страница";
				$lang_string['instructions_preview'] = "Така изглежда статичната страница. Ако използваш стил или изображение, не забравяй да затвориш всички 'тагове'.";
				$lang_string['title_update'] = "Обнови статичната страница";
				$lang_string['instructions_update'] = "Можеш да промениш страницата, използвайки формата по-долу. Когато завършиш редактирането, използвай бутоните 'Преглед' и 'Изпрати'.";
				$lang_string['form_error'] = "Моля, попълни полетата Име, Текст, и Име на файл.";
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Страницата не е запазена.<br /><br />Отговор на сървъра: <br />";
				break;
			case 'add_block':

                        // Add / Manage Blocks
				$lang_string['title'] = "Въведи / Оформи Блок";
				$lang_string['instructions'] = "Въведи обичайни Блокове";
				$lang_string['up'] = "нагоре";
				$lang_string['down'] = "надолу";
				$lang_string['edit'] = "редактирай";
				$lang_string['delete'] = "изтрий";
				$lang_string['block_name'] = "Име на Блока:";
				$lang_string['block_content'] = "Съдържание на Блока:";
				$lang_string['instructions_edit'] = "В момента редактираш Блок:";
				$lang_string['instructions_modify'] = "Кликни по-долу за промени в Блок:";
				$lang_string['submit_btn_edit'] = "Изпрати";
				$lang_string['submit_btn_add'] = "Въведи Блок";
				$lang_string['form_error'] = "Попълни полето Име";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Статични Страници:";

                        // Add / Manage Links
				$lang_string['title'] = "Добавяне / промяна на връзки";
				$lang_string['instructions'] = "Тук можеш да добавиш връзки към други сайтове. Попълни формата и кликни бутона <strong>'Изпрати'</strong>. Кликвай 'нагоре' или 'надолу' за промяна на поредността на връзките. Използвай 'промени' за редактиране на връзката и 'изтрий' - за изтриване.";
				$lang_string['up'] = "нагоре";
				$lang_string['down'] = "надолу";
				$lang_string['edit'] = "промени";
				$lang_string['delete'] = "изтрий";
				$lang_string['link_name'] = "Име:";
				$lang_string['link_url'] = "URL:";
				$lang_string['instructions_edit'] = "Редактираш връзката:";
				$lang_string['instructions_modify'] = "Промени нужната връзка:";
				$lang_string['submit_btn_edit'] = "Изпрати";
				$lang_string['submit_btn_add'] = "Изпрати";
				$lang_string['form_error'] = "Попълни полетата за Име и Адрес на връзката";
				break;
			case 'categories':

                        // Add / Manage Links
				$lang_string['title'] = "Добавяне / Оформяне на Категории";
				$lang_string['instructions'] = "Използвай следната форма за да добавиш и редактираш категориите. Всяка категория трябва да бъде в този формат 'име на категорията (id номер)'. Разделяй с интервали за да създадеш йерархии.<br /><br /><b>Пример:</b><br />Обща (1)<br />Новини (3)<br />&nbsp;&nbsp;Съобщения (6)<br />&nbsp;&nbsp;Събития (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Разни (7)<br />Техника (2)<br />";
				$lang_string['error'] = "Грешка";
				$lang_string['current_categories'] = "Настоящи Категории";
				$lang_string['no_categories_found'] = "Няма Открити Категории";
				$lang_string['category_list'] = "Списък на Категориите:";
				$lang_string['validate'] = "Потвърждаване";
				$lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Настройка на цветовата гама";
				$lang_string['instructions'] = "Можеш да промениш цветовете, използвани на страницата. Използвай палитрата за избор на подходящия цвят, после запиши шестнадесетичното обозначение на цвета в съответното поле.";
				$lang_string['bg_color'] = "Фон на страницата";
				$lang_string['main_bg_color'] = "Фон на основната област";
				$lang_string['border_color'] = "Рамка";
				$lang_string['inner_border_color'] = "Вътрешна рамка";
				$lang_string['header_bg_color'] = "Фон на шапката";
				$lang_string['header_txt_color'] = "Текст на шапката";
				$lang_string['menu_bg_color'] = "Фон на менюто";
				$lang_string['footer_bg_color'] = "Фон на подтекста";
				$lang_string['txt_color'] = "Основен текст";
				$lang_string['headline_txt_color'] = "Заглавие";
				$lang_string['date_txt_color'] = "Текст на датата";
				$lang_string['footer_txt_color'] = "Текст на подтекста";
				$lang_string['link_reg_color'] = "Обичайна връзка";
				$lang_string['link_hi_color'] = "Активна връзка";
				$lang_string['link_down_color'] = "Кликната връзка";

                        // More Colors
				$lang_string['entry_bg'] = "Фон на новините";
				$lang_string['entry_title_bg'] = "Фон на заглавие на новините";
				$lang_string['entry_border'] = "Рамка на новините";
				$lang_string['entry_title_text'] = "Текст на заглавие на новините";
				$lang_string['entry_text'] = "Текст на новините";
				$lang_string['menu_bg'] = "Фон на меню";
				$lang_string['menu_title_bg'] = "Фон на заглавие на меню";
				$lang_string['menu_border'] = "Рамка на меню";
				$lang_string['menu_title_text'] = "Текст на заглавие на меню";
				$lang_string['menu_text'] = "Текст на меню";
				$lang_string['menu_link_reg_color'] = "Обичайна връзка в меню";
				$lang_string['menu_link_hi_color'] = "Активна връзка в меню";
				$lang_string['menu_link_down_color'] = "Кликната връзка в меню";

                        // Submit
				$lang_string['color_preset'] = "Цветови схеми:";
				$lang_string['scheme_name'] = "Въведи име на обичайна цветова схема:";
				$lang_string['scheme_file'] = "Въведи име на файла на цветовата схема (без интервали и файлови разширения):";
				$lang_string['save_btn'] = "&nbsp;Запази&nbsp;";
				$lang_string['form_error'] = "Въведи име на избраната цветова схема.";
				$lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'Избраната тема не позволява промяна на цветовете.';
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена! При опита за запазване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Име:"; //New in 0.4.6.2
				$lang_string['email'] = "Имейл:"; //New in 0.4.6.2
				$lang_string['homepage'] = "Сайт:"; //New in 0.4.6.2
				$lang_string['comment'] = "Коментар:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP Адрес:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>В %s, %s написа:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				$lang_string['comment_capcha'] = "Въведи Anti-Spam кода: <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "Коментари";
				$lang_string['header'] = "Добавяне на коментар";
				$lang_string['instructions'] = "Попълни формата по-долу.";
				$lang_string['comment_name'] = "Заглавие:";
				$lang_string['comment_email'] = "Имейл:";
				$lang_string['comment_url'] = "Сайт:";
				$lang_string['commentposted'] = "Коментарът е изпратен на: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "Помни ме:";
				$lang_string['comment_text'] = "Текст и Името ти:";
				$lang_string['post_btn'] = "&nbsp;Изпрати&nbsp;";
				$lang_string['delete_btn'] = "изтрий";
				$lang_string['ban_btn'] = "ban ip"; // New for 0.4.9
				$lang_string['expired_comment1'] = "Коментари са разрешени само за новини не по-стари от  "; // New for 0.4.8
				$lang_string['expired_comment2'] = " дена."; // New for 0.4.8

				$lang_string['blacklisted'] = "Този IP е баннат. Коментарите от него са забранени."; // New for 0.4.8
				$lang_string['bannedword'] = "Your comment, url, name or email contained word(s) that have been banned by the administrator. Your comment has NOT been posted."; // New for 0.4.8
				$lang_string['nocomments'] = "Comments are not available for this entry."; // New for 0.4.9
                        // Error Response
				$lang_string['error_add'] = "<h2>Упс!</h2>Коментарът не е запазен. При опита за запазване е възникнал проблем.<br /><br />Отговор на сървъра:<br />";
				$lang_string['error_delete'] = "<h2>Упс!</h2>Коментарът не е изтрит. При опита за изтриване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
				$lang_string['error_ban'] = "<h2>Whoops!</h2>IP not added to banned ip listing.<br /><br />Server Reported:<br />";
				$lang_string['success_add'] = "<h2>Comment Added!</h2>Your comment has been successfully saved."; // New for 0.4.8.1
				$lang_string['success_delete'] = "<h2>Comment Deleted!</h2>The comment has been deleted."; // New for 0.4.8.1
				$lang_string['success_ban1'] = "<h2>IP Banned!";
				$lang_string['success_ban2'] = "</h2>To remove this ban in the future, use the Moderation option in the preferences menu."; // New for 0.4.8.1

				$lang_string['form_error'] = "Попълни полетата за заглавие и текст на коментара, както и Anti-Spam кода";
				$lang_string['error_noip'] = "No IP Provided for Blacklist Request.";
				break;

                  case 'delete':
				$lang_string['title'] = "Изтриване на текст";
				$lang_string['instructions'] = "Преди да изтриеш текста още веднъж се увери, че искаш да изтриеш точно него, защото след изтриването му, не е възможно да бъде възстановен...";
				$lang_string['ok_btn'] = "&nbsp;Изтрий&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Отмени&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Упм!</h2>Неуспешно изтриване на бележка.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				break;
			case 'delete_static':
				$lang_string['title'] = "Изтриване на статична страница";
				$lang_string['instructions'] = "Преди да изтриеш тази страница още веднъж се увери, че искаш да изтриеш точно нея, защото няма възможност за отменяне.";
				$lang_string['ok_btn'] = "&nbsp;ОК&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Отмени&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Страницата не е изтрита.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				break;
			case 'image_list':
				$lang_string['title'] = "Каталог на изображения";
				$lang_string['instructions'] = "Кликни съответната връзка за преглеждане на изображенията.<br /><br />За поставяне на изображение в текста:<br />1) Кликни с десен бутон на мишката върху връзката и избери точка от менюто <em>Копиране на връзка</em>.<br />2) Върни се в прозореца за добавяне / промяна.<br />3) Кликни бутон <strong>'img'</strong> и добави в появилото се място връзката от буфера за обмен.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data Информация";
				$lang_string['instructions'] = "Тази информация &quot;meta-data&quot;, ще помогне на търсачките точно да идентифицират и намират сайта. Информацията може да бъде използвана и за RSS feeds.";
				$lang_string['info_keywords'] = "Ключови думи (Списък на ключовите думи, разделени със запетайки):";
				$lang_string['info_description'] = "Описание (Свободен текст с описание на сайта):";
				$lang_string['info_copyright'] = "Права (Запазени права или линк към документите, съдържащи тази информация):";
				$lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена. При опита за запазване е възникнал е проблем.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				$lang_string['form_error'] = "Попълни полетата Заглавие и Автор.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена. При опита за запазване е възникнал е проблем.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>";
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:";
				$lang_string['upgrade_url'] = "Upgrade Comments";
				$lang_string['title'] = "Вход";
				$lang_string['instructions'] = "Въведи име на потребителя и парола";
				$lang_string['username'] = "Име на потребител:";
				$lang_string['password'] = "Парола:";
				$lang_string['submit_btn'] = "&nbsp;Влез&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Поздравления!</h2>Регистрацията в системата е успешна. Приятно новинарстване! :)<br />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Упс!</h2>Неуспешна регистрация. Провери правилно ли са въведени името на потребителя и паролата.<br />";
				$lang_string['form_error'] = "Попълни полетата за име на потребител и парола.";
				break;
			case 'logout':
				$lang_string['title'] = "Изход";
			  $lang_string['error'] = "<h2>Goodbye!</h2>You are now logged out. (You weren't logged in anyway!)<p />";
				$lang_string['success'] = "<h2>Goodbye!</h2>You are now logged out.<p />";
				break;

				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена. При опита за запазване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Смени Потребител &amp; Парола";
				$lang_string['instructions'] = "Попълни формата за смяна на Потребител и/или Парола. Въведи новите Потребител и Парола.";
				$lang_string['username'] = "Потребител:";
				$lang_string['password'] = "Парола:";
				$lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Успех!</h2>Потребителят и/или Паролата са активни. Приятно новинарстване! :)<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Упс!</h2>Информацията не е запазена. При опита за запазване е възникнал проблем.<br /><br />Отговор на сървъра:<br />";
				$lang_string['form_error'] = "Попълни полетата Потребител и Парола.";
				$lang_string['explanation'] = "В последните версии начинът на сменяване на паролата е сменен.  Вече няма възможност за смяна на парола
					и/или потребител през блога.  За да промениш паролата и/или потребителя, изтрий /config/password.php и се увери, че install*.php
					съществува на сървъра.  Когато си готов, опресни тази страница (или излез от блога).  Ще бъдеш насочен да генерираш нова парола
					от същия скрипт, който се използва при създаването на блога.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "
				Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog is a light-weight blogging system. It requires PHP 4.1 or greater, and write-permissions on the server. All information is stored in flat-files, so no database is required.<br /><br />
				In order to begin, Simple PHP Blog needs to create three folders (<b>config</b>, <b>content</b>, and <b>images</b>) in which to store your information. After that, you will create your password and then you can start blogging.<br /><br />
				<b>Click below to begin setup:</b>";
				$lang_string['begin'] = "[ Begin Setup ]";
				break;
			case 'install02':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Trying to create <b>config</b>, <b>content</b>, and <b>images</b> folders:";
				$lang_string['folder_exists'] = "Okay! Folder already exists. No changes made...";
				$lang_string['folder_failed'] = "Whoops! Could not create folder...";
				$lang_string['folder_success'] = "Success! Folder created...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Could not create one or more folders!<br /><br />This is most likely because:<br />
				<ol>
				<li><b>Write Permissions</b> aren't set to allow <b>Read/Write</b> access.</li>
				<li>The <b>UID</b>'s (user ID's) of all files and folder must match.</li>
				</ol>
				Follow the trouble-shooting instructions below and click <b>Try Again</b>:<br />
				<ol>
				<li>Manually create the following folders: <b>config</b>, <b>content</b>, and <b>images</b>.</li>
				<li>Enabled <b>Write Permissions</b> on the folders: In your FTP program, Owner, User, and World should have <b>Read</b> and <b>Write</b> access. <i>(You may need to contact your service provider to change these...)</i></li>
				<li>Make sure the UID's of all your files and folders are the same. <i>(You may need to contact your service provider to change these...)</i></li>
				</ol>";
				$lang_string['try_again'] = "[ Try Again ]";
				// Success
				$lang_string['success'] = "<h2>Success!</h2>Folders created successfully!<p /><b>Click below to continue:</b>";
				$lang_string['continue'] = "[ Continue ]";
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
				$lang_string['title'] = "Create Username &amp; Password";
				$lang_string['instructions'] = "Use the form below to Create a Username and Password.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulations!</h2>You are now logged in. Click below to visit the Setup page, where you can name your blog. Happy blogging!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Username and Password fields.";
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
				$lang_string['title'] = "Настройки";
				$lang_string['instructions'] = "Оттук можеш да промениш името на сайта и личната информация.";
				$lang_string['blog_title'] = "Име на сайта:";
				$lang_string['blog_author'] = "Автор:";
				$lang_string['blog_email'] = "Имейл:";
				$lang_string['blog_avatar'] = "Адрес на Аватар (Остави празно, ако нямаш):"; // <-- New 0.4.6.3
				$lang_string['blog_footer'] = "Подтекст:";
				$lang_string['blog_choose_language'] = "Избери език:";
				$lang_string['blog_enable_comments'] = "Разреши Коментари";
				$lang_string['blog_comments_popup'] = "Отваряй Коментари в нов прозорец";
				$lang_string['blog_enable_voting'] = "Разреши Оценка на новини";
				$lang_string['blog_enable_cache'] = "Разреши Кеш на новините (може да забави скоростта при някои сървъри)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "Разреши блок Календар"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Разреши блок Архив"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Разреши блок Посещения"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "След колко часа броячът да отчита посещението за ново (за определен ip адрес):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Разреши линк Вход (ако не, входът става невидим за посетители, а ти можеш да влизаш през http://yoursite.com/login.php)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Разреши името на сайта като текст (Не маркирай, ако името се съдържа в логото)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Разреши Линк на новината да се вижда под нея"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Разреши Anti-Spam филтър"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Разреши Посещения (общо) в подтекста"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam изображение (GD library only) / Anti-Spam текст"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Разреши линк Статистики"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Разреши блок Последни коментари"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Разреши блок Последни новини"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "Изпращане на имейл при публикуване на коментар";
				$lang_string['blog_send_pings'] = "Изпращане на Пинг &quot;pings&quot;";
				$lang_string['blog_ping_urls'] = "Въведи пълен URL (например http://rpc.weblogs.com/RPC2) на пингващия сървър &quot;ping&quot;.<br />(Можеш да въведеш и повече адреси, разделени от запетайки.)";
				$lang_string['blog_trackback_about'] = "Проследяването на препратки е начин за известяване между блогове. Позволява на други блогове
					да разберат, че в блога ти има линк към тях, чрез изпращането на проследяващ пинг. Както и да видиш кой е дал линк към твоя блог
					чрез получаването на проследяващ пинг.<br />
				   Можеш или да въведеш ръчно пингващия URIs или да оставиш това на автоматично откриване. ";
				$lang_string['blog_trackback_enabled'] = "Разреши Препратки";
				$lang_string['blog_trackback_auto_discovery'] = "Разреши автоматично откриване при въвеждане на съобщения, съдържащи URLs";
				$lang_string['blog_max_entries'] = "Максимум показвани новини:";
				$lang_string['blog_comment_tags'] = "Позволени тагове в коментарите:";
				$lang_string['blog_gzip_about'] = "
					От версия PHP 4.0.4, PHP дава възможност за четене и писане на gzip (.gz) компресирани файлове,
					спестявайки място на диска. Може също да компресира страниците, които се изпращат към браузъри,
					поддържащи gzip компрасия, спестявайки трафик.<br />
					<br />
					Zlib не се поддържа от PHP по подразбиране. Ако липсват местата за маркирането на компресията,
					значи твоята инсталация на PHP не поддържа Zlib разширение.";
				$lang_string['blog_enable_gzip_txt'] = "Разреши GZIP компресия за База данни файловете";
				$lang_string['blog_enable_gzip_output'] = "Разреши GZIP компресия за HTTP изпращане";
				$lang_string['submit_btn'] = "&nbsp;Запази&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Информацията не може да се запази. При опита за запазване е възникнала грешка.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				$lang_string['form_error'] = "Посочи име и автор.";
				$lang_string['label_entry_order'] = "Ред на показване на новините:";
				$lang_string['select_new_to_old'] = "Започни от най-новите";
				$lang_string['select_old_to_new'] = "Започни от най-старите";
				$lang_string['label_comment_order'] = "Ред на показване на коментарите:";
			      $lang_string['cal_sunday'] = "Неделя"; // New for 0.4.6
				$lang_string['cal_monday'] = "Понеделник"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "Начало на седмицата в календара"; // New for 0.4.6
				$lang_string['title_sidebar'] = "Допълнителни"; // New in 0.4.7
				$lang_string['title_comments'] = "Коментари"; // New in 0.4.7
				$lang_string['title_trackback'] = "Препратки"; // New in 0.4.7
				$lang_string['title_compression'] = "Компресия"; // New in 0.4.7
				$lang_string['title_entries'] = "Новини"; // New in 0.4.7
				$lang_string['title_general'] = "Главни"; // New in 0.4.7
				$lang_string['title_language'] = "Език"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Колко дена след публикуване на новина могат да се пишат коментари за нея? (0 означава безсрочно)"; // New in 0.4.8

				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Препратки";
				$lang_string['header'] = "Адрес за препратка:";
				$lang_string['delete_btn'] = "изтрий";
				// Error Response
				$lang_string['error_add'] = "Грешка при запазването на данните за препратката.";
				break;
			case 'options':
				$lang_string['title'] = "Параметри";
				$lang_string['instructions'] = "Настройки на параметрите за показване на дата и час. Полетата <strong>Предварителен преглед</strong> автоматично се обновяват при промяна на който и да е параметър.";
				// Long Date
				$lang_string['ldate_title'] = "Дълъг формат на дата:";
				$lang_string['weekday'] = "Ден от седмицата";
				$lang_string['month'] = "Месец";
				$lang_string['day'] = "Ден";
				$lang_string['year'] = "Година";
				$lang_string['none'] = "празно";
				// Short Date
				$lang_string['sdate_title'] = "Кратък формат на дата:";
				$lang_string['s_month'] = "Месец";
				$lang_string['s_mon'] = "МММ";
				$lang_string['s_day'] = "Ден";
				$lang_string['s_year'] = "Година";
				$lang_string['zero_day'] = "01 вместо 1";
				$lang_string['show_century'] = "Показвай хилядолетие";
				// Time
				$lang_string['time_title'] = "Формат на час:";
				$lang_string['12hour'] = "12-часов формат";
				$lang_string['24hour'] = "24-часов формат";
				$lang_string['before_noon'] = "До обяд";
				$lang_string['after_noon'] = "След обяд";
				// Date
				$lang_string['date_title'] = "Формат на показване:";
				$lang_string['long_date'] = "Дълга дата";
				$lang_string['short_date'] = "Кратка дата";
				$lang_string['time'] = "Час";
				// Menu
				$lang_string['menu_title'] = "Меню Формат на показване на дата:";
				$lang_string['long_date'] = "Дълга дата";
				$lang_string['short_date'] = "Кратка дата";
				// Used in multiple places
				$lang_string['zero_day'] = "01 вместо 1 за ден";
				$lang_string['zero_month'] = "01 вместо 1 за месец";
				$lang_string['zero_hour'] = "01 вместо 1 за час";
				$lang_string['separator'] = "Разделител:";
				$lang_string['preview'] = "Предварителен преглед:";
				$lang_string['server_offset'] = "Разлика от сървъра:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Запази&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Параметрите не са запазени. Възникнала грешка при опита за запазване.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				break;
			case 'themes':
				$lang_string['title'] = "Теми";
				$lang_string['instructions'] = "Използвай падащото меню, за да си избереш предпочитана тема.";
				// Themes
				$lang_string['choose_theme'] = "Теми:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>Информацията не е запазена. Възникнал е проблем при опита за запазване.<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				break;
			case 'upload_img':
				$lang_string['title'] = "Прикачване на изображение";
				$lang_string['instructions'] = "Кликни бутон 'Преглед' за да избереш изображение от локалния диск.";
				$lang_string['select_file'] = "Избери файл:";
				$lang_string['upload_btn'] = "Добави";
				// Error Response
				$lang_string['error'] = "<h2>Упс!</h2>При опита за прикачване на изображението е възникнала грешка. Служебна информация:<br /><br />Отговор на сървъра:<br />";
				$lang_string['success'] = "<h2>Colors Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				break;
			case 'search':
				$lang_string['title'] = "Резултати от Търсенето";
				$lang_string['instructions'] = "Резултати от търсенето на <b>%string</b>:";
				$lang_string['not_found'] = "Няма намерени резултати";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "Въведи Anti-Spam кода:"; // 0.4.2
				$lang_string['title'] = "За контакти";
				$lang_string['instructions'] = "Попълни формата:";
				$lang_string['form_error'] = "Попълни полетата Заглавие и Текст.";
				$lang_string['name'] = "Име:";
				$lang_string['email'] = "Имейл:";
				$lang_string['subject'] = "Заглавие:";
				$lang_string['comment'] = "Текст:";
				$lang_string['submit_btn'] = "&nbsp;Изпрати&nbsp;";
				$lang_string['success'] = "<h2>Успех!</h2>Съобщението беше изпратено.<p />";
				$lang_string['failure'] = "<h2>Грешка!</h2>Съобщението не беше изпратено. Най-вероятно кодът за Anti Spam не е бил въведен правилно.<p />";
				$lang_string['contactsent'] = "Контактната форма е изпратена от: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Адрес:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>В %s, %s написа:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Статистики";
				$lang_string['general'] = "Общо";
				$lang_string['entry_info'] = "<b>%s</b> новини, използвани са <b>%s</b> думи или <b>%s</b> байта";
				$lang_string['comment_info'] = "<b>%s</b> коментара, използвани са <b>%s</b> думи или <b>%s</b> байта";
				$lang_string['trackback_info'] = "<b>%s</b> препратки или <b>%s</b> байта";
				$lang_string['static_info'] = "<b>%s</b> статични страници, използвани са <b>%s</b> думи или <b>%s</b> байта";
				$lang_string['most_viewed_entries'] = "10-те най-преглеждани новини";
				$lang_string['most_commented_entries'] = "10-те най-коментирани новини";
				$lang_string['most_trackbacked_entries'] = "10-те най-препращани новини";
				$lang_string['vote_info'] = "<b>%s</b> гласа или <b>%s</b> байта"; // 0.4.1
				$lang_string["most_voted_entries"] = "10-те най-често оценявани новини"; // 0.4.1
				$lang_string["most_rated_entries"] = "10-те най-високо оценени новини"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Страницата / Функцията е недостъпна';
				$lang_string["errorline1"] = 'Страницата или функцията, която искаш да ползваш, се нуждаят от cookies.';
				$lang_string["errorline2"] = 'Поправи в браузъра си или в друг активиран защитен софтуер настройките за cookies и опитай отново.';
				$lang_string["clientid"] = 'Клиентско ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Страницата / Функцията е недостъпна';
				$lang_string["404"] = 'HTTP Error 404 - Страницата / Функцията не съществува';
				$lang_string["error_404"] = 'Страницата или функцията, която се опитваш да намериш, не съществува.';
				$lang_string["error_javascript"] = 'Страницата или функцията, която се опитваш да намериш, изисква javascript за да работи.';
				$lang_string["error_emailnotsent"] = 'Неуспешно изпращане на съобщението.';
				$lang_string["error_emailnotsentcapcha"] = 'Неуспешно изпращане на съобщението, поради празно или неточно попълнено поле на Anti Spam код.';
				$lang_string["clientid"] = 'Клиентско ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Админ Емотикони";
				$lang_string['instructions'] = "
					Отбележи емотиконите, които искаш да използваш. Срещу тях напиши таговете, които искаш
					да заместват картинките. Могат да се изпозват множество тагове, но трябва да се
					разделят с празно място.<br /><br />

					Например:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />

					<i>(В този случай е задължително да използваш тагове с повече от 2 знака,
					иначе може да се получи неочаквано заместване.)</i>";
				$lang_string["upload_instructions"] = 'Качи нови емотикони:';
				$lang_string["upload_success"] = 'Успех! Изображенията са качени успешно!';
				$lang_string["upload_error"] = 'Грешка! Изображенията не са качени.';
				$lang_string["upload_invalid"] = 'Грешка! Невалиден файл на изображение. Изображенията трябва да са с разширение png, jpg, или gif.';
				$lang_string["save_success"] = 'Предпочитаните емотикони са успешно запазени!';
				$lang_string["save_error"] = 'Грешка! Предпочитаните емотикони не са запазени.';
				$lang_string["save_button"] = 'Изпрати';
				break;

			case 'archives': // New for 0.4.8
				$lang_string['title'] = "Archives";
				$lang_string['showall'] = "Show All";
				break;

			default:
				break;
		}

	}

?>