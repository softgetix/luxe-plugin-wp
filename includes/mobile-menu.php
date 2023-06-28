<?php

// Create the mobile menu with hamburger icon 
function luxe_mobile_menu_slide_mobile_menu()
{
    require(plugin_dir_path(__FILE__) . '__parts/menu-function.php');
    require(plugin_dir_path(__FILE__) . '__parts/hamburger-styles.php');


    ?>


    <div class="luxe-header">

        <div class="luxe-menu-wrap">
            <input id="hamburger-input" type="checkbox" class="luxe-toggler d-none">

            <?php
            //include the hamburger part
            include(plugin_dir_path(__FILE__) . '__parts/hamburger.php');

            ?>
            <div class="luxe-mobile-menu">
                <div class="luxe-mobile-container2">
                    <?php
                    require(plugin_dir_path(__FILE__) . '__parts/menu.php');
                    ?>
                </div>
                <?php $text_animation_class = get_option("luxe_mobile_menu_slide_container_font_animation") ?>
                <div class="luxe-mobile-container1 <?php esc_html_e($container_animation_class) ?> <?php esc_html_e($text_animation_class) ?>"
                    style="background-color: <?php echo esc_attr($container_background_color) ?>; color: <?php echo esc_attr($container_font_color); ?>">
                </div>

            </div>
        </div>
        <?php
}
?>