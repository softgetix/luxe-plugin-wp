<?php
$this->start_controls_section(
    'luxe_background_styles',
    [
        'label' => 'Background overlays styles',
        'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_container_background_color',
    [
        'label' => 'Background Colour',
        'type' => \Elementor\Controls_Manager::COLOR,
        'default' => get_option('luxe_mobile_menu_slide_container_background_color', '#000')
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_toggle_animation',
    [
        'label' => 'Animations Styles',
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            'luxe-background-animation-fade' => 'Fade',
            'luxe-background-animation-fade-left' => 'Slide Left',
            'luxe-background-animation-fade-right' => 'Slide Right',
            'luxe-background-animation-fade-down' => 'Slide Down',

            'luxe-background-animation-fade-up' => 'Slide Up',
        ],
        'default' => get_option('luxe_mobile_menu_slide_toggle_animation', 'luxe-background-animation-fade'),


    ]
);


$this->end_controls_section();