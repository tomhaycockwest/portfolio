<?php
//add the above defined menus to the admin
add_action("admin_menu", "me_admin_menus");

function me_admin_menus() {
    //add "Me settings" to the menu
    add_menu_page( __( 'Theme settings','me-3-9-3'), __( 'Theme settings','me-3-9-3'), 'manage_options', 'theme_settings', 'theme_settings_page');
    //Styling submenu
    add_submenu_page('theme_settings', __('Edit styles','me-3-9-3'), __( 'Styling','me-3-9-3'), 'manage_options', 'style_settings', 'style_settings_page');
    //Home submenu
    add_submenu_page('theme_settings', __('Homepage','me-3-9-3'), __( 'Homepage','me-3-9-3'), 'manage_options', 'home', 'home_settings_page');
    //Home submenu
    add_submenu_page('theme_settings', __('Slider','me-3-9-3'), __( 'Slider','me-3-9-3'), 'manage_options', 'slider', 'slider_settings_page');
    //Portfolio submenu
    add_submenu_page('theme_settings', __('Portfolio','me-3-9-3'), __( 'Portfolio','me-3-9-3'), 'manage_options', 'portfolio', 'portfolio_settings_page');
    //Services submenu
    add_submenu_page('theme_settings', __('Services','me-3-9-3'), __( 'Services','me-3-9-3'), 'manage_options', 'services', 'services_settings_page');
    //Contact settings submenu
    add_submenu_page('theme_settings', __('Contact Info','me-3-9-3'), __( 'Contact information','me-3-9-3'), 'manage_options', 'contact_settings', 'contact_settings_page');
    //Contact settings submenu
    add_submenu_page('theme_settings', __('Contact Form','me-3-9-3'), __( 'Contact form','me-3-9-3'), 'manage_options', 'contact_form_settings', 'contact_form_settings_page');
    //Sociable submenu
    add_submenu_page('theme_settings', __('Sociable','me-3-9-3'), __( 'Sociable','me-3-9-3'), 'manage_options', 'sociable', 'sociable_settings_page');
    //Blog submenu
    add_submenu_page('theme_settings', __('Blog','me-3-9-3'), __( 'Blog','me-3-9-3'), 'manage_options', 'blog', 'blog_settings_page');
    //SEO submenu
    add_submenu_page('theme_settings', __('SEO','me-3-9-3'), __( 'SEO','me-3-9-3'), 'manage_options', 'seo', 'seo_settings_page');
    //Advanced submenu
    add_submenu_page('theme_settings', __('Advanced','me-3-9-3'), __( 'Advanced','me-3-9-3'), 'manage_options', 'advanced', 'advanced_settings_page');
}

require_once('general_settings/general_settings.php');
require_once('home_settings/home_settings.php');
require_once('style_settings/style_settings.php');
require_once('contact_settings/contact_settings.php');
require_once('contact_form_settings/contact_form_settings.php');
require_once('sociable/sociable.php');
require_once('advanced/advanced.php');
require_once('blog/blog_settings.php');
require_once('services/services_settings.php');
require_once('portfolio_settings/portfolio_settings.php');
require_once('seo/seo.php');
require_once('slider/slider_settings.php');

?>