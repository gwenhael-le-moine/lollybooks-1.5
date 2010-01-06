<?php
  /*
   Template Name: Sự kiện
  */
  // Événements
?>
<?php get_header() ?>
<?php get_sidebar() ?>

<div id="container">
  <div id="content">

      <div id="main-event">

        <?php
          $category_posts=get_posts( array('category_name'=>'event', 'numberposts'=>'1') );
          foreach($category_posts as $post) {
        ?>
        <div id="post-<?php the_ID() ?>">
          <h2 class="entry-title"><?php echo $post->post_title ?></h2>
          <div class="entry-content">
            <?php echo $post->post_content ?>
          </div> <!-- #entry-content -->
        </div> <!-- #post-<?php the_ID() ?> -->
        <?php
                };
        ?>
      </div> <!-- #main-event -->

      <?php
        $calendar = new EC_Calendar(  );
        $calendar->displayWidget( date( 'Y' ), date( 'm' ) );
      ?>

      <?php include ( TEMPLATEPATH . "/LB_latest_posts.php" ); ?>

    <?php
      if ( get_post_custom_values('comments') ) comments_template();
    ?>

  </div><!-- #content -->
</div><!-- #container -->

<?php get_footer() ?>
