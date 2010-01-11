<?php 
/**
 * Search Widget Class
 */
class aw_aqua_TwitBadge extends WP_Widget {
    /** constructor */
    function aw_aqua_TwitBadge() {
		$widget_ops = array('classname' => 'twitter-widget', 'description' => __( 'All-Widget Aqua Twitter Badge' ) );
		$this->WP_Widget('twitter', __('Aqua Twitter Badge'), $widget_ops);
		$this->alt_option_name = 'widget_twitter';	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
		$username = $instance['username'];
				
        echo $before_widget;		
		if ( $title )
			echo $before_title . $title . $after_title; ?>
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'profile',
				  rpp: 4,
				  interval: 4000,
				  width: 'auto',
				  height: 200,
				  theme: {
					shell: {
					  background: '#dddddd',
					  color: '#666666'
					},
					tweets: {
					  background: '#ffffff',
					  color: '#333333',
					  links: '#0066cc'
					}
				  },
				  features: {
					scrollbar: true,
					loop: false,
					live: false,
					hashtags: true,
					timestamp: true,
					avatars: false,
					behavior: 'all'
				  }
				}).render().setUser('<?php echo $username; ?>').start();
				</script>
				
				<?php
			echo $after_widget; 
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {		
		$username = $instance['username'];
		?>
		
		<p><label for="<?php echo $this->get_field_id('username'); ?>"><?php _e('Username:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('username'); ?>" name="<?php echo $this->get_field_name('username'); ?>" type="text" value="<?php echo $username; ?>" /></label></p>
		
		<?php 
    }

} 

// register widget
add_action('widgets_init', create_function('', 'return register_widget("aw_aqua_TwitBadge");'));