<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body class="<?php sandbox_body_class() ?>">

  <div id="wrapper" class="hfeed">

    <div id="header">
      <a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" id="logo" alt="Lollybooks Café" /></a>

      <div id="subtitle">
        <div id="icons">
          <img id="cafe" src="<?php bloginfo('template_directory') ?>/images/cafe.png" alt="Café" />
          <img id="books" src="<?php bloginfo('template_directory') ?>/images/books.png" alt="Books" />
          <img id="wifi" src="<?php bloginfo('template_directory') ?>/images/wifi.png" alt="Wifi" />
          <img id="friends" src="<?php bloginfo('template_directory') ?>/images/friends.png" alt="Friends" />
          <img id="lollypops" src="<?php bloginfo('template_directory') ?>/images/lollypops.png" alt="Lollypops" />
        </div> <!-- div#icons -->
        <div id="adress">29 Tô Hiến Thành, Hà Nội, Việt Nam</div>
      </div>
    </div><!--  #header -->

    <div id="access">
        <!-- <div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div> -->
    </div><!-- #access -->