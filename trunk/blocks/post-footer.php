<?php 

?>

<div class="post-footer">

<div class="controls">
	
	<?php if(is_home()){ ?>
	<h4 class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">READ MORE &raquo;</a></h4>
	<?php }; ?>
	
	<h4 class="expand">DETAILS</h4>
	
	<div class="collapse">	
		<img src="<?php bloginfo('template_directory'); ?>/images/date.png" alt="Date" class="icon" /> <?php the_time('F jS, Y') ?> <br />
		<img src="<?php bloginfo('template_directory'); ?>/images/user.png" alt="Author" class="icon" /> <?php the_author_posts_link(); ?> <br />
		<img src="<?php bloginfo('template_directory'); ?>/images/folder.png" alt="Category" class="icon" /> <?php the_category(', ') ?> <br />
		<img src="<?php bloginfo('template_directory'); ?>/images/tag_blue.png" alt="Tags" class="icon" /> <?php the_tags('', ' ', '<br />'); ?>
	</div>
</div>

<?php /* RELATED POSTS */ ?>
<?php if(is_single()){wp_related_posts();}; ?>

</div>