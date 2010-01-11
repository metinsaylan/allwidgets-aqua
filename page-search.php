<?php 
/*
	Template Name: Search Results
*/ 

get_header(); ?>

	<div id="search-results" style="padding-top:10px;" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<?php get_post_controls(); ?>
		
		<h2><?php the_title(); ?></h2>
		
			<div class="entry">
			
			<?php include(TEMPLATEPATH . '/blocks/searchform.php'); ?>
			<br />
			
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				
				<div id="cse-search-results"></div>
				<script type="text/javascript">
				  var googleSearchIframeName = "cse-search-results";
				  var googleSearchFormName = "cse-search-box";
				  var googleSearchFrameWidth = 800;
				  var googleSearchDomain = "www.google.com";
				  var googleSearchPath = "/cse";
				</script>
				<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>	
	
	</div>

<?php get_footer(); ?>
