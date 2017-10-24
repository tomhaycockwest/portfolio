<?php

/**
 * Plugin Name: Wordpress Cleaner
 */

namespace Brave;

/**
 * Remove unused header items
 */
add_action('init', function() {

	$actions = array(
		'feed_links_extra',
		'wp_generator',
		'rsd_link',
		'wlwmanifest_link',
		'rest_output_link_wp_head',
		'wp_oembed_add_discovery_links',
		'wp_oembed_add_host_js'
	);

	foreach($actions as $action) {

		remove_action('wp_head', $action);

	}

});

/**
 * Remove comment feeds
 */
add_filter('post_comments_feed_link', function() {

	return null;

});

/**
 * Remove Wordpress logo from login
 */
add_action('login_enqueue_scripts', function() { ?>

	<style>
		.login h1 a {
			background-image: none;
		}
	</style>

<?php });

/**
 * Remove the admin tool bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Disbale emoticons
 */
add_action('init', function() {

	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');

});

/**
 * Disbale TinyMCE emoticons
 */
add_filter('tiny_mce_plugins', function($plugins) {

	if (is_array($plugins)) {

		return array_diff($plugins, array('wpemoji'));

	} else {

		return array();

	}

});

/**
 * Add the ability to upload SVGs in the media editor
 */
add_filter('upload_mimes', function($existing_mimes) {

	$existing_mimes['svg'] = 'mime/type';
	return $existing_mimes;

});

/**
 * Remove dashboard items
 */
add_action('admin_init', function() {

	remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
	remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
	remove_meta_box('dashboard_primary', 'dashboard', 'normal');
	remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
	remove_meta_box('dashboard_activity', 'dashboard', 'normal');

});

/**
 * Remove welcome box
 */
remove_action('welcome_panel', 'wp_welcome_panel');

/**
 * Remove built with message from admin footer
 */
add_filter('admin_footer_text', function() {

	return '&nbsp;';

}, 9999);

/**
 * Remove Wordpress version from admin footer
 */
add_filter('update_footer', function() {

	return ' ';

}, 9999);

/**
 * Make the Wordpress login error more generic to help prevent people brute forcing
 */
add_filter('login_errors', function() {

	return __('Username/Password is incorrect');

});

/**
 * Remove screen options for non-admins
 */
add_filter('screen_options_show_screen', function() {

	return current_user_can('manage_options');

});

/**
 * Remove help section from all pages
 */
add_action('admin_head', function() {

	$screen = get_current_screen();
	$screen->remove_help_tabs();

});

/**
 * Disbale all automatic core updates
 */
add_filter('automatic_updater_disabled', '__return_true');

/**
 * Disable all core updates
 */
add_filter('auto_update_core', '__return_false');

/**
 * Disbale automatic plugin updates
 */
add_filter('auto_update_plugin', '__return_false');

/**
 * Disable automatic theme updates
 */
add_filter('auto_update_theme', '__return_false');

/**
 * Remove X-Pingback headers
 */
add_filter('wp_headers', function($headers) {

	unset($headers['X-Pingback']);

	return $headers;

});

/**
 * Remove XMLRPC
 */
add_filter('wp_xmlrpc_server_class', '__return_false');
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Disable access to lost password and retrieve password pages
 */
add_action('login_init', function() {
	if(isset($_GET['action']) && in_array($_GET['action'], array('lostpassword', 'retrievepassword'))) {
		wp_safe_redirect(wp_login_url(), 302);
	}
});

/**
 * Hide lost password link
 */
add_filter('gettext', function($text) {
	if($text === 'Lost your password?') { $text = ' '; }
	return $text;
});

/**
 * Disable indexing
 */
if(getenv('WP_ENV') !== 'production' && !is_admin()) {
	add_action('pre_option_blog_public', '__return_zero');
}
