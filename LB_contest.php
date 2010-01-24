<?php
  /*
   Template Name: Contest
  */
?>
<?php get_header() ?>

<div id="container" class="contest">
  <div id="content">

    <h2 class="entry-title"><?php the_title() ?></h2>

    <div id="intro">
    <?php the_content() ?>
    </div>

    <?php
    $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
    if ($children) {
    ?>
    <div  class="sidebar">
       <ul id="submissions">
          <?php echo $children; ?>
       </ul>
    </div>
    <?php
    }
    ?>


  </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
