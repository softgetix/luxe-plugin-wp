<?php
use Elementor\Widget_Base;

class LuxeMobileMenuSlide_Elementor_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'luxe_mobile_menu_slide';
    }

    public function get_title()
    {
        return 'Luxe - at the start';
    }


    protected function _register_controls()
    {
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
            'luxe_mobile_menu_slide_hamburger_border_radius',
            [
                'label' => 'Line Thickness (px)',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => get_option('luxe_mobile_menu_slide_hamburger_border_radius', '3'),

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
        $this->start_controls_section(
            'luxe_text_styles',
            [
                'label' => 'Typography styles',
                'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
            ]
        );
        $this->add_control(
            'luxe_mobile_menu_slide_container_font_color',
            [
                'label' => 'Font Colour',
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => get_option('luxe_mobile_menu_slide_container_font_color', '#fff'),
            ]
        );
        $this->add_control(
            'luxe_mobile_menu_slide_container_font_size',
            [
                'label' => 'Font Size',
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'vw', 'em', 'rem'],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'vw' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                ],
            ]
        );
        
        $this->add_control(
            'luxe_mobile_menu_slide_container_font_line_height',
            [
                'label' => 'Line Height',
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'vw', 'em', 'rem'],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'vw' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                ],
            ]
        );

        $this->add_control(
            'luxe_mobile_menu_slide_container_submenu_font_color',
            [
                'label' => 'Sub Menu Font Colour',
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => get_option( 'luxe_mobile_menu_slide_container_submenu_font_color', '#fff' )
            ]
        );
        $this->add_control(
            'luxe_mobile_menu_slide_container_sub_font_size',
            [
                'label' => 'Sub Menu Font Size',
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'vw', 'em', 'rem'],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'vw' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                ],
            ]
        );

        $this->add_control(
            'luxe_mobile_menu_slide_container_sub_line_height',
            [
                'label' => 'Sub Menu Line Height',
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'vw', 'em', 'rem'],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'vw' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                ],
            ]
        );

        $this->add_control(
            'luxe_mobile_menu_slide_container_font_animation',
            [
                'label' => 'Animations Styles',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'text_animation_fade_in' => 'Fade In',
                    'luxe_text_animation_fade_down' => 'Fade Down',
                    'luxe_text_animation_fade_left' => 'Fade Left',
                    'luxe_text_animation_fade_right' => 'Fade Right',
                    'luxe_text_animation_fade_up' => 'Fade Up'
                ],
                'default' => get_option('luxe_mobile_menu_slide_container_font_animation', 'text_animation_fade_in'),


            ]
        );
        $this->add_control(
            'luxe_mobile_menu_slide_container_stagger_animation',
            [
                'label' => 'Stagger Animation',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Yes',
                    '0' => 'No'
                ],
                'default' => get_option('luxe_mobile_menu_slide_container_stagger_animation', 0),
                'pro_label' => true,


            ]
        );

        $this->end_controls_section();

    }



    protected function render()
    {
        // Render the output of the widget
        $settings = $this->get_settings_for_display();

        // Save the control value to the option
        update_option('luxe_mobile_menu_slide_select_menu', $settings['luxe_choose_a_menu']);

        update_option('luxe_mobile_menu_slide_hamburger_color', $settings['luxe_mobile_menu_slide_hamburger_color']);
        update_option('luxe_mobile_menu_slide_background_color', $settings['luxe_mobile_menu_slide_background_color']);
        update_option('luxe_mobile_menu_slide_hamburger_icon_position', $settings['luxe_mobile_menu_slide_hamburger_icon_position']);
        update_option('luxe_mobile_menu_slide_hamburger_width', $settings['luxe_mobile_menu_slide_hamburger_width']);
        update_option('luxe_mobile_menu_slide_hamburger_height', $settings['luxe_mobile_menu_slide_hamburger_height']);
        update_option('luxe_mobile_menu_slide_hamburger_padding', $settings['luxe_mobile_menu_slide_hamburger_padding']);
        update_option('luxe_mobile_menu_slide_hamburger_border_radius', $settings['luxe_mobile_menu_slide_hamburger_border_radius']);
        update_option('luxe_mobile_menu_slide_container_background_color', $settings['luxe_mobile_menu_slide_container_background_color']);
        update_option('luxe_mobile_menu_slide_container_font_color', $settings['luxe_mobile_menu_slide_container_font_color']);
        update_option('luxe_mobile_menu_slide_container_font_size', $settings['luxe_mobile_menu_slide_container_font_size']);
        update_option('luxe_mobile_menu_slide_container_font_size_unit', $settings['luxe_mobile_menu_slide_container_font_size']['unit']);
        update_option('luxe_mobile_menu_slide_container_font_line_height', $settings['luxe_mobile_menu_slide_container_font_line_height']);
        update_option('luxe_mobile_menu_slide_container_line_height_unit', $settings['luxe_mobile_menu_slide_container_font_line_height']['unit']);


        update_option('luxe_mobile_menu_slide_container_submenu_font_color', $settings['luxe_mobile_menu_slide_container_submenu_font_color']);
        update_option('luxe_mobile_menu_slide_container_sub_font_size', $settings['luxe_mobile_menu_slide_container_sub_font_size']);
        update_option('luxe_mobile_menu_slide_container_sub_font_size_unit', $settings['luxe_mobile_menu_slide_container_sub_font_size']['unit']);
        update_option('luxe_mobile_menu_slide_container_sub_line_height', $settings['luxe_mobile_menu_slide_container_sub_line_height']);
        update_option('luxe_mobile_menu_slide_container_sub_line_height_unit', $settings['luxe_mobile_menu_slide_container_sub_line_height']['unit']);

        // pro

        update_option('luxe_mobile_menu_slide_hamburger_border_radius', $settings['luxe_mobile_menu_slide_hamburger_border_radius']);

        update_option('luxe_mobile_menu_slide_hamburger_line_gap', $settings['luxe_mobile_menu_slide_hamburger_line_gap']);

        update_option('luxe_mobile_menu_slide_hamburger_line_length', $settings['luxe_mobile_menu_slide_hamburger_line_length']);
        update_option('luxe_mobile_menu_slide_hamburger_icon_styles', $settings['luxe_mobile_menu_slide_hamburger_icon_styles']);

        update_option('luxe_mobile_menu_slide_toggle_animation', $settings['luxe_mobile_menu_slide_toggle_animation']);

        update_option('luxe_mobile_menu_slide_container_font_animation', $settings['luxe_mobile_menu_slide_container_font_animation']);

        update_option('luxe_mobile_menu_slide_container_stagger_animation', $settings['luxe_mobile_menu_slide_container_stagger_animation']);


        luxe_mobile_menu_slide_mobile_menu();
    }

}