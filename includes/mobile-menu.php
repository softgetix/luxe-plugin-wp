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
                <div class="luxe-mobile-container1 <?php esc_html_e($container_animation_class) ?>"
                    style="background-color: <?php echo esc_attr($container_background_color) ?>; color: <?php echo esc_attr($container_font_color); ?>">
                    <div class="luxe-mobile-container2">
                        <?php
                        require(plugin_dir_path(__FILE__) . '__parts/menu.php');
                        //Get the selected navigation menu
                        // $selected_menu_id = get_option('luxe_mobile_menu_slide_select_menu');
                        // $selected_menu = wp_get_nav_menu_items($selected_menu_id);
                    

                        // if (!empty($selected_menu)) {
                        //     echo '<ul id="luxe-menu-primary_navigation" class="luxe-menu-ul" style="font-size: ' . esc_attr($container_font_size) . $luxe_container_font_size_unit . ';">';
                        //     foreach ($selected_menu as $menu_item) {
                        //         $has_children = in_array('menu-item-has-children', $menu_item->classes);
                    
                        //         if ($menu_item->menu_item_parent == 0) {
                        //             echo '<li class="luxe-menu-item-has-children">';
                        //             $submenu_items = get_submenu_items($menu_item->ID, $selected_menu);
                        //             if ($submenu_items) {
                        //                 echo '<span class="luxe-toggle-sign">+</span>';
                        //             } else {
                        //                 echo "";
                        //             }
                        //             echo '<a href="' . esc_url($menu_item->url) . '" style="color: ' . esc_attr($container_font_color) . ';">' . esc_html($menu_item->title) . '</a>';
                    
                        //             // Get submenu items for the current parent menu item
                        //             $submenu_items = get_submenu_items($menu_item->ID, $selected_menu);
                    
                        //             if (!empty($submenu_items)) {
                        //                 echo '<ul class="luxe-sub-menu">';
                        //                 foreach ($submenu_items as $submenu_item) {
                        //                     echo '<li class="luxe-menu-item-has-children" style="color: ' . esc_attr($container_font_size) . '; color: ' . esc_attr($container_submenu_font_color) . ';">' . esc_html($submenu_item->title) . '</li>';
                        //                 }
                        //                 echo '</ul>';
                        //             }
                    
                        //             echo '</li>';
                        //         }
                        //     }
                        //     echo '</ul>';
                        // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>