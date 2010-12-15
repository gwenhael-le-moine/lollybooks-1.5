<?php
  /*
   Template Name: HomePage v3
  */
?><!DOCTYPE html>
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
		?></title>
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

    <section id="content" role="main">
           <div class="content">
             <div class="content_in" >






           __CONTENT GOES HERE__





           
        <!--left_content-->
    	<aside class="left_content">
          <ul class="xoxo">
        
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'left-widget-area-v3' ) ) : ?>
	
            <li class="widget-container">
              <div class="banner_left">
            	<div id="slideshow">
                  <img src="<?php bloginfo('template_directory'); ?>/images/image1.jpg" alt="Slideshow Image 1" class="active" width="262" height="180" />
                  <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" alt="Slideshow Image 2" width="262" height="180" />
                  <img src="<?php bloginfo('template_directory'); ?>/images/image3.jpg" alt="Slideshow Image 3" width="262" height="180" />
                  <img src="<?php bloginfo('template_directory'); ?>/images/image4.jpg" alt="Slideshow Image 4" width="262" height="180" />
                </div>
              </div>
            </li>
            <li class="widget-container">
              <div class="recent_post">
            	<div class="title_Recent_Posts">Recent Posts</div>
                <div class="link_recent_post">
                  <a href="#">Chuẩn bị gặp lại nhau ngày 11/12 trên phố Thái Hà nhé</a>
                  <a href="#">Chuẩn bị gặp lại nhau ngày 11/12 trên phố Thái Hà nhé</a>
                  <a href="#">Chuẩn bị gặp lại nhau ngày 11/12 trên phố Thái Hà nhé</a>
                  <a href="#">Chuẩn bị gặp lại nhau ngày 11/12 trên phố Thái Hà nhé</a>
                  <a href="#">Chuẩn bị gặp lại nhau ngày 11/12 trên phố Thái Hà nhé</a>
                  <a href="#">Chuẩn bị gặp lại nhau ngày 11/12 trên phố Thái Hà nhé</a>
                  <a href="#">Chuẩn bị gặp lại nhau ngày 11/12 trên phố Thái Hà nhé</a>
                  <a href="#">Chuẩn bị gặp lại nhau ngày 11/12 trên phố Thái Hà nhé</a>
                </div>
              </div>
            </li>
        
		<?php endif; // end primary widget area ?>

          </ul>
        </aside>

        <aside class="right_content">
			<ul class="xoxo">
				<?php if ( ! dynamic_sidebar( 'right-widget-area-v3' ) ) : ?>
            <li class="widget-container">
        	  <div class="map">
            	<div class="toolTipImg" title='<img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" width="227"/><div style="background:#6A6A6A;text-align:justify; width:227px"></div>'>
                  <a href="#"><img  src="<?php bloginfo('template_directory'); ?>/images/map.jpg" /></a>
                </div>
              </div>
            </li>

            <li class="widget-container">
          	  <div class="calendar">
                <div class="content_calendar">
                  <div class="title_calendar"><img src="<?php bloginfo('template_directory'); ?>/images/img_event.gif" width="214" height="30" /></div>
                <?php sidebarEventsCalendar();?>
                </div>
          	  </div>
            </li>

            <li class="widget-container">
              <div class="calendar">
                <div class="content_calendar">
                  <div class="title_calendar"><img src="<?php bloginfo('template_directory'); ?>/images/lichchieuphim.gif" width="214" height="30" /></div>
                  <div class="cinema">
                    <div class="content_cinema">
                <?php sidebarEventsList( 10 );?>
                    </div>
                  </div>
                </div>
              </div>
            </li>
                
            <li class="widget-container">
              <div class="audio_books"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/audio_book.jpg" width="222" height="80"/></a></div>
            </li>

                <?php endif; ?>
          </ul>
        </aside>

           </div> <!-- .content_in -->
           </div> <!-- .content -->
		</section><!-- #main -->

        <hr class="frise"/>

		<footer role="contentinfo">
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
//	get_sidebar( 'footer' );
?>
      <div class="footer_in">
        <nav class="menu_footer">
          <ul>
            <li>
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer1.gif" width="67" height="76" />
                <h3>
                  <a href="#">Cảm nhận phim,Cảm nhận sách</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
            </li>
            <li>
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer2.gif" width="67" height="76" />
                <h3>
                  <a href="#">Đời sống giới trẻ</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
            </li>
            <li>
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer3.gif" width="67" height="76" />
                <h3>
                  <a href="#">Blog</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
            </li>
            <li>
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer4.gif" width="67" height="76" />
                <h3>
                  <a href="#">Đối tác</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
              
              <div class="box_footer1">
       	        <img src="<?php bloginfo('template_directory'); ?>/images/img_footer5.gif" width="67" height="76" />
                <h3>
                  <a href="#">Liên hệ</a>
                  <p>Có gì mới tại Lollybooks Café?</p>
                </h3>
              </div>
            </li>
          </ul>
      	</nav>
        
        <div class="text_footer">
          Copyright © 2010 <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>. All right reserved. Địa chỉ: Số 18, ngõ 131, Thái Hà. Điện thoại: 04.6276.8545 - Email: info@lollybooks.com
        </div>
      </div>
		</footer>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
    <!-- We put all javascript hereso that DOM is loaded when JS is called -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquerycurvycorners/jquery-1.3.2.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <!-- http://plugins.jquery.com/project/maphilight -->
    <script src="<?php bloginfo('template_directory'); ?>/js/maphilight/jquery.maphilight.min.js"></script>
    <!-- http://code.google.com/p/jquerycurvycorners/ -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquerycurvycorners/jquery.curvycorners.packed.js"></script>
    <script>
$(function() {
   // start maphilight plugin
   $('img[usemap]').maphilight();
});
	</script>
	</body>
</html>