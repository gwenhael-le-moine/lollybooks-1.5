<?php
  /*
   Template Name: Sách
  */
  // Livres
?>
<?php get_header() ?>
<?php get_sidebar() ?>

<div id="container" class="page">
  <div id="content">

    <h2 class="entry-title"><?php the_title() ?></h2>

    <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
      <div class="entry-content sach">

        <?php the_content() ?>

      </div>
    </div><!-- .post -->

    <?php
     if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages!
    ?>

  </div><!-- #content -->
</div><!-- #container -->

<?php get_footer() ?>
