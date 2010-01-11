<?php get_header(); ?>
	<div id="content" class="narrowcolumn" role="main">
	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
			<?php get_post_controls(); ?>			
			
				<h2 class="nicetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
				
					<div id="post-thumbnail-<?php the_ID(); ?>" class="post-thumbnail">
						<?php 
							if(function_exists('the_post_thumbnail')){
								the_post_thumbnail( 'thumbnail' ); 
							} elseif($utilities) {
								$utilities->get_first_image();
							}
						?>
					</div>
				
					<?php the_content(); ?>
					
				</div>
					
			<?php get_post_footer(); ?>

			</div>
		<?php endwhile; ?>
		
		<?php get_pagination(); ?>
		
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
