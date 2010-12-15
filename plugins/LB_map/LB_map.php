<?php
/*
 * Plugin Name: Lollybooks-v3 map
 * Version: 1.0
 * Plugin URI: http://lollybooks.com
 * Description: Lollybooks map widget
 * Author: Gwenhael Le Moine
 * Author URI: http://cycojesus.free.fr
 */

define('LBMAPV3URL', get_option('siteurl').'/wp-content/plugins/LB_map');
define('LBMAPV3IMAGESURL', LBMAPV3URL.'/images');

function LollybooksMap_init() {
   if (!is_admin()) {
      wp_enqueue_script('jquery');
   }
}
add_action('init', 'my_init');

class LollybooksMapWidget extends WP_Widget
{
   /**
    * Declares the LollybooksMapWidget class.
    *
    */
   function LollybooksMapWidget(){
      $widget_ops = array('classname' => 'widget_lollybooks_map', 'description' => __( "Lollybooks v3 map widget") );
      $control_ops = array('width' => 300, 'height' => 300);
      $this->WP_Widget('lollybooksv3map', __('Lollybooks v3 Map'), $widget_ops, $control_ops);
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

      echo "<div style=\"height:159px;width:227px;\"><img src=\"".LBMAPV3IMAGESURL."/map.jpg\" /></div>";

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
function LollybooksMapInit() {
   register_widget('LollybooksMapWidget');
}
add_action('widgets_init', 'LollybooksMapInit');
?>