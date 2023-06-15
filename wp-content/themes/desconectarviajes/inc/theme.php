<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Palermo
 */
if( !empty($_GET['debug']) ):
	ini_set('display_errors',1);
	error_reporting(E_ALL);
endif; 

// Image Sizes
add_image_size( 'full-width', 3000, 2000 );
update_option( 'thumbnail_size_w', 600 );
update_option( 'thumbnail_size_h', 600 );
update_option( 'thumbnail_crop', 0 );
update_option( 'medium_size_w', 1200 );
update_option( 'medium_size_h', 900 );
update_option( 'medium_crop', 0 );
update_option( 'large_size_w', 1920 );
update_option( 'large_size_h', 1080 );
update_option( 'large_crop', 0 );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
add_action( 'wp_head', function () {
	if ( is_singular() && pings_open() )
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
});


// BLOCK COMMENTS
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
 
// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
 
// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);
 
// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
 
// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) 
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
});

/** Remove Dashicons from Admin Bar for non logged in users **/
add_action('wp_print_styles', 'palermo_adminify_remove_dashicons', 100);

/** Remove Dashicons from Admin Bar for non logged in users **/
function palermo_adminify_remove_dashicons()
{
    if (!is_admin_bar_showing() && !is_customize_preview()) {
        wp_dequeue_style('dashicons');
        wp_deregister_style('dashicons');
    }
}

/* Remove SVG on theme head */
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

add_action('wp_head',           function(){ the_field('analytics', 'option'); });
add_action('wp_body_open',      function(){ the_field('analytics_body', 'option'); });
add_action('wp_footer',         function(){ the_field('analytics_footer', 'option'); });
