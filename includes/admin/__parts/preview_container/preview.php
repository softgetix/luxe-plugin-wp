<div class="luxe-preview-container">
    <span class="luxe-preview-badge">
        Preview
    </span>
    <div style="width:100%; margin-top:20px">
        <div class="luxe-preview-hamburger-container">
            <div class="luxe-preview-hamburger">
                <div class="luxe-hamburger-line-container" id="luxe-hamburger-line-container">
                    <span class="luxe-preview-hamburger-lines"></span>
                    <span class="luxe-preview-hamburger-lines"></span>
                    <span class="luxe-preview-hamburger-lines"></span>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo plugins_url('../../assets/images/Arrow.png', __FILE__) ?>" />
    <p class="luxe-preview-menu-text">Preview Your Menu</p>
</div>


<script>
    //function for update the line thickness
    function luxe_update_hamburger_line_thickness(line_thickness) {
        jQuery('.luxe-preview-hamburger-lines').css('height', line_thickness+'px');
    }
    // function for update the border radius
    function luxe_update_border_radius(radius) {
        jQuery('.luxe-preview-hamburger').css('border-radius', radius+'%');
    }
    //function for update the hamburger padding
    function luxe_update_hamburger_padding(padding) {
        jQuery('.luxe-preview-hamburger').css('padding', padding);
    }
    // function for updating the hamburger width
    function luxe_update_hamburger_width(width) {
        jQuery('.luxe-preview-hamburger').css('width', width);
    }
    // function for updating the hamburger height
    function luxe_update_hamburger_height(height) {
        jQuery('.luxe-preview-hamburger').css('height', height);
    }
    //function for updating the hamburger background color
    function luxe_update_hamburger_bg_color(bgcolor) {
        jQuery('.luxe-preview-hamburger').css('background-color', bgcolor);
    }
    // this is the funtion for updating the hamburger line color
    function luxe_update_hamburger_line_color(color) {
        jQuery('.luxe-preview-hamburger-lines').css('background-color', color);
    }
    function luxe_update_hamburger_line_gap(line_gap) {
        updated_line_gap = line_gap * 10;
        updated_line_gap = updated_line_gap + '%';
        jQuery('.luxe-hamburger-line-container').css('height', updated_line_gap)
    }
    function luxe_update_hamburger_line_length(line_length) {

        updated_line_length = line_length * 10;
        updated_line_length = updated_line_length + '%';
        jQuery('.luxe-hamburger-line-container').css('width', updated_line_length)
    }
    function luxe_update_mobile_menu_slide_hamburger_icon_position(position) {
        jQuery('.luxe-preview-hamburger-container').css('justify-content',position);
    }
    jQuery(document).ready(function () {
        // code for getting the hamburger width at the time of load function
        luxe_hamburger_width = jQuery('#luxe_mobile_menu_slide_hamburger_width').val();
        // call the function of hamburger width
        luxe_update_hamburger_width(luxe_hamburger_width);

        //get the hamburger height at the time of load

        luxe_hamburger_height = jQuery('#luxe_mobile_menu_slide_hamburger_height').val();
        // call the luxe_update_hamburger_height function for update the height 
        luxe_update_hamburger_height(luxe_hamburger_height);

        // get the hamburger backgroud color 
        luxe_hamburger_bgcolor = jQuery('#colorValue2').val();
        // update the bg color on load
        luxe_update_hamburger_bg_color(luxe_hamburger_bgcolor);

        // getting the hamburger padding
        luxe_hamburger_padding = jQuery('#luxe_mobile_menu_slide_hamburger_padding').val();
        // updating the padding
        luxe_update_hamburger_padding(luxe_hamburger_padding);
        //get the hamburger border radius 
        luxe_hamburger_border_radius = jQuery('#luxe_mobile_menu_slide_hamburger_border_radius').val();
        luxe_update_border_radius(luxe_hamburger_border_radius);

        // get the hamburger line color
        luxe_hamburger_line_color = jQuery('#colorValue1').val();
        // update the hamburger line color
        luxe_update_hamburger_line_color(luxe_hamburger_line_color);




        // function for getting the line thickness
        luxe_hamburger_line_thickness = jQuery('#luxe_mobile_menu_slide_hamburger_line_thickness').val();
        // function for updating the line thikc
        luxe_update_hamburger_line_thickness(luxe_hamburger_line_thickness);

        // get the line gap 
        luxe_hamburger_line_gap = jQuery('#luxe_mobile_menu_slide_hamburger_line_gap').val();
        luxe_update_hamburger_line_gap(luxe_hamburger_line_gap);

        // get the line length

        luxe_hamburger_line_length = jQuery('#luxe_mobile_menu_slide_hamburger_line_length').val()
        luxe_update_hamburger_line_length(luxe_hamburger_line_length);
        luxe_hamburger_menu_icon_position = jQuery('#luxe_mobile_menu_slide_hamburger_icon_position').val();
        luxe_update_mobile_menu_slide_hamburger_icon_position(luxe_hamburger_menu_icon_position);
    });
    // getting the hamburger line color on change
    jQuery('#colorValue1').change(function () {
        hamburger_line_color = jQuery(this).val();
        luxe_update_hamburger_line_color(hamburger_line_color);
    });
    // getting the hamburger border radius at time of change 
    jQuery('#luxe_mobile_menu_slide_hamburger_border_radius').change(function () {
        hamburger_border_radius = jQuery(this).val();
        luxe_update_border_radius(hamburger_border_radius);
    });
    // getting the hamburger color on the time of change 
    jQuery('#colorValue1').change(function () {
        hamburger_line_color = jQuery(this).val();
        luxe_update_hamburger_line_color(hamburger_line_color);
    });
    // getting the hamburger bgcolor on change
    jQuery('#colorValue2').change(function () {
        hamburger_bg_color = jQuery(this).val();
        luxe_update_hamburger_bg_color(hamburger_bg_color);
    });
    // getting the hamburger height on change

    jQuery('#luxe_mobile_menu_slide_hamburger_height').change(function () {
        hamburger_height = jQuery(this).val();
        luxe_update_hamburger_height(hamburger_height);
    });
    // getting the hamburger width on change
    jQuery('#luxe_mobile_menu_slide_hamburger_width').change(function () {
        luxe_hamburger_width = jQuery(this).val();
        luxe_update_hamburger_width(luxe_hamburger_width);
    });
    // updating the hamburger padding on the change
    jQuery('#luxe_mobile_menu_slide_hamburger_padding').change(function () {
        luxe_hamburger_padding = jQuery(this).val();
        luxe_update_hamburger_padding(luxe_hamburger_padding);
    });
    //updating the line gap on change
    jQuery('#luxe_mobile_menu_slide_hamburger_line_gap').change(function () {
        luxe_hamburger_line_gap = jQuery(this).val();
        luxe_update_hamburger_line_gap(luxe_hamburger_line_gap);

    });
    //updating the line thickness onchage
    jQuery('#luxe_mobile_menu_slide_hamburger_line_thickness').change(function () {
        luxe_hamburger_line_thickness = jQuery(this).val();
        luxe_update_hamburger_line_thickness(luxe_hamburger_line_thickness);
    });
    // updating the line length onchage 
    jQuery('#luxe_mobile_menu_slide_hamburger_line_length').change(function () {
        luxe_hamburger_line_length = jQuery(this).val();
        luxe_update_hamburger_line_length(luxe_hamburger_line_length);
    });
    // updating the icon postion on change 
    jQuery('#luxe_mobile_menu_slide_hamburger_icon_position').change(function () {
        luxe_menu_icon_position = jQuery(this).val();
        luxe_update_mobile_menu_slide_hamburger_icon_position(luxe_menu_icon_position);
    });

</script>