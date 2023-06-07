<?php 


function luxe_enqueue_bootstrap_admin() {
    // Enqueue Bootstrap CSS
    // wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' );

    // // Enqueue Bootstrap JavaScript
    // wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js', array( 'jquery' ), '5.3.0', true );
 wp_enqueue_style( 'luxe-custom-css', plugins_url( '/includes/admin/assets/css/styles.css' , __FILE__ ) );

}
add_action( 'admin_enqueue_scripts', 'luxe_enqueue_bootstrap_admin');

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