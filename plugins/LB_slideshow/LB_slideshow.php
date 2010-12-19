<?php
/*
 * Plugin Name: Lollybooks-v3 slideshow
 * Version: 1.0
 * Plugin URI: http://lollybooks.com
 * Description: Lollybooks v3 slideshow widget
 * Author: Gwenhael Le Moine
 * Author URI: http://cycojesus.free.fr
 */

define('LBSLIDESHOWURL', get_option('siteurl').'/wp-content/plugins/LB_slideshow');
define('LBSLIDESHOWIMAGESURL', LBSLIDESHOWURL.'/images');

function LollybooksSlideshow_init() {
   if (!is_admin()) {
      wp_enqueue_script('jquery');
   }
}
add_action('init', 'LollybooksSlideshow_init');

class LollybooksSlideshowWidget extends WP_Widget
{
   /**
    * Declares the LollybooksSlideshowWidget class.
    *
    */
   function LollybooksSlideshowWidget(){
      $widget_ops = array('classname' => 'widget_lollybooks_slideshow', 'description' => __( "Lollybooks v3 slideshow widget") );
      $control_ops = array('width' => 300, 'height' => 300);
      $this->WP_Widget('lollybooksv3slideshow', __('Lollybooks v3 SlideShow'), $widget_ops, $control_ops);
   }

   /**
    * Displays the Widget
    *
    */
   function widget($args, $instance){
      extract($args);
      $title = apply_filters('widget_title', empty($instance['title']) ? '&nbsp;' : $instance['title']);

      # Before the widget
      echo $before_widget;

      # The title
      if ( $title )
         echo $before_title . $title . $after_title;
?>
      <style src="<?php echo LBSLIDESHOWURL ?>/css/slideshow.css"></style>
      <div class="banner_left">
          <div id="slideshow">
<?php
      $media_items = get_attachments_by_media_tags( 'media_tags=slideshow&orderby=title&order=ASC' ); // FIXME: parametrable tag
      if ($media_items) {
         foreach ($media_items as $media_item) {
            echo '<img src="' . wp_get_attachment_url($media_item->ID) . '" width="262" height="180" />';
         }
      }
?>
          </div>>
      </div>
      <script src="<?php echo LBSLIDESHOWURL ?>/js/launch.js"></script>
<?php
      # After the widget
      echo $after_widget;
   }

   /**
    * Saves the widgets settings.
    *
    */
   function update($new_instance, $old_instance){
      $instance = $old_instance;
      $instance['title'] = strip_tags(stripslashes($new_instance['title']));

      return $instance;
   }

   /**
    * Creates the edit form for the widget.
    *
    */
   function form($instance){
      //Defaults
      $instance = wp_parse_args( (array) $instance, array('title'=>'') );

      $title = htmlspecialchars($instance['title']);

      # Output the options
      echo '<p style="text-align:right;"><label for="' . $this->get_field_name('title') . '">' . __('Title:') . ' <input style="width: 250px;" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></label></p>';

   }

}// END class

/**
 * Register widget.
 *
 * Calls 'widgets_init' action after the Hello World widget has been registered.
 */
function LollybooksSlideshowInit() {
   register_widget('LollybooksSlideshowWidget');
}
add_action('widgets_init', 'LollybooksSlideshowInit');
?>