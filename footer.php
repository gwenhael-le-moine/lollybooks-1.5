
    <div id="footer">
        <div id="partners" style="display:none;">
          <!-- h1>Our partners</h1 -->
          <div id="partners_logos">
          <?php 
          $media_items = get_attachments_by_media_tags( 'media_tags=partner&orderby=title&order=ASC' );
          if ($media_items) {
             foreach ($media_items as $media_item) {
                echo '<a href="' . $media_item->post_excerpt . '">';
                echo '<img src="' . wp_get_attachment_url($media_item->ID) . '" alt="' . $media_item->post_excerpt . '" />';
                echo '</a>';
             }
          }
          ?>
	      </div>
        </div>
        <span id="copyright">Copyright © 2009, 2010, Lollybooks Café</span>
    </div><!-- #footer -->

</div><!-- #wrapper .hfeed -->

<?php wp_footer() ?>

</body>
</html>
