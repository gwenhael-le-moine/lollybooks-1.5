<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
  <head>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		      ?>
    </title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); /*bloginfo( 'stylesheet_url' );*/ ?>/style-v3.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
  </head>
  <body <?php body_class(); ?>>

    <!--banner_top-->
    <header class="banner_top">
      <!-- Tree header and its image-map -->
      <img class="background center" src="<?php bloginfo('template_directory'); ?>/images/banner_map.gif" width="960" height="511" usemap="#Tree.map" />
      <map name="Tree.map">
        <area shape="poly" coords="330,343,323,411,378,417,386,348" alt="Coffee" href="#"/>
        <area shape="poly" coords="534,380,546,435,591,425,576,372" alt="Books" href="#" />
      </map>
      <!-- /Tree -->
    </header>
    <!--/banner_top-->

    <!--menutop-->
    <nav class="menutop" role="navigation">
      <!-- a href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a -->
	  <div class="menu-header">
        <ul id="menu-navigation" class="menu left">
          <li class="menu-item">
	        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home.jpg" width="80" height="78"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/about_us.jpg"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/services.jpg" /></a>
          </li>
          <li class="menu-item">
            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="<?php bloginfo( 'description' ); ?>"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/event.jpg"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/libary.jpg"/></a>
          </li>
          <li class="menu-item">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/club.jpg" /></a>
          </li>
        </ul>
		<!-- ?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ? -->
    </nav>
    <!--/menutop-->

    <div class="content">
      <div class="content_in" >
        <aside id="contact">
          <span class="center">
            Số 18, Ngõ 131, Thái Hà, Hà Nội
            ~
            <img src="<?php bloginfo('template_directory'); ?>/images/facebook_favicon.ico" height="12px" width="12px" /> <a href="http://facebook.com/lollybooks">http://facebook.com/lollybooks</a>
            ~
            ✉ <a href="mailto:info@lollybooks.com">info@lollybooks.com</a>
            ~
            ℡ 04.6276.8545 - 0977.910.727 - 0988.172.298
          </span>
        </aside>

