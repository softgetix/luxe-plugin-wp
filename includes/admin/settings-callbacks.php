<?php
global $size_units;
$size_units = array(
    'px' => 'PX',
    'vw' => 'VW',
    'em' => 'EM',
    'rem' => 'REM'

);
// Callback function for the colors section
function luxe_mobile_menu_slide_colors_section_callback()
{
    // echo '<p>Customize styles here</p>';
}

// Callback function for the hamburger icon color field
function luxe_mobile_menu_slide_hamburger_color_field_callback()
{
    $hamburger_color = get_option('luxe_mobile_menu_slide_hamburger_color', '#000000');
    echo '<input type="text" id="colorValue1" name="luxe_mobile_menu_slide_hamburger_color" value="' . $hamburger_color . '" class="luxe_mobile_menu_slide_hamburger_color" data-default-color="#000000" />';


}
// Callback function for the hamburger icon position field
function luxe_mobile_menu_slide_hamburger_icon_position_field_callback()
{
    $hamburger_icon_position = get_option('luxe_mobile_menu_slide_hamburger_icon_position');

    // Define the available types for the dropdown
    $types = array(
        'normal' => 'Inline',
        'left' => 'Position Left',
        'right' => 'Position right',
        'center' => 'Position middle',
    );

    echo '<select name="luxe_mobile_menu_slide_hamburger_icon_position" id="luxe_mobile_menu_slide_hamburger_icon_position">';
    foreach ($types as $type_key => $type_label) {
        $selected = selected($hamburger_icon_position, $type_key, false);
        echo '<option value="' . esc_attr($type_key) . '"' . $selected . '>' . esc_html($type_label) . '</option>';
    }
    echo '</select>';
}
// Callback function for the hamburger font size
function luxe_mobile_menu_slide_hamburger_width_field_callback()
{
    $hamburger_size = get_option('luxe_mobile_menu_slide_hamburger_width', '15');
    echo '<input placeholder="" type="number" style="width:100px!important" id="luxe_mobile_menu_slide_hamburger_width" name="luxe_mobile_menu_slide_hamburger_width" value="' . esc_attr($hamburger_size) . '">        <span>px</span>';
}
function luxe_mobile_menu_slide_hamburger_height_field_callback()
{
    $hamburger_size = get_option('luxe_mobile_menu_slide_hamburger_height', '15');
    echo '<input placeholder="" style="width:100px!important" type="number" id="luxe_mobile_menu_slide_hamburger_height" name="luxe_mobile_menu_slide_hamburger_height" value="' . esc_attr($hamburger_size) . '">       <span>px</span>';
}
// Callback function for the hamburger padding
function luxe_mobile_menu_slide_hamburger_padding_field_callback()
{
    $hamburger_padding = get_option('luxe_mobile_menu_slide_hamburger_padding', '0');
    echo '<input placeholder="" type="number" style="width:100px!important" name="luxe_mobile_menu_slide_hamburger_padding" id="luxe_mobile_menu_slide_hamburger_padding" value="' . esc_attr($hamburger_padding) . '">       <span>px</span>';
}

// Callback function for the hamburger border radius
function luxe_mobile_menu_slide_hamburger_border_radius_field_callback()
{
    $hamburger_border_radius = get_option('luxe_mobile_menu_slide_hamburger_border_radius', '0');
    echo '<input placeholder="" type="number" style="width:100px !important" name="luxe_mobile_menu_slide_hamburger_border_radius" id="luxe_mobile_menu_slide_hamburger_border_radius" value="' . esc_attr($hamburger_border_radius) . '">       <span>%</span>';
}


// Callback function for the background color field
function luxe_mobile_menu_slide_background_color_field_callback()
{
    $background_color = get_option('luxe_mobile_menu_slide_background_color', '#ffffff');

    echo "<input type='hidden' id='colorValue2' name='luxe_mobile_menu_slide_background_color' class='luxe_mobile_menu_slide_background_color' value=" . esc_attr($background_color) . ">";

}


// Callback function for the dropdown container background color field
function luxe_mobile_menu_slide_container_background_color_field_callback()
{
    $container_background_color = get_option('luxe_mobile_menu_slide_container_background_color', '#ffffff');

    echo "<input type='text' id='colorValue3' class='colorValue3' name='luxe_mobile_menu_slide_container_background_color' value=" . esc_attr($container_background_color) . ">";
  
}

// Callback function for the dropdown container font color field
function luxe_mobile_menu_slide_container_font_color_field_callback()
{
    $container_font_color = get_option('luxe_mobile_menu_slide_container_font_color', '#ffffff');

    echo "<input type='text' id='colorValue4' name='luxe_mobile_menu_slide_container_font_color' value=" . esc_attr($container_font_color) . ">";;
}
// callback function for  line thickness

function luxe_mobile_menu_slide_hamburger_line_thickness_field_callback()
{
    $hamburger_line_thickness = get_option('luxe_mobile_menu_slide_hamburger_line_thickness', '2');
    echo '<input type="number" step="0.1" style="width:100px !important" id="luxe_mobile_menu_slide_hamburger_line_thickness" name="luxe_mobile_menu_slide_hamburger_line_thickness" value="' . esc_attr($hamburger_line_thickness) . '">        <span>px</span>';

}
function luxe_mobile_menu_slide_hamburger_line_length_field_callback()
{
    $hamburger_line_length = get_option('luxe_mobile_menu_slide_hamburger_line_length', '50');
    echo '<input style="width:100px !important" step="1" type="number" id="luxe_mobile_menu_slide_hamburger_line_length" name="luxe_mobile_menu_slide_hamburger_line_length" value="' . esc_attr($hamburger_line_length) . '">        <span>%</span>';
}
function luxe_mobile_menu_slide_hamburger_line_gap_field_callback()
{
    $hamburger_line_gap = get_option('luxe_mobile_menu_slide_hamburger_line_gap', '50');
    echo '<input style="width:100px !important"  type="number" id="luxe_mobile_menu_slide_hamburger_line_gap" name="luxe_mobile_menu_slide_hamburger_line_gap" value="' . esc_attr($hamburger_line_gap) . '"> <span>%</span>';
}

// including the submenu callback file
require plugin_dir_path(__FILE__) . '__parts/callback/submenu.php';

//including the menu callback file
require plugin_dir_path(__FILE__) . '__parts/callback/menu.php';

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
    $toggle_animation = get_option('luxe_mobile_menu_slide_toggle_animation', 'luxe-background-animation-fade');

    // Define the available toggle animations for the dropdown
    $bganimations = array(
        'luxe-background-animation-fade' => 'Fade',
        'luxe-background-animation-fade-left' => 'Slide Left',
        // 'toggle_container_animation1' => 'curtain Open Effect',
        'luxe-background-animation-fade-right' => 'Slide Right',
        'luxe-background-animation-fade-down' => 'Slide Down',

        'luxe-background-animation-fade-up' => 'Slide Up',



        // Add more animation options as needed
    );


    $html = '<div class="hamburgers_container bg-animation">';

    // echo '<select name="luxe_mobile_menu_slide_hamburger_icon_styles">';
    $no = 1;
    $bgchecked_class = '';
    foreach ($bganimations as $bganimation_key => $bganimation_label) {
        if ($bganimation_key == $toggle_animation) {
            $bgchecked_class = 'checked';
        }
        $string = '<label for="' . $bganimation_key . '" class="background-animation-label ' . $bgchecked_class . '">
  <img  src="' . plugins_url('/assets/images/' . $bganimation_key . '.png', __FILE__) . '" class="luxe-background-animation-name-img" width="40" height="40" /><span class="luxe-background-animation-name">' . $bganimation_label . '</span>
  <input type="radio" id="' . $bganimation_key . '" ' . $bgchecked_class . ' name="luxe_mobile_menu_slide_toggle_animation" value="' . esc_attr($bganimation_key) . '" />
      </label> ';
        $html .= $string;
        $no++;
        $bgchecked_class = '';
    }
    $html .= '</div>';
    echo $html;
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
        $string = '<label for="' . $animation_key . '" class="admin-luxe-hamburger-label ' . $checked_class . '">
  <div id="luxe-hamburger-animation' . $no . '" class="">
            <span></span>
            <span></span>
            <span></span>
  </div>
  <input type="radio" id="' . $animation_key . '" name="luxe_mobile_menu_slide_hamburger_icon_styles" value="' . esc_attr($animation_key) . '" ' . $checked_class . ' />
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