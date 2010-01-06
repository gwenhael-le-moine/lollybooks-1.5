<?php
  /*
   Template Name: Ảnh & Video
  */
  // Galleries d'images et vidéos
?>
<?php get_header() ?>
<?php get_sidebar() ?>

<div id="container">
  <div id="content">

    <h2 class="entry-title"><?php the_title() ?></h2>

    <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
      <div class="entry-content anh_videos">
        <?php the_content() ?>

      </div>
    </div><!-- .post -->

    <?php
     if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages!
    ?>

  </div><!-- #content -->
</div><!-- #container -->

<?php<?php get_footer() ?>
