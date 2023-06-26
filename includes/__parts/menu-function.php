<?php


$hamburger_color = get_option('luxe_mobile_menu_slide_hamburger_color', '#000000');
$hamburger_padding = get_option('luxe_mobile_menu_slide_hamburger_padding', '0px');
$hamburger_border_radius = get_option('luxe_mobile_menu_slide_hamburger_border_radius', '0px');
$background_color = get_option('luxe_mobile_menu_slide_background_color', '#ffffff');
$hamburger_type = get_option('luxe_mobile_menu_slide_hamburger_type', 'normal');
$hamburger_width = get_option('luxe_mobile_menu_slide_hamburger_width', '50px');
$hamburger_height = get_option('luxe_mobile_menu_slide_hamburger_height', '50px');
$hamburger_styles = get_option('luxe_mobile_menu_slide_hamburger_icon_styles', 'style_1');
$container_animation = get_option("luxe_mobile_menu_slide_toggle_animation");
// Menu dropdown container (passing register setting function name here from setting.php in get_option)
$container_background_color = get_option('luxe_mobile_menu_slide_container_background_color', '#000');
$container_font_color = get_option('luxe_mobile_menu_slide_container_font_color', '#ffffff');
$container_font_animation = get_option('luxe_mobile_menu_slide_container_font_animation', '');
$container_submenu_font_color = get_option('luxe_mobile_menu_slide_container_submenu_font_color', '#ffffff');
$container_font_size = get_option('luxe_mobile_menu_slide_container_font_size', '17px');
$luxe_container_position = get_option('luxe_mobile_menu_slide_hamburger_icon_position', 'normal');
$luxe_hamburger_line_thickness = get_option('luxe_mobile_menu_slide_hamburger_line_thickness', '2px');

// importing units
$luxe_container_font_size_unit = get_option('luxe_mobile_menu_slide_container_font_size_unit', 'px');
$luxe_mobile_font_line_height = get_option('luxe_mobile_menu_slide_container_font_line_height', '2');
$luxe_mobile_font_line_height_unit = get_option('luxe_mobile_menu_slide_container_line_height_unit', 'px');

//sub line height

$luxe_mobile_menu_slide_container_sub_line_height = get_option('luxe_mobile_menu_slide_container_sub_line_height', 5);
$luxe_mobile_menu_slide_container_sub_line_height_unit = get_option('luxe_mobile_menu_slide_container_sub_line_height_unit', 'px');
// $luxe_header_logo = get_option('luxe_mobile_menu_slide_logo_image');

// Add a CSS class based on the selected type (passing register setting function name here from setting.php in get_option)
$hamburger_class = ($hamburger_type !== 'normal') ? 'hamburger-' . $hamburger_type : '';
$selected_menu_id = get_option('luxe_mobile_menu_slide_select_menu');

$container_animation_class = $container_animation;
