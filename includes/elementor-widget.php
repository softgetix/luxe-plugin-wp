<?php
use Elementor\Widget_Base;

class LuxeMobileMenuSlide_Elementor_Widget extends Widget_Base {

    public function get_name() {
        return 'luxe_mobile_menu_slide';
    }

    public function get_title() {
        return 'Luxe - at the start';
    }


    protected function _register_controls() {
        // Define the controls for the widget settings
        // You can use Elementor's control types to define the settings
    }

    protected function render() {
        // Render the output of the widget
        luxe_mobile_menu_slide_mobile_menu();
    }

}
