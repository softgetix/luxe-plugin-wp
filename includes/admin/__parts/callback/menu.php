<?php
// Callback function for the dropdown container font size
function luxe_mobile_menu_slide_container_font_size_field_callback()
{
    // Variable initialization
    $selected = '';
    $html = '';
    global $size_units;

    // Retrieve the saved container font size options
    $container_font_size = get_option('luxe_mobile_menu_slide_container_font_size', 25);
    $container_font_size_unit = get_option('luxe_mobile_menu_slide_container_font_size_unit', 'px');

    // Generate an input field for the container font size value
    $html .= '<input placeholder="ex : 15" type="number" step="0.1" name="luxe_mobile_menu_slide_container_font_size" value="' . $container_font_size . '">';

    // Generate a select dropdown for the font size units
    $html .= '<select name="luxe_mobile_menu_slide_container_font_size_unit">';
    foreach ($size_units as $size_unit => $size_unit_label) {
        // Check if the current option is selected
        if ($container_font_size_unit == $size_unit) {
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


// Humburger type like round and normal 

function luxe_mobile_menu_slide_container_font_line_height_field_callback()
{
    // Variable initialization
    $selected = '';
    $html = '';
    global $size_units;

    // Retrieve the saved menu line height options
    $menu_line_height = get_option('luxe_mobile_menu_slide_container_font_line_height', '10');
    $menu_line_height_unit = get_option('luxe_mobile_menu_slide_container_line_height_unit', 'px');

    // Display an input field for the menu line height value
    echo '<input placeholder="ex :  15" step="0.1" type="number" name="luxe_mobile_menu_slide_container_font_line_height" value="' . esc_attr($menu_line_height) . '">';

    // Generate a select dropdown for the line height units
    $html .= '<select name="luxe_mobile_menu_slide_container_line_height_unit">';
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


function luxe_mobile_menu_slide_container_font_animation_field_callback()
{
    $text_animation = get_option('luxe_mobile_menu_slide_container_font_animation', 'animation_none');

    // Define the available types for the dropdown
    // $types = array(
    //     'animation_none' => 'Fade In',
    //     'animation_one' => 'Fade Down',
    //     'animation_two' => 'Fade Left',
    //     'animation_three' => 'Fade Right',
    //     'fade_up' => 'Fade Up'
    // );

    $types = array(
        'text_animation_fade_in' => 'Fade In',
        'luxe_text_animation_fade_down' => 'Fade Down',
        'luxe_text_animation_fade_left' => 'Fade Left',
        'luxe_text_animation_fade_right' => 'Fade Right',
        'luxe_text_animation_fade_up' => 'Fade Up'
    );
    $html = '<div class="hamburgers_container text-animation">';

    $bgchecked_class = '';
    foreach ($types as $type => $bganimation_label) {
        if ($type == $text_animation) {
            $bgchecked_class = 'checked';
        }
        $html .= '<label for="' . $type . '" class="text-animation-label ' . $bgchecked_class . '">
 <span class="luxe-background-animation-name">' . $bganimation_label . '</span>
  <input type="radio" id="' . $type . '" ' . $bgchecked_class . ' name="luxe_mobile_menu_slide_container_font_animation" value="' . esc_attr($type) . '" />
      </label> ';


        $bgchecked_class = '';
    }
    $html .= '</div>';
    echo $html;

}

function luxe_mobile_menu_slide_container_stagger_animation_field_callback()
{

    $html = '';
    $stagger_animation = get_option('luxe_mobile_menu_slide_container_stagger_animation', 1);
    
    $html .= '<select name="luxe_mobile_menu_slide_container_stagger_animation">';
    $html .= '<option' . ($stagger_animation ? '' : ' selected') . ' value="0">No</option>';
    $html .= '<option' . ($stagger_animation ? ' selected' : '') . ' value="1">Yes</option>';
    $html .= '</select>';
    $html .= '<label class="luxe-dashboard-label"> </label>' ;
    
    echo $html;
    



}