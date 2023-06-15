<style type="text/css">
        .luxe-sub-menu {
            display: none;
        }

        .dashicons,
        .dashicons-before:before {
            display: block !important;
            width: auto !important;
            height: auto !important;
        }

        .luxe-menu-ul {
            font-size:
                <?php echo esc_attr($container_font_size) . $luxe_container_font_size_unit . ';' ?>
        }

        #luxe-menu-primary_navigation li a {
            color:
                <?php echo esc_attr($container_font_color) ?>
            ;
        }

        #luxe-menu-primary_navigation li ul.luxe-sub-menu li a,
        #luxe-menu-primary_navigation li ul.luxe-sub-menu li span {
            color:
                <?php echo esc_attr($container_submenu_font_color) ?>
            ;
        }

        #luxe-menu-primary_navigation li {
            line-height:
                <?php echo esc_attr($luxe_mobile_font_line_height . $luxe_mobile_font_line_height_unit) ?>
            ;
        }

        #luxe-menu-primary_navigation li ul.luxe-sub-menu li {
            line-height:
                <?php echo esc_attr($luxe_mobile_menu_slide_container_sub_line_height . $luxe_mobile_menu_slide_container_sub_line_height_unit); ?>
        }
    </style>
