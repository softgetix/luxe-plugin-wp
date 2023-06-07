
<?php

// Enqueue scripts and styles
function luxe_mobile_menu_slide_scripts() {
       // Enqueue your plugin's CSS file
    wp_enqueue_style('luxe-styles', plugin_dir_url(__FILE__) . 'css/luxe-styles.css');
    wp_enqueue_style('luxe-responsive-styles', plugin_dir_url(__FILE__) . 'css/luxe-responsive-styles.css');
    wp_enqueue_style('luxe-animation-styles', plugin_dir_url(__FILE__) . 'css/luxe-animation-styles.css');
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' );

    // Enqueue your plugin's JavaScript file
    wp_enqueue_script('luxe-script', plugin_dir_url(__FILE__) . 'js/luxe-script.js', array('jquery'), '1.0.0', true);
    // Pass the initial color value to JavaScript
    $hamburger_color = get_option('luxe_mobile_menu_slide_hamburger_color', '#000000');
    wp_localize_script('luxe-mobile-menu-slide-script', 'luxe_mobile_menu_slide_color', $hamburger_color);
}
add_action('wp_enqueue_scripts', 'luxe_mobile_menu_slide_scripts');





?>