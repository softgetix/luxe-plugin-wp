<?php


function luxe_enqueue_bootstrap_admin()
{
 
    wp_enqueue_style('luxe-custom-css', plugins_url('/includes/admin/assets/css/styles.css', __FILE__));
    wp_enqueue_style('luxe-styles', plugin_dir_url(__FILE__) . 'css/luxe-styles.css');
    wp_enqueue_style('luxe-responsive-styles', plugin_dir_url(__FILE__) . 'css/luxe-responsive-styles.css');
    wp_enqueue_style('luxe-animation-styles', plugin_dir_url(__FILE__) . 'css/luxe-animation-styles.css');
    wp_enqueue_script('custom-js', plugins_url('/includes/admin/assets/js/script.js', __FILE__), array(), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'luxe_enqueue_bootstrap_admin');
function luxe_enqueue_color_picker() {
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker');
}

add_action('admin_enqueue_scripts', 'luxe_enqueue_color_picker');

// Register settings and fields
function luxe_mobile_menu_slide_register_settings()
{
    //aadding register settings file
    require plugin_dir_path(__FILE__) . 'includes/admin/__parts/register_settings.php';
    //aadding sections file
    require plugin_dir_path(__FILE__) . 'includes/admin/__parts/add_sections.php';
    //aadding settings file
    require plugin_dir_path(__FILE__) . 'includes/admin/__parts/add_settings.php';

}
add_action('admin_init', 'luxe_mobile_menu_slide_register_settings');