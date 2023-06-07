<?php


// Callback function for the colors section
function luxe_mobile_menu_slide_colors_section_callback()
{
    // echo '<p>Customize styles here</p>';
}

// Callback function for the hamburger icon color field
function luxe_mobile_menu_slide_hamburger_color_field_callback()
{
    $hamburger_color = get_option('luxe_mobile_menu_slide_hamburger_color', '#000000');
    $hamburger_type = get_option('luxe_mobile_menu_slide_hamburger_type', 'normal');

    // Add a CSS class based on the selected type
    $hamburger_class = ($hamburger_type !== 'normal') ? 'hamburger-' . $hamburger_type : '';

    echo '<div class="' . esc_attr($hamburger_class) . '">';
    echo '<input type="color" name="luxe_mobile_menu_slide_hamburger_color" value="' . esc_attr($hamburger_color) . '">';
    echo '</div>';
}
// Callback function for the hamburger icon position field
function luxe_mobile_menu_slide_hamburger_icon_position_field_callback()
{
    $hamburger_icon_position = get_option('luxe_mobile_menu_slide_hamburger_icon_position');

    // Define the available types for the dropdown
    $types = array(
        'normal' => 'Inline',
        'Left' => 'Position Left',
        'right' => 'Position right',
        'center' => 'Position middle',
    );

    echo '<select name="luxe_mobile_menu_slide_hamburger_icon_position">';
    foreach ($types as $type_key => $type_label) {
        $selected = selected($hamburger_icon_position, $type_key, false);
        echo '<option value="' . esc_attr($type_key) . '"' . $selected . '>' . esc_html($type_label) . '</option>';
    }
    echo '</select>';
}
// Callback function for the hamburger font size
function luxe_mobile_menu_slide_hamburger_width_field_callback()
{
    $hamburger_size = get_option('luxe_mobile_menu_slide_hamburger_width', '15px');
    echo '<input placeholder="ex : 15px or 2rem" type="text" name="luxe_mobile_menu_slide_hamburger_width" value="' . esc_attr($hamburger_size) . '">';
}
function luxe_mobile_menu_slide_hamburger_height_field_callback()
{
    $hamburger_size = get_option('luxe_mobile_menu_slide_hamburger_height', '15px');
    echo '<input placeholder="ex : 15px or 2rem" type="text" name="luxe_mobile_menu_slide_hamburger_height" value="' . esc_attr($hamburger_size) . '">';
}
// Callback function for the hamburger padding
function luxe_mobile_menu_slide_hamburger_padding_field_callback()
{
    $hamburger_padding = get_option('luxe_mobile_menu_slide_hamburger_padding', '0');
    echo '<input placeholder="ex : 15px or 2rem" type="text" name="luxe_mobile_menu_slide_hamburger_padding" value="' . esc_attr($hamburger_padding) . '">';
}

// Callback function for the hamburger border radius
function luxe_mobile_menu_slide_hamburger_border_radius_field_callback()
{
    $hamburger_border_radius = get_option('luxe_mobile_menu_slide_hamburger_border_radius', '0px');
    echo '<input placeholder="ex : 15px or 15%" type="text" name="luxe_mobile_menu_slide_hamburger_border_radius" value="' . esc_attr($hamburger_border_radius) . '">';
}


// Callback function for the background color field
function luxe_mobile_menu_slide_background_color_field_callback()
{
    $background_color = get_option('luxe_mobile_menu_slide_background_color', '#ffffff');
    echo '<input type="color" name="luxe_mobile_menu_slide_background_color" value="' . esc_attr($background_color) . '">';
}


// Callback function for the dropdown container background color field
function luxe_mobile_menu_slide_container_background_color_field_callback()
{
    $container_background_color = get_option('luxe_mobile_menu_slide_container_background_color', '#ffffff');
    echo '<input type="color" name="luxe_mobile_menu_slide_container_background_color" value="' . esc_attr($container_background_color) . '">';
}

// Callback function for the dropdown container font color field
function luxe_mobile_menu_slide_container_font_color_field_callback()
{
    $container_font_color = get_option('luxe_mobile_menu_slide_container_font_color', '#ffffff');
    echo '<input type="color" name="luxe_mobile_menu_slide_container_font_color" value="' . esc_attr($container_font_color) . '">';
}
// callback function for  line thickness

function luxe_mobile_menu_slide_hamburger_line_thickness_field_callback()
{
    $hamburger_line_thickness = get_option('luxe_mobile_menu_slide_hamburger_line_thickness', '2px');
    echo '<input type="text" name="luxe_mobile_menu_slide_hamburger_line_thickness" value="' . esc_attr($hamburger_line_thickness) . '">';

}
function luxe_mobile_menu_slide_hamburger_line_gap_field_callback()
{
    $hamburger_line_gap = get_option('luxe_mobile_menu_slide_hamburger_line_gap', '5px');
    echo '<input type="text" name="luxe_mobile_menu_slide_hamburger_line_gap" value="' . esc_attr($hamburger_line_gap) . '">';
}
// Callback function for the dropdown container submenu font color field
function luxe_mobile_menu_slide_container_submenu_font_color_field_callback()
{
    $container_submenu_font_color = get_option('luxe_mobile_menu_slide_container_submenu_font_color', '#ffffff');
    echo '<input type="color" name="luxe_mobile_menu_slide_container_submenu_font_color" value="' . esc_attr($container_submenu_font_color) . '">';
}
// Callback function for the dropdown container font size
function luxe_mobile_menu_slide_container_font_size_field_callback()
{
    $container_font_size = get_option('luxe_mobile_menu_slide_container_font_size', '25px');
    echo '<input placeholder="ex : 15px or 2rem" type="text" name="luxe_mobile_menu_slide_container_font_size" value="' . esc_attr($container_font_size) . '">';
}

// Humburger type like round and normal 

function luxe_mobile_menu_slide_container_font_animation_field_callback()
{
    $text_animation = get_option('luxe_mobile_menu_slide_container_font_animation', 'Animation 1');

    // Define the available types for the dropdown
    $types = array(
        'animation_none' => 'Fade In',
        'animation_one' => 'Animation 1',
        'animation_two' => 'Animation 2',
        'animation_three' => 'Animation 3',
    );

    echo '<select name="luxe_mobile_menu_slide_container_font_animation">';
    foreach ($types as $type_key => $type_label) {
        $selected = selected($text_animation, $type_key, false);
        echo '<option value="' . esc_attr($type_key) . '"' . $selected . '>' . esc_html($type_label) . '</option>';
    }
    echo '</select>';
}


// Humburger type like round and normal 

function luxe_mobile_menu_slide_select_menu_field_callback()
{
    $selected_menu = get_option('luxe_mobile_menu_slide_select_menu', 'normal');
    $menus = wp_get_nav_menus();

    echo '<select name="luxe_mobile_menu_slide_select_menu">';
    foreach ($menus as $menu) {
        $menu_id = $menu->term_id;
        $menu_name = $menu->name;
        $selected = selected($selected_menu, $menu_id, false);
        echo '<option value="' . esc_attr($menu_id) . '"' . $selected . '>' . esc_html($menu_name) . '</option>';
    }
    echo '</select>';
    echo '<label class="luxe-dashboard-label"> or </label> <a href="' . admin_url('nav-menus.php?action=edit&menu=0') . '">Create a Menu</a>';

}


function luxe_mobile_menu_slide_toggle_animation_field_callback()
{
    $toggle_animation = get_option('luxe_mobile_menu_slide_toggle_animation', 'none');

    // Define the available toggle animations for the dropdown
    $animations = array(
        'toggle_container_animation4' => 'Fade Effect',
        // 'toggle_container_animation1' => 'curtain Open Effect',
        'toggle_container_animation2' => 'Slide From Left',
        'toggle_container_animation3' => 'Slide From Up',

        'toggle_container_animation-down' => 'Slide From Down',


        // Add more animation options as needed
    );

    echo '<select name="luxe_mobile_menu_slide_toggle_animation">';
    foreach ($animations as $animation_key => $animation_label) {
        $selected = selected($toggle_animation, $animation_key, false);
        echo '<option value="' . esc_attr($animation_key) . '"' . $selected . '>' . esc_html($animation_label) . '</option>';
    }
    echo '</select>';
}

// Dropdown animation


// Change hamburger icon styles

function luxe_mobile_menu_slide_hamburger_icon_styles_field_callback()
{
    $togg = get_option('luxe_mobile_menu_slide_hamburger_icon_styles', 'style_1');

    // Define the available toggle animations for the dropdown
    $animations = array(
        'style_1' => 'Style 1',
        'style_2' => 'Style 2',
        'style_3' => 'Style 3',
        'style_4' => 'Style 4',
        // Add more animation options as needed
    );
    $html = '<div class="hamburgers_container">';

    // echo '<select name="luxe_mobile_menu_slide_hamburger_icon_styles">';
    $no = 1;
    $checked_class = '';
    foreach ($animations as $animation_key => $animation_label) {
        // $selected = selected($togg, $animation_key, false);
        // echo '<option value="' . esc_attr($animation_key) . '"' . $selected . '>' . esc_html($animation_label) . '</option>';
        if ($animation_key == $togg) {
            $checked_class = 'checked';
        }
        $string = '<label for="' . $animation_key . '" class="luxe-hamburger-label '.$checked_class.'">
  <div id="luxe-nav-icon' . $no . '" class="">
            <span></span>
            <span></span>
            <span></span>
  </div>
  <input type="radio" id="' . $animation_key . '" name="luxe_mobile_menu_slide_hamburger_icon_styles" value="' . esc_attr($animation_key) . '" />
      </label> ';
        $html .= $string;
        $no++;
        $checked_class = '';
    }
    $html .= '</div>';
    echo $html;

}

function luxe_mobile_menu_slide_replace_luxe_header_desktop_field_callback()
{
    $replace_luxe_header_desktop = get_option('luxe_mobile_menu_slide_replace_luxe_header_desktop', 'off');
    $checked = ($replace_luxe_header_desktop === 'on') ? 'checked="checked"' : '';

    echo '<input type="checkbox" name="luxe_mobile_menu_slide_replace_luxe_header_desktop" value="on" ' . $checked . '>';
}
function luxe_mobile_menu_slide_replace_luxe_header_mobile_field_callback()
{
    $replace_luxe_header_mobile = get_option('luxe_mobile_menu_slide_replace_luxe_header_mobile', 'off');
    $checked = ($replace_luxe_header_mobile === 'on') ? 'checked="checked"' : '';

    echo '<input type="checkbox" name="luxe_mobile_menu_slide_replace_luxe_header_mobile" value="on" ' . $checked . '>';
}


// callback function for the hamburger section
function luxe_mobile_menu_slide_hamburger_section_callback($section)
{
    // $section_title = $section['title'];
    // echo '<h2 class="custom-section-heading">' . esc_html($section_title) . '</h2>';
}

?>