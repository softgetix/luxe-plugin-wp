<?php

// Create the mobile menu with hamburger icon 
function luxe_mobile_menu_slide_mobile_menu()
{
    $hamburger_color = get_option('luxe_mobile_menu_slide_hamburger_color', '#000000');
    $hamburger_padding = get_option('luxe_mobile_menu_slide_hamburger_padding', '0px');
    $hamburger_border_radius = get_option('luxe_mobile_menu_slide_hamburger_border_radius', '0px');
    $background_color = get_option('luxe_mobile_menu_slide_background_color', '#ffffff');
    $hamburger_type = get_option('luxe_mobile_menu_slide_hamburger_type', 'normal');
    $hamburger_size = get_option('luxe_mobile_menu_slide_hamburger_size', '50px');
    $hamburger_styles = get_option('luxe_mobile_menu_slide_hamburger_icon_styles', 'style_1');
    $container_animation = get_option("luxe_mobile_menu_slide_toggle_animation");
    // Menu dropdown container (passing register setting function name here from setting.php in get_option)
    $container_background_color = get_option('luxe_mobile_menu_slide_container_background_color', '#000');
    $container_font_color = get_option('luxe_mobile_menu_slide_container_font_color', '#ffffff');
    $container_font_animation = get_option('luxe_mobile_menu_slide_container_font_animation', '');
    $container_submenu_font_color = get_option('luxe_mobile_menu_slide_container_submenu_font_color', '#ffffff');
    $container_font_size = get_option('luxe_mobile_menu_slide_container_font_size', '17px');
    $luxe_container_position = get_option('luxe_mobile_menu_slide_hamburger_icon_position', 'normal');

    // $luxe_header_logo = get_option('luxe_mobile_menu_slide_logo_image');

    // Add a CSS class based on the selected type (passing register setting function name here from setting.php in get_option)
    $hamburger_class = ($hamburger_type !== 'normal') ? 'hamburger-' . $hamburger_type : '';

    if ($container_animation === 'toggleNone') {
        $container_animation_class = 'toggler-container-animation-none';
    } else if ($container_animation === 'toggle_container_animation1') {
        $container_animation_class = 'toggler-container-animation-one';
    } else if ($container_animation === 'toggle_container_animation2') {
        $container_animation_class = 'toggler-container-animation-two';
    } else if ($container_animation === 'toggle_container_animation3') {
        $container_animation_class = 'toggler-container-animation-three';
    } else if ($container_animation === 'toggle_container_animation4') {
        $container_animation_class = 'toggler-container-animation-four';
    } else if ($container_animation === 'toggle_container_animation-down') {
        $container_animation_class = 'toggler-container-animation-down';
    } else {
    }
    ?>

    <style type="text/css">
        .luxe-sub-menu {
            display: none;
        }

        .dashicons,
        .dashicons-before:before {
            display: block !important;
            width: auto !important;
            height: auto !important;
        }

        label.luxe-hamburger-label span {
            background-color:
                <?php esc_html_e($hamburger_color) ?>
            ;
        }

        

    </style>

    <div class="luxe-header">

        <div class="luxe-menu-wrap">
            <input id="hamburger-input" type="checkbox" class="luxe-toggler d-none">

            <?php
            //include the hamburger part
            include(plugin_dir_path(__FILE__) . '__parts/hamburger.php');

            ?>
            <div class="luxe-mobile-menu">
                <div class="luxe-mobile-container1 <?php esc_html_e($container_animation_class) ?>"
                    style="background-color: <?php echo esc_attr($container_background_color) ?>; color: <?php echo esc_attr($container_font_color); ?>">
                    <div class="luxe-mobile-container2">
                        <?php
                        // Get the selected navigation menu
                        $selected_menu_id = get_option('luxe_mobile_menu_slide_select_menu');
                        $selected_menu = wp_get_nav_menu_items($selected_menu_id);

                        if (!empty($selected_menu)) {
                            echo '<ul id="luxe-menu-primary_navigation" class="luxe-menu-ul" style="font-size: ' . esc_attr($container_font_size) . ';">';
                            foreach ($selected_menu as $menu_item) {
                                $has_children = in_array('menu-item-has-children', $menu_item->classes);

                                if ($menu_item->menu_item_parent == 0) {
                                    echo '<li class="luxe-menu-item-has-children">';
                                    $submenu_items = get_submenu_items($menu_item->ID, $selected_menu);
                                    if ($submenu_items) {
                                        echo '<span class="luxe-toggle-sign">+</span>';
                                    } else {
                                        echo "";
                                    }
                                    echo '<a href="' . esc_url($menu_item->url) . '" style="color: ' . esc_attr($container_font_color) . ';">' . esc_html($menu_item->title) . '</a>';

                                    // Get submenu items for the current parent menu item
                                    $submenu_items = get_submenu_items($menu_item->ID, $selected_menu);

                                    if (!empty($submenu_items)) {
                                        echo '<ul class="luxe-sub-menu">';
                                        foreach ($submenu_items as $submenu_item) {
                                            echo '<li class="luxe-menu-item-has-children" style="color: ' . esc_attr($container_font_size) . '; color: ' . esc_attr($container_submenu_font_color) . ';">' . esc_html($submenu_item->title) . '</li>';
                                        }
                                        echo '</ul>';
                                    }

                                    echo '</li>';
                                }
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>