<?php
/**
 * Plugin Name: Luxe Mobile Menu 
 * Plugin URI: [Plugin URL]
 * Description: Add a slide left effect to the mobile menu with an option to update the hamburger icon color.
 * Version: 1.0.0
 * Author: [Softgetix]
 * Author URI: [www.softgetix.com]
 */
global $wpdb;
function luxe_activate() { 
	wp_cache_flush();
}
function luxe_uninstall() {
    global $wpdb;
    $wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE 'luxe\_%'" );
}
function luxe_deactivate() {
    global $wpdb;
    $wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE 'luxe\_%'" );
}
register_activation_hook( __FILE__, 'luxe_activate' );
register_uninstall_hook(__FILE__,'luxe_unistall');
register_deactivation_hook(__FILE__,'luxe_deactivate');

 class LuxeMobileMenuSlide
{
    public function __construct()
    {
      // Register the Elementor widget
        require_once plugin_dir_path(__FILE__) . 'functions.php';
        add_action('elementor/widgets/widgets_registered', array($this, 'register_elementor_widget'));

        // Enqueue scripts and styles
        require_once plugin_dir_path(__FILE__) . 'enqueue-scripts.php';

        // Add mobile menu toggle functionality
        add_action('wp_footer', array($this, 'toggle_menu'));
        add_action('wp_head', array($this, 'display_menu'));

        // Add shortcode to show mobile menu
        add_shortcode('luxe', array($this, 'luxe_shortcode'));
        // add_action('init', array($this, 'create_primary_menu'));
        //add_action('admin_enqueue_scripts', array($this, 'luxe_mobile_menu_slide_enqueue_scripts'));

        // Include necessary files
        require_once plugin_dir_path(__FILE__) . 'includes/admin/settings.php';
        require_once plugin_dir_path(__FILE__) . 'includes/admin/settings-callbacks.php';
        require_once plugin_dir_path(__FILE__) . 'includes/mobile-menu.php';
        require_once plugin_dir_path(__FILE__) . 'includes/sub-menu.php';
    }
    // public function luxe_mobile_menu_slide_enqueue_scripts()
    // {
    //     wp_enqueue_media();
    // }

    public function register_elementor_widget()
    {
        if (class_exists('Elementor\\Widget_Base')) {
            require_once plugin_dir_path(__FILE__) . 'includes/extra/elementor-widget.php';
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \LuxeMobileMenuSlide_Elementor_Widget());
        }
    }
    // Toggle menu functionality
    public function toggle_menu()
    {
        ?>
        <script>
            jQuery(document).ready(function ($) {


                var replaceHeaderMobile = '<?php echo esc_js(get_option("luxe_mobile_menu_slide_replace_default_header_mobile", "none")); ?>';
                if (replaceHeaderMobile === "on") {
                    $('header').addClass('default-header-none-mobile');
                }
                else { }
                var replaceHeaderDesktop = '<?php echo esc_js(get_option("luxe_mobile_menu_slide_replace_default_header_desktop", "none")); ?>';
                if (replaceHeaderDesktop === "on") {
                    $('header').addClass('default-header-none-desktop');
                }
                else { }
                var replaceLuxeHeaderDesktop = '<?php echo esc_js(get_option("luxe_mobile_menu_slide_replace_luxe_header_desktop", "none")); ?>';
                if (replaceLuxeHeaderDesktop === "on") {
                    $('.luxe-header').addClass('luxe-header-none-desktop');
                }
                else { }
                var replaceLuxeHeaderMobile = '<?php echo esc_js(get_option("luxe_mobile_menu_slide_replace_luxe_header_mobile", "none")); ?>';
                if (replaceLuxeHeaderMobile === "on") {
                    $('.luxe-header').addClass('luxe-header-none-mobile');
                }
                else { }

                // Change hamburger icon position i.e left, right and center
                var hambugerIconPosition = '<?php echo esc_js(get_option("luxe_mobile_menu_slide_hamburger_icon_position")); ?>';
                if (hambugerIconPosition === "left_side") {
                    $('.luxe-hamburger').addClass('luxe-hamburger-icon-position-left');
                    $('.luxe-toggler').addClass('luxe-hamburger-toggler-position-left');
                } else if (hambugerIconPosition === "right_side") {
                    $('.luxe-hamburger').addClass('luxe-hamburger-icon-position-right');
                    $('.luxe-toggler').addClass('luxe-hamburger-toggler-position-right');
                } else if (hambugerIconPosition === "middile_side") {
                    $('.luxe-hamburger').addClass('luxe-hamburger-icon-position-middle');
                    $('.luxe-toggler').addClass('luxe-hamburger-toggler-position-middle');
                }
                else {
                    $('.luxe-hamburger').addClass('luxe-hamburger-icon-position-left');
                    $('.luxe-toggler').addClass('luxe-hamburger-toggler-position-left');
                }

                jQuery('.luxe-toggler').on('change', function () {
                    if ($(this).is(':checked')) {
                        $('body').css('overflow', 'hidden');
                    } else {
                        $('body').css('overflow', 'auto');
                    }
                });
                jQuery('.luxe-toggler').on('change', function () {

                    if (jQuery(this).is(':checked')) {
                        $('#luxe-hamburger-animation1, #luxe-hamburger-animation2, #luxe-hamburger-animation3, #luxe-hamburger-animation4').addClass('open');
                    } else {
                        $('#luxe-hamburger-animation1, #luxe-hamburger-animation2, #luxe-hamburger-animation3, #luxe-hamburger-animation4').removeClass('open');
                    }
                    var textAnimation = '<?php echo esc_js(get_option("luxe_mobile_menu_slide_container_font_animation")); ?>';
                    var selectedAnimation = '<?php echo esc_js(get_option("luxe_mobile_menu_slide_toggle_animation")); ?>';


                    staggerAnimation = '<?php echo esc_js(get_option("luxe_mobile_menu_slide_container_stagger_animation", 0)); ?>';
                    // if (staggerAnimation === 1) {
                    $(document).on('change', '.luxe-toggler', function () {
                        if ($(this).is(':checked')) {
                            $('body').css('overflow', 'hidden');

                            $('ul#luxe-menu-primary_navigation li:not(.luxe-menu-item-has-children li)').each(function (index) {
                                const $li = $(this);
                                setTimeout(function () {

                                    $li.addClass('luxe-text-checked');
                                }, staggerAnimation == 1 ? index * 200 : 0); // Delay each li element by 100ms if staggerAnimation is 1
                            });
                        } else {
                            $('body').css('overflow', 'auto');
                            $('ul#luxe-menu-primary_navigation li').removeClass('luxe-text-checked');

                        }
                    });


                });
            });
        </script>
        <?php
    }

    // Display the mobile menu on the website
    public function display_menu()
    {

        luxe_mobile_menu_slide_mobile_menu();

    }


    // Register shortcode to display menu 
    public function luxe_shortcode()
    {

        luxe_mobile_menu_slide_mobile_menu();

    }

}

new LuxeMobileMenuSlide();
