<div id="latest_posts">
  <ul id="headlines">
    <?php
      wp_get_archives( array( 'type'=>'postbypost','limit'=>3 ) );
    ?>
  </ul>
</div>
