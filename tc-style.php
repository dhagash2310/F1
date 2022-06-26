<?php 
	$logistic_transport_custom_css ='';
	
    $logistic_transport_theme_color_first = get_theme_mod('logistic_transport_theme_color_first', '');
    $logistic_transport_theme_color_second = get_theme_mod('logistic_transport_theme_color_second', '');

	if(get_theme_mod('logistic_transport_topbar_hide') == false){
		$logistic_transport_custom_css .=' #header .logo{';
			$logistic_transport_custom_css .='padding: 0 !important;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .=' .primary-navigation ul#menu-all-pages{';
			$logistic_transport_custom_css .='padding: 8px 0 !important;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .=' .search-box i{';
			$logistic_transport_custom_css .='padding: 25px 10px !important;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .=' .request-btn{';
			$logistic_transport_custom_css .='margin: 25px 0px !important;';
		$logistic_transport_custom_css .='}';
	}

	/*----------------Width Layout -------------------*/
	$logistic_transport_theme_lay = get_theme_mod( 'logistic_transport_width_options','Full Layout');
    if($logistic_transport_theme_lay == 'Full Layout'){
		$logistic_transport_custom_css .='body{';
			$logistic_transport_custom_css .='max-width: 100%;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == 'Contained Layout'){
		$logistic_transport_custom_css .='body{';
			$logistic_transport_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .='.page-template-custom-frontpage #header{';
			$logistic_transport_custom_css .='left:0;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == 'Boxed Layout'){
		$logistic_transport_custom_css .='body{';
			$logistic_transport_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .='.page-template-custom-frontpage #header{';
			$logistic_transport_custom_css .='padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .='header{';
			$logistic_transport_custom_css .='position: relative;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .='
		@media screen and (max-width: 768px) and (min-width: 320px){
		.page-template-custom-frontpage #header{';
		$logistic_transport_custom_css .=' padding:0;';
		$logistic_transport_custom_css .='} }';
	}

	/*------------- Slider Opacity -------------------*/
	$logistic_transport_slider_layout = get_theme_mod( 'logistic_transport_slider_opacity','0.5');
	if($logistic_transport_slider_layout == '0'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.1'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.1';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.2'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.2';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.3'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.3';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.4'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.4';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.5'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.5';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.6'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.6';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.7'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.7';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.8'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.8';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == '0.9'){
		$logistic_transport_custom_css .='#slider img{';
			$logistic_transport_custom_css .='opacity:0.9';
		$logistic_transport_custom_css .='}';
	}

	/*-------------Slider Content Layout ------------*/

	$logistic_transport_slider_layout = get_theme_mod( 'logistic_transport_slider_content_option','Left');
    if($logistic_transport_slider_layout == 'Left'){
		$logistic_transport_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$logistic_transport_custom_css .='text-align:start;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .='#slider .carousel-caption{';
		$logistic_transport_custom_css .='left:10%; right:35%;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == 'Center'){
		$logistic_transport_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$logistic_transport_custom_css .='text-align:center;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .='#slider .carousel-caption{';
		$logistic_transport_custom_css .='left:25%; right:25%;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_slider_layout == 'Right'){
		$logistic_transport_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$logistic_transport_custom_css .='text-align:end;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .='#slider .carousel-caption{';
		$logistic_transport_custom_css .='left:35%; right:10%;';
		$logistic_transport_custom_css .='}';
	}

	/* Slider content spacing */
	$logistic_transport_top_spacing = get_theme_mod('logistic_transport_slider_top_spacing');
	$logistic_transport_bottom_spacing = get_theme_mod('logistic_transport_slider_bottom_spacing');
	$logistic_transport_left_spacing = get_theme_mod('logistic_transport_slider_left_spacing');
	$logistic_transport_right_spacing = get_theme_mod('logistic_transport_slider_right_spacing');
	if($logistic_transport_top_spacing != false || $logistic_transport_bottom_spacing != false || $logistic_transport_left_spacing != false || $logistic_transport_right_spacing != false){
		$logistic_transport_custom_css .='#slider .carousel-caption{';
			$logistic_transport_custom_css .='top: '.esc_attr($logistic_transport_top_spacing).'%; bottom: '.esc_attr($logistic_transport_bottom_spacing).'%; left: '.esc_attr($logistic_transport_left_spacing).'%; right: '.esc_attr($logistic_transport_right_spacing).'%;';
		$logistic_transport_custom_css .='}';
	}

	/*------ Button Style -------*/
	$logistic_transport_top_buttom_padding = get_theme_mod('logistic_transport_top_button_padding');
	$logistic_transport_left_right_padding = get_theme_mod('logistic_transport_left_button_padding');
	if($logistic_transport_top_buttom_padding != false || $logistic_transport_left_right_padding != false ){
		$logistic_transport_custom_css .='.read-btn a.blogbutton-small, #slider .read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$logistic_transport_custom_css .='padding-top: '.esc_attr($logistic_transport_top_buttom_padding).'px; padding-bottom: '.esc_attr($logistic_transport_top_buttom_padding).'px; padding-left: '.esc_attr($logistic_transport_left_right_padding).'px; padding-right: '.esc_attr($logistic_transport_left_right_padding).'px;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_button_border_radius = get_theme_mod('logistic_transport_button_border_radius');
	$logistic_transport_custom_css .='.read-btn a.blogbutton-small, #slider .read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
		$logistic_transport_custom_css .='border-radius: '.esc_attr($logistic_transport_button_border_radius).'px;';
	$logistic_transport_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/

	$logistic_transport_woocommerce_button_padding_top = get_theme_mod('logistic_transport_woocommerce_button_padding_top');
	if($logistic_transport_woocommerce_button_padding_top != false){
		$logistic_transport_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$logistic_transport_custom_css .='padding-top: '.esc_attr($logistic_transport_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($logistic_transport_woocommerce_button_padding_top).'px;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_woocommerce_button_padding_right = get_theme_mod('logistic_transport_woocommerce_button_padding_right');
	if($logistic_transport_woocommerce_button_padding_right != false){
		$logistic_transport_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$logistic_transport_custom_css .='padding-left: '.esc_attr($logistic_transport_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($logistic_transport_woocommerce_button_padding_right).'px;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_woocommerce_button_border_radius = get_theme_mod('logistic_transport_woocommerce_button_border_radius');
	if($logistic_transport_woocommerce_button_border_radius != false){
		$logistic_transport_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$logistic_transport_custom_css .='border-radius: '.esc_attr($logistic_transport_woocommerce_button_border_radius).'px;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_related_product = get_theme_mod('logistic_transport_related_product',true);

	if($logistic_transport_related_product == false){
		$logistic_transport_custom_css .='.related.products{';
			$logistic_transport_custom_css .='display: none;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_woocommerce_product_border = get_theme_mod('logistic_transport_woocommerce_product_border',true);

	if($logistic_transport_woocommerce_product_border == false){
		$logistic_transport_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$logistic_transport_custom_css .='border: none;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_woocommerce_product_padding_top = get_theme_mod('logistic_transport_woocommerce_product_padding_top',10);
		$logistic_transport_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$logistic_transport_custom_css .='padding-top: '.esc_attr($logistic_transport_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($logistic_transport_woocommerce_product_padding_top).'px;';
		$logistic_transport_custom_css .='}';

	$logistic_transport_woocommerce_product_padding_right = get_theme_mod('logistic_transport_woocommerce_product_padding_right',10);
		$logistic_transport_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$logistic_transport_custom_css .='padding-left: '.esc_attr($logistic_transport_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($logistic_transport_woocommerce_product_padding_right).'px;';
		$logistic_transport_custom_css .='}';

	$logistic_transport_woocommerce_product_border_radius = get_theme_mod('logistic_transport_woocommerce_product_border_radius');
	if($logistic_transport_woocommerce_product_border_radius != false){
		$logistic_transport_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$logistic_transport_custom_css .='border-radius: '.esc_attr($logistic_transport_woocommerce_product_border_radius).'px;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_woocommerce_product_box_shadow = get_theme_mod('logistic_transport_woocommerce_product_box_shadow');
	if($logistic_transport_woocommerce_product_box_shadow != false){
		$logistic_transport_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$logistic_transport_custom_css .='box-shadow: '.esc_attr($logistic_transport_woocommerce_product_box_shadow).'px '.esc_attr($logistic_transport_woocommerce_product_box_shadow).'px '.esc_attr($logistic_transport_woocommerce_product_box_shadow).'px #aaa;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_product_sale_font_size = get_theme_mod('logistic_transport_product_sale_font_size', 16);
	$logistic_transport_custom_css .='.woocommerce span.onsale {';
		$logistic_transport_custom_css .='font-size: '.esc_attr($logistic_transport_product_sale_font_size).'px;';
	$logistic_transport_custom_css .='}';

	/*------ Slider show/hide -------*/
	if(get_theme_mod('logistic_transport_slider_hide_show') == false){
		$logistic_transport_custom_css .=' .page-template-custom-frontpage #header{';
			$logistic_transport_custom_css .='position: static; background: '.esc_attr($logistic_transport_theme_color_first).';';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .=' #services .service-box{';
			$logistic_transport_custom_css .='margin: 0;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .=' .site_header{';
			$logistic_transport_custom_css .=' background: '.esc_attr($logistic_transport_theme_color_first).';';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .=' .page-template-custom-frontpage .request-btn a.blogbutton-small{';
			$logistic_transport_custom_css .=' background:'.esc_attr($logistic_transport_theme_color_second).'; color: '.esc_attr($logistic_transport_theme_color_first).';';
		$logistic_transport_custom_css .='}';
	}

	/*---- Preloader Color ----*/
	$logistic_transport_preloader_color = get_theme_mod('logistic_transport_preloader_color');
	$logistic_transport_preloader_bg_color = get_theme_mod('logistic_transport_preloader_bg_color');

	if($logistic_transport_preloader_color != false){
		$logistic_transport_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$logistic_transport_custom_css .='background-color: '.esc_attr($logistic_transport_preloader_color).';';
		$logistic_transport_custom_css .='}';
	}
	if($logistic_transport_preloader_bg_color != false){
		$logistic_transport_custom_css .='.preloader{';
			$logistic_transport_custom_css .='background-color: '.esc_attr($logistic_transport_preloader_bg_color).';';
		$logistic_transport_custom_css .='}';
	}

	/*---- Copyright css ----*/
	$logistic_transport_copyright_fontsize = get_theme_mod('logistic_transport_copyright_fontsize',16);
	if($logistic_transport_copyright_fontsize != false){
		$logistic_transport_custom_css .='#footer p{';
			$logistic_transport_custom_css .='font-size: '.esc_attr($logistic_transport_copyright_fontsize).'px; ';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_copyright_top_bottom_padding = get_theme_mod('logistic_transport_copyright_top_bottom_padding',15);
	if($logistic_transport_copyright_top_bottom_padding != false){
		$logistic_transport_custom_css .='#footer {';
			$logistic_transport_custom_css .='padding-top:'.esc_attr($logistic_transport_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($logistic_transport_copyright_top_bottom_padding).'px; ';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_copyright_alignment = get_theme_mod( 'logistic_transport_copyright_alignment','Center');
    if($logistic_transport_copyright_alignment == 'Left'){
		$logistic_transport_custom_css .='#footer p{';
			$logistic_transport_custom_css .='text-align:start;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_copyright_alignment == 'Center'){
		$logistic_transport_custom_css .='#footer p{';
			$logistic_transport_custom_css .='text-align:center;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_copyright_alignment == 'Right'){
		$logistic_transport_custom_css .='#footer p{';
			$logistic_transport_custom_css .='text-align:end;';
		$logistic_transport_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$logistic_transport_woocommerce_sale_top_padding = get_theme_mod('logistic_transport_woocommerce_sale_top_padding');
	$logistic_transport_woocommerce_sale_left_padding = get_theme_mod('logistic_transport_woocommerce_sale_left_padding');
	$logistic_transport_custom_css .=' .woocommerce span.onsale{';
		$logistic_transport_custom_css .='padding-top: '.esc_attr($logistic_transport_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($logistic_transport_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($logistic_transport_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($logistic_transport_woocommerce_sale_left_padding).'px;';
	$logistic_transport_custom_css .='}';

	$logistic_transport_woocommerce_sale_border_radius = get_theme_mod('logistic_transport_woocommerce_sale_border_radius', 50);
	$logistic_transport_custom_css .='.woocommerce span.onsale{';
		$logistic_transport_custom_css .='border-radius: '.esc_attr($logistic_transport_woocommerce_sale_border_radius).'px;';
	$logistic_transport_custom_css .='}';

	$logistic_transport_sale_position = get_theme_mod( 'logistic_transport_sale_position','right');
    if($logistic_transport_sale_position == 'left'){
		$logistic_transport_custom_css .='.woocommerce ul.products li.product .onsale{';
			$logistic_transport_custom_css .='left: -10px; right: auto;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_sale_position == 'right'){
		$logistic_transport_custom_css .='.woocommerce ul.products li.product .onsale{';
			$logistic_transport_custom_css .='left: auto; right: 0;';
		$logistic_transport_custom_css .='}';
	}

	/*-------- footer background css -------*/
	$logistic_transport_footer_background_color = get_theme_mod('logistic_transport_footer_background_color');
	$logistic_transport_custom_css .='.footertown{';
		$logistic_transport_custom_css .='background-color: '.esc_attr($logistic_transport_footer_background_color).';';
	$logistic_transport_custom_css .='}';

	$logistic_transport_footer_background_img = get_theme_mod('logistic_transport_footer_background_img');
	if($logistic_transport_footer_background_img != false){
		$logistic_transport_custom_css .='.footertown{';
			$logistic_transport_custom_css .='background: url('.esc_attr($logistic_transport_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$logistic_transport_custom_css .='}';
	}

	/*---- Comment form ----*/
	$logistic_transport_comment_width = get_theme_mod('logistic_transport_comment_width', '100');
	$logistic_transport_custom_css .='#comments textarea{';
		$logistic_transport_custom_css .=' width:'.esc_attr($logistic_transport_comment_width).'%;';
	$logistic_transport_custom_css .='}';

	$logistic_transport_comment_submit_text = get_theme_mod('logistic_transport_comment_submit_text', 'Post Comment');
	if($logistic_transport_comment_submit_text == ''){
		$logistic_transport_custom_css .='#comments p.form-submit {';
			$logistic_transport_custom_css .='display: none;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_comment_title = get_theme_mod('logistic_transport_comment_title', 'Leave a Reply');
	if($logistic_transport_comment_title == ''){
		$logistic_transport_custom_css .='#comments h2#reply-title {';
			$logistic_transport_custom_css .='display: none;';
		$logistic_transport_custom_css .='}';
	}

	// Topbar padding
	$logistic_transport_topbar_top_bottom = get_theme_mod('logistic_transport_topbar_top_bottom', 15);
	$logistic_transport_custom_css .='.topbar{';
		$logistic_transport_custom_css .=' padding-top:'.esc_attr($logistic_transport_topbar_top_bottom).'px; padding-bottom:'.esc_attr($logistic_transport_topbar_top_bottom).'px;';
	$logistic_transport_custom_css .='}';

	// Sticky Header padding
	$logistic_transport_sticky_header_padding = get_theme_mod('logistic_transport_sticky_header_padding');
	$logistic_transport_custom_css .='.fixed-header{';
		$logistic_transport_custom_css .=' padding-top:'.esc_attr($logistic_transport_sticky_header_padding).'px; padding-bottom:'.esc_attr($logistic_transport_sticky_header_padding).'px;';
	$logistic_transport_custom_css .='}';

	// Navigation Font Size 
	$logistic_transport_nav_font_size = get_theme_mod('logistic_transport_nav_font_size');
	if($logistic_transport_nav_font_size != false){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-size: '.esc_attr($logistic_transport_nav_font_size).'px;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_navigation_case = get_theme_mod('logistic_transport_navigation_case', 'capitalize');
	if($logistic_transport_navigation_case == 'uppercase' ){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .=' text-transform: uppercase;';
		$logistic_transport_custom_css .='}';
	}elseif($logistic_transport_navigation_case == 'capitalize' ){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .=' text-transform: capitalize;';
		$logistic_transport_custom_css .='}';
	}


	//Site title Font size
	$logistic_transport_site_title_fontsize = get_theme_mod('logistic_transport_site_title_fontsize');
	$logistic_transport_custom_css .='.logo h1, .logo p.site-title{';
		$logistic_transport_custom_css .='font-size: '.esc_attr($logistic_transport_site_title_fontsize).'px;';
	$logistic_transport_custom_css .='}';

	$logistic_transport_site_description_fontsize = get_theme_mod('logistic_transport_site_description_fontsize');
	$logistic_transport_custom_css .='.logo p.site-description{';
		$logistic_transport_custom_css .='font-size: '.esc_attr($logistic_transport_site_description_fontsize).'px;';
	$logistic_transport_custom_css .='}';

	/*----- Featured image css -----*/
	$logistic_transport_featured_image_border_radius = get_theme_mod('logistic_transport_featured_image_border_radius');
	if($logistic_transport_featured_image_border_radius != false){
		$logistic_transport_custom_css .='.inner-service .service-image img{';
			$logistic_transport_custom_css .='border-radius: '.esc_attr($logistic_transport_featured_image_border_radius).'px;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_featured_image_box_shadow = get_theme_mod('logistic_transport_featured_image_box_shadow');
	if($logistic_transport_featured_image_box_shadow != false){
		$logistic_transport_custom_css .='.inner-service .service-image img{';
			$logistic_transport_custom_css .='box-shadow: 8px 8px '.esc_attr($logistic_transport_featured_image_box_shadow).'px #aaa;';
		$logistic_transport_custom_css .='}';
	} 

	/*---- Slider Image overlay -----*/
	$logistic_transport_slider_image_overlay = get_theme_mod('logistic_transport_slider_image_overlay',true);
	if($logistic_transport_slider_image_overlay == false){
		$logistic_transport_custom_css .='#slider img {';
			$logistic_transport_custom_css .='opacity: 1;';
		$logistic_transport_custom_css .='}';
	}

	$logistic_transport_slider_overlay_color = get_theme_mod('logistic_transport_slider_overlay_color');
	if($logistic_transport_slider_overlay_color != false){
		$logistic_transport_custom_css .='#slider  {';
			$logistic_transport_custom_css .='background-color: '.esc_attr($logistic_transport_slider_overlay_color).';';
		$logistic_transport_custom_css .='}';
	}

	/*------Slider height ---------*/
	$logistic_transport_slider_height = get_theme_mod('logistic_transport_slider_height');
	if($logistic_transport_slider_height != false){
		$logistic_transport_custom_css .='#slider img  {';
			$logistic_transport_custom_css .='height: '.esc_attr($logistic_transport_slider_height).'px;';
		$logistic_transport_custom_css .='}';
		$logistic_transport_custom_css .='@media screen and (max-width: 575px){		
			#slider img  {';
			$logistic_transport_custom_css .='height: auto;';
		$logistic_transport_custom_css .='} }';
	}

	/*------Shop page pagination ---------*/
	$logistic_transport_shop_page_pagination = get_theme_mod('logistic_transport_shop_page_pagination', true);
	if($logistic_transport_shop_page_pagination == false){
		$logistic_transport_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$logistic_transport_custom_css .='display: none;';
		$logistic_transport_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$logistic_transport_post_blocks = get_theme_mod('logistic_transport_post_blocks', 'Without box');
	if($logistic_transport_post_blocks == 'Within box' ){
		$logistic_transport_custom_css .='.services-box{';
			$logistic_transport_custom_css .=' border: 1px solid #222;';
		$logistic_transport_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	$logistic_transport_responsive_topbar_hide = get_theme_mod('logistic_transport_responsive_topbar_hide',false);
	if($logistic_transport_responsive_topbar_hide == true && get_theme_mod('logistic_transport_topbar_hide',false) == false){
		$logistic_transport_custom_css .='@media screen and (min-width:575px){
			.topbar{';
			$logistic_transport_custom_css .='display:none;';
		$logistic_transport_custom_css .='} }';
	}

	if($logistic_transport_responsive_topbar_hide == false){
		$logistic_transport_custom_css .='@media screen and (max-width:575px){
			.topbar{';
			$logistic_transport_custom_css .='display:none;';
		$logistic_transport_custom_css .='} }';
	}

	$logistic_transport_responsive_show_back_to_top = get_theme_mod('logistic_transport_responsive_show_back_to_top',true);
	if($logistic_transport_responsive_show_back_to_top == true && get_theme_mod('logistic_transport_show_back_to_top',true) == false){
		$logistic_transport_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$logistic_transport_custom_css .='visibility:hidden;';
		$logistic_transport_custom_css .='} }';
	}

	if($logistic_transport_responsive_show_back_to_top == false){
		$logistic_transport_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$logistic_transport_custom_css .='visibility:hidden;';
		$logistic_transport_custom_css .='} }';
	}

	$logistic_transport_responsive_preloader_hide = get_theme_mod('logistic_transport_responsive_preloader_hide',false);
	if($logistic_transport_responsive_preloader_hide == true && get_theme_mod('logistic_transport_preloader_hide',false) == false){
		$logistic_transport_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$logistic_transport_custom_css .='display:none !important;';
		$logistic_transport_custom_css .='} }';
	}

	if($logistic_transport_responsive_preloader_hide == false){
		$logistic_transport_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$logistic_transport_custom_css .='display:none !important;';
		$logistic_transport_custom_css .='} }';
	}
    
    $logistic_transport_responsive_sticky_header = get_theme_mod('logistic_transport_responsive_sticky_header',false);
	if($logistic_transport_responsive_sticky_header == true && get_theme_mod('logistic_transport_sticky_header',false) == false){
		$logistic_transport_custom_css .='@media screen and (min-width:575px){
			.fixed-header{';
			$logistic_transport_custom_css .='position:static !important;';
		$logistic_transport_custom_css .='} }';
	}

	if($logistic_transport_responsive_sticky_header == false){
		$logistic_transport_custom_css .='@media screen and (max-width:575px){
			.fixed-header{';
			$logistic_transport_custom_css .='position:static !important;';
		$logistic_transport_custom_css .='} }';
	}

	$logistic_transport_slider = get_theme_mod( 'logistic_transport_mobile_media_slider',false);
	if($logistic_transport_slider == true && get_theme_mod( 'logistic_transport_slider_hide_show', false) == false){
    	$logistic_transport_custom_css .='#slider{';
			$logistic_transport_custom_css .='display:none;';
		$logistic_transport_custom_css .='} ';
	}
    if($logistic_transport_slider == true){
    	$logistic_transport_custom_css .='@media screen and (max-width:575px) {';
		$logistic_transport_custom_css .='#slider{';
			$logistic_transport_custom_css .='display:block;';
		$logistic_transport_custom_css .='} }';
	}else if($logistic_transport_slider == false){
		$logistic_transport_custom_css .='@media screen and (max-width:575px) {';
		$logistic_transport_custom_css .='#slider{';
			$logistic_transport_custom_css .='display:none;';
		$logistic_transport_custom_css .='} }';
	}

	// menu font weight
	$logistic_transport_theme_lay = get_theme_mod( 'logistic_transport_font_weight_menu_option','Defalt');
    if($logistic_transport_theme_lay == '100'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight:100;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == '200'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight: 200;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == '300'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight: 300;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == '400'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight: 400;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == 'Defalt'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight: 500;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == '600'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight: 600;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == '700'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight: 700;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == '800'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight: 800;';
		$logistic_transport_custom_css .='}';
	}else if($logistic_transport_theme_lay == '900'){
		$logistic_transport_custom_css .='.primary-navigation ul li a{';
			$logistic_transport_custom_css .='font-weight: 900;';
		$logistic_transport_custom_css .='}';
	}

	//Social icon Font size
	$logistic_transport_social_icon_fontsize = get_theme_mod('logistic_transport_social_icon_fontsize');
	$logistic_transport_custom_css .='.topbar .social-media a{';
		$logistic_transport_custom_css .='font-size: '.esc_attr($logistic_transport_social_icon_fontsize).'px;';
	$logistic_transport_custom_css .='}';

	/*-------- Copyright background css -------*/
	$logistic_transport_copyright_background_color = get_theme_mod('logistic_transport_copyright_background_color');
	$logistic_transport_custom_css .='#footer{';
		$logistic_transport_custom_css .='background-color: '.esc_attr($logistic_transport_copyright_background_color).';';
	$logistic_transport_custom_css .='}';
     