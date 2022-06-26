<?php
/**
 * Logistic Transport functions and definitions
 *
 * @package Logistic Transport
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'logistic_transport_setup' ) ) :

function logistic_transport_setup() {

	$GLOBALS['content_width'] = apply_filters( 'logistic_transport_content_width', 640 );

	load_theme_textdomain( 'logistic-transport', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('logistic-transport-homepage-thumb',240,145,true);
	
   	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'logistic-transport' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	
	add_theme_support ('html5', array (
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

	add_theme_support('responsive-embeds');
	
	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/* Selective refresh for widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/* Starter Content */
	add_theme_support( 'starter-content', array(
		'widgets' => array(
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),
			'sidebar-2' => array(
				'text_business_info',
			),
			'sidebar-3' => array(
				'text_about',
				'search',
			),
			'footer-1' => array(
				'text_about',
			),
			'footer-2' => array(
				'archives',
			),
			'footer-3' => array(
				'text_business_info',
			),
			'footer-4' => array(
				'search',
			),
		),

		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
		),

		'theme_mods' => array(
			'logistic_transport_call' => __('9874563210', 'logistic-transport' ),
			'logistic_transport_mail' => __('example@gmail.com', 'logistic-transport' ),
			'logistic_transport_time' => __('Mon to Fri 8:00am-5:00pm', 'logistic-transport' ),
			'logistic_transport_request_btn_text' => __('Request A Rate', 'logistic-transport' ),
			'logistic_transport_request_btn_url' => '#',
			'logistic_transport_facebook_url' => 'www.facebook.com',
			'logistic_transport_twitter_url' => 'www.twitter.com',
			'logistic_transport_google_url' => 'www.googleplus.com',
			'logistic_transport_linkdin_url' => 'www.linkedin.com',
			'logistic_transport_youtube_url' => 'www.youtube.com',
			'logistic_transport_footer_copy' => __('By ThemesCaliber', 'logistic-transport' )
		),

		'nav_menus' => array(
			'primary' => array(
				'name' => __( 'Primary Menu', 'logistic-transport' ),
				'items' => array(
					'page_home',
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
    ));

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', logistic_transport_font_url() ) );

	// Dashboard Theme Notification
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'logistic_transport_activation_notice' );
	}	

}
endif;
add_action( 'after_setup_theme', 'logistic_transport_setup' );

// Dashboard Theme Notification
function logistic_transport_activation_notice() {
	echo '<div class="welcome-notice notice notice-success is-dimdissible">';
		echo '<h2>'. esc_html__( 'Thank You!!!!!', 'logistic-transport' ) .'</h2>';
		echo '<p>'. esc_html__( 'Much grateful to you for choosing our Logistic Transport theme from themescaliber. we praise you for opting our services over others. we are obliged to invite you on our welcome page to render you with our outstanding services.', 'logistic-transport' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=logistic_transport_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click Here...', 'logistic-transport' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function logistic_transport_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'logistic-transport' ),
		'description'   => __( 'Appears on blog page sidebar', 'logistic-transport' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'logistic-transport' ),
		'description'   => __( 'Appears on page sidebar', 'logistic-transport' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'         => __( 'Third Column Sidebar', 'logistic-transport' ),
		'description' => __( 'Appears on page sidebar', 'logistic-transport' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$logistic_transport_widget_areas = get_theme_mod('logistic_transport_footer_widget_layout', '4');
	for ($i=1; $i<=$logistic_transport_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Nav ', 'logistic-transport' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-2">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'logistic_transport_widgets_init' );

/* Theme Font URL */
function logistic_transport_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function logistic_transport_scripts() {
	wp_enqueue_style( 'logistic-transport-font', logistic_transport_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
	wp_enqueue_style( 'logistic-transport-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'logistic-transport-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );
	wp_enqueue_style( 'logistic-transport-block-style', esc_url(get_template_directory_uri()).'/css/block-style.css' );

	// Paragraph
    $logistic_transport_paragraph_color = get_theme_mod('logistic_transport_paragraph_color', '');
    $logistic_transport_paragraph_font_family = get_theme_mod('logistic_transport_paragraph_font_family', '');
    $logistic_transport_paragraph_font_size = get_theme_mod('logistic_transport_paragraph_font_size', '');
	// "a" tag
	$logistic_transport_atag_color = get_theme_mod('logistic_transport_atag_color', '');
    $logistic_transport_atag_font_family = get_theme_mod('logistic_transport_atag_font_family', '');
	// "li" tag
	$logistic_transport_li_color = get_theme_mod('logistic_transport_li_color', '');
    $logistic_transport_li_font_family = get_theme_mod('logistic_transport_li_font_family', '');
	// H1
	$logistic_transport_h1_color = get_theme_mod('logistic_transport_h1_color', '');
    $logistic_transport_h1_font_family = get_theme_mod('logistic_transport_h1_font_family', '');
    $logistic_transport_h1_font_size = get_theme_mod('logistic_transport_h1_font_size', '');
	// H2
	$logistic_transport_h2_color = get_theme_mod('logistic_transport_h2_color', '');
    $logistic_transport_h2_font_family = get_theme_mod('logistic_transport_h2_font_family', '');
    $logistic_transport_h2_font_size = get_theme_mod('logistic_transport_h2_font_size', '');
	// H3
	$logistic_transport_h3_color = get_theme_mod('logistic_transport_h3_color', '');
    $logistic_transport_h3_font_family = get_theme_mod('logistic_transport_h3_font_family', '');
    $logistic_transport_h3_font_size = get_theme_mod('logistic_transport_h3_font_size', '');
	// H4
	$logistic_transport_h4_color = get_theme_mod('logistic_transport_h4_color', '');
    $logistic_transport_h4_font_family = get_theme_mod('logistic_transport_h4_font_family', '');
    $logistic_transport_h4_font_size = get_theme_mod('logistic_transport_h4_font_size', '');
	// H5
	$logistic_transport_h5_color = get_theme_mod('logistic_transport_h5_color', '');
    $logistic_transport_h5_font_family = get_theme_mod('logistic_transport_h5_font_family', '');
    $logistic_transport_h5_font_size = get_theme_mod('logistic_transport_h5_font_size', '');
	// H6
	$logistic_transport_h6_color = get_theme_mod('logistic_transport_h6_color', '');
    $logistic_transport_h6_font_family = get_theme_mod('logistic_transport_h6_font_family', '');
    $logistic_transport_h6_font_size = get_theme_mod('logistic_transport_h6_font_size', '');
    $logistic_transport_theme_color_first = get_theme_mod('logistic_transport_theme_color_first', '');
    $logistic_transport_theme_color_second = get_theme_mod('logistic_transport_theme_color_second', '');

	$logistic_transport_custom_css ='
		p,span{
		    color:'.esc_attr($logistic_transport_paragraph_color).'!important;
		    font-family: '.esc_attr($logistic_transport_paragraph_font_family).'!important;
		    font-size: '.esc_attr($logistic_transport_paragraph_font_size).'!important;
		}
		a{
		    color:'.esc_attr($logistic_transport_atag_color).'!important;
		    font-family: '.esc_attr($logistic_transport_atag_font_family).';
		}
		li{
		    color:'.esc_attr($logistic_transport_li_color).'!important;
		    font-family: '.esc_attr($logistic_transport_li_font_family).';
		}
		h1{
		    color:'.esc_attr($logistic_transport_h1_color).'!important;
		    font-family: '.esc_attr($logistic_transport_h1_font_family).'!important;
		    font-size: '.esc_attr($logistic_transport_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_attr($logistic_transport_h2_color).'!important;
		    font-family: '.esc_attr($logistic_transport_h2_font_family).'!important;
		    font-size: '.esc_attr($logistic_transport_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_attr($logistic_transport_h3_color).'!important;
		    font-family: '.esc_attr($logistic_transport_h3_font_family).'!important;
		    font-size: '.esc_attr($logistic_transport_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_attr($logistic_transport_h4_color).'!important;
		    font-family: '.esc_attr($logistic_transport_h4_font_family).'!important;
		    font-size: '.esc_attr($logistic_transport_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_attr($logistic_transport_h5_color).'!important;
		    font-family: '.esc_attr($logistic_transport_h5_font_family).'!important;
		    font-size: '.esc_attr($logistic_transport_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_attr($logistic_transport_h6_color).'!important;
		    font-family: '.esc_attr($logistic_transport_h6_font_family).'!important;
		    font-size: '.esc_attr($logistic_transport_h6_font_size).'!important;
		}
		.top-header,#header,.primary-navigation ul ul a,.page-template-custom-frontpage .request-btn a.blogbutton-small, #about hr, #services .service-content, .footertown input[type="submit"],input[type="submit"], .footertown th, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #slider .read-btn a.blogbutton-small, .read-btn a.blogbutton-small, #sidebar th, .pagination a:hover,.page-links a:hover, .pagination .current,.page-links .current, #sidebar input[type="submit"], .footertown .tagcloud a:hover,#sidebar .tagcloud a:hover, .metabox,.primary-navigation a:hover, #comments input[type="submit"].submit, .woocommerce-product-search button[type="submit"], .fixed-header, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .blog .navigation .nav-previous a, .blog .navigation .nav-next a, .archive .navigation .nav-previous a, .archive .navigation .nav-next a, .search .navigation .nav-previous a, .search .navigation .nav-next a, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, #comments a.comment-reply-link, a.button{
		    background-color:'.esc_attr($logistic_transport_theme_color_first).';
		}
		nav.woocommerce-MyAccount-navigation ul li, .wp-block-button a{
		 background-color:'.esc_attr($logistic_transport_theme_color_first).'!important;
		}
		.social-media a:hover,.request-btn a.blogbutton-small,.footertown .widget h3, a.showcoupon,.woocommerce-message::before,  #slider .carousel-control-next-icon i:hover,#slider .carousel-control-prev-icon i:hover, .topbox i:hover,  h3.widget-title a, .woocommerce ul.products li.product .star-rating, .scrollup, a, a:hover, a:focus, a:hover, .scrollup:focus, .scrollup:hover, .social-media a i:hover, .footertown .widget ul li a:hover, #sidebar ul li a:hover{
		    color:'.esc_attr($logistic_transport_theme_color_first).';
		}
		.page-template-custom-frontpage .request-btn a.blogbutton-small,.serach_inner form.search-form,.primary-navigation ul ul, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-message{
		    border-color:'.esc_attr($logistic_transport_theme_color_first).';
		}
		@media screen and (max-width:1000px){
			.site_header, .toggle-menu, .menubox.nav, .search-box, .side-menu, .page-template-custom-frontpage .fixed-header{
			    background-color:'.esc_attr($logistic_transport_theme_color_first).';
			}
		}
		@media screen and (max-width:768px) and (min-width:426px){
			.request-btn{
			    background-color:'.esc_attr($logistic_transport_theme_color_first).';
			}
		}

		.hvr-sweep-to-right:before, .topbar, #header .header-top, .serach_outer, .footertown, #footer,#slider,.pagination span,.pagination a, .request-btn a.blogbutton-small{
		    background-color:'.esc_attr($logistic_transport_theme_color_second).';
		}
		h1,h2,h3,h4,h5,h6, .middle-align h1,h1.product_title.entry-title,#tab-description h2,#reviews h2,h2#reply-title, #about h2 a, #about p, .footertown select, #comments a.comment-reply-link,#comments a time, .services-box h2 a, #sidebar h3, #sidebar input[type="search"],input.search-field,h1.entry-title,.content-ma h2, .content-ma h3,  #header #header-inner .nav ul li ul li a, #sidebar h3 a{
		    color:'.esc_attr($logistic_transport_theme_color_second).';
		}'
	;
	wp_add_inline_style( 'logistic-transport-basic-style',$logistic_transport_custom_css );

	require get_parent_theme_file_path( '/tc-style.php' );
	wp_add_inline_style( 'logistic-transport-basic-style',$logistic_transport_custom_css );

	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js' );
	wp_enqueue_script( 'logistic-transport-custom-jquery', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'logistic_transport_scripts' );

/*radio button sanitization*/

function logistic_transport_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function logistic_transport_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );

  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* Excerpt Limit Begin */
function logistic_transport_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// URL DEFINES
define('LOGISTIC_TRANSPORT_THEME_URL',__('https://www.themescaliber.com/themes/free-logistics-wordpress-theme/', 'logistic-transport'));
define('LOGISTIC_TRANSPORT_FREE_THEME_DOC',__('https://themescaliber.com/demo/doc/free-tc-logistics-transport/','logistic-transport'));
define('LOGISTIC_TRANSPORT_SUPPORT',__('https://wordpress.org/support/theme/logistic-transport/','logistic-transport'));
define('LOGISTIC_TRANSPORT_REVIEW',__('https://wordpress.org/support/theme/logistic-transport/reviews/','logistic-transport'));
define('LOGISTIC_TRANSPORT_BUY_NOW',__('https://www.themescaliber.com/themes/transport-wordpress-theme','logistic-transport'));
define('LOGISTIC_TRANSPORT_LIVE_DEMO',__('https://www.themescaliber.com/tc-logistics-transport-pro','logistic-transport'));
define('LOGISTIC_TRANSPORT_PRO_DOC',__('https://themescaliber.com/demo/doc/tc-logistics-transport-pro/','logistic-transport'));
define('LOGISTIC_TRANSPORT_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','logistic-transport'));
if ( ! defined( 'LOGISTIC_TRANSPORT_PRO_NAME' ) ) {
	define( 'LOGISTIC_TRANSPORT_PRO_NAME', __( 'Transport Pro Theme', 'logistic-transport' ));
}
if ( ! defined( 'LOGISTIC_TRANSPORT_PRO_URL' ) ) {
	define( 'LOGISTIC_TRANSPORT_PRO_URL', esc_url('https://www.themescaliber.com/themes/transport-wordpress-theme/'));
}

function logistic_transport_credit_link() {
    echo "<a href=".esc_url(LOGISTIC_TRANSPORT_THEME_URL)." target='_blank'>".esc_html__('Transport WordPress Theme','logistic-transport')."</a>";
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'logistic_transport_loop_columns');
if (!function_exists('logistic_transport_loop_columns')) {
	function logistic_transport_loop_columns() {
		$columns = get_theme_mod( 'logistic_transport_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'logistic_transport_shop_per_page', 9 );
function logistic_transport_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'logistic_transport_product_per_page', 9 );
	return $cols;
}

function logistic_transport_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function logistic_transport_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function logistic_transport_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/** Posts navigation. */
if ( ! function_exists( 'logistic_transport_post_navigation' ) ) {
	function logistic_transport_post_navigation() {
		$logistic_transport_pagination_type = get_theme_mod( 'logistic_transport_post_navigation_type', 'numbers' );
		if ( $logistic_transport_pagination_type == 'numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation( array(
	            'prev_text'          => __( 'Previous page', 'logistic-transport' ),
	            'next_text'          => __( 'Next page', 'logistic-transport' ),
	            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'logistic-transport' ) . ' </span>',
	        ) );
		}
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the get started page */
require get_template_directory() . '/inc/dashboard/getstart.php';