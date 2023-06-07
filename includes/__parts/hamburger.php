<style>
    .luxe-hamburger-label {
        width:
            <?php esc_html_e($hamburger_size) ?>
        ;
        height:
            <?php esc_html_e($hamburger_size) ?>
        ;
    }

    #luxe-nav-icon1:not(.open),
    #luxe-nav-icon2:not(.open),
    #luxe-nav-icon3:not(.open),
    #luxe-nav-icon4:not(.open) {
        height: 60%;
        width: 84%;
    }
</style>
<div class="luxe-hamburger-container" style="justify-content: <?php echo $luxe_container_position; ?>;">
    <label for="hamburger-input" class="luxe-hamburger-label"
        style="background-color: <?php echo esc_attr($background_color); ?>; border-radius: <?php echo esc_attr($hamburger_border_radius); ?>;padding:<?php echo esc_attr($hamburger_padding) ?>">
        <!-- <div class="luxe-hamburger"
                        style="background-color: <?php echo esc_attr($background_color); ?>;border-radius: <?php echo esc_attr($hamburger_border_radius); ?>"> -->

        <?php if ($hamburger_styles == 'style_1') {

            ?>
            <div id="luxe-nav-icon1">
                <span></span>
                <span></span>
                <span></span>

            </div>
        <?php } elseif ($hamburger_styles == 'style_2') { ?>
            <div id="luxe-nav-icon2">
                <span></span>
                <span></span>
                <span></span>

            </div>

        <?php } elseif ($hamburger_styles == 'style_3') { ?>
            <div id="luxe-nav-icon3">
                <span></span>
                <span></span>
                <span></span>

            </div>
        <?php } else { ?>

            <div id="luxe-nav-icon4">
                <span></span>
                <span></span>
                <span></span>

            </div>
        <?php } ?>
        <!-- </div> -->
    </label>
</div>