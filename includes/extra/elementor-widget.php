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
        require(plugin_dir_path(__FILE__) . 'includes/choose-menu.php');
        require(plugin_dir_path(__FILE__) . 'includes/hamburger-styles.php');
        require(plugin_dir_path(__FILE__) . 'includes/background-styles.php');


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
        // $this->add_control(
        //     'luxe_mobile_menu_slide_container_font_size',
        //     [
        //         'label' => 'Font Size',
        //         'type' => \Elementor\Controls_Manager::SLIDER,
        //         'size_units' => ['px', 'vw', 'em', 'rem'],
        //         'default' => [
        //             'unit' => get_option('luxe_mobile_menu_slide_container_font_size_unit', 'px'),
        //             'size' => get_option('luxe_mobile_menu_slide_container_font_size', 12),
        //         ],
        //         'range' => [
        //             'px' => [
        //                 'min' => 0,
        //                 'max' => 100,
        //             ],
        //             'vw' => [
        //                 'min' => 0,
        //                 'max' => 100,
        //             ],
        //             'em' => [
        //                 'min' => 0,
        //                 'max' => 10,
        //                 'step' => 0.1,
        //             ],
        //             'rem' => [
        //                 'min' => 0,
        //                 'max' => 10,
        //                 'step' => 0.1,
        //             ],
        //         ],
        //     ]
        // );

        // $this->add_control(
        //     'luxe_mobile_menu_slide_container_font_line_height',
        //     [
        //         'label' => 'Line Height',
        //         'type' => \Elementor\Controls_Manager::SLIDER,
        //         'size_units' => ['px', 'vw', 'em', 'rem'],
        //         'default' => [
        //             'size' => get_option('luxe_mobile_menu_slide_container_font_line_height_unit', 'px'),
        //             'unit' => get_option('luxe_mobile_menu_slide_container_font_line_height', 12),
        //         ],
        //         'range' => [
        //             'px' => [
        //                 'min' => 0,
        //                 'max' => 100,
        //             ],
        //             'vw' => [
        //                 'min' => 0,
        //                 'max' => 100,
        //             ],
        //             'em' => [
        //                 'min' => 0,
        //                 'max' => 10,
        //                 'step' => 0.1,
        //             ],
        //             'rem' => [
        //                 'min' => 0,
        //                 'max' => 10,
        //                 'step' => 0.1,
        //             ],
        //         ],
        //     ]
        // );


        $this->add_control(
            'luxe_mobile_menu_slide_container_font_size',
            [
                'label' => 'Font Size',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => get_option('luxe_mobile_menu_slide_container_font_size', 12),

                'step' => 0.1,

            ]
        );
        $this->add_control(
            'luxe_mobile_menu_slide_container_font_size_unit',
            [
                'label' => 'Font Size Unit',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'px' => 'px',
                    'vw' => 'vw',
                    'em' => 'em',
                    'rem' => 'rem',
                ],
                'default' => get_option('luxe_mobile_menu_slide_container_font_size_unit', 'px'),

            ]
        );
        $this->add_control(
            'luxe_mobile_menu_slide_container_font_line_height',
            [
                'label' => 'Line Height',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => get_option('luxe_mobile_menu_slide_container_font_line_height', 12),

                'step' => 0.1,

            ]
        );


        $this->add_control(
            'luxe_mobile_menu_slide_container_line_height_unit',
            [
                'label' => 'Line Height Unit',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'px' => 'px',
                    'vw' => 'vw',
                    'em' => 'em',
                    'rem' => 'rem',
                ],
                'default' => get_option('luxe_mobile_menu_slide_container_line_height_unit', 'px'),
            ]
        );


        $this->add_control(
            'luxe_mobile_menu_slide_container_submenu_font_color',
            [
                'label' => 'Sub Menu Font Colour',
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => get_option('luxe_mobile_menu_slide_container_submenu_font_color', '#fff')
            ]
        );
        // $this->add_control(
        //     'luxe_mobile_menu_slide_container_sub_font_size',
        //     [
        //         'label' => 'Sub Menu Font Size',
        //         'type' => \Elementor\Controls_Manager::SLIDER,
        //         'size_units' => ['px', 'vw', 'em', 'rem'],
        //         'default' => [
        //             'unit' => get_option('luxe_mobile_menu_slide_container_sub_font_size_unit', 'px'),
        //             'size' => get_option('luxe_mobile_menu_slide_container_sub_font_size', 12),
        //         ],
        //         'range' => [
        //             'px' => [
        //                 'min' => 0,
        //                 'max' => 100,
        //             ],
        //             'vw' => [
        //                 'min' => 0,
        //                 'max' => 100,
        //             ],
        //             'em' => [
        //                 'min' => 0,
        //                 'max' => 10,
        //                 'step' => 0.1,
        //             ],
        //             'rem' => [
        //                 'min' => 0,
        //                 'max' => 10,
        //                 'step' => 0.1,
        //             ],
        //         ],
        //     ]
        // );
        $this->add_control(
            'luxe_mobile_menu_slide_container_sub_font_size',
            [
                'label' => 'Sub Menu Font Size',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => get_option('luxe_mobile_menu_slide_container_sub_font_size', 12),

            ]
        );

        $this->add_control(
            'luxe_mobile_menu_slide_container_sub_font_size_unit',
            [
                'label' => 'Sub Menu Font Size Unit',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'px' => 'px',
                    'vw' => 'vw',
                    'em' => 'em',
                    'rem' => 'rem',
                ],
                'default' => get_option('luxe_mobile_menu_slide_container_sub_font_size_unit', 'px'),
                'save_default' => true,
            ]
        );


        // $this->add_control(
        //     'luxe_mobile_menu_slide_container_sub_line_height',
        //     [
        //         'label' => 'Sub Menu Line Height',
        //         'type' => \Elementor\Controls_Manager::SLIDER,
        //         'size_units' => ['px', 'vw', 'em', 'rem'],
        //         'default' => [
        //             'unit' => get_option('luxe_mobile_menu_slide_container_sub_line_height_unit', 'px'),
        //             'size' => get_option('luxe_mobile_menu_slide_container_sub_line_height', 12),
        //         ],
        //         'range' => [
        //             'px' => [
        //                 'min' => 0,
        //                 'max' => 100,
        //             ],
        //             'vw' => [
        //                 'min' => 0,
        //                 'max' => 100,
        //             ],
        //             'em' => [
        //                 'min' => 0,
        //                 'max' => 10,
        //                 'step' => 0.1,
        //             ],
        //             'rem' => [
        //                 'min' => 0,
        //                 'max' => 10,
        //                 'step' => 0.1,
        //             ],
        //         ],
        //         'save_default' => true, // Add this line to enable saving the value in the option table
        //         'sanitize_callback' => function ($value) {
        //             // Sanitize the value if necessary
        //             return $value;
        //         },
        //         'update_control' => function ($control, $value) {
        //             // Update the option values when the control value is changed
        //             update_option('luxe_mobile_menu_slide_container_sub_line_height', $value['size']);
        //             update_option('luxe_mobile_menu_slide_container_sub_line_height_unit', $value['unit']);
        //             $control->refresh();
        //         },
        //     ]
        // );

        $this->add_control(
            'luxe_mobile_menu_slide_container_sub_line_height',
            [
                'label' => 'Sub Menu Line Height',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => get_option('luxe_mobile_menu_slide_container_sub_line_height', 12),
                'save_default' => true,
            ]
        );

        $this->add_control(
            'luxe_mobile_menu_slide_container_sub_line_height_unit',
            [
                'label' => 'Sub Menu Line Height Unit',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'px' => 'px',
                    'vw' => 'vw',
                    'em' => 'em',
                    'rem' => 'rem',
                ],
                'default' => get_option('luxe_mobile_menu_slide_container_sub_line_height_unit', 'px'),
                'save_default' => true,


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
        update_option('luxe_mobile_menu_slide_container_font_size_unit', $settings['luxe_mobile_menu_slide_container_font_size_unit']);
        update_option('luxe_mobile_menu_slide_container_font_line_height', $settings['luxe_mobile_menu_slide_container_font_line_height']);
        update_option('luxe_mobile_menu_slide_container_line_height_unit', $settings['luxe_mobile_menu_slide_container_line_height_unit']);
        update_option('luxe_mobile_menu_slide_hamburger_line_thickness', $settings['luxe_mobile_menu_slide_hamburger_line_thickness']);


        update_option('luxe_mobile_menu_slide_container_submenu_font_color', $settings['luxe_mobile_menu_slide_container_submenu_font_color']);

        update_option('luxe_mobile_menu_slide_container_sub_font_size', $settings['luxe_mobile_menu_slide_container_sub_font_size']);
        update_option('luxe_mobile_menu_slide_container_sub_font_size_unit', $settings['luxe_mobile_menu_slide_container_sub_font_size_unit']);

        update_option('luxe_mobile_menu_slide_container_sub_line_height', $settings['luxe_mobile_menu_slide_container_sub_line_height']);

        update_option('luxe_mobile_menu_slide_container_sub_line_height_unit', $settings['luxe_mobile_menu_slide_container_sub_line_height_unit']);



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