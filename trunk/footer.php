<hr />

</div>
</div>

<div id="footer" role="contentinfo">
	<div id="footer-widgets">
		<?php if(!dynamic_sidebar('footer-1')){ ?>
		<p>
		<?php bloginfo('name'); ?> is proudly powered by
		<a href="http://wordpress.org/">WordPress</a>.
		<br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
		</p>
		<?php } ?>
		
		<div class="clear"></div>
	</div>
	<div id="theme-link">
		<a href="http://shailan.com/wordpress/themes">All-Widget Aqua</a> widgetized by <a href="http://shailan.com">shailan</a>.
	</div>
</div>

<script type="text/javascript"> 
<!--//--><![CDATA[//><!--
jQuery(document).ready(function()
{
  //hide the all of the element with class msg_body
  jQuery(".collapse").hide();
  //toggle the componenet with class msg_body
  jQuery(".expand").click(function()
  {
    jQuery(this).next(".collapse").slideToggle(200);
  });
});
//--><!]]>
</script>  

</div><!-- /rapper -->

<!-- Site Meter -->
<script type="text/javascript" src="http://s13.sitemeter.com/js/counter.js?site=s13shailan">
</script>
<noscript>
<a href="http://s13.sitemeter.com/stats.asp?site=s13shailan" target="_top">
<img src="http://s13.sitemeter.com/meter.asp?site=s13shailan" alt="Site Meter" border="0"/></a>
</noscript>
<!-- Copyright (c)2009 Site Meter -->

<?php wp_footer(); ?>

</body>
</html>
