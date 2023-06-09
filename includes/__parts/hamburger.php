<?php
$luxe_mobile_menu_slide_hamburger_line_gap = get_option('luxe_mobile_menu_slide_hamburger_line_gap', '80');
$luxe_mobile_menu_slide_hamburger_line_length = get_option('luxe_mobile_menu_slide_hamburger_line_length', '80');
?>
<style>
    .luxe-hamburger-label {
        width:
            <?php echo esc_attr($hamburger_width).'px' ?>
        ;
        height:
            <?php echo esc_attr($hamburger_height).'px'  ?>
        ;
    }

    #luxe-hamburger-animation1,
    #luxe-hamburger-animation2,
    #luxe-hamburger-animation3,
    #luxe-hamburger-animation4 {
        height:
            <?php esc_html_e($luxe_mobile_menu_slide_hamburger_line_gap) ?>%;

        width:
            <?php esc_html_e($luxe_mobile_menu_slide_hamburger_line_length) ?>%;
    }

    label.luxe-hamburger-label span {
        background-color:
            <?php echo esc_attr($hamburger_color) ?>
        ;
        height:
            <?php echo esc_attr($luxe_hamburger_line_thickness.'px !important'); ?>;
     
    }
</style>
<div class="luxe-hamburger-container" style="justify-content: <?php echo $luxe_container_position; ?>;">
    <label for="hamburger-input" class="luxe-hamburger-label"
        style="background-color: <?php echo esc_attr($background_color); ?>; border-radius: <?php echo esc_attr($hamburger_border_radius.'%'); ?>;padding:<?php echo esc_attr($hamburger_padding.'px') ?>">
      

        <?php if ($hamburger_styles == 'style_1') {

            ?>
            <div id="luxe-hamburger-animation1">
                <span></span>
                <span></span>
                <span></span>

            </div>
        <?php } elseif ($hamburger_styles == 'style_2') { ?>
            <div id="luxe-hamburger-animation2">
                <span></span>
                <span></span>
                <span></span>

            </div>

        <?php } elseif ($hamburger_styles == 'style_3') { ?>
            <div id="luxe-hamburger-animation3">
                <span></span>
                <span></span>
                <span></span>

            </div>
        <?php } else { ?>

            <div id="luxe-hamburger-animation4">
                <span></span>
                <span></span>
                <span></span>

            </div>
        <?php } ?>
    
    </label>
</div>