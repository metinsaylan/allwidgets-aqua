<?php //is the love ?>
<div class="subscribe">
<ul>
<li><form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=shailan', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
<?php /* get_theme_image('email_open.png'); */ ?>
<input type="text" name="email" id="enter-email" onclick="jQuery(this).css({'background' : '#fff', 'font-weight' : 'bolder'});" onchange="jQuery(this).css({'background' : '#fff', 'font-weight' : 'bolder'});" onfocus="jQuery(this).css({'background' : '#fff', 'font-weight' : 'bolder'});"/><input type="hidden" value="shailan" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="image" src="<?php echo get_theme_image_url('subscribe-button.png'); ?>" alt="Subscribe" /></form>
	
	</li>
	<li class="subscribe-rss-icon"><a href="http://feeds.feedburner.com/shailan"></a></li>
</ul>
</div>