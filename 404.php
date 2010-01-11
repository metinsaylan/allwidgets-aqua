<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="narrowcolumn">

		<div class="post" id="post-<?php the_ID(); ?>">
		
		<h2>Error 404 - Not Found</h2>
		
			<div class="entry">
				The page you requested can not be found. You can try a different search or you can browse through my popular posts to see if i got anything similar:
				
				<?php include (TEMPLATEPATH . '/blocks/searchform.php'); ?>
				

			</div>
			
		</div>
	

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>