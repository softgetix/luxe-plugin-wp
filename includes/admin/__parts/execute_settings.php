<?php
function get_babaji_ki_buti_register_setting_ke_liye()
{
    $buti_mil_gyi = get_option('luxe_mobile_menu_slide_licence_field', '');




    // write here the curl code

    if ($buti_mil_gyi === 'gautam1234567890') {
        return true;
    } else {
        return false;
    }
}


if (get_babaji_ki_buti_register_setting_ke_liye() === true) {
    register_setting('luxe_mobile_menu_slide_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_line_thickness');
    register_setting('luxe_mobile_menu_slide_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_line_length');
    register_setting('luxe_mobile_menu_slide_settings_settingPage', 'luxe_mobile_menu_slide_hamburger_line_gap');
    register_setting('luxe_mobile_menu_slide_settings_settingPage', 'luxe_mobile_menu_slide_container_stagger_animation
');
}