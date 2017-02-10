<style type="text/css">
	body {
		background-color: #<?php echo( $user_colors[ 'bg_color' ] ); ?>;
		color: #<?php echo( $user_colors[ 'txt_color' ] ); ?>;
	}

	hr	
	{
		color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
	}

	#header_image {
		border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
	}
	
	#header {
		border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
		color: #<?php echo( $user_colors[ 'header_txt_color' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'header_bg_color' ] ); ?>;
	}
	
	#footer {
		color: #<?php echo( $user_colors[ 'footer_txt_color' ] ); ?>;
		background: #<?php echo( $user_colors[ 'footer_bg_color' ] ); ?>;
		border-top: 1px solid #<?php echo( $user_colors[ 'border_color' ] ); ?>;
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
	
	#maincontent .blog_title {
		border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
		color: #<?php echo( $user_colors[ 'entry_title_text' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'entry_title_bg' ] ); ?>;
	}
	
	#maincontent .blog_body {
		border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
		color: #<?php echo( $user_colors[ 'entry_text' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'entry_bg' ] ); ?>;
	}
	
	#maincontent .blog_comment {
		border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
		color: #<?php echo( $user_colors[ 'entry_text' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'entry_bg' ] ); ?>;
	}
	
	#maincontent .blog_date {
		color: #<?php echo( $user_colors[ 'date_txt_color' ] ); ?>;
	}
	
	#sidebar .menu_title {
		border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
		color: #<?php echo( $user_colors[ 'menu_title_text' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'menu_title_bg' ] ); ?>;
	}
	
	#sidebar .menu_body {
		border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
		color: #<?php echo( $user_colors[ 'menu_text' ] ); ?>;
		background-color: #<?php echo( $user_colors[ 'menu_bg' ] ); ?>;
	}
	
	#sidebar .menu_body a:link {
		color: #<?php echo( $user_colors[ 'menu_link_reg_color' ] ); ?>;
	}
	
	#sidebar .menu_body a:visited {
		color: #<?php echo( $user_colors[ 'menu_link_reg_color' ] ); ?>;
	}
	
	#sidebar .menu_body a:hover {
		color: #<?php echo( $user_colors[ 'menu_link_hi_color' ] ); ?>;
	}
	
	#sidebar .menu_body a:active {
		color: #<?php echo( $user_colors[ 'menu_link_down_color' ] ); ?>;
	}
	
	pre {
		width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;
		border-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
	}
</style>
