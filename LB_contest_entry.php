<?php
  /*
   Template Name: Contest Entry
  */
?>
<?php get_header() ?>

<div id="container" class="contest-entry">
  <div id="content">

    <div id="nav-above" class="navigation">
    /* TODO: link back to contest's page */
      <div class="nav-previous"><a href="javascript:history.back(  );">Back to Contest's page</a></div>
      /* <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div> */
      /* <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div> */
    </div>


    <h2 class="entry-title"><?php the_title() ?></h2>

    <div id="intro">
    <?php the_content() ?>
    </div>

  </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
