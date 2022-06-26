<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ma">
 *
 * @package Logistic Transport
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<?php if(get_theme_mod('logistic_transport_preloader_hide',false)!= '' || get_theme_mod('logistic_transport_responsive_preloader_hide',false) != ''){ ?>
	    <?php if(get_theme_mod( 'logistic_transport_preloader_type','center-square') == 'center-square'){ ?>
		    <div class='preloader'>
			    <div class='preloader-squares'>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
			    </div>
			</div>
	    <?php }else if(get_theme_mod( 'logistic_transport_preloader_type') == 'chasing-square') {?>    
	        <div class='preloader'>
				<div class='preloader-chasing-squares'>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
				</div>
			</div>
	    <?php }?>
	<?php }?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'logistic-transport' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content ', 'logistic-transport' );?></span></a>
		<div id="header">
	  	<div class="container inner-box p-0">
	  		<div class="site_header">
	  			<div class="row m-0">
				    <div class="col-lg-3 col-md-3 align-self-center">
			 	 	  	<div class="logo m-0 py-4 align-self-center">
				     	 	<?php if ( has_custom_logo() ) : ?>
				     	    	<div class="site-logo"><?php the_custom_logo(); ?></div>
				            <?php endif; ?>
				            <?php if( get_theme_mod( 'logistic_transport_site_title',true) != '') { ?>
					            <?php $blog_info = get_bloginfo( 'name' ); ?>
					            <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
						              <h1 class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						            <?php else : ?>
						              <p class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						            <?php endif; ?>
					            <?php endif; ?>
					        <?php }?>
					        <?php if( get_theme_mod( 'logistic_transport_site_tagline',true) != '') { ?>
					            <?php
					            $description = get_bloginfo( 'description', 'display' );
					            if ( $description || is_customize_preview() ) :
					            ?>
					            <p class="site-description">
					              <?php echo esc_html($description); ?>
					            </p>
					            <?php endif; ?>
					        <?php }?>
						    </div>
				    </div>
				    <div class="col-lg-9 col-md-9">
				    	<?php if( get_theme_mod('logistic_transport_topbar_hide') != '' || get_theme_mod('logistic_transport_responsive_topbar_hide',false) != ''){ ?>
					    	<div class="row topbar">
						        <div class="col-lg-2 col-md-6">
						        	<div class="call mb-lg-0 mb-2">
						        	<?php if( get_theme_mod( 'logistic_transport_call','' ) != '') { ?>
						        		<a href="tel:<?php echo esc_attr( get_theme_mod('logistic_transport_call','')); ?>"><?php if (get_theme_mod('logistic_transport_phone_icon') != 'None'){?><i class="<?php echo esc_html(get_theme_mod('logistic_transport_phone_icon','fas fa-phone')); ?> me-2"></i><?php }?><?php echo esc_html( get_theme_mod('logistic_transport_call','') ); ?><span class="screen-reader-text"><?php esc_html_e( 'Phone Number','logistic-transport' );?></span></a>
						          	<?php } ?>
						          	</div>
						        </div>
						        <div class="col-lg-3 col-md-6">
						        	<div class="call mb-lg-0 mb-2">
							        	<?php if( get_theme_mod( 'logistic_transport_mail','' ) != '') { ?>
									        <a href="mailto:<?php echo esc_attr( get_theme_mod('logistic_transport_mail','')); ?>"><?php if (get_theme_mod('logistic_transport_mail_icon') != 'None'){?><i class="<?php echo esc_html(get_theme_mod('logistic_transport_mail_icon','fas fa-envelope')); ?> me-2"></i><?php }?><?php echo esc_html( get_theme_mod('logistic_transport_mail','') ); ?><span class="screen-reader-text"><?php esc_html_e( 'Email','logistic-transport' );?></span></a>
									    <?php } ?>
								    </div>
						        </div>
						        <div class="col-lg-4 col-md-6">
						        	<div class="call mb-lg-0 mb-2">
							        	<?php if( get_theme_mod( 'logistic_transport_time','' ) != '') { ?>
							        		<?php if (get_theme_mod('logistic_transport_time_icon') != 'None'){?><i class="<?php echo esc_html(get_theme_mod('logistic_transport_time_icon','far fa-clock')); ?> me-2"></i><?php }?><?php echo esc_html( get_theme_mod('logistic_transport_time','') ); ?>
							        	<?php } ?>
						        	</div>
						        </div>
						        <div class="col-lg-3 col-md-6">
						        	<div class="social-media text-lg-right text-center">
					          			<?php if( get_theme_mod( 'logistic_transport_facebook_url' ) != '' && get_theme_mod('logistic_transport_facebook_icon') != 'None') { ?>
					            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_facebook_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('logistic_transport_facebook_icon','fab fa-facebook-f')); ?> me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','logistic-transport' );?></span></a>
					          			<?php } ?>
					          			<?php if( get_theme_mod( 'logistic_transport_twitter_url' ) != '' && get_theme_mod('logistic_transport_twitter_icon') != 'None') { ?>
					            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_twitter_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('logistic_transport_twitter_icon','fab fa-twitter')); ?> me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','logistic-transport' );?></span></a>
					          			<?php } ?>
					          			<?php if( get_theme_mod( 'logistic_transport_instagram_url' ) != '' && get_theme_mod('logistic_transport_instagram_icon') != 'None') { ?>
					            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_instagram_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('logistic_transport_instagram_icon','fab fa-instagram')); ?> me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','logistic-transport' );?></span></a>
					          			<?php } ?>
					          			<?php if( get_theme_mod( 'logistic_transport_linkdin_url' ) != '' && get_theme_mod('logistic_transport_linkedin_icon') != 'None') { ?>
					            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_linkdin_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('logistic_transport_linkedin_icon','fab fa-linkedin-in')); ?> me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','logistic-transport' );?></span></a>
					          			<?php } ?>
					          			<?php if( get_theme_mod( 'logistic_transport_youtube_url' ) != '' && get_theme_mod('logistic_transport_youtube_icon') != 'None') { ?>
					            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_youtube_url','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('logistic_transport_youtube_icon','fab fa-youtube')); ?> me-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','logistic-transport' );?></span></a>
					          			<?php } ?>
					        		</div>
						        </div>
						    </div> 
					    <?php }?> 
					    <div class="<?php if( get_theme_mod( 'logistic_transport_sticky_header', false) != '' || get_theme_mod('logistic_transport_responsive_sticky_header',false) != '') { ?> sticky-header<?php } else { ?>close-sticky <?php } ?>">
				        <div class="row">
									<div class="menubox nav col-lg-8 col-md-6 col-2">
										<?php if(has_nav_menu('primary')){ ?>
									   	<div class="toggle-menu responsive-menu">
		                   	<button role="tab" onclick="logistic_transport_menu_open()"><i class="<?php echo esc_html(get_theme_mod('logistic_transport_responsive_open_menu_icon','fas fa-bars'));?> py-1 px-2"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','logistic-transport'); ?></span></button>
			               	</div>
			               	<div id="menu-sidebar" class="nav side-menu">
				                <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'logistic-transport' ); ?>">
				                    <?php 
				                      wp_nav_menu( array( 
				                        'theme_location' => 'primary',
				                        'container_class' => 'main-menu-navigation clearfix' ,
				                        'menu_class' => 'clearfix',
				                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 p-0">%3$s</ul>',
				                        'fallback_cb' => 'wp_page_menu',
				                      ) ); 
				                    ?>
				                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="logistic_transport_menu_close()"><i class="<?php echo esc_html(get_theme_mod('logistic_transport_responsive_close_menu_icon','fas fa-times'));?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','logistic-transport'); ?></span></a>
				                </nav>
			              	</div>
		              	<?php }?>
									</div>
									<div class="search-box col-lg-1 col-md-1 col-2 align-self-center">
										<?php if(get_theme_mod('logistic_transport_search_icon') != 'None') {?>
				            	<button type="button" onclick="logistic_transport_search_show()" class="p-0"><i class="<?php echo esc_html(get_theme_mod('logistic_transport_search_icon','fas fa-search')); ?> py-3 px-2"></i></button>
				            <?php }?>
					        </div>
									<div class="search-outer">
		                <div class="serach_inner">
	                  	<?php get_search_form(); ?>
		                </div>
		              	<button type="button" class="closepop"  onclick="logistic_transport_search_hide()">X</span></button>
					        </div>
					  	  	<div class="col-lg-3 col-md-5 col-6 p-0 align-self-center">
					  	  		<?php if( get_theme_mod( 'logistic_transport_request_btn_url' ) != '' || get_theme_mod( 'logistic_transport_request_btn_text' ) != '') { ?>
											<div class="request-btn my-3">
									  		<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_request_btn_url','' ) ); ?>" class="blogbutton-small py-2 px-3" ><?php echo esc_html( get_theme_mod( 'logistic_transport_request_btn_text','' ) ); ?><span class="screen-reader-text"><?php esc_html_e( 'Request a Date', 'logistic-transport' );?></span>
										  	</a>
											</div>
										<?php } ?>
									</div>
								</div>
					    </div>
				    </div>
			    </div>
				</div>
			</div>
		</div>
	</header>