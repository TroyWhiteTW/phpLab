<?php
	// Spanish Language Translation(s)
	// (c) 2004 Javier Gutiérrez Chamorro (Guti), guti <at> ya <dot> com (0.4.7)
	//  Retocado por Cristian Olate, cristian <dot> olate <at> gmail <dot> com (0.4.8)
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
		
		// Language: Spanish
		$lang_string['language'] = 'spanish';
		$lang_string[ 'locale' ] = array('es_ES', 'esp', 'spanish');
		$lang_string['rss_locale'] = 'es-ES'; // New 0.4.8
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		setlocale( LC_TIME, $lang_string['locale'] );
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Enlaces";
		$lang_string['menu_home'] = "Principal";
		$lang_string['menu_contact'] = "Contacta Conmigo"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Estadísticas"; // <-- New 0.3.7r
		$lang_string['menu_calendar'] = "Calendario"; // New for 0.4.8
		$lang_string['menu_archive'] = "Archivo";
		$lang_string['menu_viewarchives'] = "Ver Archivos"; // New in 0.4.7
		$lang_string['menu_menu'] = "Menú";
		$lang_string['menu_add'] = "Agregar Entrada";
		$lang_string['menu_add_static'] = "Agregar Página Estática";
		$lang_string['menu_upload'] = "Subir Imagen";
		$lang_string['menu_setup'] = "Configuración";
		$lang_string['menu_categories'] = "Categorías";
		$lang_string['menu_info'] = "Información"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Opciones";
		$lang_string['menu_themes'] = "Temas";
		$lang_string['menu_colors'] = "Colores";
		$lang_string['menu_change_login'] = "Cambiar usuario/contraseña";
		$lang_string['menu_logout'] = "Salir";
		$lang_string['menu_login'] = "Entrar";
		$lang_string['menu_most_recent'] = "Últimos Comentarios";
		$lang_string['menu_most_recent_entries'] = "Últimos Artículos";
		$lang_string['menu_most_recent_trackback'] = "Últimos Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Bloques";
		$lang_string['menu_emoticons'] = "Emoticones"; // New for 0.4.7
		$lang_string['menu_avatar'] = "Avatar"; // New for 0.4.7
		
		// Counter
		$lang_string['counter_today'] = "Hoy:"; // New for 0.4.8
		$lang_string['counter_yesterday'] = "Ayer:"; // New for 0.4.8
		$lang_string['counter_totalsidebar'] = "Total:"; // New for 0.4.8
		$lang_string['counter_title'] = "Conteos Totales"; // New for 0.4.8

		// Other
		$lang_string['home'] = 'Página Principal';
		$lang_string['nav_next'] = 'Siguiente'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Anterior'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Búsqueda'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Enviar'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Página generada en %s segundos'; // <-- New 0.3.7
		$lang_string['counter_total'] = 'Site Views: '; // New in 0.4.8
		$lang_string['read_more'] = 'Leer más...'; // New in 0.4.8
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' );
		$lang_string['sb_default_title'] = 'Sin título';
		$lang_string['sb_default_author'] = 'Sin autor';
		$lang_string['sb_default_footer'] = 'Pie de Página';
		$lang_string['sb_edit'] = 'editar';
		$lang_string['sb_delete'] = 'borrar';
		$lang_string['sb_permalink'] = 'enlace permanente'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		$lang_string['sb_relatedlink'] = 'enlace relacionado'; // <-- New in 0.4.6
		$lang_string['sb_add_comment_btn'] = 'añadir comentario';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'comentario';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comentarios';
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' visualización';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' visualizaciones';
		$lang_string['sb_add_link_btn'] = 'Añadir Enlaces';
		$lang_string['sb_rate_entry_btn'] = 'Haga clic para valorar la entrada';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Título:";
				$lang_string['label_insert'] = "Extras (Negrita / Cursiva / URL / Imagen):";
				$lang_string['btn_bold'] = " N ";
				$lang_string['btn_italic'] = " I ";
				$lang_string['btn_image'] = "IMG";
				$lang_string['btn_url'] = "URL";
				$lang_string['btn_readmore'] = "leer más"; // 0.4.8
				$lang_string['view_images'] = "Ver imágenes cargadas";
				$lang_string['label_entry'] = "Texto:";
				$lang_string['btn_preview'] = "&nbsp;Previsualizar&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
				$lang_string['file_name'] = "Nombre de fichero estático: (sin espacios ni extensiones de fichero)"; // <-- New 0.3.8
				
				// Javascript Strings
				$lang_string['insert_styles'] = "Introduzca el texto";
				$lang_string['insert_image'] = "Introduzca la dirección URL para la imagen";
				$lang_string['insert_url1'] = "Introduzca el texto a ser mostrado con el enlace (opcional)";
				$lang_string['insert_url2'] = "Introduzca la dirección web completa para el enlace";
				$lang_string['insert_url3'] = "Abrir URL en una nueva ventana (Opcional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Por favor rellene los campos Título y Texto.";
				
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opcional:';
				$lang_string['insert_image_width'] = 'Ancho (Opcional):';
				$lang_string['insert_image_height'] = 'Alto (Opcional):';
				$lang_string['insert_image_popup'] = 'Ver en una ventana emergente al hacer clic (Opcional):';
				$lang_string['insert_image_float'] = 'Flotar (Opcional):';
				
				$lang_string['day'] = 'Día';
				$lang_string['month'] = 'Mes';
				$lang_string['year'] = 'Año';
				$lang_string['hour'] = 'Hora';
				$lang_string['minute'] = 'Minutos';
				$lang_string['second'] = 'Segundos';
		}
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Añadir Entrada";
				$lang_string['instructions'] = "Para colocar una entrada llene los campos que se encuentran debajo, puede previsualizar la entrada antes de publicarla.";
				$lang_string['title_ad'] = "Confirmar Pings de Trackback"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "Éstos son los Auto-Discovered URIs sobre los que hará ping. Si no quiere hacer ping a un cierto URI, deschequee. Entonces pulse 'OK' para hacer ping sobre las URIs chequeadas o pulse 'Cancel' para no realizar ningun ping."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) a enviar (separados por comas)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				$lang_string['label_relatedlink'] = "Enlace Relacionado"; // New for 0.4.6
				$lang_string['label_categories'] = "Lista de Categorías";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previsualizar / Editar entrada";
				$lang_string['instructions_preview'] = "Así es como se ve su entrada";
				$lang_string['title_update'] = "Actualizar entrada";
				$lang_string['instructions_update'] = "Puede cambiar su entrada utilizando el formulario que se encuentra debajo.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La entrada no pudo ser guardada. Se encontró un problema mientras se almacenaba la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Añadir Página Estática";
				$lang_string['instructions'] = "Rellena el formulario que se encuentra debajo para crear una página estática. A diferencia de una entrada ordinaria a la bitácora, las entradas estáticas aparecen como enlaces en el menú de la derecha. Podrían usarse para páginas que desees que esten disponibles siempre, tales como: Sobre mí, Contáctenos, Agenda, etc. Presione 'Previsualizar' para mirar como lucirá la página, o presione 'Publicar' para guardar la página";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previsualizar / Editar Página Estática";
				$lang_string['instructions_preview'] = "Así es como su página estática lucirá. Si esta usando estilos de texto o ha incluido imágenes, recuerde 'cerrar' todas las 'etiquetas'.";
				$lang_string['title_update'] = "Actualizar Página Estática";
				$lang_string['instructions_update'] = "Puedes cambiar la entrada usando el formulario que se encuentra debajo. Presiona 'Previsualizar' o 'Publicar' cuando estes listo.";
				$lang_string['form_error'] = "Por favor rellene los campos Título, Texto y Nombre.";	
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La entrada no pudo ser guardada. Se encontró un problema mientras se almacenaba la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Agregar / Administrar Bloques";
				$lang_string['instructions'] = "Agregar Bloque Personalizado para mostrar en el Menú Lateral";
				$lang_string['up'] = "Arriba";
				$lang_string['down'] = "Abajo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Borrar";
				$lang_string['block_name'] = "Nombre del Bloque:";
				$lang_string['block_content'] = "Contenido del Bloque:";   
				$lang_string['instructions_edit'] = "Estás editando un Bloque:";
				$lang_string['instructions_modify'] = "Haga clic debajo en <b>Editar</b> para modificar el Bloque:";
				$lang_string['submit_btn_edit'] = "Editar Bloque";
				$lang_string['submit_btn_add'] = "Agregar Bloque";
				$lang_string['form_error'] = "Por favor rellene el campo Nombre."; 
				break;
			case 'add_link':
				// Add / Manage Links
				$lang_string['static_pages'] = "Páginas Estáticas:";
				$lang_string['title'] = "Agregar / Administrar Enlaces";
				$lang_string['instructions'] = "Agregar enlaces a otros sitios web. Presione los botones Arriba y Abajo para cambiar el orden de los enlaces.";
				$lang_string['up'] = "Arriba";
				$lang_string['down'] = "Abajo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Borrar";
				$lang_string['link_name'] = "Nombre del Enlace:";
				$lang_string['link_url'] = "URL (Dirección Web):";
				$lang_string['instructions_edit'] = "Estás editando un enlace:";
				$lang_string['instructions_modify'] = "Haga clic debajo en <b>Editar</b> para modificar el enlace:"; // <-- New
				$lang_string['submit_btn_edit'] = "Editar enlace";
				$lang_string['submit_btn_add'] = "Agregar enlace";
				$lang_string['form_error'] = "Por favor rellene los campos Nombre y URL.";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Agregar / Administrar Categorías";
				$lang_string['instructions'] = "Rellena el formulario que se encuentra debajo para crear una categoría. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Categorias Actuales";
				$lang_string['no_categories_found'] = "No se encontraron Categorias";
				$lang_string['category_list'] = "Lista de Categorias:";
				$lang_string['validate'] = "Validar";
				$lang_string['submit_btn'] = "&nbsp;Aceptar&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "Cambiar colores";
				$lang_string['instructions'] = "Puede cambiar los colores del texto y del fondo de la entrada.";
				$lang_string['bg_color'] = "Fondo de página";
				$lang_string['main_bg_color'] = "Fondo de la página principal";
				$lang_string['border_color'] = "Borde de página";
				$lang_string['inner_border_color'] = "Borde Interior";
				$lang_string['header_bg_color'] = "Fondo del encabezado";
				$lang_string['header_txt_color'] = "Texto del encabezado";
				$lang_string['menu_bg_color'] = "Fondo del menú";
				$lang_string['footer_bg_color'] = "Fondo del pie de página";
				$lang_string['txt_color'] = "Texto principal";
				$lang_string['headline_txt_color'] = "Texto del encabezado";
				$lang_string['date_txt_color'] = "Texto de la fecha";
				$lang_string['footer_txt_color'] = "Texto del pie de página";
				$lang_string['link_reg_color'] = "Enlace normal";
				$lang_string['link_hi_color'] = "Enlace resaltado";
				$lang_string['link_down_color'] = "Enlace visitado";
				// More Colors
				$lang_string['entry_bg'] = "Fondo de la entrada";
				$lang_string['entry_title_bg'] = "Fondo del título de la entrada";
				$lang_string['entry_border'] = "Borde de la entrada";
				$lang_string['entry_title_text'] = "Texto del título de la entrada";
				$lang_string['entry_text'] = "Texto de la entrada";
				$lang_string['menu_bg'] = "Fondo del menú";
				$lang_string['menu_title_bg'] = "Fondo del título del menú";
				$lang_string['menu_border'] = "Borde del menú";
				$lang_string['menu_title_text'] = "Texto del título del menú";
				$lang_string['menu_text'] = "Texto del menú";
				$lang_string['menu_link_reg_color'] = "Enlace normal en el menú";
				$lang_string['menu_link_hi_color'] = "Enlace resaltado en el menú";
				$lang_string['menu_link_down_color'] = "Enlace visitado en el menú";
				// Submit
				$lang_string['color_preset'] = "Esquemas de Color:";
				$lang_string['scheme_name'] = "Introduzca un nombre para el Esquema de Color Personalizado:";
				$lang_string['scheme_file'] = "Introduzca el nombre del fichero del Esquema: (sin espacio ni extensiones)";
				$lang_string['form_error'] = "Por favor, introduzca un nombre para su Esquema de Color Personalizado.";
				$lang_string['save_btn'] = "&nbsp;Guardar&nbsp;";
				$lang_string['submit_btn'] = "&nbsp;Aceptar&nbsp;";
				$lang_string['theme_doesnt_allow_colors'] = 'El tema seleccionado no permite un Esquema de Color Personalizado.';
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['name'] = "Nombre:"; //New in 0.4.6.2
				$lang_string['email'] = "Email:"; //New in 0.4.6.2
				$lang_string['homepage'] = "P&aacute;gina:"; //New in 0.4.6.2
				$lang_string['comment'] = "Comentario:"; //New in 0.4.6.2
				$lang_string['title'] = "Comentarios";
				$lang_string['header'] = "Agregar comentario";
				$lang_string['instructions'] = "Rellene los campos de abajo para dejar su comentario.";
				$lang_string['comment_name'] = "Nombre:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['commentposted'] = "Nuevo comentario publicado en: ";  // New for 0.4.6.2
				$lang_string['IPAddress'] = "Direcci&oacute;n IP:";  // New for 0.4.6.2
				$lang_string['useragent'] = "Agente Usuario:";  // New for 0.4.6.2
				$lang_string['comment_url'] = "Web:"; // 0.3.8
				$lang_string['comment_capcha'] = "Anti-Spam: Introduzca <b>%s</b>"; // 0.4.2
				$lang_string['form_error'] = "Por favor rellene los campos Nombre, Comentario y el campo Anti-Spam."; //0.4.2
				$lang_string['comment_remember'] = "Recordar mi información personal:"; // 0.3.8
				$lang_string['comment_text'] = "Comentario:";
				$lang_string['post_btn'] = "&nbsp;Publicar comentario&nbsp;";
				$lang_string['delete_btn'] = "Borrar";
				$lang_string['expired_comment1'] = "Lo sentimos. No se permiten nuevos comentarios después de "; // New for 0.4.8
				$lang_string['expired_comment2'] = " días."; // New for 0.4.8
				
				$lang_string['blacklisted'] = "Lo sentimos, su dirección IP ha sido baneada. No se permiten comentarios."; // New for 0.4.8
				$lang_string['wrote'] = "<i>El %s, %s escribi&oacute;:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comentario no grabado. Ocurrió un problema mientras se guardaba su comentario.<br /><br />Respuesta del servidor:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comentario no borrado. Ocurrió un problema mientras se borraba su comentario.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'delete':
				$lang_string['title'] = "Borrar entrada";
				$lang_string['instructions'] = "Está a punto de borrar una entrada, asegúrese de querer borrarla porque no hay forma de deshacer el cambio...";
				$lang_string['ok_btn'] = "&nbsp;Borrar&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>No se pudo borrar la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Borrar Página Estática";
				$lang_string['instructions'] = "Está a punto de borrar una página estática, asegúrese de querer borrarla porque no hay forma de deshacer el cambio...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				$lang_string['error'] = "<h2>¡Ups!</h2>No se pudo borrar la entrada.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista de imágenes";
				$lang_string['instructions'] = "Haga clic en los enlaces que estan debajo para ver la imagen.<br><br>Para agregar una imagen a su entrada:<br>1) Haga clic derecho en un enlace y seleccione 'Copiar en el portapapeles'.<br>2) Regrese a la página de agregar o editar entrada.<br>3) Haga clic en el botón Imagen y pegue el enlace en la ventana.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Información de Meta-datos";
				$lang_string['instructions'] = "Esta información se usa para los &quot;meta-datos&quot;, que ayudan a los buscadores a indexar su web. También se usan para generar los feeds RSS.";
				$lang_string['info_keywords'] = "Palabras clave: (Lista de palabras clave separadas por comas.)";
				$lang_string['info_description'] = "Descripción: (Un resumen o texto libre sobre tu sitio.)";
				$lang_string['info_copyright'] = "Derechos: (Información de copyright o un enlace a la página que la contiene.)";
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor rellene los campos Título y Autor.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;			
			case 'login':
				$lang_string['upgrade'] = "<h2>Actualización</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n ficheros de comentarios necesitan ser actualizados:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Actualizar Comentarios"; // New 0.3.8
				$lang_string['title'] = "Ingreso";
				$lang_string['instructions'] = "Introduzca su nombre de usuario y contraseña";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contraseña";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>¡Bienvenido!</h2>¡Se ha conectado con éxito!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>¡Ups!</h2>No puede ingresar. Verifique su nombre de usuario y contraseña e inténtelo de nuevo.<p />";
				$lang_string['form_error'] = "Por favor rellene los campos Usuario y Contraseña."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Salir";
				$lang_string['instructions'] = "<h2>¡Ups!</h2>Error intentando salir. No se pudo borrar la cookie. ¿Por que sigue conectado?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Cambiar Usuario y Contraseña";
				$lang_string['instructions'] = "Use el formulario inferior para cambiar su nombre de usuario y contraseña. Inserta el nombre de usuario y la contraseña que quieras usar.";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contraseña:";
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>¡Listo!</h2>Su nuevo nombre de usuario y/o contraseña esta activo desde ahora.<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>¡Ups!</h2>Información no guardada. Hubo un error mientras se guardaba su nombre de usuario y contraseña .<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor complete los campos Usuario y Contraseña.";
				$lang_string['explanation'] = "En las versiones recientes, la estructura de la contraseña ha cambiado. Ya no hay manera de actualizar contraseñas
				    y/o logins desde el código del blog. Para cambiar su contraseña, elimine el archivo /config/password.php y asegúrese de que existen los ficheros
					install*.php en el servidor local. Una vez hecho esto, refresque la página (o desconéctese). Se le presentará el mismo formulario para crear la
					contraseña que vió cuando creó por primera vez el blog.";  // New for 0.4.6
				break;
			case 'install00':
				$lang_string['title'] = "Bienvenido";
				$lang_string['instructions'] = "¡Gracias por elegir Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Selección de Idioma:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Bienvenido";
				$lang_string['instructions'] = "¡Gracias por elegir Simple PHP Blog!<br /><br />Simple PHP Blog es un sistema de blogging de peso ligero. Requiere PHP is 4.1 o superior y permisos de escritura en el servidor. Toda la información es guardada en archivos de texto plano por lo que no requiere una base de datos para funcionar.<br /><br />
				Para comenzar, Simple PHP Blog necesita crear tres carpetas ('config', 'content', e 'images') en la cuales guardará su información.<br /><br />
				<b>Haga clic debajo para comenzar la instalación:</b>";
				$lang_string['begin'] = "[ Comenzar Instalación ]";
				break;
			case 'install02':
				$lang_string['title'] = "Instalación";
				$lang_string['instructions'] = "Intentando crear las carpetas 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "¡Listo! Las carpetas ya existían. No se hicieron cambios...";
				$lang_string['folder_failed'] = "¡Ups! No se pudieron crear las carpetas...";
				$lang_string['folder_success'] = "¡Listo! Carpetas creadas...";
				// Help
				$lang_string['help'] = "
				<h2>¡Ups!</h2>¡No se pudieron crear una o más de las carpetas! Esto sucede usualmente debido a:<br>
				<i>1) <b>Permisos de escritura</b> no estan configurados para permitir acceso de  <b>Escritura/Lectura</b>.</i><br>
				<i>2) Las <b>UID</b>'s (user ID's) de todos los archivos y carpetas deben corresponder.</i><p />
				Siga las instrucciones siguientes para resolver el problema y luego intente de nuevo:<p />				
				1) Cree manualmente las siguientes carpetas: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Habilite <b>Permisos de escritura</b> a las carpetas. En su cliente FTP; Owner, User, y World deben tener acceso de <b>Read</b> y <b>Write</b>. <i>(Podría necesitar contactar a su proveedor de servicios para cambiar esto...)</i><p />
				3) Asegúrese de que las UID's de todos sus archivos y carpetas son los mismos. <i>(Podría necesitar contactar a su proveedor de servicios para cambiar esto...)</i>";
				$lang_string['try_again'] = "[ Reintentar ]";
				// Success
				$lang_string['success'] = "<h2>¡Listo!</h2>¡Carpetas creadas exitosamente!<p /><b>Haga clic debajo para continuar:</b>";
				$lang_string['continue'] = "[ Continuar ]";
				break;
			case 'install03':
				$lang_string['supported'] = "<b>Su servidor web soporta los siguientes esquemas de cifrado:</b>";
				$lang_string['standard'] = "Standard DES Encryption: ";
				$lang_string['extended'] = "Extended DES Encryption: ";
				$lang_string['MD5'] = "MD5 Encryption: ";
				$lang_string['blowfish'] = "Blowfish Encryption: ";
				$lang_string['enabled'] = "habilitado";
				$lang_string['disabled'] = "deshabilitado";
				$lang_string['using_standard'] = "<b>Usando Standard DES Encryption...</b>";
				$lang_string['using_extended'] = "<b>Usando Extended DES Encryption...</b>";
				$lang_string['using_MD5'] = "<b style=\"color: green;\">Usando MD5 Encryption...</b>";
				$lang_string['using_blowfish'] = "<b style=\"color: green;\">Using Blowfish Encryption...</b>";
				$lang_string['using_unknown'] = "<b>Usando Unknown Encryption...</b>";
				$lang_string['salt_length'] = " <i>(Salt Length = %string)</i><br />";
				$lang_string['title'] = "Crear Usuario y Contraseña";
				$lang_string['instructions'] = "Use el formulario inferior para crear un Usuario y una Contraseña.";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contraseña:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>¡Felicitaciones!</h2>Esta ahora conectado. Haga clic debajo para visitar la página de configuración y cambiar las opciones de su bitácora.<p />";
				$lang_string['btn_setup'] = "[ Configuración ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>¡Ups!</h2>Información no guardada. Hubo un error mientras se guardaba su nombre de usuario y contraseña .<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor, rellene los campos Usuario y Contraseña";
				break;
			case 'install04':
				$lang_string['title'] = "Crear el archivo para la contraseña";
				$lang_string['instructions'] = "He aquí el truco:<br />
				<ol>
				<li>Abra un editor de texto. <i>(Note Pad, Word Pad, Word, BBEdit, Pico, VI, etc...)</i></li>
				<li>Cree un nuevo documento de texto.</li>
				<li>Copie y pegue el código del cuadro inferior en su documento.</li>
				<li>Guarde su archivo y llámelo <b>password.php</b> <i>(Asegúrese de guardarlo en formato de <b>texto</b> o <b>texto plano</b>.)</i></li>
				<li>Abra una aplicación FTP.</li>
				<li>Suba el archivo <b>password.php</b> dentro de la carpeta <b>config</b> de su sitio web.</li>
				<li>Borre el archivo <b>password.php</b> de su disco duro.</li>
				</ol>
				";
				$lang_string['information'] = "<i>Nota: Si desea borar su nombre de usuario y contraseña (probablemente porque la olvidó), elimine el archivo <b>password.php</b> en la carpeta <b>config</b> de su sitio web. La próxima vez que visite su sitio, lo llevará a tavés de este proceso de instalación nuevamente...</i>";
				$lang_string['code'] = "Código para el archivo <b>password.php</b>:";
				$lang_string['continue'] = "[ Continuar ]";
				break;
			case 'install05':
			case 'install06':
				$lang_string['title'] = "Ingreso";
				$lang_string['instructions'] = "Ingrese su nombre de usuario y contraseña";
				$lang_string['username'] = "Nombre de Usuario:";
				$lang_string['password'] = "Contraseña";
				$lang_string['submit_btn'] = "&nbsp;Aceptar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>¡Felicitaciones!</h2>Usted se ha conectado.<p />
				Haga click abajo para visitar la página de <b>Configuración</b> , desde donde podrá personalizar su nuevo blog.<p />
				<i>Nota: Ahora que ha completado el proceso de instalación, se le recomienda borrar los archivos <b>installXX.php</b> desde su sitio web. (i.e. install00.php hasta install06.php)</i><p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ups!</h2>No está conectado. Verifique que ha escrito bien su Nombre de Usuario y Contraseña e intente nuevamente.<p />";
				$lang_string['form_error'] = "Complete los campos de Nombre de Usuario y Contraseña.";
				// Success
				$lang_string['btn_setup'] = "[ Configuración ]";
				$lang_string['btn_try_again'] = "[ Intente de nuevo ]";
				break;
			case 'setup':
				$lang_string['title'] = "Configuración";
				$lang_string['instructions'] = "Puede cambiar el nombre de su bitácora y su información personal debajo.";
				$lang_string['blog_title'] = "Nombre de la Bitácora:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Correo Electrónico:"; // <-- New 0.3.7
				$lang_string['blog_avatar'] = "URL del avatar: (Déjalo en blanco para ninguno)."; // <-- New 0.4.7
				$lang_string['blog_footer'] = "Pie de página:";
				$lang_string['blog_choose_language'] = "Elegir Idioma:";
				$lang_string['blog_enable_comments'] = "Permitir Comentarios de Usuarios"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Abrir comentarios en Ventanas Emergentes"; // <-- New 0.3.6
				$lang_string['blog_enable_cache'] = "Permitir Caché de Entradas (en algunos servidores mejora el rendimiento)"; // New for 0.4.6
				$lang_string['blog_enable_voting'] = "Permitir a los Usuarios Votar Artículos"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Enviar email cuando se publique un comentario"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Enviar &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "URL completa (ej: http://rpc.weblogs.com/RPC2) del servicio de &quot;ping&quot;.<br />(Puedes introducir más de una separándolas por comas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provee de un método de notificación entre blogs. Permita que otro
					blog sepa que usted lo está enlazando enviando un trackback ping. Vea quién está enlazando su blog 
					recibiendo trackback pings.<br />
				   Usted puede tanto ingresar las URLs manualmente para hacer ping, o hacerlo automáticamente a través de Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Activar trackback en mi blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Activar Auto-Discovery al crear posts que contengan URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Máximas Entradas a Mostrar:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Etiquetas permitidas en los Comentarios:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					A partir de la versión 4.0.4, PHP puede leer y escribir archivos comprimidos gzip (.gz), lo cual ahorra espacio en disco. Por otra parte, es posible comprimir las páginas que se envían a un navegador que soporte gzip, ahorrando así ancho de banda.<br />
					<br />El soporte de Zlib no viene activado por defecto en el PHP. Si las casillas de verificación están desactivadas significa que su PHP no soporta la extensión Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Activar compresión GZIP para archivos datos"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Activar compresión GZIP para la salida HTTP"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				$lang_string['form_error'] = "Por favor complete los campos Título y Autor.";
				$lang_string['label_entry_order'] = "Orden de Artículos:";
				$lang_string['select_new_to_old'] = "Primero los Nuevos";
				$lang_string['select_old_to_new'] = "Primero los Antiguos";
				$lang_string['label_comment_order'] = "Orden de Comentarios:";
				$lang_string['cal_sunday'] = "Domingo"; // New for 0.4.6
				$lang_string['cal_monday'] = "Lunes"; // New for 0.4.6
				$lang_string['label_calendar_start'] = "D&iacute;a de la semana de inicio"; // New for 0.4.6
				$lang_string['title_sidebar'] = "Sidebar"; // New in 0.4.7
				$lang_string['title_comments'] = "Comentarios"; // New in 0.4.7
				$lang_string['title_trackback'] = "Trackbacks"; // New in 0.4.7
				$lang_string['title_compression'] = "Compresión"; // New in 0.4.7
				$lang_string['title_entries'] = "Entradas"; // New in 0.4.7
				$lang_string['title_general'] = "General"; // New in 0.4.7
				$lang_string['title_language'] = "Idioma"; // New in 0.4.7
				$lang_string['blog_comment_days_expiry'] = "Por cuantos días permitir comentarios? (0 significa sin límite de días)"; // New in 0.4.8
				$lang_string['blog_enable_calendar'] = "Activar calendario / Bloque de archivo"; // New for 0.4.6
				$lang_string['blog_enable_archives'] = "Activar Bloque de archivo"; // New for 0.4.8
				$lang_string['blog_enable_counter'] = "Activar Contador en el menú"; // New for 0.4.8
				$lang_string['blog_counter_hours'] = "Número de horas entes de contar de nuevo las visitas (basado en una dirección IP específica):"; // New for 0.4.8
				$lang_string['blog_enable_login'] = "Enable Login Link (Please bookmark \"login.php\" first...)"; // New for 0.4.8
				$lang_string['blog_enable_title'] = "Permitir Bloque de Título de Texto (Desmarca el checkbox si el título de la cabecera es una imágen)"; // New for 0.4.6
				$lang_string['blog_enable_permalink'] = "Permitir Enlaces Permanentes en las Entradas"; // New for 0.4.6
				$lang_string['blog_enable_capcha'] = "Activar Anti-Spam"; // New for 0.4.8
				$lang_string['blog_footer_counter'] = "Activar Contador en Pié de Página"; // New for 0.4.8
				$lang_string['blog_enable_capcha_image'] = "Imágenes Anti-Spam (librería GD solamente) / Campo de texto Anti-Spam"; // New for 0.4.8
				$lang_string['blog_enable_stats'] = "Permitir la Opción de Estadísticas en el Listado"; // New for 0.4.7
				$lang_string['blog_enable_lastcomments'] = "Permitir la Opción de Comentarios Recientes en el Listado"; // New for 0.4.7
				$lang_string['blog_enable_lastentries'] = "Permitir la Opción de Entradas Recientes en el Listado"; // New for 0.4.7
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL para esta entrada:";
				$lang_string['delete_btn'] = "Borrar";
				// Error Response
				$lang_string['error_add'] = "Se produjo un error guardando los datos del trackback.";
				break;
			case 'options':
				$lang_string['title'] = "Opciones";
				$lang_string['instructions'] = "Use el formulario de debajo para personalizar el formato en que se presentará la fecha y hora en la bitácora y en los comentarios. Puedes seleccionar el formato de 12 o de 24 horas. Formato corto o largo. Las areas de <b>Previsualización</b> le muestran automáticamente como se verá su formato.";
				// Long Date
				$lang_string['ldate_title'] = "Formato de Fecha Larga:";
				$lang_string['weekday'] = "Día de la Semana";
				$lang_string['month'] = "Mes";
				$lang_string['day'] = "Día";
				$lang_string['year'] = "Año";
				$lang_string['none'] = "Ninguno";
				// Short Date
				$lang_string['sdate_title'] = "Formato de Fecha Corta:";
				$lang_string['s_month'] = "Mes";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Día";
				$lang_string['s_year'] = "Año";
				$lang_string['zero_day'] = "Cero inicial para el Día";
				$lang_string['show_century'] = "Mostrar siglo";
				// Time
				$lang_string['time_title'] = "Formato de Hora:";
				$lang_string['12hour'] = "Reloj de 12 horas";
				$lang_string['24hour'] = "Reloj de 24 horas";
				$lang_string['before_noon'] = "Mañana";
				$lang_string['after_noon'] = "Tarde";
				// Date
				$lang_string['date_title'] = "Formato de Visualización de Fecha:";
				$lang_string['long_date'] = "Fecha Larga";
				$lang_string['short_date'] = "Fecha Corta";
				$lang_string['time'] = "Hora";
				// Menu
				$lang_string['menu_title'] = "Formato de Visualización en el Menú Fecha:";
				$lang_string['long_date'] = "Fecha Larga";
				$lang_string['short_date'] = "Fecha Corta";
				// Used in multiple places
				$lang_string['zero_day'] = "Cero inicial para el Día";
				$lang_string['zero_month'] = "Cero inicial para el Mes";
				$lang_string['zero_hour'] = "Cero inicial para la Hora";
				$lang_string['separator'] = "Separador:";
				$lang_string['preview'] = "Previsualización:";
				$lang_string['server_offset'] = "Offset del Servidor:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temas";
				$lang_string['instructions'] = "Use la lista de opciones para seleccionar un tema distinto.";
				// Themes
				$lang_string['choose_theme'] = "Temas:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Guardar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>La información no pudo ser guardada. Se encontró un problema mientras se almacenaba su información.<br /><br />Respuesta del servidor:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Subir imagen";
				$lang_string['instructions'] = "Haga clic debajo para subir una imagen.";
				$lang_string['select_file'] = "Seleccionar archivo:";
				$lang_string['upload_btn'] = "Subir";
				// Error Response
				$lang_string['error'] = "<h2>¡Ups!</h2>Fue imposible subir la imagen. Aquí hay mas información:<br /><br />Respuesta del servidor:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Resultados de la búsqueda";
				$lang_string['instructions'] = "Resultados de la búsqueda para la cadena <b>'%string'</b>:";
				$lang_string['not_found'] = "No se encontraron resultados";
				break;
			case 'entries':	// <-- New 0.4.4
				$lang_string['title'] = "Listado completo de art&iacute;culos";
				$lang_string['instructions'] = "A continuaci&oacute;n se muestran todos los art&iacute;culos disponibles.";
				$lang_string['no_entries'] = "No hay art&iacute;culos.";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contacta Conmigo";
				$lang_string['instructions'] = "Rellena el formulario:";
				$lang_string['form_error'] = "Por favor, completa los campos Asunto, Comentario y Anti-Spam.";
				$lang_string['name'] = "Nombre:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Asunto:";
				$lang_string['comment'] = "Comentario:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				$lang_string['success'] = "<h2>¡Listo!</h2>Su mensaje ha sido enviado.<p />";
				$lang_string['failure'] = "<h2>¡Ups!</h2>Su mensaje no se ha enviado. Contra el Spam no fue incorporado muy probablemente correctamente.<p />";
				$lang_string['contact_capcha'] = "Anti-Spam: Introduzca <b>%s</b>"; // 0.4.2	
				$lang_string['contactsent'] = "Contacto enviado desde: ";  // New for 0.4.6
				$lang_string['IPAddress'] = "Direcci&oacute;n IP:";  // New for 0.4.6
				$lang_string['useragent'] = "Agente Usuario:";  // New for 0.4.6
				$lang_string['wrote'] = "<i>El %s, %s escribi&oacute;:</i><br />\n<br />\n%s"; // New for 0.4.6.2
				break;
			case 'stats':
				$lang_string['title'] = "Estadísticas";
				$lang_string['general'] = "General";
				$lang_string['entry_info'] = "<b>%s</b> artículos usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> comentarios usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks ocupando <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> páginas estáticas usando <b>%s</b> palabras ocupando <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "10 Artículos más vistos";
				$lang_string['most_commented_entries'] = "10 Artículos más comentados";
				$lang_string['most_trackbacked_entries'] = "10 Artículos con más trackbacks";
				$lang_string['vote_info'] = "<b>%s</b> votos ocupando <b>%s</b> bytes"; // 0.4.1
				$lang_string['most_voted_entries'] = "10 Artículos más votados"; //0.4.1
				$lang_string['most_rated_entries'] = "10 Artículos mejor valorados"; //0.4.1
				break;
			case 'errorpage-nocookies':  // New for 0.4.6
				$lang_string["title"] = 'HTTP Error 403.8 - Acceso denegado a Página/Función';
				$lang_string["errorline1"] = 'La página o función que intenta acceder requiere el uso de cookies.';
				$lang_string["errorline2"] = 'Habilite las cookies en su navegador o software de protección e intente nuevamente.';
				$lang_string["clientid"] = 'ID Cliente: ';
				break;
			case 'errorpage':  // New for 0.4.6
				$lang_string["403.8"] = 'HTTP Error 403.8 - Acceso denegado a Página/Función';
				$lang_string["404"] = 'HTTP Error 404 - Página/Función inexistente';
				$lang_string["error_404"] = 'La página o función que intenta acceder no existe.';
				$lang_string["error_javascript"] = 'La página o función que intenta acceder requere javascript para funcionar correctamente.';
				$lang_string["error_emailnotsent"] = 'El mensaje que intentó enviar ha fallado.';
				$lang_string["error_emailnotsentcapcha"] = 'El mensaje que intentó enviar ha fallado pues la entrada anti-spam está incorrecta o no ha sido ingresada.';
				$lang_string["clientid"] = 'ID Cliente: ';
				break;
			case 'emoticons':  // New for 0.4.7
				$lang_string['title'] = "Administrar Emoticones";
				$lang_string['instructions'] = "
					Marque los emoticones que desea usar. Escriba en el cuadro los Tags que desea sean remplazados por la imagen.
					Puede usar múltiples Tags, separándolos por espacios.<br /><br />
					Por ejemplo:<br />
					:) :-) :SMILE: :HAPPY:<br /><br />
					<i>(Se recomienda fuertemente que los Tags sean de más de 2 caracteres, de otro modo sustituciones inesperadas pueden ocurrir.)</i>";
				$lang_string["upload_instructions"] = 'Subir Nuevo Emoticon:';
				$lang_string["upload_success"] = '¡Felicitaciones! Imagen subida exitosamente!';
				$lang_string["upload_error"] = '¡Error! La Imagen no ha sido subida.';
				$lang_string["upload_invalid"] = '¡Error! Archivo de Imagen no válido. La Imagen debe tener extensión png, jpg, o gif.';
				$lang_string["save_success"] = '¡Preferencias para emoticones guardada exitosamente!';
				$lang_string["save_error"] = '¡Error! Las Preferencias para Emoticones no han sido guardadas.';
				$lang_string["save_button"] = 'Guardar Emoticones';
				break;
			default:
				break;
		}
	}
?>
