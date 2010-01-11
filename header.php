<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php /* ROUNDED CORNERS */?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/borders.css" type="text/css" media="screen" />


<!--[if lt IE 8]>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/borders-ie.css" type="text/css" media="screen" />
<![endif]-->
<?php if(AWA_SIFR_ACTIVE){ /* SIFR */?>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sifr3/css/sifr.css" type="text/css">
  <style type="text/css" media="screen">
	.hentry h2
	{
		font-family: Georgia, Helvetica, sans-serif;
		font-weight: bold;
		color: #147;
		display:inline;
	}
	
	.sIFR-active .hentry h2 {
		visibility: hidden;
		font-family: Verdana;
		line-height: 1em;
		font-size: 2em;
		padding-bottom: 0;
		display:inline;
    }
	
  </style>
  
	<script src="<?php bloginfo('template_directory'); ?>/sifr3/js/sifr.js" type="text/javascript"></script>
  
	<script type="text/javascript">
    /*****************************************************************************
    The sIFR configuration should typically go in `sifr-config.js`, but in order to
    keep the config file clean, and to give a quick overview, it's done here instead.
    *****************************************************************************/
  
    var cochin = {
      src: '<?php bloginfo('template_directory'); ?>/sifr3/cochin.swf'
      ,ratios: [7, 1.32, 11, 1.31, 13, 1.24, 14, 1.25, 19, 1.23, 27, 1.2, 34, 1.19, 42, 1.18, 47, 1.17, 48, 1.18, 69, 1.17, 74, 1.16, 75, 1.17, 1.16]
    };
    var rockwell = {
      src: '<?php bloginfo('template_directory'); ?>/sifr3/rockwell.swf'
      ,ratios: [6, 1.41, 9, 1.35, 15, 1.29, 21, 1.25, 22, 1.22, 27, 1.24, 29, 1.21, 34, 1.22, 41, 1.21, 45, 1.2, 46, 1.21, 59, 1.2, 68, 1.19, 69, 1.2, 96, 1.19, 97, 1.18, 102, 1.19, 103, 1.18, 107, 1.19, 108, 1.18, 112, 1.19, 114, 1.18, 116, 1.19, 120, 1.18, 121, 1.19, 1.18]
    };
	
	var myriad = {
		src: '<?php bloginfo('template_directory'); ?>/sifr3/myriad_pro_lc.swf'
		,ratios: [6, 1.41, 9, 1.35, 15, 1.29, 21, 1.25, 22, 1.22, 27, 1.24, 29, 1.21, 34, 1.22, 41, 1.21, 45, 1.2, 46, 1.21, 59, 1.2, 68, 1.19, 69, 1.2, 96, 1.19, 97, 1.18, 102, 1.19, 103, 1.18, 107, 1.19, 108, 1.18, 112, 1.19, 114, 1.18, 116, 1.19, 120, 1.18, 121, 1.19, 1.18]
	}
	
	var rataczak = {
		src: '<?php bloginfo('template_directory'); ?>/sifr3/rataczak.swf'
	}
    sIFR.activate(cochin, rockwell, myriad, rataczak);
	sIFR.replace(rataczak, {selector: 'h2.widgettitle', wmode: 'transparent', css:['a { text-decoration: none; color:#333333; }','a:hover{color:#0066CC;}']});
	sIFR.replace(rataczak, {selector: 'h2.widget-title', wmode: 'transparent', css:['a { text-decoration: none; color:#333333; }','a:hover{color:#0066CC;}']});
	sIFR.replace(myriad, {selector: '.hentry h2', wmode: 'transparent', css:['a { text-decoration: none; color:#99999; }','a:hover{color:#0066cc;}']});
  
  </script>
<?php } /*--/SIFR--*/?>
 
<?php /* ADDITIONAL PLUGIN STYLES */?>
<?php 
//if(function_exists('aktt_sidebar_tweets')){
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/aktt.css" type="text/css" media="screen" />';
//}
?>
<?php /* ROUNDED CORNERS SCRIPT */ ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/cb.js"></script> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="rapper">
	<div id="header-widgets-top" >
		<div class="aqua-top">
			<?php dynamic_sidebar('header-widgets-top'); ?>
		</div>
	</div>
	<div id="header" role="banner">	
		<div id="headerimg">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div>
		
		<div id="top-banner">
			<script type="text/javascript"><!--
			google_ad_client = "<?php echo get_ad_client_id(); ?>";
			/* shailan-banner-460px */
			google_ad_slot = "5814972020";
			google_ad_width = 468;
			google_ad_height = 60;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="header-widgets-bottom">
		<?php dynamic_sidebar('header-widgets-bottom'); ?>
	</div>
<div id="page">
<div class="aqua">
	
<hr />
