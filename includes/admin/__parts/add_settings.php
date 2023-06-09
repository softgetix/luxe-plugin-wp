<?php
// Ham icon color
add_settings_field('luxe_mobile_menu_slide_hamburger_color_field', 'Line Colour', 'luxe_mobile_menu_slide_hamburger_color_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');
// Ham background color
add_settings_field('luxe_mobile_menu_slide_background_color_field', 'Hamburger Background Colour', 'luxe_mobile_menu_slide_background_color_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');
// Ham icon position
add_settings_field('luxe_mobile_menu_slide_hamburger_icon_position_field', 'Hamburger Icon Position', 'luxe_mobile_menu_slide_hamburger_icon_position_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');

// Ham icon size
add_settings_field('luxe_mobile_menu_slide_hamburger_width_field', 'Width', 'luxe_mobile_menu_slide_hamburger_width_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');
add_settings_field('luxe_mobile_menu_slide_hamburger_height_field', 'Height', 'luxe_mobile_menu_slide_hamburger_height_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');
// Ham container padding
add_settings_field('luxe_mobile_menu_slide_hamburger_padding_field', 'Padding', 'luxe_mobile_menu_slide_hamburger_padding_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');
// Ham container border radius
add_settings_field('luxe_mobile_menu_slide_hamburger_border_radius_field', 'Border Radius', 'luxe_mobile_menu_slide_hamburger_border_radius_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');


// ham line thickness

add_settings_field('luxe_mobile_menu_slide_hamburger_line_thickness', 'Line Thickness <span class="pro-badge">Pro <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="0.875em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg></span>', 'luxe_mobile_menu_slide_hamburger_line_thickness_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');

add_settings_field('luxe_mobile_menu_slide_hamburger_line_gap', 'Line Gap <span class="pro-badge">Pro <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="0.875em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg></span>', 'luxe_mobile_menu_slide_hamburger_line_gap_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');
add_settings_field('luxe_mobile_menu_slide_hamburger_line_length', 'Line Length <span class="pro-badge">Pro <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="0.875em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg></span>', 'luxe_mobile_menu_slide_hamburger_line_length_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');


// Ham icon styles
add_settings_field('luxe_mobile_menu_slide_hamburger_icon_styles_field', 'Animation Styles <span class="pro-badge">Pro <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="0.875em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg></span>', 'luxe_mobile_menu_slide_hamburger_icon_styles_field_callback', 'luxe_mobile_menu_slide_a_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_section');


// ............................. Hamburger settings fields ends................................... //


// ............................. Menu text settings fields starts................................... //

// Menu font color
add_settings_field('luxe_mobile_menu_slide_container_font_color_field', 'Font Color', 'luxe_mobile_menu_slide_container_font_color_field_callback', 'luxe_mobile_menu_typogrophy_section_settingPage', 'luxe_mobile_menu_typogrophy_section');
// menu font size
add_settings_field('luxe_mobile_menu_slide_container_font_size_field', 'Font Size', 'luxe_mobile_menu_slide_container_font_size_field_callback', 'luxe_mobile_menu_typogrophy_section_settingPage', 'luxe_mobile_menu_typogrophy_section');
//menu line height
add_settings_field('luxe_mobile_menu_slide_container_font_line_height_field', 'Line Height', 'luxe_mobile_menu_slide_container_font_line_height_field_callback', 'luxe_mobile_menu_typogrophy_section_settingPage', 'luxe_mobile_menu_typogrophy_section');

// Submenu font color
add_settings_field('luxe_mobile_menu_slide_container_submenu_font_color_field', 'Submenu Font Color', 'luxe_mobile_menu_slide_container_submenu_font_color_field_callback', 'luxe_mobile_menu_typogrophy_section_settingPage', 'luxe_mobile_menu_typogrophy_section');

add_settings_field('luxe_mobile_menu_slide_container_sub_font_size_field', 'Font Size', 'luxe_mobile_menu_slide_container_sub_font_size_field_callback', 'luxe_mobile_menu_typogrophy_section_settingPage', 'luxe_mobile_menu_typogrophy_section');

add_settings_field('luxe_mobile_menu_slide_container_sub_line_height', 'Line Height', 'luxe_mobile_menu_slide_container_sub_line_height_callback', 'luxe_mobile_menu_typogrophy_section_settingPage', 'luxe_mobile_menu_typogrophy_section');




// Menu and submenu font size


// ............................. Menu text settings fields ends................................... //


// ............................. Animation settings fields starts ................................... //

// Font entry animation
add_settings_field('luxe_mobile_menu_slide_container_font_animation_field', 'Animation Styles <span class="pro-badge">Pro <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="0.875em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg></span>', 'luxe_mobile_menu_slide_container_font_animation_field_callback', 'luxe_mobile_menu_typogrophy_section_settingPage', 'luxe_mobile_menu_typogrophy_section');

add_settings_field('luxe_mobile_menu_slide_container_stagger_animation', 'Stagger Animation <span class="pro-badge">Pro <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="0.875em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg></span>', 'luxe_mobile_menu_slide_container_stagger_animation_field_callback', 'luxe_mobile_menu_typogrophy_section_settingPage', 'luxe_mobile_menu_typogrophy_section');


// Dropdown toggle animation


// ............................. Animation settings fields ends ................................... //


// .......................... Toggle dropdown container settings fields start ......................... //

// Add setting field for dropdown container background 
add_settings_field('luxe_mobile_menu_slide_container_background_color_field', 'Background Colour', 'luxe_mobile_menu_slide_container_background_color_field_callback', 'luxe_mobile_menu_slide_background_overlays_section_settingPage', 'luxe_mobile_menu_slide_background_overlays_section');
add_settings_field('luxe_mobile_menu_slide_toggle_animation_field', 'Background Animation', 'luxe_mobile_menu_slide_toggle_animation_field_callback', 'luxe_mobile_menu_slide_background_overlays_section_settingPage', 'luxe_mobile_menu_slide_background_overlays_section');

// .......................... Toggle dropdown container settings fields ends ......................... //

// .......................... Replace and hide headers settings fields start ......................... //

// Select a Menu
add_settings_field('luxe_mobile_menu_slide_select_menu_field', 'Choose a Menu', 'luxe_mobile_menu_slide_select_menu_field_callback', 'luxe_mobile_menu_slide_settings_settingPage', 'luxe_mobile_menu_slide_settings_section');

// Add setting field for replace luxe heaader from mobile
// add_settings_field('luxe_mobile_menu_slide_replace_luxe_header_mobile_field', 'Hide luxe header from mobile', 'luxe_mobile_menu_slide_replace_luxe_header_mobile_field_callback', 'luxe_mobile_menu_slide_settings_settingPage', 'luxe_mobile_menu_slide_settings_section');

// Add setting field for replace luxe heaader from desktop
// add_settings_field('luxe_mobile_menu_slide_replace_luxe_header_desktop_field', 'Hide luxe header from desktop', 'luxe_mobile_menu_slide_replace_luxe_header_desktop_field_callback', 'luxe_mobile_menu_slide_settings_settingPage', 'luxe_mobile_menu_slide_settings_section');