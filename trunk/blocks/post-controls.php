<?php ?>

<span class="controls">
	
	<?php if(function_exists('the_views') && ( is_single() || is_page() )) { echo '<img src="'.get_bloginfo('template_directory').'/images/eye.png" alt="Views" class="icon" /> '; the_views(); echo " | "; } ?> 
	
	<?php edit_post_link('<img src="'.get_bloginfo('template_directory').'/images/note_edit.png" alt="Edit" class="icon" />', '', ' | '); ?>

	<?php if( function_exists('ADDTOANY_SHARE_SAVE_BUTTON') ) ADDTOANY_SHARE_SAVE_BUTTON( array('html_wrap_open' => '<span class="icon">', 'html_wrap_close' => '</span> |') ); ?> 
	
	<?php if(function_exists('wp_email') && ( is_single() || is_page() )) { email_link(); echo " | "; } ?>
	
	<?php if(function_exists('wp_print') && ( is_single() || is_page() ) ) { /*echo '<img src="'.get_bloginfo('template_directory').'/images/printer.png" alt="Print" class="icon" /> ';*/ print_link(); echo " | "; } ?>
	
	<?php comments_popup_link('<img src="'.get_bloginfo('template_directory').'/images/comments.png" alt="Comments" class="icon" />', '<img src="'.get_bloginfo('template_directory').'/images/comments.png" alt="Comments" class="icon" /> 1', '<img src="'.get_bloginfo('template_directory').'/images/comments.png" alt="Comments" class="icon" /> %'); ?>

</span>	