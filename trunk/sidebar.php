<?php
 
 if(1){ // sidebarless to be implemented
?>
	<div id="sidebar" role="complementary">
		
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !dynamic_sidebar('sidebar-1') ) : ?>
			<div class="widget">
			
			<?php get_search(); ?>
			<?php get_subscription_form(); ?>
			
			<div class="widget">
				<script type="text/javascript"><!--
				google_ad_client = "<?php echo get_ad_client_id(); ?>";
				/* Shailan-sidebar-blue-300x250 */
				google_ad_slot = "3069374684";
				google_ad_width = 300;
				google_ad_height = 250;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
			</div>
	
			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <div class="widget">
			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>
			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>
			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>
			<?php } ?>
			</div>
		<?php }?>
		
			<div class="widget widget_pages">
			<h2 class="widget-title">Pages</h2>
				<ul>
					<?php wp_list_pages('title_li=&' ); ?>
				</ul>
			</div>
			
			<div class="widget widget_archive">
			<h2 class="widget-title">Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div>
			<div class="widget widget_categories">
			<h2 class="widget-title">Categories</h2>
			<ul>
				<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
			</div>
		
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
			
			<div class="widget widget_links">
			<h2 class="widget-title">Blogroll</h2>
			<ul>
				<?php wp_list_bookmarks('title_li=&category_before=&category_after=&categorize=0'); ?>
			</ul>
			</div>
				<div class="widget"><h2 class="widget-title">Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</div>
			<?php } ?>
			<?php endif; ?>
	</div>
	
<?php } //!sidebarless. ?>
