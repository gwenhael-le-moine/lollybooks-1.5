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
      # Before the widget
      echo $before_widget;

?>
            <li class="widget-container">
              <div class="calendar">
                <div class="content_calendar">
                  <div class="title_calendar"><img src="<?php echo LBV3ECWIMAGESURL;?>/img_event.gif" width="214" height="30" /></div>
<?php sidebarEventsCalendar(); ?>
                </div>
          	  </div>
            </li>

            <li class="widget-container">
              <div class="calendar">
                <div class="content_calendar">
                  <div class="title_calendar"><img src="<?php echo LBV3ECWIMAGESURL;?>/lichchieuphim.gif" width="214" height="30" /></div>
                  <div class="cinema">
                    <div class="content_cinema">
<?php sidebarEventsList( 10 ); ?>
                    </div>
                  </div>
                </div>
              </div>
          	</li>
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
function LollybooksV3ECWInit() {
   register_widget('LollybooksV3ECWWidget');
}
add_action('widgets_init', 'LollybooksV3ECWInit');
?>