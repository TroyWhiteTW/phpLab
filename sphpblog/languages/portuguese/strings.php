<?php
	// Portuguese Language Translation(s)
	// (c) 2004 Nuno Cardoso, nuno.cardoso@tugamail.com (0.3.7)

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string['language'] = 'Portuguese';
		
		$lang_string[ 'locale' ] = array('pt_PT');
		$lang_string['rss_locale'] = 'pt-PT'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO8859-1';
		$lang_string['php_charset'] = 'ISO8859-1';
		
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "Página Inicial";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_calendar'] = "Calendar"; // New for 0.4.8
		$lang_string['menu_archive'] = "Arquivos"; 
		$lang_string['menu_viewarchives'] = "View Archives"; // New in 0.4.7
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Adicionar Notícias";
		$lang_string['menu_add_static'] = "Criar página estática";
		$lang_string['menu_upload'] = "Importar imagem";
		$lang_string['menu_setup'] = "Configuracão";
		$lang_string['menu_categories'] = "Categories"; // 0.3.7q
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Opções";
		$lang_string['menu_themes'] = "Temas";
		$lang_string['menu_colors'] = "Cores";
		$lang_string['menu_change_login'] = "Adicionar utilizador/senha";
		$lang_string['menu_logout'] = "Sair";
		$lang_string['menu_login'] = "Entrar";
		$lang_string['menu_most_recent'] = "Comentários mais recentes";
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
		$lang_string['home'] = "Página Principal";
		$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Search:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Go'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Read More...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' );
		$lang_string['sb_default_title'] = 'Sem Título';
		$lang_string['sb_default_author'] = 'Sem Autor';
		$lang_string['sb_default_footer'] = 'Rodapé da Página';
		
		$lang_string['sb_edit'] = 'Editar';
		$lang_string['sb_delete'] = 'Apagar';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'related link'; // <-- New in 0.4.6
		
		$lang_string['sb_add_comment_btn'] = 'Adicionar comentário';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'comentário';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comentários';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '( ';
		$lang_string['sb_view_counter_post'] = ' vista )';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '( ';
		$lang_string['sb_view_counter_plural_post'] = ' vistas )';
		
		$lang_string['sb_add_link_btn'] = '+ link';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Título:";
				$lang_string['label_insert'] = "Extras (Negrito / Itálico / URL / Imagem):";
				$lang_string['btn_bold'] = " N ";
				$lang_string['btn_italic'] = " I ";
				$lang_string['btn_image'] = "IMG";
				$lang_string['btn_url'] = "URL";
			$lang_string['btn_readmore'] = "read more"; // 0.4.8
				$lang_string['view_images'] = "Ver imagens importadas";
				$lang_string['label_entry'] = "Texto:";
				$lang_string['btn_preview'] = "&nbsp;Previsualizar&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Insira o texto";
				$lang_string['insert_image'] = "Insira a direcção URL para a imagem";
				$lang_string['insert_url1'] = "Insira o texto a ser mostrado com o link (opcional)";
				$lang_string['insert_url2'] = "Insira a direcção web completa para o link";
				$lang_string['insert_url3'] = "Open URL in new window (Optional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Por favor complete o campo título e o campo texto.";
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
				$lang_string['title'] = "Adicionar Notícia";
				$lang_string['instructions'] = "Para colocar uma notícia preencha os campos que se encontram abaixo, pode pré-visualizar a notícia antes de publicá-la.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Related Link"; // New for 0.4.6
				$lang_string['label_categories'] = "Category List";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Pré-visualizar / Editar entrada";
				$lang_string['instructions_preview'] = "É assim como se vê a sua notícia.";
				$lang_string['title_update'] = "Actualizar notícia";
				$lang_string['instructions_update'] = "Pode alterar a sua notícia utilizando o formulário que se encontra debaixo.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Notícia não gravada.<br /><br />Diga isso ao Servidor:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Adicionar Página Estática";
				$lang_string['instructions'] = "Preencha o formulário debaixo para criar uma Página Estática. Ao contrário de uma entrada Blog normal, Entradas Estáticas aparecem como links no menu da direita. São para páginas que quer sempre disponíveis como por exemplo: Sobre Mim, Contacte-nos, Serviços, etc. Clique em 'Prévisualizar' para ver como a entrada ficou, ou clique em 'Adicionar' para gravar a entrada.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Pré-visualizare / Editar Página Estática";
				$lang_string['instructions_preview'] = "Aqui está como a sua Página Estática aparece. Se está a usar texto com estilo ou a incluir imagens, lembre-se de 'fechar' todas as 'tags'.";
				$lang_string['title_update'] = "Actualizar Página Estática";
				$lang_string['instructions_update'] = "Você pode mudar a sua entrada usando o formulário debaixo. Clique 'Pré-visualizar' ou 'Adicionar' quando acabar.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entrada não guardada. Encontrei um problema quando guardava a sua entrada.<br /><br />O Servidor reportou:<br />";
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
				$lang_string['title'] = "Adicionar / Administrar Links";
				$lang_string['instructions'] = "Gere ligações a outros sítios web. Pressione os botões Cima e Baixo para mudar a ordem das ligações.";
				$lang_string['up'] = "Cima";
				$lang_string['down'] = "Baixo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Apagar";
				$lang_string['link_name'] = "Nome da ligação:";
				$lang_string['link_url'] = "Direcção web:";
				$lang_string['instructions_edit'] = "Estás a editar uma ligação:";
				$lang_string['instructions_modify'] = "Click below to modify a link:";
				$lang_string['submit_btn_edit'] = "Editar ligação";
				$lang_string['submit_btn_add'] = "Gerir ligação";
				$lang_string['form_error'] = "Por favor complete os campos nome e URL.";
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
				$lang_string['title'] = "Mudar cores";
				$lang_string['instructions'] = "Pode mudar as cores do texto e do fundo da notícia.";
				$lang_string['bg_color'] = "Fundo da página";
				$lang_string['main_bg_color'] = "Fundo da página principal";
				$lang_string['border_color'] = "Borda da página";
				$lang_string['inner_border_color'] = "Borda Interna";
				$lang_string['header_bg_color'] = "Fundo do cabeçalho";
				$lang_string['header_txt_color'] = "Texto do cabeçalho";
				$lang_string['menu_bg_color'] = "Fundo da área do menu";
				$lang_string['footer_bg_color'] = "Fundo do rodapé da página";
				$lang_string['txt_color'] = "Texto principal";
				$lang_string['headline_txt_color'] = "Texto do cabeçalho";
				$lang_string['date_txt_color'] = "Texto da data";
				$lang_string['footer_txt_color'] = "Texto do rodapé";
				$lang_string['link_reg_color'] = "Link normal";
				$lang_string['link_hi_color'] = "Link activo";
				$lang_string['link_down_color'] = "Link visitado";
				// More Colors
				$lang_string['entry_bg'] = "Fundo da Entrada";
				$lang_string['entry_title_bg'] = "Fundo do Título da Entrada";
				$lang_string['entry_border'] = "Borda da Entrada";
				$lang_string['entry_title_text'] = "Texto do título da Entrada";
				$lang_string['entry_text'] = "Texto da Entrada";
				$lang_string['menu_bg'] = "Fundo do Menu";
				$lang_string['menu_title_bg'] = "Fundo do Titulo do Menu";
				$lang_string['menu_border'] = "Borda do Menu";
				$lang_string['menu_title_text'] = "Texto do Titulo do Menu";
				$lang_string['menu_text'] = "Texto do Menu";
				$lang_string['menu_link_reg_color'] = "Menu Link Normal";
				$lang_string['menu_link_hi_color'] = "Menu Link Por Cima";
				$lang_string['menu_link_down_color'] = "Menu Link Activo";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Visitar&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'The currently selected theme does not allow for custom colors.';
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não guardada. Encontrei um problema enquando guardava a sua entrada.<br /><br />O Servidor reportou:<br />";
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
				$lang_string['title'] = "Comentários";
				$lang_string['header'] = "Gerir comentário";
				$lang_string['instructions'] = "Preencha os campos abaixo para deixar o seu comentário.";
				$lang_string['comment_name'] = "O seu nome:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "Comentário:";
				$lang_string['post_btn'] = "&nbsp;Publicar comentário&nbsp;";
				$lang_string['delete_btn'] = "Apagar";
				$lang_string['expired_comment1'] = "We are sorry. New comments are not allowed after "; // New for 0.4.8
				$lang_string['expired_comment2'] = " days."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Sorry, your IP address has been banned. Comments not allowed."; // New for 0.4.8
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comentário não guardado. Encontrei um problema enquanto gravava o comentário.<br /><br />O Servidor reportou:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comentário não apagado. Encontrei um problema enquanto apagava o teu comentário.<br /><br />O Servidor Reportou:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Nome e Comentário."; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Apagar entrada";
				$lang_string['instructions'] = "Está prestes a apagar uma notícia, assegure-se de que quer mesmo apagá-la porque não há forma de desfazer a acção";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossível apagar a entrada.<br /><br />O Servidor Reportou:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Apagando Página Estática";
				$lang_string['instructions'] = "Isto é a página estática que está prestes a apagar. Por favor assegure-se de que é isto mesmo que quer, pois não há maneira de desfazer...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Não consegui apagar a entrada.<br /><br />O Servidor Reportou:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista de imagens";
				$lang_string['instructions'] = "Clique debaixo para ver a imagem.<br><br>Para associar uma imagem à sua notícia:<br>1) Faça control + clique num link e seleccione 'Copiar para a Área de Transferência'.<br>2) Regresse ao editor da entrada.<br>3) Faça clique no botão Imagem e cole a ligação na janela.";
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
				$lang_string['title'] = "Inserir";
				$lang_string['instructions'] = "Insira o seu nome de utilizador e senha";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Bemvindo!</h2>Entrou com sucesso!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Erro na autenticação. Verifique o seu nome de utilizador e senha e tente de novo.<p />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Sair";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Erro ao tentar sair. Impossível apagar a cookie. Por que continua conectado?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não gravada.<br /><br />O Relatório do servidor:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Mudar utilizador &amp; Senha";
				$lang_string['instructions'] = "Use o formulário abaixo para mudar o seu nome de utilizador e/ou senha.Entre o Utilizador e a Senha que pretende utilizar.";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Successo!</h2>O seu Utilizador e/ou Senha estão activos. Bom blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Informação não gravada. Encontrei um problema enquanto gravava o Utilizador e a Senha.<br /><br />O Servidor Reportou:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha.";
				$lang_string['explanation'] = "In recent versions, our password structure has changed.  There is no longer a way to update passwords
					and/or logins from inside the blog code.  In order to change your password, delete /config/password.php and make sure install*.php
					exists on the local server.  Once that is done, refresh this page (or logout).  You will be presented with the same script
					to generate your password as you did when originally creating the blog site.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Benvindo";
				$lang_string['instructions'] = "
				Obrigado por escolher Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Escolha a Linguagem:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Benvindo";
				$lang_string['instructions'] = "
				Obrigado por escolher Simple PHP Blog!<br /><br />Simple PHP Blog é um sistema de blogs simples. Requer PHP 4.1 ou maior, e permissões de escrita no servidor. Toda a informação é guardada em ficheiros-corridos, portanto não é necessário base de dados.<br /><br />				Para começar, Simple PHP Blog precisa de criar três directorias ('config', 'content', e 'images') aonde guardará toda a sua informação.<br /><br />				<b>Clique embaixo para começar a configuração:</b>";
				
				
				$lang_string['begin'] = "[ Começar configuração ]";
				break;
			case 'install02':
				$lang_string['title'] = "Configuração";
				$lang_string['instructions'] = "Tentando criar directorias 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "Ok! Directoria já existe. Nenhuma alteração efectuada...";
				$lang_string['folder_failed'] = "Whoops! Não consegui criar directorias...";
				$lang_string['folder_success'] = "Sucesso! Directorias criadas...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Não consegui criar uma ou mais directorias! Isto é provavelmente devido a:<br>
				<i>1) <b>Permissões de escrita</b> não estão definidas para permitir acesso <b>Read/Write</b>.<br>
				<i>2) O <b>UID</b> (user ID's) de todos os ficheiros e pastas têm de ser o mesmo.</i><p />
				
				Siga as instruções de resolução de problemas e por favor tente novamente:<p />
				1) Crie manualmente as seguintes directorias: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Permita <b>Permissões de escrita</b> às directorias. No seu programa FTP, Owner, User, e World devem ter acesso <b>Read</b> e <b>Write</b>. <i>(Você pode ter de contactar o seu ISP para mudar isso...)</i><p />				3) Certifique-se que o UID de todos os ficheirose directorias são os mesmos. <i>(Você pode ter de contactar o seu ISP para mudar isso...)</i>";
				
				$lang_string['try_again'] = "[ Tente novamente ]";
				// Success
				$lang_string['success'] = "<h2>Sucesso!</h2>Directorias criadas com sucesso!<p /><b>Clique embaixo par acontinuar:</b>";
				$lang_string['continue'] = "[ Continuar ]";
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
				$lang_string['title'] = "Criar Utilizador e Senha";
				$lang_string['instructions'] = "Use o formulário abaixo para criar um Utilizador e uma Senha.";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Parabéns!</h2>Você está ligado. Clique abaixo para visitar a página de Configuração, onde pode dar o nome ao seu blog. Bom blogging!<p />";
				$lang_string['btn_setup'] = "[ Configuração ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Informação não guardada. Encontrei um problema enquanto gravava o Utilizador e pa Senha.<br /><br />O Servidor Reportou:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha.";
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
				$lang_string['title'] = "Configuração";
				$lang_string['instructions'] = "Pode mudar o nome do seu blog e a sua informação pessoal.";
				$lang_string['blog_title'] = "Nome do Blog:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "Avatar URL: (Leave blank for none)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Rodapé de página:";
				$lang_string['blog_choose_language'] = "Escolha a linguagem:";
				$lang_string['blog_enable_comments'] = "Enable User Comments"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Open Comments in Popup Window"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_enable_cache'] = "Enable Blog Entry Cache (may provide speed increase on some servers)"; // New for 0.4.6
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted"; // <-- New 0.3.7
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
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não guardada.<br /><br />Relatório do servidor:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Título e Autor.";
				$lang_string['label_entry_order'] = "Ordem de Entrada:";
				$lang_string['select_new_to_old'] = "Listar Novas Primeiro";
				$lang_string['select_old_to_new'] = "Listar Velhas Primeiro";
				$lang_string['label_comment_order'] = "Ordem de Comentários:";
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
				$lang_string['title'] = "Opções";
				$lang_string['instructions'] = "Use o formulário debaico para personalizar a data e tempo para entradas de blog e comentários. Você pode seleccionar 12 ou 24 horas de relógio. Formato de data longo ou pequeno. E as áreas de <b>Pré-visualização</b> actualizam automaticamente para mostrar-lhe como o seu formato irá aparecer.";
				// Long Date
				$lang_string['ldate_title'] = "Formato de data longo:";
				$lang_string['weekday'] = "Dia da Semana";
				$lang_string['month'] = "Mês";
				$lang_string['day'] = "Dia";
				$lang_string['year'] = "Ano";
				$lang_string['none'] = "Nada";
				// Short Date
				$lang_string['sdate_title'] = "Formato de data pequeno:";
				$lang_string['s_month'] = "Mês";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Dia";
				$lang_string['s_year'] = "Ano";
				$lang_string['zero_day'] = "Zero à esquerda para dia";
				$lang_string['show_century'] = "Mostrar século";
				// Time
				$lang_string['time_title'] = "Formato de tempo:";
				$lang_string['12hour'] = "12-horas";
				$lang_string['24hour'] = "24-horas";
				$lang_string['before_noon'] = "Antes do Meio-Dia";
				$lang_string['after_noon'] = "Depois do Meio-Dia";
				// Date
				$lang_string['date_title'] = "Formato de Exibição de Data:";
				$lang_string['long_date'] = "Data Longa";
				$lang_string['short_date'] = "Data Pequena";
				$lang_string['time'] = "Tempo";
				// Menu
				$lang_string['menu_title'] = "Formato de Exibição de Menu de Data:";
				$lang_string['long_date'] = "Data Longa";
				$lang_string['short_date'] = "Data Pequena";
				// Used in multiple places
				$lang_string['zero_day'] = "Zero à esquerda para dia";
				$lang_string['zero_month'] = "Zero à esquerda para mês";
				$lang_string['zero_hour'] = "Zero à esquerda para hora";
				$lang_string['separator'] = "Separador:";
				$lang_string['preview'] = "Pré-visualizar:";
				$lang_string['server_offset'] = "Desvio do Servidor:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não guardada. Encontrei um problema enquanto gravava a informação. <br /><br />O Servidor Reportou:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temas";
				$lang_string['instructions'] = "Use o menu para seleccionar um tema diferente.";
				// Themes
				$lang_string['choose_theme'] = "Temas:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informação não gravada. Encontrei um problema enquanto gravava a tua informação.<br /><br /> O Servidor Reportou:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Carregar imagem";
				$lang_string['instructions'] = "faça clique debaixo para importar uma imagem.";
				$lang_string['select_file'] = "Seleccionar arquivo:";
				$lang_string['upload_btn'] = "Carregar";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Impossível carregar a imagem. <br /><br />Relatório do servidor:<br />";
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
