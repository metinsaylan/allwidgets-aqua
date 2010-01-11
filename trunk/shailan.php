<?php

class shailan_theme_utilities{
	/*
	 * @description	Gets the first image and returns it's source URL.
	 * @return		URL of the first image.
	 */
	function get_first_image() {
		global $post, $posts;
		$first_img = '';
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches [1][0];
		if($first_img){
			return $first_img;
		} else {
			return get_bloginfo('template_directory')."/images/no-image.png";
		}
	}
}

$utilities = new shailan_theme_utilities();

/**
 *  SHORTCODES
 */ 
 
function shailan_tag_link($atts, $content=null) {
	global $post;

	extract(shortcode_atts(array(
		'rel' => 'tag',
	), $atts)); 

	$tag_base = get_option('tag_base');
	if(!$tag_base) $tag_base = 'tags' ;
	
	$content_link = sanitize_title( $content );
	
	$tag_link = '<a href='.get_bloginfo('url').'/'.$tag_base.'/'.$content_link.' rel="'.$rel.'" >'.$content.'</a>';
	
	return $tag_link;
}
add_shortcode('tag', 'shailan_tag_link');


/**
 *  TAG BUTTON
 */

add_filter('admin_footer', 'shailan_insertTagButton');
function shailan_insertTagButton()
{
	if(strpos($_SERVER['REQUEST_URI'], 'post.php')){
		?>
		<script language="JavaScript" type="text/javascript"><!--
		var toolbar = document.getElementById("ed_toolbar");
		<?php
				edit_insert_button("Tag", "tag_button", "Tag");
		?>
		
		var tag_open=false;
		
		function tag_button()
		{
			if(!tag_open){
				edInsertContent(edCanvas, '[tag]');
				tag_open = true;
			} else {
				edInsertContent(edCanvas, '[/tag]');
				tag_open = false;
			}
		}
		//--></script>
		<?php
		}
}


if(!function_exists('edit_insert_button'))
{
	//edit_insert_button: Inserts a button into the editor
	function edit_insert_button($caption, $js_onclick, $title = '')
	{
	?>
	if(toolbar)
	{
		var theButton = document.createElement('input');
		theButton.type = 'button';
		theButton.value = '<?php echo $caption; ?>';
		theButton.onclick = <?php echo $js_onclick; ?>;
		theButton.className = 'ed_button';
		theButton.title = "<?php echo $title; ?>";
		theButton.id = "<?php echo "ed_{$caption}"; ?>";
		toolbar.appendChild(theButton);
	}
	<?php
	}
}
?>