<?php
 $this->start_controls_section(
    'luxe_hamburger',
    [
        'label' => 'Hamburger Styles',
        'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_color',
    [
        'label' => 'Hamburger Line Color',
        'type' => \Elementor\Controls_Manager::COLOR,
        'default' => get_option('luxe_mobile_menu_slide_hamburger_color', '#fffff'),
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_background_color',
    [
        'label' => 'Hamburger Background Color',
        'type' => \Elementor\Controls_Manager::COLOR,
        'default' => get_option('luxe_mobile_menu_slide_background_color', '#000')
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_icon_position',
    [
        'label' => 'Hamburger Icon Position',
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            'normal' => 'Inline',
            'left' => 'Position Left',
            'right' => 'Position Right',
            'center' => 'Position Middle',
        ],
        'default' => get_option('luxe_mobile_menu_slide_hamburger_icon_position', 'normal'),

    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_width',
    [
        'label' => 'Width (px)',
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => get_option('luxe_mobile_menu_slide_hamburger_width', '40'),
        'step' => 0.1,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_height',
    [
        'label' => 'Height (px)',
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => get_option('luxe_mobile_menu_slide_hamburger_height', '40'),

        'step' => 0.1,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_padding',
    [
        'label' => 'Padding (px)',
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => get_option('luxe_mobile_menu_slide_hamburger_padding', 10),

        'step' => 0.1,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_border_radius',
    [
        'label' => 'Border Radius (%)',
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => get_option('luxe_mobile_menu_slide_hamburger_border_radius', 5),

        'step' => 0.1,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_line_thickness',
    [
        'label' => 'Line Thickness (px)',
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => get_option('luxe_mobile_menu_slide_hamburger_line_thickness', '3'),

        'step' => 0.1,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_line_gap',
    [
        'label' => 'Line Gap (%)',
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => get_option('luxe_mobile_menu_slide_hamburger_line_gap', 50),

        'step' => 0.1,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_line_length',
    [
        'label' => 'Line Length (%)',
        'type' => \Elementor\Controls_Manager::NUMBER,
        'default' => get_option('luxe_mobile_menu_slide_hamburger_line_length', 50),

        'step' => 0.1,
    ]
);
$this->add_control(
    'luxe_mobile_menu_slide_hamburger_icon_styles',
    [
        'label' => 'Hamburger Animation Style',
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            'style_1' => 'Style 1',
            'style_2' => 'Style 2',
            'style_3' => 'Style 3',
            'style_4' => 'Style 4',
        ],
        'default' => get_option('luxe_mobile_menu_slide_hamburger_icon_styles', 'text_animation_fade_in'),


    ]
);



$this->end_controls_section();