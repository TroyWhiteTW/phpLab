<style type="text/css">
	body {
		color: #<?php echo( $user_colors[ 'txt_color' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'main_bg_color' ] ); ?>;
	}
	
	pre {
		width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;
		border-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
	}
	
	blockquote {
		border-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #<?php echo( $user_colors[ 'headline_txt_color' ] ); ?>;
	}

	a:link, a:visited {
		color: #<?php echo( $user_colors[ 'link_reg_color' ] ); ?>;
	}

	a:hover {
		color: #<?php echo( $user_colors[ 'link_hi_color' ] ); ?>;
	}

	a:active {
		color: #<?php echo( $user_colors[ 'link_down_color' ] ); ?>;
	}

	hr	
	{
		color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
	}

	.copyright {
		color: #<?php echo( $user_colors[ 'footer_txt_color' ] ); ?>;
	}

	.subject {
		color: #<?php echo( $user_colors[ 'headline_txt_color' ] ); ?>;
	}

	.byline {
		color: #<?php echo( $user_colors[ 'date_txt_color' ] ); ?>;
	}
	
	#navigation {
		color: #<?php echo( $user_colors[ 'header_txt_color' ] ); ?>;
	}
	
	#header {
		background-color: #<?php echo( $user_colors[ 'header_bg_color' ] ); ?>;
	}
	
	#footer {
		background-color: #<?php echo( $user_colors[ 'footer_bg_color' ] ); ?>;
	}
	
	#sidebar a:link, #sidebar a:visited
	{
		color: #<?php echo( $user_colors[ 'menu_link_reg_color' ] ); ?>;
	}
	
	#sidebar a:hover
	{
		color: #<?php echo( $user_colors[ 'menu_link_hi_color' ] ); ?>;
	}
	
	#sidebar a:active
	{
		color: #<?php echo( $user_colors[ 'menu_link_down_color' ] ); ?>;
	}
	
	#sidebar .menu_title,  #sidebar .menu_title a:link, #sidebar .menu_title a:visited, #sidebar .menu_title a:hover, #sidebar .menu_title a:active {
		color: #<?php echo( $user_colors[ 'menu_title_text' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'menu_title_bg' ] ); ?>;
		border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
	}
	
	#sidebar .menu_body {
		color: #<?php echo( $user_colors[ 'menu_text' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'menu_bg' ] ); ?>;
		border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
	}
	
	.subject {
		color: #<?php echo( $user_colors[ 'entry_title_text' ] ); ?>;
	}
	
	/* entry_bg
	entry_title_bg
	entry_border
	entry_title_text
	entry_text */
</style>