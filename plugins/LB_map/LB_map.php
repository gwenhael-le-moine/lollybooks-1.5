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
      # Before the widget
      echo $before_widget;

?>
      <div style="height:159px;width:227px;"><img src="<?php echo LBMAPV3IMAGESURL; ?>/map.jpg" /></div>
<?php
      # After the widget
      echo $after_widget;
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