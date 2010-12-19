<?php
/*
 * Plugin Name: Lollybooks-v3 Radio
 * Version: 1.0
 * Plugin URI: http://lollybooks.com
 * Description: Lollybooks online radio widget
 * Author: Gwenhael Le Moine
 * Author URI: http://cycojesus.free.fr
 */

define('LBRADIOV3URL', get_option('siteurl').'/wp-content/plugins/LB_radio_v3');
define('LBRADIOV3IMAGESURL', LBRADIOV3URL.'/images');
function LollybooksRadioV3_init() {
   if (!is_admin()) {
      wp_enqueue_script('jquery');
   }
}
add_action('init', 'LollybooksRadioV3_init');

class LollybooksRadioV3Widget extends WP_Widget
{
   /**
    * Declares the LollybooksRadioV3Widget class.
    *
    */
   function LollybooksRadioV3Widget(){
      $widget_ops = array('classname' => 'widget_lollybooks_radio_v3', 'description' => __( "Lollybooks v3 radio online widget") );
      $control_ops = array('width' => 300, 'height' => 300);
      $this->WP_Widget('lollybooksradiov3', __('Lollybooks v3 Radio'), $widget_ops, $control_ops);
   }

   /**
    * Displays the Widget
    *
    */
   function widget($args, $instance){
      # Before the widget
      echo $before_widget;

      # Make the Lollybooks Radio widget
      $mp3s =& get_children( 'post_type=attachment&post_mime_type=audio/mpeg&post_parent=null' );

      foreach( (array) $mp3s as $attachment_id => $attachment )
      {
         if ( ! preg_match("/radio.*online/i", wp_get_attachment_url( $attachment_id ) ) ) {
            unset( $mp3s[ $attachment_id ] );
         }
      }

      $counter=sizeof( $mp3s );
?>
    <li class="widget-container">
      <div id="playradio" style="height:80px;width:222px;background:url(<?php echo LBRADIOV3IMAGESURL; ?>/background.jpg);">
<?php
      foreach( (array) $mp3s as $attachment_id => $attachment )
      {
         echo "<a href='".wp_get_attachment_url( $attachment_id )."' style='padding:10px;'>Volume " .$counter. "</a><br />";
         break;                 /* FIXME: Oh. G.od. */
      }
?>
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
function LollybooksRadioV3Init() {
   register_widget('LollybooksRadioV3Widget');
}
add_action('widgets_init', 'LollybooksRadioV3Init');
?>