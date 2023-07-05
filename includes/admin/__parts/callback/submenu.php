<?php

// Callback function for the dropdown container submenu font color field
function luxe_mobile_menu_slide_container_submenu_font_color_field_callback()
{
    $container_submenu_font_color = get_option('luxe_mobile_menu_slide_container_submenu_font_color', '#ffffff');
    // echo '<input type="color" name="luxe_mobile_menu_slide_container_submenu_font_color" value="' . esc_attr($container_submenu_font_color) . '">';
    echo "<style>
    .luxe-ham-bg-color5 .pickr{
    background-color:$container_submenu_font_color;
  }
    </style>";

    echo '<div class="luxe-ham-bg-color5" id="luxe-color5">';
    echo "<div id='colorPickerField5' class='color-picker-field' style='background-color:" . esc_attr($container_submenu_font_color) . "'></div>";
    echo " <label>
    <input type='hidden' id='colorValue5' name='luxe_mobile_menu_slide_container_submenu_font_color' value=" . esc_attr($container_submenu_font_color) . ">
  </label>";
    echo '</div>';
    
}

// callback function for submenu font size
function luxe_mobile_menu_slide_container_sub_font_size_field_callback()
{
    $selected = '';
    global $size_units;
    $html = '';
    // getting the font size 
    $container_submenu_font_size = get_option('luxe_mobile_menu_slide_container_sub_font_size', '16');
    // getting the font size unit
    $submenu_font_size_unit = get_option('luxe_mobile_menu_slide_container_sub_font_size_unit', 'px');
    // printing the input field 
    echo '<input type="number" name="luxe_mobile_menu_slide_container_sub_font_size" id="luxe_mobile_menu_slide_container_sub_font_size" step="0.1" value="' . esc_attr($container_submenu_font_size) . '">';

    $html .= '<select name="luxe_mobile_menu_slide_container_sub_font_size_unit" id="luxe_mobile_menu_slide_container_sub_font_size_unit">';
    foreach ($size_units as $size_unit => $size_unit_label) {
        // Check if the current option is selected
        if ($submenu_font_size_unit == $size_unit) {
            $selected = 'selected';
        }
        // Add an option to the select dropdown
        $html .= '<option value="' . $size_unit . '" ' . $selected . '>' . $size_unit_label . '</option>';
        // Reset the selected variable for the next iteration
        $selected = '';
    }
    // Output the generated HTML for the select dropdown
    echo $html;
}

function luxe_mobile_menu_slide_container_sub_line_height_callback()
{
    // Variable initialization
    $selected = '';
    $html = '';
    global $size_units;

    // Retrieve the saved menu line height options
    $menu_line_height = get_option('luxe_mobile_menu_slide_container_sub_line_height', 10);
    $menu_line_height_unit = get_option('luxe_mobile_menu_slide_container_sub_line_height_unit', 'px');

    // Display an input field for the menu line height value
    echo '<input placeholder="" id="luxe_mobile_menu_slide_container_sub_line_height" type="number" step="0.1" name="luxe_mobile_menu_slide_container_sub_line_height" value="' .$menu_line_height . '">';

    // Generate a select dropdown for the line height units
    $html .= '<select name="luxe_mobile_menu_slide_container_sub_line_height_unit" id="luxe_mobile_menu_slide_container_sub_line_height_unit">';
    foreach ($size_units as $size_unit => $size_unit_label) {
        // Check if the current option is selected
        if ($menu_line_height_unit == $size_unit) {
            $selected = 'selected';
        }
        // Add an option to the select dropdown
        $html .= '<option value="' . $size_unit . '" ' . $selected . '>' . $size_unit_label . '</option>';
        // Reset the selected variable for the next iteration
        $selected = '';
    }
    // Output the generated HTML for the select dropdown
    echo $html;
}
