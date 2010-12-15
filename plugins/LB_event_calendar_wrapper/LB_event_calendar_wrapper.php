<?php
/*
 * Plugin Name: Lollybooks-v3 event calendar wrapper
 * Version: 1.0
 * Plugin URI: http://lollybooks.com
 * Description: Lollybooks event calendar wrapper widget
 * Author: Gwenhael Le Moine
 * Author URI: http://cycojesus.free.fr
 */

define('LBV3ECWURL', get_option('siteurl').'/wp-content/plugins/LB_event_calendar_wrapper');
define('LBV3ECWIMAGESURL', LBV3ECWURL.'/images');

function LollybooksV3ECW_init() {
   if (!is_admin()) {
      wp_enqueue_script('jquery');
   }
}
add_action('init', 'my_init');

class LollybooksV3ECWWidget extends WP_Widget
{
   /**
    * Declares the LollybooksV3ECWWidget class.
    *
    */
   function LollybooksV3ECWWidget(){
      $widget_ops = array('classname' => 'widget_lollybooks_event_calendar_wrapper', 'description' => __( "Lollybooks event calendar wrapper widget") );
      $control_ops = array('width' => 300, 'height' => 300);
      $this->WP_Widget('lollybooksv3ecw', __('Lollybooks v3 ECW'), $widget_ops, $control_ops);
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

      echo "          	  <div class=\"calendar\">
                <div class=\"content_calendar\">
                  <div class=\"title_calendar\"><img src=\"".LBV3ECWIMAGESURL."/img_event.gif\" width=\"214\" height=\"30\" /></div>";
                 sidebarEventsCalendar();
echo "                </div>
          	  </div>
            </li>

            <li class=\"widget-container\">
              <div class=\"calendar\">
                <div class=\"content_calendar\">
                  <div class=\"title_calendar\"><img src=\"".LBV3ECWIMAGESURL."/lichchieuphim.gif\" width=\"214\" height=\"30\" /></div>
                  <div class=\"cinema\">
                    <div class=\"content_cinema\">";
                 sidebarEventsList( 10 );
echo "                    </div>
                  </div>
                </div>
              </div>
";
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
function LollybooksV3ECWInit() {
   register_widget('LollybooksV3ECWWidget');
}
add_action('widgets_init', 'LollybooksV3ECWInit');
?>