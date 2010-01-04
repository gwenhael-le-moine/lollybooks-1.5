<?php
  /*
   Template Name: Giới thiệu
  */
  // Présentation
?>
<?php get_header() ?>
<?php get_sidebar() ?>

<div id="container" class="grid_12">
  <div id="content">

    <?php the_post() ?>

    <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
    <!-- <h2 class="entry-title"><?php the_title() ?></h2> -->
    <div class="entry-content gioi-thieu">

      <?php the_content() ?>

    </div>
  </div><!-- .post -->

  <?php
     if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages!
  ?>

</div><!-- #content -->
</div><!-- #container -->

<?php get_footer() ?>
