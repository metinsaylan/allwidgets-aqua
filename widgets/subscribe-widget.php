<?php 
/**
 * Subscribe Widget Class
 */
class aw_aqua_Subscribe extends WP_Widget {
    /** constructor */
    function aw_aqua_Subscribe() {
		$widget_ops = array('classname' => 'subscribe-widget', 'description' => __( 'Subscribe form and buttons' ) );
		$this->WP_Widget('subscribe', __('Subscribe'), $widget_ops);
		$this->alt_option_name = 'widget_subscribe';	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
				
        echo $before_widget;		
		if ( $title )
			echo $before_title . $title . $after_title;
				get_subscription_form();
			echo $after_widget; 
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
		echo "This widget has no options.";
    }

} 

// register widget
add_action('widgets_init', create_function('', 'return register_widget("aw_aqua_Subscribe");'));