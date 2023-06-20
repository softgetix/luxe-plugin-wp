<?php
// Add a settings page
function luxe_mobile_menu_slide_settings_page()
{
    add_menu_page(
        'Luxe Mobile Menu Slide Settings',
        'Luxe Plugins',
        'manage_options',
        'luxe-mobile-menu-slide-settings',
        'luxe_mobile_menu_slide_settings_page_callback',
        'dashicons-menu',
        99
    );
    add_submenu_page(
        'luxe-mobile-menu-slide-settings',
        'Mobile Menu',
        'Mobile Menu',
        'manage_options',
        'luxe-mobile-menu-slide-settings',
        'luxe_mobile_menu_slide_settings_page_callback',
    );
  
    add_submenu_page(
        'luxe-mobile-menu-slide-settings',
        'Submenu Page Title',
        'Upgrade to Pro',
        'manage_options',
        'luxe-mobile-menu-slide-settings&tab=styles',
        'luxe_mobile_menu_slide_settings_page_callback'
    );
}
add_action('admin_menu', 'luxe_mobile_menu_slide_settings_page');


// include the setting page

require plugin_dir_path( __FILE__).'__parts/Pages/Settings/Settings.php';



