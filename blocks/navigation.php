<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
<div class="navigation">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>
<?php } ?>