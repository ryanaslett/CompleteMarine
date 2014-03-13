<?php
/*
|---------------------------------------------------------------------
| Require Files
|---------------------------------------------------------------------
*/
require_once 'framework/custom_styles.php';
require_once 'framework/custom_posts.php';
require_once 'framework/custom_helpers.php';

/*
|---------------------------------------------------------------------
| Register ACF Option Page(s)
|---------------------------------------------------------------------
*/
// register_options_page('General Options');

/*
|---------------------------------------------------------------------
| Navigation Menus
|---------------------------------------------------------------------
*/
register_nav_menus( array(
	'primary' => 'Primary Navigation',
) );

/*
|---------------------------------------------------------------------
| Adjust Default Excerpt Width
|---------------------------------------------------------------------
*/
function nuwave_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'nuwave_excerpt_length' );

/*
|---------------------------------------------------------------------
| Remove Core Update Notifications
|---------------------------------------------------------------------
*/
add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );

/*
|---------------------------------------------------------------------
| Load jQuery from Google CDN
|---------------------------------------------------------------------
*/
function jquery_register() {
	if ( !is_admin() ) 
	{
	    wp_deregister_script( 'jquery' );
	    wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' ), false, null, false );
	    wp_enqueue_script( 'jquery' );
	}
}
add_action( 'init', 'jquery_register' );

/*
|---------------------------------------------------------------------
| Remove the WordPress Version Info
|---------------------------------------------------------------------
*/
function complete_version_removal() {
    return '';
}
add_filter('the_generator', 'complete_version_removal');

/*
|---------------------------------------------------------------------
| Set a maximum number of post revisions
|---------------------------------------------------------------------
*/
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 10);

/*
|---------------------------------------------------------------------
| Remove pings to self
|---------------------------------------------------------------------
*/
function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link )
    {
    	if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
    }
}
add_action( 'pre_ping', 'no_self_ping' );

/*
|---------------------------------------------------------------------
| Remove WP Dashboard Meta Boxes
|---------------------------------------------------------------------
*/
function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

/*
|---------------------------------------------------------------------
| Remove extra CSS that 'Recent Comments' widget injects
|---------------------------------------------------------------------
*/
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}
add_action('widgets_init', 'remove_recent_comments_style');

/*
|---------------------------------------------------------------------
| Remove Default WP RSS Feeds
|---------------------------------------------------------------------
*/
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

/*
|---------------------------------------------------------------------
| Remove Gallery shortcode
|---------------------------------------------------------------------
*/
add_filter( 'use_default_gallery_style', '__return_false' );

/*
|---------------------------------------------------------------------
| Remove Admin Menu Items
|---------------------------------------------------------------------
*/
function remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_admin_menus', 99 );

/*
|---------------------------------------------------------------------
| Set default "Link To" to "None" on media uploads
|---------------------------------------------------------------------
*/
function nw_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'nw_imagelink_setup', 10);

/*
|---------------------------------------------------------------------
| Replaces the [...] created by the excerpt
|---------------------------------------------------------------------
*/
function nw_auto_excerpt_more( $more ) {
	return ' &hellip;' . nw_continue_reading_link();
}
add_filter( 'excerpt_more', 'nw_auto_excerpt_more' );

/*
|---------------------------------------------------------------------
| Set the continue reading link
|---------------------------------------------------------------------
*/
function nw_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">read more</a>';
}

/*
|---------------------------------------------------------------------
| Add a "pretty" continue reading link
|---------------------------------------------------------------------
*/
function nw_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= nw_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'nw_custom_excerpt_more' );

/*
|---------------------------------------------------------------------
| Enqueue Styles and Scripts
|---------------------------------------------------------------------
*/
function nuwave_scripts() {
	// Theme Styles	
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate-custom.css');
	wp_enqueue_style('open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans');
	wp_enqueue_style('rs-css',get_template_directory_uri() . '/css/royalslider.css');
	wp_enqueue_style('rs-default',get_template_directory_uri() . '/css/rs-default.css');
	wp_enqueue_style('nuwave',get_template_directory_uri() .'/style.css');
	
	// Theme Scripts
    wp_enqueue_script('background-size',get_template_directory_uri() . '/js/libs/jquery.backgroundSize.js', array(), '', true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/libs/jquery.easing-1.3.js', array(), '', true);
    wp_enqueue_script('rs-js', get_template_directory_uri() . '/js/libs/jquery.royalslider.min.js', array(), '', true);
    wp_enqueue_script('main',get_template_directory_uri() . '/js/main.js', array(), '', true);
    
}    
add_action('wp_enqueue_scripts', 'nuwave_scripts');
