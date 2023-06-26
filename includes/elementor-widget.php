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
            'choose_a_menu',
            [
                'label' => 'Choose a Menu',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $menu_options,
              
                'render' => function () {
                    $control_id = 'luxe_choose_a_menu';
                    $control_settings = $this->get_settings_for_display();

                    echo '<select id="' . $control_id . '" data-setting="' . $control_settings['choose_a_menu'] . '">';

                    foreach ($control_settings['choose_a_menu'] as $value => $label) {
                        echo '<option value="' . $value . '">' . $label . '</option>';
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
            'luxe_hamburger_line_color',
            [
                'label' => 'Hamburger Line Color',
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'luxe_hamburger_background_color',
            [
                'label' => 'Hamburger Background Color',
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'luxe_hamburger_icon_position',
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
            'luxe_hamburger_width',
            [
                'label' => 'Width',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,

                'step' => 0.1,
            ]
        );
        $this->add_control(
            'luxe_hamburger_height',
            [
                'label' => 'Height',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,

                'step' => 0.1,
            ]
        );
        $this->add_control(
            'luxe_hamburger_padding',
            [
                'label' => 'Padding',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,

                'step' => 0.1,
            ]
        );
        $this->add_control(
            'luxe_hamburger_border_radius',
            [
                'label' => 'Border Radius',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,

                'step' => 0.1,
            ]
        );
        $this->add_control(
            'luxe_hamburger_line_thickness',
            [
                'label' => 'Line Thickness',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,

                'step' => 0.1,
            ]
        );
        $this->add_control(
            'luxe_hamburger_line_gap',
            [
                'label' => 'Line Gap',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,

                'step' => 0.1,
            ]
        );
        $this->add_control(
            'luxe_hamburger_line_length',
            [
                'label' => 'Line Length',
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 0,

                'step' => 0.1,
            ]
        );
        $this->add_control(
            'luxe_hamburger_icon_position',
            [
                'label' => 'Hamburger Icon Position',
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



        $this->end_controls_section();
        $this->start_controls_section(
            'luxe_background_styles',
            [
                'label' => 'Background overlays styles',
                'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
            ]
        );
        $this->add_control(
            'luxe_hamburger_background_overlays_color',
            [
                'label' => 'Background Colour',
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'luxe_hamburger_background_overlays_animation_styles',
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
                'default' => get_option('luxe_mobile_menu_slide_container_font_animation', 'text_animation_fade_in'),


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
            'luxe_hamburger_font_color',
            [
                'label' => 'Font Colour',
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'luxe_hamburger_font_size',
            [
                'label' => 'Font Size',
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
            ]
        );
        $this->add_control(
            'luxe_hamburger_line_height',
            [
                'label' => 'Line Height',
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
            ]
        );
        $this->add_control(
            'luxe_hamburger_sub_font_color',
            [
                'label' => 'Sub Menu Font Colour',
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );
        $this->add_control(
            'luxe_hamburger_sub_font_size',
            [
                'label' => 'Sub Menu Font Size',
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
            ]
        );
        $this->add_control(
            'luxe_hamburger_sub_line_height',
            [
                'label' => 'Sub Menu Line Height',
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
            ]
        );
        $this->add_control(
            'luxe_hamburger_font_animation_styles',
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
            'luxe_hamburger_stagger_animation',
            [
                'label' => 'Stagger Animation',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Yes',
                    '0' => 'No'
                ],
                'default' => '0',
                'pro_label' => true,


            ]
        );

        $this->end_controls_section();

    }



    protected function render()
    {
        // Render the output of the widget
        luxe_mobile_menu_slide_mobile_menu();
    }

}