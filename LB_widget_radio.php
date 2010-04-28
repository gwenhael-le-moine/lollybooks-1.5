# http://wpengineer.com/wordpress-built-a-widget/
# http://codex.wordpress.org/Function_Reference/get_children 

class LB_Radio_Widget extends WP_Widget {
	function LB_Radio_Widget() {
		$widget_ops = array('classname' => 'widget_lb_radio', 'description' => 'Play Lollybooks radio from the sidebar' );
		$this->WP_Widget('lb_radio', 'Lollybooks radio', $widget_ops);
	}
 
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
 
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
 
		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
        $mp3s =& get_children( 'post_type=attachment&post_mime_type=audio/mpeg&post_parent=null' );
        
        $counter=0;
        foreach( (array) $mp3s as $attachment_id => $attachment )
        {
           $counter++;
           echo "<a href='".wp_get_attachment_link( $attachment_id ) . "'>".$counter."</a><br />";
        }
        echo $after_widget;
	}
 
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
 
		return $instance;
	}
 
	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'entry_title' => '', 'comments_title' => '' ) );
		$title = strip_tags($instance['title']);
?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
	}
}
register_widget('My_RSS_Widget');
