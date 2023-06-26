<?php 

if(!class_exists('Luxe_Menu_Walker')){


class Luxe_Menu_Walker extends Walker_Nav_Menu {
    // Customize the start of each menu level
    public function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu luxe-sub-menu\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        // Add custom classes to the menu item
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        
        if (in_array('menu-item-has-children', $item->classes)) {
            $classes[] = 'luxe-menu-item-has-children';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
    
        // Check if it is a parent menu item
        if ($depth === 0) {
            $class_names .= ' ' . get_option("luxe_mobile_menu_slide_container_font_animation");
        }
    
        // Build the menu item HTML markup
        $output .= $indent . '<li id="menu-item-' . $item->ID . '" class="' . $class_names . '">';
        $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
    
        // Add the custom span tag if the menu item has children
        if (in_array('menu-item-has-children', $item->classes)) {
            $output .= '<span class="luxe-toggle-sign">+</span>';
        }
    }
}
}
$selected_menu_id = get_option('luxe_mobile_menu_slide_select_menu');
$args = array(
    'menu' => $selected_menu_id,
    // Replace 'header-menu' with your actual menu slug or ID
    'menu_class' => 'luxe-menu-ul',
    'menu_id' => 'luxe-menu-primary_navigation',
    'container' => 'ul',
    'walker' => new Luxe_Menu_Walker(),
);
wp_nav_menu($args);