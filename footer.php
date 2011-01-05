
      </div> <!-- .content_in -->
    </div> <!-- .content -->

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
