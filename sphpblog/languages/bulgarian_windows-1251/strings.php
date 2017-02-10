<?php
	      // Bulgarian Language Translation(s)
	      // (c) 2005 Lucy Pearl, lusinda <at> gbg <dot> bg
            //

	      // Simple PHP Version: 0.4.1
	      // Language Version:   0.4.1.0

    function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;

		$lang_string['language'] = 'bulgarian';
		$lang_string['locale'] = array('bg_BG', 'bulgaria', 'bul');
		$lang_string['rss_locale'] = 'bg-BG'; // New 0.4.8

		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'windows-1251';
		$lang_string['php_charset'] = 'windows-1251';

		setlocale(LC_TIME, $lang_string['locale'] );

		// Some Global Strings
		// Menu
		$lang_string['menu_links'] = "������";
		$lang_string['menu_home'] = "������";
		$lang_string['menu_contact'] = "�� ��������";
		$lang_string['menu_stats'] = "����������";
		$lang_string['menu_calendar'] = "��������"; // New for 0.4.8
		$lang_string['menu_archive'] = "�����";
		$lang_string['menu_viewarchives'] = "��� �����";
		$lang_string['menu_menu'] = "����";
		$lang_string['menu_add'] = "������ ������";
		$lang_string['menu_add_static'] = "������ ��������";
		$lang_string['menu_upload'] = "������ �����������";
		$lang_string['menu_setup'] = "���������";
		$lang_string['menu_categories'] = "���������";
		$lang_string['menu_info'] = "����������";
		$lang_string['menu_options'] = "���������";
		$lang_string['menu_themes'] = "����";
		$lang_string['menu_colors'] = "�������";
		$lang_string['menu_change_login'] = "����� �����������";
		$lang_string['menu_logout'] = "�����";
		$lang_string['menu_login'] = "����";
		$lang_string['menu_most_recent'] = "�������� ���������";
		$lang_string['menu_most_recent_entries'] = "�������� ������";
		$lang_string['menu_most_recent_trackback'] = "�������� ���������";
		$lang_string['menu_add_block'] = "�������";
		$lang_string['menu_emoticons'] = "���������"; // New for 0.4.7
		$lang_string['menu_avatar'] = "������� :)"; // New for 0.4.7
		$lang_string['menu_moderation'] = "Moderation"; // New for 0.4.9

		// Counter
		$lang_string['counter_today'] = "����:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "�����:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "������:"; // New for 0.4.8
		$lang_string['counter_title'] = " ���������"; // New for 0.4.8

		// Other
		$lang_string['home'] = "������";
		$lang_string['nav_next'] = '��������';
		$lang_string['nav_back'] = '��������';
		$lang_string['search_title'] = '�������:';
		$lang_string['search_go'] = '�����';
		$lang_string['page_generated_in'] = ' ���������� ������ �� %s �������';
		$lang_string['counter_total'] = '��������� '; // New in 0.4.8
		$lang_string['read_more'] = '���...'; // New in 0.4.8

		// SB Functions
		$lang_string['sb_months'] = array( '������', '��������', '����', '�����', '���', '���', '���', '������', '���������', '��������', '�������', '��������' );
		$lang_string['sb_default_title'] = '��� ���';
		$lang_string['sb_default_author'] = '��� �����';
		$lang_string['sb_default_footer'] = '��� ��������';

		$lang_string['sb_edit'] = '����������';
		$lang_string['sb_delete'] = '������';
		$lang_string['sb_permalink'] = '����';
		$lang_string['sb_trackback'] = '���������';
		$lang_string['sb_relatedlink'] = '������� ����'; // <-- New in 0.4.6

		$lang_string['sb_add_comment_btn'] = '������ ��������';
		$lang_string['sb_comment_btn_number_first'] = �����;
		$lang_string['sb_comment_btn'] = '��������';
		$lang_string['sb_comments_plural_btn_number_first'] = �����;
		$lang_string['sb_comments_plural_btn'] = '���������';

		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' �������';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '��������: ';
		$lang_string['sb_view_counter_plural_post'] = '';

		$lang_string['sb_add_link_btn'] = '������ ������';
		$lang_string['sb_rate_entry_btn'] = '������ �� ������';

		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
			$lang_string['label_subject'] = "���:";

			$lang_string['label_insert'] = "��������� �����������:";
			$lang_string['btn_bold'] = " b ";
			$lang_string['btn_italic'] = " i ";
			$lang_string['btn_image'] = "img";
			$lang_string['btn_url'] = "url";
			$lang_string['view_images'] = "��������� ����������� �����������";
			$lang_string['label_entry'] = "�����:";
			$lang_string['btn_preview'] = "&nbsp;�������&nbsp;";
			$lang_string['btn_post'] = "&nbsp;�������&nbsp;";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
			$lang_string['file_name'] = "��� �� ��������� ���� (��� ��������� ��� ������� ����������):";

            // Javascript Strings
			$lang_string['insert_styles'] = "������ ���� �� ������";
			$lang_string['insert_image'] = "������ ����� URL �� �������������";
			$lang_string['insert_url1'] = "������ ������, ����� �� �� ������� ��� �������� (��������������)";
			$lang_string['insert_url2'] = "������ ����� URL �� ��������";
			$lang_string['insert_url3'] = "O����� URL � ��� �������� (��������������):";
			$lang_string['form_error'] = "����, ������� �������� �� ���� � ����������.";

           // More Javascript Strings
			$lang_string['insert_image_optional'] = '��������������:';
			$lang_string['insert_image_width'] = '������ (��������������):';
			$lang_string['insert_image_height'] = '�������� (��������������):';
			$lang_string['insert_image_popup'] = '��� � ����� ������ � ��� �������� ��� �������� (��������������):';
			$lang_string['insert_image_float'] = '�������� (��������������):';

			$lang_string['day'] = '���';
			$lang_string['month'] = '�����';
			$lang_string['year'] = '������';
			$lang_string['hour'] = '���';
			$lang_string['minute'] = '������';
			$lang_string['second'] = '�������';
		}

		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "�������� �� ������";
				$lang_string['instructions'] = "������� �������, ���� ���������� ������ <strong>'�������'</strong> �� ������������� ������� �� �������� ��� <strong>'�������'</strong> �� ����������� �������� �� �����.";
				$lang_string['title_ad'] = "�������� �������� �� ���������";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all.";
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)";
				$lang_string['label_tb_autodiscovery'] = "����������� ���������";
				$lang_string['label_relatedlink'] = "������� ����"; // New for 0.4.6
				$lang_string['label_categories'] = "������ �� �����������";

                        // Preview / Edit Entry
				$lang_string['title_preview'] = "������� / ����������� �� ��������";
				$lang_string['instructions_preview'] = "���� �� �������� ��������. <strong>������ ��������,</strong>: �� ��� ��������� ��������� �� ������, �������� �� ������������ ��� �� ��� ����, ������ �� �� ������, �� ������ ������ �� ���������.";
				$lang_string['title_update'] = "���������� �� ��������";
				$lang_string['instructions_update'] = "����� �� �������� ��������, ����������� �������� �����. ������ ��������, ��������� �������� <strong>'�������'</strong> � '<strong>�������'</strong>.";
				$lang_string['ok_btn'] = "&nbsp;��&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;������&nbsp;";

                        // Error Response
				$lang_string['error'] = "<h2>���!</h2>�������� �� � ��������! ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "������ �������� ��������";
				$lang_string['instructions'] = "������� �������� ����� �� ��������� �� �������� ��������. �� ������� �� ����������, ���������� �������� �� �������� � ������ �� ������� ������. �� ��� � ������ �� �� �������� ����������, ����� ������ �� ���� ������ ��������: ��������, �������� �� ����� �������� �������, ������ �� ������ � �.�. ��������� ������ '�������' �� ������������� ������� �� ���������� � '�������' �� ��������� �� ����������.";

                        // Preview / Edit Entry
				$lang_string['title_preview'] = "������� / ����������� �� �������� ��������";
				$lang_string['instructions_preview'] = "���� �������� ���������� ��������. ��� ��������� ���� ��� �����������, �� �������� �� �������� ������ '������'.";
				$lang_string['title_update'] = "������ ���������� ��������";
				$lang_string['instructions_update'] = "����� �� �������� ����������, ����������� ������� ��-����. ������ �������� �������������, ��������� �������� '�������' � '�������'.";
				$lang_string['form_error'] = "����, ������� �������� ���, �����, � ��� �� ����.";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>���������� �� � ��������.<br /><br />������� �� �������: <br />";
				break;
			case 'add_block':

                        // Add / Manage Blocks
				$lang_string['title'] = "������ / ������ ����";
				$lang_string['instructions'] = "������ �������� �������";
				$lang_string['up'] = "������";
				$lang_string['down'] = "������";
				$lang_string['edit'] = "����������";
				$lang_string['delete'] = "������";
				$lang_string['block_name'] = "��� �� �����:";
				$lang_string['block_content'] = "���������� �� �����:";
				$lang_string['instructions_edit'] = "� ������� ���������� ����:";
				$lang_string['instructions_modify'] = "������ ��-���� �� ������� � ����:";
				$lang_string['submit_btn_edit'] = "�������";
				$lang_string['submit_btn_add'] = "������ ����";
				$lang_string['form_error'] = "������� ������ ���";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "�������� ��������:";

                        // Add / Manage Links
				$lang_string['title'] = "�������� / ������� �� ������";
				$lang_string['instructions'] = "��� ����� �� ������� ������ ��� ����� �������. ������� ������� � ������ ������ <strong>'�������'</strong>. ������� '������' ��� '������' �� ������� �� ����������� �� ��������. ��������� '�������' �� ����������� �� �������� � '������' - �� ���������.";
				$lang_string['up'] = "������";
				$lang_string['down'] = "������";
				$lang_string['edit'] = "�������";
				$lang_string['delete'] = "������";
				$lang_string['link_name'] = "���:";
				$lang_string['link_url'] = "URL:";
				$lang_string['instructions_edit'] = "���������� ��������:";
				$lang_string['instructions_modify'] = "������� ������� ������:";
				$lang_string['submit_btn_edit'] = "�������";
				$lang_string['submit_btn_add'] = "�������";
				$lang_string['form_error'] = "������� �������� �� ��� � ����� �� ��������";
				break;
			case 'categories':

                        // Add / Manage Links
				$lang_string['title'] = "�������� / �������� �� ���������";
				$lang_string['instructions'] = "��������� �������� ����� �� �� ������� � ���������� �����������. ����� ��������� ������ �� ���� � ���� ������ '��� �� ����������� (id �����)'. �������� � ��������� �� �� �������� ��������.<br /><br /><b>������:</b><br />���� (1)<br />������ (3)<br />&nbsp;&nbsp;��������� (6)<br />&nbsp;&nbsp;������� (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;����� (7)<br />������� (2)<br />";
				$lang_string['error'] = "������";
				$lang_string['current_categories'] = "�������� ���������";
				$lang_string['no_categories_found'] = "���� ������� ���������";
				$lang_string['category_list'] = "������ �� �����������:";
				$lang_string['validate'] = "�������������";
				$lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "��������� �� ��������� ����";
				$lang_string['instructions'] = "����� �� �������� ���������, ���������� �� ����������. ��������� ��������� �� ����� �� ���������� ����, ����� ������ ����������������� ����������� �� ����� � ����������� ����.";
				$lang_string['bg_color'] = "��� �� ����������";
				$lang_string['main_bg_color'] = "��� �� ��������� ������";
				$lang_string['border_color'] = "�����";
				$lang_string['inner_border_color'] = "�������� �����";
				$lang_string['header_bg_color'] = "��� �� �������";
				$lang_string['header_txt_color'] = "����� �� �������";
				$lang_string['menu_bg_color'] = "��� �� ������";
				$lang_string['footer_bg_color'] = "��� �� ���������";
				$lang_string['txt_color'] = "������� �����";
				$lang_string['headline_txt_color'] = "��������";
				$lang_string['date_txt_color'] = "����� �� ������";
				$lang_string['footer_txt_color'] = "����� �� ���������";
				$lang_string['link_reg_color'] = "�������� ������";
				$lang_string['link_hi_color'] = "������� ������";
				$lang_string['link_down_color'] = "�������� ������";

                        // More Colors
				$lang_string['entry_bg'] = "��� �� ��������";
				$lang_string['entry_title_bg'] = "��� �� �������� �� ��������";
				$lang_string['entry_border'] = "����� �� ��������";
				$lang_string['entry_title_text'] = "����� �� �������� �� ��������";
				$lang_string['entry_text'] = "����� �� ��������";
				$lang_string['menu_bg'] = "��� �� ����";
				$lang_string['menu_title_bg'] = "��� �� �������� �� ����";
				$lang_string['menu_border'] = "����� �� ����";
				$lang_string['menu_title_text'] = "����� �� �������� �� ����";
				$lang_string['menu_text'] = "����� �� ����";
				$lang_string['menu_link_reg_color'] = "�������� ������ � ����";
				$lang_string['menu_link_hi_color'] = "������� ������ � ����";
				$lang_string['menu_link_down_color'] = "�������� ������ � ����";

                        // Submit
				$lang_string['color_preset'] = "������� �����:";
				$lang_string['scheme_name'] = "������ ��� �� �������� ������� �����:";
				$lang_string['scheme_file'] = "������ ��� �� ����� �� ��������� ����� (��� ��������� � ������� ����������):";
				$lang_string['save_btn'] = "&nbsp;������&nbsp;";
				$lang_string['form_error'] = "������ ��� �� ��������� ������� �����.";
				$lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = '��������� ���� �� ��������� ������� �� ���������.';
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>������������ �� � ��������! ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "���:"; //New in 0.4.6.2
				$lang_string['email'] = "�����:"; //New in 0.4.6.2
				$lang_string['homepage'] = "����:"; //New in 0.4.6.2
				$lang_string['comment'] = "��������:"; //New in 0.4.6.2
				$lang_string['IPAddress'] = "IP �����:";  // New for 0.4.6.2
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6.2
				$lang_string['wrote'] = "<i>� %s, %s ������:</i><br />\n<br />\n%s"; // New for 0.4.6.2

				$lang_string['comment_capcha'] = "������ Anti-Spam ����: <b>%s</b>"; // 0.4.2
				$lang_string['title'] = "���������";
				$lang_string['header'] = "�������� �� ��������";
				$lang_string['instructions'] = "������� ������� ��-����.";
				$lang_string['comment_name'] = "��������:";
				$lang_string['comment_email'] = "�����:";
				$lang_string['comment_url'] = "����:";
				$lang_string['commentposted'] = "���������� � �������� ��: ";  // New for 0.4.6.2
				$lang_string['comment_remember'] = "����� ��:";
				$lang_string['comment_text'] = "����� � ����� ��:";
				$lang_string['post_btn'] = "&nbsp;�������&nbsp;";
				$lang_string['delete_btn'] = "������";
				$lang_string['ban_btn'] = "ban ip"; // New for 0.4.8
				$lang_string['expired_comment1'] = "��������� �� ��������� ���� �� ������ �� ��-����� ��  "; // New for 0.4.8
				$lang_string['expired_comment2'] = " ����."; // New for 0.4.8

				$lang_string['blacklisted'] = "���� IP � ������. ����������� �� ���� �� ���������."; // New for 0.4.8
				$lang_string['bannedword'] = "Your comment, url, name or email contained word(s) that have been banned by the administrator. Your comment has NOT been posted."; // New for 0.4.8
				$lang_string['nocomments'] = "Comments are not available for this entry."; // New for 0.4.9
                        // Error Response
				$lang_string['error_add'] = "<h2>���!</h2>���������� �� � �������. ��� ����� �� ��������� � ��������� �������.<br /><br />������� �� �������:<br />";
				$lang_string['error_delete'] = "<h2>���!</h2>���������� �� � ������. ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
				$lang_string['form_error'] = "������� �������� �� �������� � ����� �� ���������, ����� � Anti-Spam ����";
				$lang_string['error_ban'] = "<h2>Whoops!</h2>IP not added to banned ip listing.<br /><br />Server Reported:<br />";
				$lang_string['success_add'] = "<h2>Comment Added!</h2>Your comment has been successfully saved."; // New for 0.4.8.1
				$lang_string['success_delete'] = "<h2>Comment Deleted!</h2>The comment has been deleted."; // New for 0.4.8.1
				$lang_string['success_ban1'] = "<h2>IP Banned!";
				$lang_string['success_ban2'] = "</h2>To remove this ban in the future, use the Moderation option in the preferences menu."; // New for 0.4.8.1
				$lang_string['error_noip'] = "No IP Provided for Blacklist Request.";
				break;

                  case 'delete':
				$lang_string['title'] = "��������� �� �����";
				$lang_string['instructions'] = "����� �� ������� ������ ��� ������ �� �����, �� ����� �� ������� ����� ����, ������ ���� ����������� ��, �� � �������� �� ���� �����������...";
				$lang_string['ok_btn'] = "&nbsp;������&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;������&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>��������� ��������� �� �������.<br /><br />������� �� �������:<br />";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				break;
			case 'delete_static':
				$lang_string['title'] = "��������� �� �������� ��������";
				$lang_string['instructions'] = "����� �� ������� ���� �������� ��� ������ �� �����, �� ����� �� ������� ����� ���, ������ ���� ���������� �� ��������.";
				$lang_string['ok_btn'] = "&nbsp;��&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;������&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>���������� �� � �������.<br /><br />������� �� �������:<br />";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				break;
			case 'image_list':
				$lang_string['title'] = "������� �� �����������";
				$lang_string['instructions'] = "������ ����������� ������ �� ����������� �� �������������.<br /><br />�� ��������� �� ����������� � ������:<br />1) ������ � ����� ����� �� ������� ����� �������� � ������ ����� �� ������ <em>�������� �� ������</em>.<br />2) ����� �� � ��������� �� �������� / �������.<br />3) ������ ����� <strong>'img'</strong> � ������ � ��������� �� ����� �������� �� ������ �� �����.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data ����������";
				$lang_string['instructions'] = "���� ���������� &quot;meta-data&quot;, �� ������� �� ���������� ����� �� ������������� � ������� �����. ������������ ���� �� ���� ���������� � �� RSS feeds.";
				$lang_string['info_keywords'] = "������� ���� (������ �� ��������� ����, ��������� ��� ���������):";
				$lang_string['info_description'] = "�������� (�������� ����� � �������� �� �����):";
				$lang_string['info_copyright'] = "����� (�������� ����� ��� ���� ��� �����������, ��������� ���� ����������):";
				$lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>������������ �� � ��������. ��� ����� �� ��������� � ��������� � �������.<br /><br />������� �� �������:<br />";
				$lang_string['form_error'] = "������� �������� �������� � �����.";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating':
				$lang_string['error'] = "<h2>���!</h2>������������ �� � ��������. ��� ����� �� ��������� � ��������� � �������.<br /><br />������� �� �������:<br />";
				$lang_string['success'] = "<h2>Vote Saved!</h2>Your rating has been successfully saved."; // New for 0.4.8.1
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>";
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:";
				$lang_string['upgrade_url'] = "Upgrade Comments";
				$lang_string['title'] = "����";
				$lang_string['instructions'] = "������ ��� �� ����������� � ������";
				$lang_string['username'] = "��� �� ����������:";
				$lang_string['password'] = "������:";
				$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				// Success
				$lang_string['success'] = "<h2>������������!</h2>������������� � ��������� � �������. ������� �������������! :)<br />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>���!</h2>��������� �����������. ������� �������� �� �� �������� ����� �� ����������� � ��������.<br />";
				$lang_string['form_error'] = "������� �������� �� ��� �� ���������� � ������.";
				break;
			case 'logout':
				$lang_string['title'] = "�����";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				$lang_string['error'] = "<h2>Goodbye!</h2>You are now logged out. (You weren't logged in anyway!)<p />";
				$lang_string['success'] = "<h2>Goodbye!</h2>You are now logged out.<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>������������ �� � ��������. ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "����� ���������� &amp; ������";
				$lang_string['instructions'] = "������� ������� �� ����� �� ���������� �/��� ������. ������ ������ ���������� � ������.";
				$lang_string['username'] = "����������:";
				$lang_string['password'] = "������:";
				$lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�����!</h2>������������ �/��� �������� �� �������. ������� �������������! :)<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>���!</h2>������������ �� � ��������. ��� ����� �� ��������� � ��������� �������.<br /><br />������� �� �������:<br />";
				$lang_string['form_error'] = "������� �������� ���������� � ������.";
				$lang_string['explanation'] = "� ���������� ������ ������� �� ��������� �� �������� � ������.  ���� ���� ���������� �� ����� �� ������
					�/��� ���������� ���� �����.  �� �� �������� �������� �/��� �����������, ������ /config/password.php � �� �����, �� install*.php
					���������� �� �������.  ������ �� �����, ������� ���� �������� (��� ����� �� �����).  �� ����� ������� �� ��������� ���� ������
					�� ����� ������, ����� �� �������� ��� ����������� �� �����.";  // New for 0.4.6
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
				$lang_string['title'] = "���������";
				$lang_string['instructions'] = "����� ����� �� �������� ����� �� ����� � ������� ����������.";
				$lang_string['blog_title'] = "��� �� �����:";
				$lang_string['blog_author'] = "�����:";
				$lang_string['blog_email'] = "�����:";
				$lang_string['blog_avatar'] = "����� �� ������ (������ ������, ��� �����):"; // <-- New 0.4.6.3
				$lang_string['blog_footer'] = "��������:";
				$lang_string['blog_choose_language'] = "������ ����:";
				$lang_string['blog_enable_comments'] = "������� ���������";
				$lang_string['blog_comments_popup'] = "������� ��������� � ��� ��������";
				$lang_string['blog_enable_voting'] = "������� ������ �� ������";
				$lang_string['blog_enable_cache'] = "������� ��� �� �������� (���� �� ������ ��������� ��� ����� �������)"; // New for 0.4.6
				$lang_string['blog_enable_calendar'] = "������� ���� ��������"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "������� ���� �����"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "������� ���� ���������"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "���� ����� ���� ������� �� ������ ����������� �� ���� (�� ��������� ip �����):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "������� ���� ���� (��� ��, ������ ����� ������� �� ����������, � �� ����� �� ������ ���� http://yoursite.com/login.php)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "������� ����� �� ����� ���� ����� (�� ��������, ��� ����� �� ������� � ������)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "������� ���� �� �������� �� �� ����� ��� ���"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "������� Anti-Spam ������"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "������� ��������� (����) � ���������"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Anti-Spam ����������� (GD library only) / Anti-Spam �����"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "������� ���� ����������"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "������� ���� �������� ���������"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "������� ���� �������� ������"; // New for 0.4.7
				$lang_string['blog_email_notification'] = "��������� �� ����� ��� ����������� �� ��������";
				$lang_string['blog_send_pings'] = "��������� �� ���� &quot;pings&quot;";
				$lang_string['blog_ping_urls'] = "������ ����� URL (�������� http://rpc.weblogs.com/RPC2) �� ��������� ������ &quot;ping&quot;.<br />(����� �� ������� � ������ ������, ��������� �� ���������.)";
				$lang_string['blog_trackback_about'] = "�������������� �� ��������� � ����� �� ����������� ����� �������. ��������� �� ����� �������
					�� ��������, �� � ����� �� ��� ���� ��� ���, ���� ����������� �� ����������� ����. ����� � �� ����� ��� � ��� ���� ��� ���� ����
					���� ������������ �� ����������� ����.<br />
				   ����� ��� �� ������� ����� ��������� URIs ��� �� ������� ���� �� ����������� ���������. ";
				$lang_string['blog_trackback_enabled'] = "������� ���������";
				$lang_string['blog_trackback_auto_discovery'] = "������� ����������� ��������� ��� ��������� �� ���������, ��������� URLs";
				$lang_string['blog_max_entries'] = "�������� ��������� ������:";
				$lang_string['blog_comment_tags'] = "��������� ������ � �����������:";
				$lang_string['blog_gzip_about'] = "
					�� ������ PHP 4.0.4, PHP ���� ���������� �� ������ � ������ �� gzip (.gz) ������������ �������,
					����������� ����� �� �����. ���� ���� �� ���������� ����������, ����� �� �������� ��� ��������,
					���������� gzip ���������, ����������� ������.<br />
					<br />
					Zlib �� �� �������� �� PHP �� ������������. ��� ������� ������� �� ����������� �� �����������,
					����� ������ ���������� �� PHP �� �������� Zlib ����������.";
				$lang_string['blog_enable_gzip_txt'] = "������� GZIP ��������� �� ���� ����� ���������";
				$lang_string['blog_enable_gzip_output'] = "������� GZIP ��������� �� HTTP ���������";
				$lang_string['submit_btn'] = "&nbsp;������&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>������������ �� ���� �� �� ������. ��� ����� �� ��������� � ���������� ������.<br /><br />������� �� �������:<br />";
				$lang_string['form_error'] = "������ ��� � �����.";
				$lang_string['label_entry_order'] = "��� �� ��������� �� ��������:";
				$lang_string['select_new_to_old'] = "������� �� ���-������";
				$lang_string['select_old_to_new'] = "������� �� ���-�������";
				$lang_string['label_comment_order'] = "��� �� ��������� �� �����������:";
			      $lang_string['cal_sunday'] = "������"; // New for 0.4.6
				$lang_string['cal_monday'] = "����������"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "������ �� ��������� � ���������"; // New for 0.4.6
				$lang_string['title_sidebar'] = "������������"; // New in 0.4.7
				$lang_string['title_comments'] = "���������"; // New in 0.4.7
				$lang_string['title_trackback'] = "���������"; // New in 0.4.7
				$lang_string['title_compression'] = "���������"; // New in 0.4.7
				$lang_string['title_entries'] = "������"; // New in 0.4.7
				$lang_string['title_general'] = "������"; // New in 0.4.7
				$lang_string['title_language'] = "����"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "����� ���� ���� ����������� �� ������ ����� �� �� ����� ��������� �� ���? (0 �������� ���������)"; // New in 0.4.8
				$lang_string['success'] = "<h2>Preferences Saved!</h2>Information has been successfully saved."; // New for 0.4.8.1
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "���������";
				$lang_string['header'] = "����� �� ���������:";
				$lang_string['delete_btn'] = "������";
				// Error Response
				$lang_string['error_add'] = "������ ��� ����������� �� ������� �� �����������.";
				break;
			case 'options':
				$lang_string['title'] = "���������";
				$lang_string['instructions'] = "��������� �� ����������� �� ��������� �� ���� � ���. �������� <strong>������������� �������</strong> ����������� �� ��������� ��� ������� �� ����� � �� � ���������.";
				// Long Date
				$lang_string['ldate_title'] = "����� ������ �� ����:";
				$lang_string['weekday'] = "��� �� ���������";
				$lang_string['month'] = "�����";
				$lang_string['day'] = "���";
				$lang_string['year'] = "������";
				$lang_string['none'] = "������";
				// Short Date
				$lang_string['sdate_title'] = "������ ������ �� ����:";
				$lang_string['s_month'] = "�����";
				$lang_string['s_mon'] = "���";
				$lang_string['s_day'] = "���";
				$lang_string['s_year'] = "������";
				$lang_string['zero_day'] = "01 ������ 1";
				$lang_string['show_century'] = "�������� �����������";
				// Time
				$lang_string['time_title'] = "������ �� ���:";
				$lang_string['12hour'] = "12-����� ������";
				$lang_string['24hour'] = "24-����� ������";
				$lang_string['before_noon'] = "�� ����";
				$lang_string['after_noon'] = "���� ����";
				// Date
				$lang_string['date_title'] = "������ �� ���������:";
				$lang_string['long_date'] = "����� ����";
				$lang_string['short_date'] = "������ ����";
				$lang_string['time'] = "���";
				// Menu
				$lang_string['menu_title'] = "���� ������ �� ��������� �� ����:";
				$lang_string['long_date'] = "����� ����";
				$lang_string['short_date'] = "������ ����";
				// Used in multiple places
				$lang_string['zero_day'] = "01 ������ 1 �� ���";
				$lang_string['zero_month'] = "01 ������ 1 �� �����";
				$lang_string['zero_hour'] = "01 ������ 1 �� ���";
				$lang_string['separator'] = "����������:";
				$lang_string['preview'] = "������������� �������:";
				$lang_string['server_offset'] = "������� �� �������:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;������&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>����������� �� �� ��������. ���������� ������ ��� ����� �� ���������.<br /><br />������� �� �������:<br />";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				break;
			case 'themes':
				$lang_string['title'] = "����";
				$lang_string['instructions'] = "��������� �������� ����, �� �� �� ������� ������������ ����.";
				// Themes
				$lang_string['choose_theme'] = "����:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>������������ �� � ��������. ��������� � ������� ��� ����� �� ���������.<br /><br />������� �� �������:<br />";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				break;
			case 'upload_img':
				$lang_string['title'] = "���������� �� �����������";
				$lang_string['instructions'] = "������ ����� '�������' �� �� ������� ����������� �� �������� ����.";
				$lang_string['select_file'] = "������ ����:";
				$lang_string['upload_btn'] = "������";
				// Error Response
				$lang_string['error'] = "<h2>���!</h2>��� ����� �� ���������� �� ������������� � ���������� ������. �������� ����������:<br /><br />������� �� �������:<br />";
				$lang_string['success'] = "<h2>Entry Saved!</h2>Your entry has been successfully saved."; // 0.4.8.1
				break;
			case 'search':
				$lang_string['title'] = "��������� �� ���������";
				$lang_string['instructions'] = "��������� �� ��������� �� <b>%string</b>:";
				$lang_string['not_found'] = "���� �������� ���������";
				break;
			case 'contact':
				$lang_string['contact_capcha'] = "������ Anti-Spam ����:"; // 0.4.2
				$lang_string['title'] = "�� ��������";
				$lang_string['instructions'] = "������� �������:";
				$lang_string['form_error'] = "������� �������� �������� � �����.";
				$lang_string['name'] = "���:";
				$lang_string['email'] = "�����:";
				$lang_string['subject'] = "��������:";
				$lang_string['comment'] = "�����:";
				$lang_string['submit_btn'] = "&nbsp;�������&nbsp;";
				$lang_string['success'] = "<h2>�����!</h2>����������� ���� ���������.<p />";
				$lang_string['failure'] = "<h2>������!</h2>����������� �� ���� ���������. ���-�������� ����� �� Anti Spam �� � ��� ������� ��������.<p />";
				$lang_string['contactsent'] = "����������� ����� � ��������� ��: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP �����:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>� %s, %s ������:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "����������";
				$lang_string['general'] = "����";
				$lang_string['entry_info'] = "<b>%s</b> ������, ���������� �� <b>%s</b> ���� ��� <b>%s</b> �����";
				$lang_string['comment_info'] = "<b>%s</b> ���������, ���������� �� <b>%s</b> ���� ��� <b>%s</b> �����";
				$lang_string['trackback_info'] = "<b>%s</b> ��������� ��� <b>%s</b> �����";
				$lang_string['static_info'] = "<b>%s</b> �������� ��������, ���������� �� <b>%s</b> ���� ��� <b>%s</b> �����";
				$lang_string['most_viewed_entries'] = "10-�� ���-����������� ������";
				$lang_string['most_commented_entries'] = "10-�� ���-����������� ������";
				$lang_string['most_trackbacked_entries'] = "10-�� ���-���������� ������";
				$lang_string['vote_info'] = "<b>%s</b> ����� ��� <b>%s</b> �����"; // 0.4.1
				$lang_string["most_voted_entries"] = "10-�� ���-����� ��������� ������"; // 0.4.1
				$lang_string["most_rated_entries"] = "10-�� ���-������ ������� ������"; // 0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - ���������� / ��������� � ����������';
				$lang_string["errorline1"] = '���������� ��� ���������, ����� ����� �� �������, �� ������� �� cookies.';
				$lang_string["errorline2"] = '������� � �������� �� ��� � ���� ��������� ������� ������� ����������� �� cookies � ������ ������.';
				$lang_string["clientid"] = '��������� ID: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - ���������� / ��������� � ����������';
				$lang_string["404"] = 'HTTP Error 404 - ���������� / ��������� �� ����������';
				$lang_string["error_404"] = '���������� ��� ���������, ����� �� ������� �� �������, �� ����������.';
				$lang_string["error_javascript"] = '���������� ��� ���������, ����� �� ������� �� �������, ������� javascript �� �� ������.';
				$lang_string["error_emailnotsent"] = '��������� ��������� �� �����������.';
				$lang_string["error_emailnotsentcapcha"] = '��������� ��������� �� �����������, ������ ������ ��� ������� ��������� ���� �� Anti Spam ���.';
				$lang_string["clientid"] = '��������� ID: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "����� ���������";
				$lang_string['instructions'] = "
					�������� �����������, ����� ����� �� ���������. ����� ��� ������ ��������, ����� �����
					�� ��������� ����������. ����� �� �� �������� ��������� ������, �� ������ �� ��
					�������� � ������ �����.<br /><br />

					��������:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />

					<i>(� ���� ������ � ������������ �� ��������� ������ � ������ �� 2 �����,
					����� ���� �� �� ������ ���������� ����������.)</i>";
				$lang_string["upload_instructions"] = '���� ���� ���������:';
				$lang_string["upload_success"] = '�����! ������������� �� ������ �������!';
				$lang_string["upload_error"] = '������! ������������� �� �� ������.';
				$lang_string["upload_invalid"] = '������! ��������� ���� �� �����������. ������������� ������ �� �� � ���������� png, jpg, ��� gif.';
				$lang_string["save_success"] = '�������������� ��������� �� ������� ��������!';
				$lang_string["save_error"] = '������! �������������� ��������� �� �� ��������.';
				$lang_string["save_button"] = '�������';
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