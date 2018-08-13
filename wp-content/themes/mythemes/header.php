<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

		<?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122317622-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122317622-2');
    </script>
    <meta name="google-site-verification" content="HLqJND6oWfQK9JheS95PyZWVq86YTXzQ_A_wWC-sBFs" />

	</head>
	
	<body <?php body_class(); ?>>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
		
		<div class="navigation">
			
			<div class="section-inner">
				
				<ul class="main-menu">
																		
					<?php 
					if ( has_nav_menu( 'primary' ) ) {

						$nav_args = array( 
							'container' 		=> '',
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'primary',
						);
																		
						wp_nav_menu( $nav_args );

					} else {

						$list_pages_args = array(
							'container' => '',
							'title_li' 	=> ''
						);

						wp_list_pages( $list_pages_args );

					} 
					?>
					
					<li class="header-search">
						<form method="get" class="search-form" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="search" class="search-field" name="s" placeholder="<?php _e( 'Search Form', 'hitchcock' ); ?>" /> 
							<a class="search-button" onclick="document.getElementById( 'search-form' ).submit(); return false;"><div class="fa fw fa-search"></div></a>
						</form>
					</li>
					
				</ul>
				
				<div class="clear"></div>
				
			</div><!-- .section-inner -->
			
			<div class="nav-toggle">
					
				<div class="bars">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
				
			</div><!-- .nav-toggle -->
			
			<div class="mobile-navigation">
			
				<ul class="mobile-menu">
																			
					<?php 
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( $nav_args );
					} else {
						wp_list_pages( $list_pages_args );
					}
					?>
					
				</ul>
				
				<?php get_search_form(); ?>
			
			</div><!-- .mobile-navigation -->
			
		</div><!-- .navigation -->

		<?php $image_image_url = get_header_image() ? get_header_image() : get_template_directory_uri() . '/images/bg.jpg'; ?>
		
		<div class="header-image" style="background-image: url( <?php echo $image_image_url; ?> );"></div>
	
		<div class="header section-inner">
		
			<?php 
			
			if ( get_theme_mod( 'custom_logo' ) ) :

				hitchcock_custom_logo();
				
			else : 
				
				$title_type = is_singular() ? '2' : '1'; ?>
		
				<h<?php echo $title_type; ?> class="blog-title">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
				</h<?php echo $title_type; ?>>
				
			<?php endif;
			
			if ( get_bloginfo( 'description' ) ) : ?>
			
				<p class="blog-description"><?php echo bloginfo( 'description' ); ?></p>
			
			<?php endif;
			
			if ( has_nav_menu( 'social' ) ) : ?>
			
				<ul class="social-menu">
							
					<?php 
					wp_nav_menu( array(
						'theme_location'	=>	'social',
						'container'			=>	'',
						'container_class'	=>	'menu-social',
						'items_wrap'		=>	'%3$s',
						'menu_id'			=>	'menu-social-items',
						'menu_class'		=>	'menu-items',
						'depth'				=>	1,
						'link_before'		=>	'<span class="screen-reader-text">',
						'link_after'		=>	'</span>',
						'fallback_cb'		=>	'',
					) );
					?>
					
				</ul><!-- .social-menu -->
			
			<?php endif; ?>
      <div class="fb-page" data-href="https://www.facebook.com/Web%E3%82%AF%E3%83%AA%E3%82%A8%E3%82%A4%E3%82%BF%E3%83%BC%E3%81%AF%E3%82%84%E3%82%81%E3%81%A8%E3%81%91-2128537574025382/" data-tabs="timeline" data-width="Min.180 to Max 500" data-height="Min. 70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/Web%E3%82%AF%E3%83%AA%E3%82%A8%E3%82%A4%E3%82%BF%E3%83%BC%E3%81%AF%E3%82%84%E3%82%81%E3%81%A8%E3%81%91-2128537574025382/" class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/Web%E3%82%AF%E3%83%AA%E3%82%A8%E3%82%A4%E3%82%BF%E3%83%BC%E3%81%AF%E3%82%84%E3%82%81%E3%81%A8%E3%81%91-2128537574025382/"><img src=<?php echo get_template_directory_uri() ?>/images/facebook.jpg'></a>
          <img>
        </blockquote>
      </div>
		</div><!-- .header -->