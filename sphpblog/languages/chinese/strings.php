<?php
	// Simplified Chinese Language File
	// (c) 2004 Jfly, jflycn <at> hotmail <dot> com
	//
	// Simple PHP Version: 0.4.6
	// Language Version:   0.4.6.2
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Simplified Chinese
		$lang_string[ 'language' ] = 'chinese';
		
		$lang_string[ 'locale' ] = array('zh_CN.UTF-8','zh_CN.GB2312','chs','chinese-simplified');
		$lang_string['rss_locale'] = 'zh-CN'; // New 0.4.8
		
		// ISO Charset: UTF-8
		$lang_string[ 'html_charset' ] = 'UTF-8';
		$lang_string[ 'php_charset' ] = 'UTF-8';
		
		setlocale(LC_TIME, $lang_string[ 'locale' ] );
		
		// Some Global Strings
		
		// Menu
		$lang_string[ 'menu_links' ] = "链接";
		$lang_string[ 'menu_home' ] = "首页";
		$lang_string[ 'menu_contact' ] = "联系我";
		$lang_string[ 'menu_stats' ] = "统计";
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string[ 'menu_archive' ] = "归档";
		$lang_string[ 'menu_viewarchives' ] = "View Archives"; // New in 0.4.7
		$lang_string[ 'menu_menu' ] = "菜单";
		$lang_string[ 'menu_add' ] = "添加条目";
		$lang_string[ 'menu_add_static' ] = "添加静态页面";
		$lang_string[ 'menu_upload' ] = "上传图片";
		$lang_string[ 'menu_setup' ] = "设置";
		$lang_string[ 'menu_categories' ] = "分类";
		$lang_string[ 'menu_info' ] = "信息";
		$lang_string[ 'menu_options' ] = "选项";
		$lang_string[ 'menu_themes' ] = "页面主题";
		$lang_string[ 'menu_colors' ] = "调色";
		$lang_string[ 'menu_change_login' ] = "更改登录";
		$lang_string[ 'menu_logout' ] = "登出";
		$lang_string[ 'menu_login' ] = "登录";
		$lang_string[ 'menu_most_recent' ] = "最新评论";
		$lang_string[ 'menu_most_recent_entries' ] = "最新日志";
		$lang_string[ 'menu_most_recent_trackback' ] = "最新引用";
		$lang_string[ 'menu_add_block' ] = "展台";
		$lang_string['menu_emoticons'] = "Emoticons"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Today:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Yesterday:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Counter Totals"; // New for 0.4.8
		
		// Other
		$lang_string[ 'home' ] = "返回首页";
		$lang_string[ 'nav_next' ] = '下一页';
		$lang_string[ 'nav_back' ] = '上一页';
		$lang_string[ 'search_title' ] = '搜索：';
		$lang_string[ 'search_go' ] = 'Go';
		$lang_string[ 'page_generated_in' ] = '页面生成时间: %s 秒';
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8
		
		// SB Functions
		$lang_string[ 'sb_months' ] = array( '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' );
		$lang_string[ 'sb_default_title' ] = '没有标题';
		$lang_string[ 'sb_default_author' ] = '没有作者';
		$lang_string[ 'sb_default_footer' ] = '没有页脚';
		
		$lang_string[ 'sb_edit' ] = '编辑';
		$lang_string[ 'sb_delete' ] = '删除';
		$lang_string[ 'sb_permalink' ] = '永久链接';
		$lang_string[ 'sb_trackback' ] = '引用';
		$lang_string['sb_relatedlink'] = 'related link'; // <-- New in 0.4.6		
		
		$lang_string[ 'sb_add_comment_btn' ] = '发表评论';
		$lang_string[ 'sb_comment_btn_number_first' ] = true;
		$lang_string[ 'sb_comment_btn' ] = '评论';
		$lang_string[ 'sb_comments_plural_btn_number_first' ] = true;
		$lang_string[ 'sb_comments_plural_btn' ] = '评论';
		
		// ( 1 view )
		$lang_string[ 'sb_view_counter_pre' ] = '';
		$lang_string[ 'sb_view_counter_post' ] = ' 次浏览';
		// ( 2 views )
		$lang_string[ 'sb_view_counter_plural_pre' ] = '';
		$lang_string[ 'sb_view_counter_plural_post' ] = ' 次浏览';
		
		$lang_string[ 'sb_add_link_btn' ] = '添加/管理链接';
		
		$lang_string[ 'sb_rate_entry_btn' ] = '点击给日志打分';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string[ 'label_subject' ] = "题目：";
				$lang_string[ 'label_insert' ] = "插入标签：";
				$lang_string[ 'btn_bold' ] = "粗";
				$lang_string[ 'btn_italic' ] = "斜";
				$lang_string[ 'btn_image' ] = "图";
				$lang_string[ 'btn_url' ] = "链";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string[ 'view_images' ] = "浏览上传的图片";
				$lang_string[ 'label_entry' ] = "内容：";
				$lang_string[ 'btn_preview' ] = "&nbsp;预览&nbsp;";
				$lang_string[ 'btn_post' ] = "&nbsp;发表&nbsp;";
				$lang_string[ 'file_name' ] = "静态文件名：(不包含空格及文件扩展名)";
				// Javascript Strings
				$lang_string[ 'insert_styles' ] = "输入要格式化的文字";
				$lang_string[ 'insert_image' ] = "输入图片的地址";
				$lang_string[ 'insert_url1' ] = "输入链接的说明文字(可选)";
				$lang_string[ 'insert_url2' ] = "输入链接的完整地址";
				$lang_string[ 'insert_url3' ] = "在新窗口中打开链接(可选)：";
				$lang_string[ 'form_error' ] = "请完整填写条目的题目和内容。";
				// More Javascript Strings <-- New 0.3.6
				$lang_string[ 'insert_image_optional' ] = '可选：';
				$lang_string[ 'insert_image_width' ] = '宽度(可选)：';
				$lang_string[ 'insert_image_height' ] = '高度(可选)：';
				$lang_string[ 'insert_image_popup' ] = '点击后在弹出窗口浏览全图(可选)：';
				$lang_string[ 'insert_image_float' ] = '浮动(可选)：';
		
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
				$lang_string[ 'title' ] = "添加条目";
				$lang_string[ 'title_ad' ] = "确认发送引用通告";
				$lang_string[ 'instructions' ] = "您准备好了么? 填写下面的表单然后按“预览”来查看条目的样子，或者按“发表”以保存条目。";
				$lang_string[ 'instructions_ad' ] = "这些是程序自动挖掘的将要发送引用通告的网址。如果您不想对每个网址发送通告，就取消对它的选择。按“确定”以发送通告，按“取消”则不发送通告。"; // <-- New 0.3.8
				$lang_string[ 'label_tb_ping' ] = "将要发送的通告（以英文逗号分开）";
				$lang_string[ 'label_tb_autodiscovery' ] = "自动挖掘";
				$lang_string['label_relatedlink'] = "Related Link";
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string[ 'title_preview' ] = "预览/编辑条目";
				$lang_string[ 'instructions_preview' ] = "下面是条目的样子。如果您使用了文字样式或包含了图片，请记得关闭所有的标签。";
				$lang_string[ 'title_update' ] = "更新条目";
				$lang_string[ 'instructions_update' ] = "您可以使用下面的表单更新您的条目。准备好了就按“预览”或“发表”。";
				$lang_string[ 'ok_btn' ] = "&nbsp;确定&nbsp;";
				$lang_string[ 'cancel_btn' ] = "&nbsp;取消&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>条目没有保存。在保存条目时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string[ 'title' ] = "添加静态页面";
				$lang_string[ 'instructions' ] = "填写下面的表单来生成一个静态页面。和标准的日志条目不同的是，静态条目的链接直接显示在页面右侧的菜单。这些用于常用的内容，比如：关于我、联系我们、工作计划等。按“预览”来查看条目的样子，或者按“发表”以保存条目。";
				// Preview / Edit Entry
				$lang_string[ 'title_preview' ] = "预览/编辑条目";
				$lang_string[ 'instructions_preview' ] = "下面是条目的样子。如果您使用了文字样式或包含了图片，请记得关闭所有的标签。";
				$lang_string[ 'title_update' ] = "更新条目";
				$lang_string[ 'instructions_update' ] = "您可以使用下面的表单更新您的条目。准备好了就按“预览”或“发表”。";
				$lang_string[ 'form_error' ] = "请完整填写标题、内容和文件名。";	
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>条目没有保存。在保存条目时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string[ 'title' ] = "添加 / 管理展台";
				$lang_string[ 'instructions' ] = "添加自定义的展台。展台(blocks)是页面菜单栏上的区块，您添加一个试试看就明白了。";
				$lang_string[ 'up' ] = "向上";
				$lang_string[ 'down' ] = "向下";
				$lang_string[ 'edit' ] = "编辑";
				$lang_string[ 'delete' ] = "删除";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block content:";
				$lang_string[ 'instructions_edit' ] = "您正在编辑一个展台：";
				$lang_string[ 'instructions_modify' ] = "点击以修改一个展台：";
				$lang_string[ 'submit_btn_edit' ] = "编辑展台";
				$lang_string[ 'submit_btn_add' ] = "添加展台";
				$lang_string[ 'form_error' ] = "请输入名称。";
				break;
			case 'add_link':
				$lang_string[ 'static_pages' ] = "静态页面：";
				// Add / Manage Links
				$lang_string[ 'title' ] = "添加/管理链接";
				$lang_string[ 'instructions' ] = "添加自定义的指向其他站点的链接。填写下面的表单然后按“添加链接”来添加一个链接。按向上向下的按钮来改变链接的次序。按编辑按钮来改动链接。按删除按钮来移除一个链接。";
				$lang_string[ 'up' ] = "向上";
				$lang_string[ 'down' ] = "向下";
				$lang_string[ 'edit' ] = "编辑";
				$lang_string[ 'delete' ] = "删除";
				$lang_string[ 'link_name' ] = "链接名称：";
				$lang_string[ 'link_url' ] = "链接地址：(可选。留空来生成一个分隔符。)";
				$lang_string[ 'instructions_edit' ] = "您正在编辑链接：";
				$lang_string[ 'instructions_modify' ] = "按下面的按钮来改动一个链接：";
				$lang_string[ 'submit_btn_edit' ] = "编辑链接";
				$lang_string[ 'submit_btn_add' ] = "添加链接";
				$lang_string[ 'form_error' ] = "请填写链接名称。";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string[ 'title' ] = "添加 / 管理分类";
				$lang_string[ 'instructions' ] = "使用下面的表单来添加和编辑分类。每个类别的格式应该为“分类名(数字编号)'。可以用空格缩进来制造多层分类。<br /><br /><b>例如：</b><br />第一大类(1)<br />第二大类(3)<br />&nbsp;&nbsp;第1小类(6)<br />&nbsp;&nbsp;第2小类(5)<br />&nbsp;&nbsp;&nbsp;&nbsp;小小类(7)<br />第三大类(2)<br />";
				$lang_string[ 'error' ] = "错误";
				$lang_string[ 'current_categories' ] = "当前分类";
				$lang_string[ 'no_categories_found' ] = "没有分类";
				$lang_string[ 'category_list' ] = "分类列表：";
				$lang_string[ 'validate' ] = "验证";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string[ 'title' ] = "调色";
				$lang_string[ 'instructions' ] = "您可以改变日志的文字和背景的颜色。先在下面选择项目，然后使用调色板来获得颜色。色值是自动改变的。";
				$lang_string[ 'bg_color' ] = "日志页面";
				$lang_string[ 'main_bg_color' ] = "日志主体";
				$lang_string[ 'border_color' ] = "页面边框";
				$lang_string[ 'inner_border_color' ] = "内边框";
				$lang_string[ 'header_bg_color' ] = "日志页眉";
				$lang_string[ 'header_txt_color' ] = "页眉文字";
				$lang_string[ 'menu_bg_color' ] = "日志菜单";
				$lang_string[ 'footer_bg_color' ] = "日志页脚";
				$lang_string[ 'txt_color' ] = "主体文字";
				$lang_string[ 'headline_txt_color' ] = "标题文字";
				$lang_string[ 'date_txt_color' ] = "日期文字";
				$lang_string[ 'footer_txt_color' ] = "页脚文字";
				$lang_string[ 'link_reg_color' ] = "链接缺省";
				$lang_string[ 'link_hi_color' ] = "链接悬浮";
				$lang_string[ 'link_down_color' ] = "链接激活";
				// More Colors
				$lang_string[ 'entry_bg' ] = "条目背景";
				$lang_string[ 'entry_title_bg' ] = "条目标题背景";
				$lang_string[ 'entry_border' ] = "条目边框";
				$lang_string[ 'entry_title_text' ] = "条目标题文字";
				$lang_string[ 'entry_text' ] = "条目文字";
				$lang_string[ 'menu_bg' ] = "菜单背景";
				$lang_string[ 'menu_title_bg' ] = "菜单标题背景";
				$lang_string[ 'menu_border' ] = "菜单边框";
				$lang_string[ 'menu_title_text' ] = "菜单标题文字";
				$lang_string[ 'menu_text' ] = "菜单文字";
				$lang_string[ 'menu_link_reg_color' ] = "菜单链接缺省";
				$lang_string[ 'menu_link_hi_color' ] = "菜单链接悬浮";
				$lang_string[ 'menu_link_down_color' ] = "菜单链接激活";
				// Submit
				$lang_string[ 'color_preset' ] = "配色方案：";
				$lang_string[ 'scheme_name' ] = "输入配色方案的名称：";
				$lang_string[ 'scheme_file' ] = "输入配色方案的文件名：(不包含空格和扩展名)";
				$lang_string[ 'save_btn' ] = "&nbsp;保存&nbsp;";
				$lang_string[ 'form_error' ] = "请输入您定制的配色方案的名称。";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
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
				
				// Comments
				$lang_string[ 'comment_capcha' ] = "反垃圾(Anti-Spam): 输入 <b>%s</b>";
				$lang_string[ 'title' ] = "评论";
				$lang_string[ 'header' ] = "发表评论";
				$lang_string[ 'instructions' ] = "填写下面的表单来发表您的评论。";
				$lang_string[ 'comment_name' ] = "您的名字：";
				$lang_string[ 'comment_email' ] = "电子邮箱：";
				$lang_string[ 'comment_url' ] = "网址：";
				$lang_string['commentposted'] = "New comment posted at: ";  // New for 0.4.6.2
				$lang_string[ 'comment_remember' ] = "记住我：";
				$lang_string[ 'comment_text' ] = "评论：";
				$lang_string[ 'post_btn' ] = "&nbsp;发表评论&nbsp;";
				$lang_string[ 'delete_btn' ] = "删除";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string[ 'error_add' ] = "<h2>哇！</h2>评论没有保存。在保存评论时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string[ 'error_delete' ] = "<h2>哇！</h2>评论没有删除。在删除评论时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string[ 'form_error' ] = "请完整填写名字和评论项目。";
				break;
			case 'delete':
				$lang_string[ 'title' ] = "删除条目";
				$lang_string[ 'instructions' ] = "这是您准备删除的条目。请确定您真的想干掉它，这个操作是无法挽回的……";
				$lang_string[ 'ok_btn' ] = "&nbsp;删除&nbsp;";
				$lang_string[ 'cancel_btn' ] = "&nbsp;取消&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>条目没有删除。<br /><br />服务器报告：<br />";
				break;
			case 'delete_static':
				$lang_string[ 'title' ] = "删除静态页面";
				$lang_string[ 'instructions' ] = "这是您准备删除的静态页面。请确定您真的想干掉它，这个操作是无法挽回的……";
				$lang_string[ 'ok_btn' ] = "&nbsp;删除&nbsp;";
				$lang_string[ 'cancel_btn' ] = "&nbsp;取消&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>条目没有删除。<br /><br />服务器报告：<br />";
				break;
			case 'image_list':
				$lang_string[ 'title' ] = "图片列表";
				$lang_string[ 'instructions' ] = "点击下面的链接来浏览图片。<br /><br />要把图片添加到条目：<br />1) 右击一个链接然后选择“拷贝链接到剪切板”。<br />2) 回到添加条目或编辑条目的页面。<br />3) 点击“图”按钮然后复制链接地址。";
				break;
			case 'info': // New 0.3.7
				$lang_string[ 'title' ] = "Meta-Data信息";
				$lang_string[ 'instructions' ] = "下面的信息用来设置&quot;meta-data&quot;，它有助于搜索引擎正确地找到和识别您的站点。信息也可用于RSS。";
				$lang_string[ 'info_keywords' ] = "关键词：(以英文逗号分隔。)";
				$lang_string[ 'info_description' ] = "描述：(您的站点的简介。)";
				$lang_string[ 'info_copyright' ] = "权利：(版权声明或相关信息的链接。)";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string[ 'form_error' ] = "请完整填写标题和作者字段。";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string[ 'error' ] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'login':
				$lang_string[ 'upgrade' ] = "<h2>升级</h2>"; // New 0.3.8
				$lang_string[ 'upgrade_count' ] = "%n 个评论文件需要升级："; // New 0.3.8
				$lang_string[ 'upgrade_url' ] = "升级评论文件"; // New 0.3.8
				$lang_string[ 'title' ] = "登录";
				$lang_string[ 'instructions' ] = "请输入您的用户名和密码";
				$lang_string[ 'username' ] = "用户名：";
				$lang_string[ 'password' ] = "密码：";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>成功！</h2>您已经登入。呵呵^_^<p />";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>哇！</h2>您没有登入。请检查您输入的用户名和密码是否正确并再试一次。<p />";
				$lang_string[ 'form_error' ] = "请完整填写您的用户名和密码。"; // <-- Need Translation
				break;
			case 'logout':
				$lang_string[ 'title' ] = "登出";
				$lang_string[ 'instructions' ] = "<h2>哇！</h2>登出失败。不能删除cookie。您怎么还在登入状态呢?<p />";
				break;
			case 'forms':
				$lang_string[ 'title' ] = "";
				$lang_string[ 'instructions' ] = "";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'set_login':
				$lang_string[ 'title' ] = "改变用户名 &amp; 密码";
				$lang_string[ 'instructions' ] = "使用下面的表单来改变您的用户名和(或)密码。输入您要使用的用户名和密码。";
				$lang_string[ 'username' ] = "用户名：";
				$lang_string[ 'password' ] = "密码：";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>成功！</h2>您的用户名和密码已经改变。呵呵^_^<p />";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>哇！</h2>信息没有保存。在保存用户名和密码时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string[ 'form_error' ] = "请完整填写您的用户名和密码。";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string[ 'title' ] = "欢迎";
				$lang_string[ 'instructions' ] = "感谢您选用 Simple PHP Blog！";
				$lang_string[ 'blog_choose_language' ] = "请选择语言：";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				break;
			case 'install01':
				$lang_string[ 'title' ] = "欢迎";
				$lang_string[ 'instructions' ] = "
				感谢您选用 Simple PHP Blog！<br /><br />Simple PHP Blog是一个轻便的blog系统。它需要PHP 4.1或更高版本，以及服务器段的写权限。所有信息保存在文件里，所以不需要数据库。<br /><br />
				在开始时， Simple PHP Blog需要创建三个目录('config'、'content'、'images')来存放信息。<br /><br />
				<b>按下面的按钮来开始安装：</b>";
				$lang_string[ 'begin' ] = "[ 开始安装 ]";
				break;
			case 'install02':
				$lang_string[ 'title' ] = "安装";
				$lang_string[ 'instructions' ] = "尝试创建'config'、'content'和'images'目录：";
				$lang_string[ 'folder_exists' ] = "太好了！目录已经存在了。不需要作什么改动……";
				$lang_string[ 'folder_failed' ] = "哇！不能创建目录……";
				$lang_string[ 'folder_success' ] = "成功了！目录已创建……";
				// Help
				$lang_string[ 'help' ] = "
				<h2>哇！</h2>
				不能创建一个或更多目录！这很可能是因为：<br>
				<i>1) <b>写权限</b>不被允许。</i><br>
				<i>2)文件和目录的<b>UID</b>不匹配。</i><p />
				
				请按照下面的疑难解答再试一次：<p />
				1) 手工创建目录：<b>config</b>、<b>content</b>、<b>images</b>。<p />
				2) 允许目录的<b>写权限</b>。在FTP程序里Owner、User和World应该允许<b>读</b>和<b>写</b>访问。<i>(您可能需要联系您的服务提供商来做这些改动……)</i><p />
				3) 确认您的文件和目录的UID都相同。<i>(您可能需要联系您的服务提供商来做这些改动……)</i>";
				$lang_string[ 'try_again' ] = "[ 再试一次 ]";
				// Success
				$lang_string[ 'success' ] = "<h2>成功了！</h2>目录创建成功！<p /><b>点击下面的按钮继续：</b>";
				$lang_string[ 'continue' ] = "[ 继续 ]";
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
				$lang_string[ 'title' ] = "创建用户名 &amp; 密码";
				$lang_string[ 'instructions' ] = "使用下面的表单来创建一个用户名和密码。";
				$lang_string[ 'username' ] = "用户名：";
				$lang_string[ 'password' ] = "密码：";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				// Success
				$lang_string[ 'success' ] = "<h2>祝贺！</h2>您已经登入。点击下面的按钮来访问设置页面，在那里您可以给您的blog命名。呵呵^_^<p />";
				$lang_string[ 'btn_setup' ] = "[ 设置 ]";
				// Wrong Password
				$lang_string[ 'wrong_password' ] = "<h2>哇！</h2>信息没有保存。在保存用户名和密码时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string[ 'form_error' ] = "请完整填写您的用户名和密码。";
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
				$lang_string[ 'title' ] = "设置";
				$lang_string[ 'instructions' ] = "您可以在下面改变您的blog的名字，以及您的个人信息。";
				$lang_string[ 'blog_title' ] = "网志标题：";
				$lang_string[ 'blog_author' ] = "作者：";
				$lang_string[ 'blog_email' ] = "电子邮箱：";
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.6.3
				$lang_string[ 'blog_footer' ] = "页脚：";
				$lang_string[ 'blog_choose_language' ] = "选择语言：";
				$lang_string[ 'blog_enable_comments' ] = "允许访客评论";
				$lang_string[ 'blog_comments_popup' ] = "在弹出窗口打开评论";
				$lang_string[ 'blog_enable_voting' ] = "允许访客对日志打分";
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
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
				$lang_string[ 'blog_email_notification' ] = "当收到评论时发送电子邮件通知";
				$lang_string[ 'blog_send_pings' ] = "发送引用通告";
				$lang_string[ 'blog_ping_urls' ] = "输入完整的引用通告的超链接(比如 http://rpc.weblogs.com/RPC2)。<br />(您可以以英文逗号分隔输入多个网址。)"; // <-- New 0.3.7
				$lang_string[ 'blog_trackback_about' ] = "引用通告(trackback)提供了不同网志(blog)之间互相沟通的一条途径。通过
					向别的网志发送引用通告可以让别人知道您链接了他的网志。而您
					可以通过接收引用通告来知晓谁在链接您的网志。<br />
						您可以手工填写要发送引用通告的网址，也可以把它交给
						自动挖掘程序来完成。";
				$lang_string[ 'blog_trackback_enabled' ] = "在我的网志中启用引用通告";
				$lang_string[ 'blog_trackback_auto_discovery' ] = "提交包含超链接的内容时启用自动挖掘";
				$lang_string[ 'blog_max_entries' ] = "最多显示条目数：";
				$lang_string[ 'blog_comment_tags' ] = "在评论中允许使用标签：";
				$lang_string[ 'blog_gzip_about' ] = "
					从PHP 4.0.4版开始，PHP支持对gzip(.gz)压缩文件的读写，
					这可以节省磁盘空间。它也可以把压缩的页面传送给
					支持gzip的浏览器，这样可以节省带宽。<br />
					<br />
					PHP中对Zlib的支持不是缺省的。如果选取框无法选中
					意味着您使用的PHP系统不支持Zlib。";
				$lang_string[ 'blog_enable_gzip_txt' ] = "对数据文件使用GZIP压缩";
				$lang_string[ 'blog_enable_gzip_output' ] = "对HTTP输出使用GZIP压缩";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string[ 'form_error' ] = "请完整填写标题和作者。";
				$lang_string[ 'label_entry_order' ] = "条目次序：";
				$lang_string[ 'select_new_to_old' ] = "新的在前";
				$lang_string[ 'select_old_to_new' ] = "旧的在前";
				$lang_string[ 'label_comment_order' ] = "评论次序：";
				$lang_string['cal_sunday'] = "Sunday";
				$lang_string['cal_monday'] = "Monday";
				$lang_string['label_calendar_start'] = "Calendar Week Start Day";
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
				$lang_string[ 'title' ] = "引用";
				$lang_string[ 'header' ] = "这篇日志的引用地址：";
				$lang_string[ 'delete_btn' ] = "删除";
				// Error Response
				$lang_string[ 'error_add' ] = "存储引用信息时出错。";
				break;
			case 'options':
				$lang_string[ 'title' ] = "选项";
				$lang_string[ 'instructions' ] = "使用下面的表单来自定义条目和评论的日期和时间的显示。您可以选择12或24小时计时。长日期或短日期格式。<b>预览</b>区域会自动更新以显示您定义的格式的样子。";
				// Long Date
				$lang_string[ 'ldate_title' ] = "长日期格式：";
				$lang_string[ 'weekday' ] = "星期";
				$lang_string[ 'month' ] = "月";
				$lang_string[ 'day' ] = "日";
				$lang_string[ 'year' ] = "年";
				$lang_string[ 'none' ] = "无";
				// Short Date
				$lang_string[ 'sdate_title' ] = "短日期格式";
				$lang_string[ 's_month' ] = "月";
				$lang_string[ 's_mon' ] = "MMM";
				$lang_string[ 's_day' ] = "日";
				$lang_string[ 's_year' ] = "年";
				$lang_string[ 'zero_day' ] = "个位日期前加零";
				$lang_string[ 'show_century' ] = "显示世纪";
				// Time
				$lang_string[ 'time_title' ] = "时间格式：";
				$lang_string[ '12hour' ] = "12小时计时";
				$lang_string[ '24hour' ] = "24小时计时";
				$lang_string[ 'before_noon' ] = "上午";
				$lang_string[ 'after_noon' ] = "下午";
				// Date
				$lang_string[ 'date_title' ] = "日期显示格式";
				$lang_string[ 'long_date' ] = "长日期";
				$lang_string[ 'short_date' ] = "短日期";
				$lang_string[ 'time' ] = "时间";
				// Menu
				$lang_string[ 'menu_title' ] = "菜单日期显示格式：";
				$lang_string[ 'long_date' ] = "长日期";
				$lang_string[ 'short_date' ] = "短日期";
				// Used in multiple places
				$lang_string[ 'zero_day' ] = "个位日期前加零";
				$lang_string[ 'zero_month' ] = "个位月份前加零";
				$lang_string[ 'zero_hour' ] = "个位小时前加零";
				$lang_string[ 'separator' ] = "分隔符";
				$lang_string[ 'preview' ] = "预览：";
				$lang_string[ 'server_offset' ] = "服务器时差：";
				// Buttons
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'themes':
				$lang_string[ 'title' ] = "页面主题";
				$lang_string[ 'instructions' ] = "使用下拉菜单选择不同的页面主题";
				// Themes
				$lang_string[ 'choose_theme' ] = "页面主题：";
				// Buttons
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'upload_img':
				$lang_string[ 'title' ] = "上传图片";
				$lang_string[ 'instructions' ] = "点击按钮选择要上传的文件。";
				$lang_string[ 'select_file' ] = "选择文件：";
				$lang_string[ 'upload_btn' ] = "上传";
				// Error Response
				$lang_string[ 'error' ] = "<h2>哇！</h2>不能上传图片。请看更多信息：<br /><br />服务器报告：<br />";
				break;
			case 'search':
				$lang_string[ 'title' ] = "搜索结果";
				$lang_string[ 'instructions' ] = "搜索 <b>%string</b> 的结果：";
				$lang_string[ 'not_found' ] = "没有找到。";
				break;
			case 'contact':
				$lang_string[ 'contact_capcha' ] = "反垃圾：输入 <b>%s</b>"; // 0.4.4
				$lang_string[ 'title' ] = "联系我";
				$lang_string[ 'instructions' ] = "填写以下表单：";
				$lang_string[ 'form_error' ] = "请完整填写标题和内容。";
				$lang_string[ 'name' ] = "网名：";
				$lang_string[ 'email' ] = "电子邮箱：";
				$lang_string[ 'subject' ] = "标题：";
				$lang_string[ 'comment' ] = "内容：";
				$lang_string[ 'submit_btn' ] = "&nbsp;提交&nbsp;";
				$lang_string[ 'success' ] = "<h2>成功！</h2>您的信息已发送！<p />";
				$lang_string['failure'] = "<h2>Error!</h2>Your message has not been sent. Most likely the Anti Spam was not entered properly.<p />";
				$lang_string['contactsent'] = "Contact sent through: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "IP Address:";  // New for 0.4.6
				$lang_string['useragent'] = "User Agent:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>On %s, %s wrote:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string[ 'title' ] = "<h2>统计</h2>";
				$lang_string[ 'general' ] = "<h3>总览</h3>";
				$lang_string[ 'entry_info' ] = "<b>%s</b> 篇日志共计 <b>%s</b> 文字, 占用磁盘空间 <b>%s</b> 字节";
				$lang_string[ 'comment_info' ] = "<b>%s</b> 篇评论共计 <b>%s</b> 文字, 占用磁盘空间 <b>%s</b> 字节";
				$lang_string[ 'trackback_info' ] = "<b>%s</b> 篇引用占用磁盘空间 <b>%s</b> 字节";
				$lang_string[ 'static_info' ] = "<b>%s</b> 篇静态页面共计 <b>%s</b> 文字, 占用磁盘空间 <b>%s</b> 字节";
				$lang_string[ 'most_viewed_entries' ] = "<h3>10 篇浏览最多的日志</h3>";
				$lang_string[ 'most_commented_entries' ] = "<h3>10 篇评论最多的日志</h3>";
				$lang_string[ 'most_trackbacked_entries' ] = "<h3>10 篇引用最多的日志</h3>";
				$lang_string[ 'vote_info' ] = "<b>%s</b> 条投票占用磁盘空间 <b>%s</b> 字节";
				$lang_string["most_voted_entries"] = "<h3>10 篇投票最多的日志</h3>";
				$lang_string["most_rated_entries"] = "<h3>10 篇打分最多的日志</h3>";
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
