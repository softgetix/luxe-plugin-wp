<?php
$this->start_controls_section(
    'section_menu',
    [
        'label' => 'Menu',
        'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
    ]
);

$menus = wp_get_nav_menus();
$menu_options = array();

foreach ($menus as $menu) {
    $menu_options[$menu->term_id] = $menu->name;
}

$this->add_control(
    'luxe_choose_a_menu',
    [
        'label' => 'Choose a Menu',
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => $menu_options,
        'default' => get_option('luxe_mobile_menu_slide_select_menu', 'default_value'),
        'render' => function () {
            $control_id = 'luxe_choose_a_menu';
            $control_settings = $this->get_settings_for_display();

            echo '<select id="' . $control_id . '" data-setting="' . $control_settings['choose_a_menu'] . '">';

            foreach ($control_settings['choose_a_menu'] as $value => $label) {
                $selected = selected($value, $control_settings['choose_a_menu'], false);
                echo '<option value="' . $value . '"' . $selected . '>' . $label . '</option>';
            }

            echo '</select>';
        }
    ]
);

$this->end_controls_section();