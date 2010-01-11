<?php
get_header();
?>
	<div id="content" class="widecolumn" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
		
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php get_post_controls(); ?>
			<h2><?php the_title(); ?></h2>
			<span class="entry-meta">By <?php the_author_posts_link(); ?> in 
			<?php
				$category = get_the_category(); 
				//$category_id = get_cat_ID( 'Category Name' );
				$category_link = get_category_link( $category[0]->cat_ID );
				echo '<a href="'.$category_link.'" >'.$category[0]->cat_name.'</a>';
			?> </span>
			
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			
			<?php get_post_footer(); ?>
		</div>
	<?php comments_template(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
