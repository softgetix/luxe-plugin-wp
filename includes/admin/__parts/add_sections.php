<?php

// Add setting section
add_settings_section('luxe_mobile_menu_slide_colors_section', 'Customize styles', 'luxe_mobile_menu_slide_colors_section_callback', 'luxe_mobile_menu_slide_settings');

add_settings_section('luxe_mobile_menu_slide_settings_section', 'Customize Settings', 'luxe_mobile_menu_slide_colors_section_callback', 'luxe_mobile_menu_slide_settings_settingPage');


//section for hamburger settings

add_settings_section('luxe_mobile_menu_slide_hamburger_section', 'Hamburger Styles', 'luxe_mobile_menu_slide_hamburger_section_callback', 'luxe_mobile_menu_slide_a_settings_settingPage');

// background overlay section

add_settings_section('luxe_mobile_menu_slide_background_overlays_section', 'Background overlays styles', 'luxe_mobile_menu_slide_hamburger_section_callback', 'luxe_mobile_menu_slide_background_overlays_section_settingPage');
//   section for menu typography
add_settings_section('luxe_mobile_menu_typogrophy_section', 'Typography styles', 'luxe_mobile_menu_slide_hamburger_section_callback', 'luxe_mobile_menu_typogrophy_section_settingPage');


// add_setting_section for licence
add_settings_section('luxe_mobile_menu_licence_section', 'Licence Details', 'luxe_mobile_menu_slide_hamburger_section_callback', 'luxe-mobile-menu-slide-licence');

