<?php
/**
 * THEME OPTIONS
 */ 

# Toggle SIFR (true/false)
@define(AWA_SIFR_ACTIVE, false);

# Google Adsense Client ID
@define(AWA_ADSENSE_ID, 'pub-7680110371269676');

# Google Custom Search Engine Pub ID
@define(AWA_CSE_PUB_ID, 'partner-pub-7680110371269676:9ub6uk-9oo2');


/**
 *  Google Adsense Client ID
 */
function get_ad_client_id(){
	return AWA_ADSENSE_ID;
}

/**
 *  Google Custom Search Pub ID
 */
function get_cse_pub_id(){
	return AWA_CSE_PUB_ID;
}

function get_post_controls(){
	include('blocks/post-controls.php');
}

function get_post_footer(){
	include('blocks/post-footer.php');
}

function get_pagination(){
	include_once('blocks/navigation.php');
}

function get_subscription_form(){
	include_once('blocks/subscribe.php');
}

function get_search(){
	include_once('blocks/searchform.php');
}

function get_theme_image($src, $w=null, $h=null, $class=null){
	echo '<img src="'.get_bloginfo('template_directory').'/images/'.$src.'" ';
		if($w){	echo 'width="'.$w.'" ';}
		if($h){	echo 'height="'.$h.'" ';}
		if($class){	echo 'class="'.$class.'" ';}
	echo ' />';
}

function get_theme_image_url($src){
	return get_bloginfo('template_directory').'/images/'.$src;
}

if(function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(200, 200);
}

//function init_theme() {
    wp_enqueue_script('jquery');            
//}    
 
//add_action('init', init_theme);

automatic_feed_links();

// CONTACT METHODS
function theme_contact_methods( $contactmethods ) {
// Add Twitter
$contactmethods['twitter'] = 'Twitter';
//add Facebook
$contactmethods['facebook'] = 'Facebook';

return $contactmethods;
}
add_filter('user_contactmethods','theme_contact_methods',10,1);

// EXCERPT OPTIONS
// Changing excerpt length
function new_excerpt_length($length) {
	return 60;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/** 
 * Utilities
 */ 
include_once('shailan.php');

// WIDGETS
include_once('widgets/subscribe-widget.php');
include_once('widgets/search-widget.php');
include_once('widgets/twitter-badge-widget.php');

// REGISTER SIDEBARS
if ( function_exists('register_sidebar') ) {

	$args = array(
    'name'          => 'Header Top Widgets',
    'id'            => 'header-widgets-top',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );
	register_sidebar( $args );

	$args = array(
    'name'          => 'Header Bottom Widgets',
    'id'            => 'header-widgets-bottom',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );
	register_sidebar( $args );

	$args = array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar-1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );
	register_sidebar( $args );
	
	$args = array(
    'name'          => 'Page Footer',
    'id'            => 'footer-1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );
	register_sidebar( $args );
} // REGISTER SIDEBARS
