<?php
/*
 * Plugin Name: Lollybooks Radio
 * Version: 1.0
 * Plugin URI: http://lollybooks.com
 * Description: Lollybooks online radio widget
 * Author: Gwenhael Le Moine
 * Author URI: http://cycojesus.free.fr
 */
function my_init() {
	if (!is_admin()) {
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');

class LollybooksRadioWidget extends WP_Widget
{
    /**
    * Declares the LollybooksRadioWidget class.
    *
    */
    function LollybooksRadioWidget(){
        $widget_ops = array('classname' => 'widget_lollybooks_radio', 'description' => __( "Lollybooks radio online widget") );
        $control_ops = array('width' => 300, 'height' => 300);
        $this->WP_Widget('lollybooksradio', __('Lollybooks Radio'), $widget_ops, $control_ops);
    }

    /**
    * Displays the Widget
    *
    */
    function widget($args, $instance){
        extract($args);
        $title = apply_filters('widget_title', empty($instance['title']) ? '&nbsp;' : $instance['title']);
        $height = apply_filters('widget_height', empty($instance['height']) ? '&nbsp;' : $instance['height']);

        # Before the widget
        echo $before_widget;

        # The title
        if ( $title )
            echo $before_title . $title . $after_title;

        # Make the Lollybooks Radio widget
        $mp3s =& get_children( 'post_type=attachment&post_mime_type=audio/mpeg&post_parent=null' );

        $counter=sizeof( $mp3s )+1;

        echo "<div id=\"playradio\" style=\"height:".$height.";overflow-y:auto;overflow-x:hidden;\">";
        foreach( (array) $mp3s as $attachment_id => $attachment )
        {
           $counter--;
           echo "<a href='".wp_get_attachment_url( $attachment_id )."'>Volume " .$counter. "</a><br />";
        }
        echo "</div>";

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
        $instance['height'] = strip_tags(stripslashes($new_instance['height']));

        return $instance;
    }

    /**
    * Creates the edit form for the widget.
    *
    */
    function form($instance){
        //Defaults
        $instance = wp_parse_args( (array) $instance, array('title'=>'', 'height'=>'100px') );

        $title = htmlspecialchars($instance['title']);
        $height = htmlspecialchars($instance['height']);

        # Output the options
        echo '<p style="text-align:right;"><label for="' . $this->get_field_name('title') . '">' . __('Title:') . ' <input style="width: 250px;" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></label></p>';
        echo '<p style="text-align:right;"><label for="' . $this->get_field_name('height') . '">' . __('Height:') . ' <input style="width: 50px;" id="' . $this->get_field_id('height') . '" name="' . $this->get_field_name('height') . '" type="text" value="' . $height . '" /></label></p>';

    }

}// END class

    /**
    * Register widget.
    *
    * Calls 'widgets_init' action after the Hello World widget has been registered.
    */
    function LollybooksRadioInit() {
    register_widget('LollybooksRadioWidget');
    }
    add_action('widgets_init', 'LollybooksRadioInit');
?>