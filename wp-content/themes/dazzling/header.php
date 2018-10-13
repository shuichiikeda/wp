<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122317622-2');
</script>
<meta name="google-site-verification" content="HLqJND6oWfQK9JheS95PyZWVq86YTXzQ_A_wWC-sBFs" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="bg" style="display: none;"></div>
<div id="page" class="hfeed site">

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
        <!--
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbaroriginal">
			    <span class="sr-only"><?php _e( 'Toggle navigation', 'dazzling' ); ?></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  -->
        <button type="button" class="original-btn-menu">
          <span class="original-menu-bar original-menu-bar1"></span>
          <span class="original-menu-bar original-menu-bar2"></span>
          <span class="original-menu-bar original-menu-bar3"></span>
          <span class="original-menu">MENU</span>
          <span class="original-menu-close">CLOSE</span>
        </button>
        <script type="text/javascript">
          // jQueryは読み込み済み前提
          jQuery(function($){
            $('.original-btn-menu').click(function(){
              console.log(111);
              $(this).toggleClass('original-menu-active');
              $('.original-nav').toggleClass('original-nav-open');
            });
          })
        </script>
        <nav class="original-nav">
          <ul class="main-category-list">
              <li>カテゴリー</li>
              <?php wp_list_categories('title_li=&show_count=1&use_desc_for_title=1&depth=0'); //カテゴリの呼び出し?>
          </ul>
        </nav>

				<div id="logo">

					<?php echo is_home() ?  '<h1 class="site-title">' : '<span class="site-title">'; ?>

						<?php if( get_header_image() != '' ) : ?>

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>


						<?php endif; // header image was removed ?>

						<?php if( !get_header_image() ) : ?>

							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

						<?php endif; // header image was removed (again) ?>

					<?php echo is_home() ?  '</h1>' : '</span>'; ?><!-- end of .site-name -->

				</div><!-- end of #logo -->

				<?php if( !get_header_image() ) : ?>

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>

				<?php endif; ?>
						
			</div>
				<?php dazzling_header_menu(); ?>
		</div>
	</nav><!-- .site-navigation -->

        <div class="top-section">
		<?php dazzling_featured_slider(); ?>
		<?php dazzling_call_for_action(); ?>
        </div>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- kaigai website -->
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-7870164007728460"
       data-ad-slot="3050514414"
       data-ad-format="horizontal"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
        <div id="content" class="site-content container">

            <div class="container main-content-area"><?php

                global $post;
                if( get_post_meta($post->ID, 'site_layout', true) ){
                        $layout_class = get_post_meta($post->ID, 'site_layout', true);
                }
                else{
                        $layout_class = of_get_option( 'site_layout' );
                }
                if( is_home() && is_sticky( $post->ID ) ){
                        $layout_class = of_get_option( 'site_layout' );
                }
                ?>
                <div class="row <?php echo $layout_class; ?>">
