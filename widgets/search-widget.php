<?php 
/**
 * Search Widget Class
 */
class aw_aqua_Search extends WP_Widget {
    /** constructor */
    function aw_aqua_Search() {
		$widget_ops = array('classname' => 'search-widget', 'description' => __( 'All-Widget Aqua Search form' ) );
		$this->WP_Widget('search', __('Aqua Search'), $widget_ops);
		$this->alt_option_name = 'widget_search';	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
				
        echo $before_widget;		
		if ( $title )
			echo $before_title . $title . $after_title;
				get_search();
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
add_action('widgets_init', create_function('', 'return register_widget("aw_aqua_Search");'));