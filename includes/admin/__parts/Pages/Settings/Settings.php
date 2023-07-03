<?php

function luxe_mobile_menu_slide_settings_page_callback()
{
    $current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'settings';
    ?>

    <div class="luxe-container">
        <?php require plugin_dir_path(__FILE__) . '../../luxe-banner.php';
        require plugin_dir_path(__FILE__) . '../../luxe-nav-tabs.php';


        ?>
        <div class="luxe-settings-wrap">
            <!-- <h1 class="wp-heading-inline">Luxe Mobile Menu Settings</h1> -->

            <?php
            if ($current_tab === 'settings') {
                ?>
                <div class="luxe-settings-section active">

                    <form method="post" action="options.php">
                        <div class="luxe-settings-section-menu luxe-choose-menu">
                            <?php

                            settings_fields('luxe_mobile_menu_slide_settings_settingPage');
                            do_settings_sections('luxe_mobile_menu_slide_settings_settingPage');

                            ?>
                        </div>
                        <div style="margin-top:20px" class="luxe-hamburger-styles-container">
                            <div class="luxe-settings-section-menu">

                                <?php

                                do_settings_sections('luxe_mobile_menu_slide_a_settings_settingPage');
                                ?>
                            </div>
                            <!-- starting of preview container -->
                            <!-- adding the peview file  -->

                            <?php

                            require plugin_dir_path(__FILE__) . '../../preview_container/preview.php'

                                ?>

                        </div>
                        <div style="margin-top:20px" class="luxe-hamburger-styles-container">
                            <div class="luxe-settings-section-menu">


                                <?php
                                //  settings_fields('luxe_mobile_menu_slide_settings');
                                do_settings_sections('luxe_mobile_menu_slide_background_overlays_section_settingPage')
                                    ?>
                            </div>
                            <div class="luxe-upgrade-to-pro-container">
                                <!-- <div>
                                    <span>Promotion For Upgrade</span>
                                </div> -->
                                <a href="https://luxeplugins.com/">
                                    <img src="https://luxeplugins.com/promotions/LuxeMobileMenu-SideBanner.jpg"
                                        style="width:100%" /></a>
                            </div>
                        </div>
                        <div style="margin-top:20px" class="luxe-hamburger-styles-container">
                            <div class="luxe-settings-section-menu">

                                <?php
                                //  settings_fields('luxe_mobile_menu_slide_settings');
                                do_settings_sections('luxe_mobile_menu_typogrophy_section_settingPage')
                                    ?>
                            </div>
                        </div>
                        <div style="margin-top:20px" class="luxe-hamburger-styles-container luxe-shortcode-bar">
                            <div class="luxe-settings-section-menu">
                                <table class="form-table">



                                    <tr>
                                        <th style="width:70px;">
                                            <label>Shortcode</label>

                                        </th>
                                        <td>
                                            <input type="text" disabled value="[luxe-menu]" />
                                        </td>
                                        <th style="width:88px;"><label>PHP Function</label></th>
                                        <td><input type="text" style="width:80%" disabled
                                                value="'<?php echo "do_shortcode('[luxe-menu]')" ?>" /></td>
                                    </tr>



                                </table>
                            </div>
                            <div>
                            </div>
                        </div>

                        <?php
                        submit_button();
                        ?>
                    </form>




                </div>
                <?php
            } elseif ($current_tab === 'styles') {
                ?>
                <div class="luxe-settings-section active">
                    <!-- Add your styles related settings or content here -->
                    <form method="post" action="options.php">
                        <?php
                        settings_fields('luxe_mobile_menu_slide_settings');
                        do_settings_sections('luxe_mobile_menu_slide_settings');
                        submit_button();
                        ?>
                    </form>
                </div>
                <?php
            } elseif ($current_tab === 'shortcode') {

                ?>
                <div class="copy-container">

                    <div class="label">
                        Luxe menu shortcode
                    </div>
                    <div class="copy-text">
                        <input type="text" class="text" value="[luxe]" />
                        <button>Copy shortcode</i></button>
                    </div>
                    <p>Copy this shortcode by clicking on the 'Copy Shortcode' button and use it within the shortcode block.</p>

                    <br>
                    <p>
                        If you want to use a shortcode within a page template, you can use the following code within php block.
                    </p>
                    <h3> echo do_shortcode('[luxe]');</h3>
                </div>
                <?php

            }
            ?>
        </div>
    </div>
    <style>

    </style>
    <script type="text/javascript">
        // let copyText = document.querySelector(".copy-text");
        // copyText.querySelector("button").addEventListener("click", function () {
        //     let input = copyText.querySelector("input.text");
        //     input.select();
        //     document.execCommand("copy");
        //     copyText.classList.add("active");
        //     window.getSelection().removeAllRanges();
        //     setTimeout(function () {
        //         copyText.classList.remove("active");
        //     }, 2500);
        // });



    </script>

    <script>
        const labels = document.querySelectorAll('.admin-luxe-hamburger-label');

        labels.forEach(label => {
            const input = label.querySelector('input');
            
            
            label.addEventListener('click', function () {
                labels.forEach(l => l.classList.remove('checked'));
                label.classList.add('checked');
                const divId = label.querySelector('div').id;
                changeHamburgerAnimation(divId);
                // Optional: Manually update the checked property of the input element
                input.checked = true;
            });
        });


    </script>
    <script>

        const animatelabels = document.querySelectorAll('.background-animation-label');
        animatelabels.forEach(animatelabel => {
            const input = animatelabel.querySelector('input');

            animatelabel.addEventListener('click', function () {
                animatelabels.forEach(l => l.classList.remove('checked'));
                animatelabel.classList.add('checked');

                // Optional: Manually update the checked property of the input element
                input.checked = true;
            });
        });
    </script>

    <script>

        const textlabels = document.querySelectorAll('.text-animation-label ');
        textlabels.forEach(textlabel => {
            const input = textlabel.querySelector('input');

            textlabel.addEventListener('click', function () {
                textlabels.forEach(l => l.classList.remove('checked'));
                textlabel.classList.add('checked');

                // Optional: Manually update the checked property of the input element
                input.checked = true;
            });
        });
    </script>

    <script>

        const divIds = ["luxe-hamburger-animation1", "luxe-hamburger-animation2", "luxe-hamburger-animation3", "luxe-hamburger-animation4"];
        let currentIndex = 0;

        function toggleClassOnDiv() {
            const currentDiv = document.getElementById(divIds[currentIndex]);
            if (currentDiv) {
                currentDiv.classList.toggle('open'); // Replace 'your-class' with the desired class name
            }
            currentIndex = (currentIndex + 1) % divIds.length;
        }

        setInterval(toggleClassOnDiv, 2000); // Toggle class every 2 seconds


    </script>
    <script>
                    // var rectangle = document.getElementById('luxe-hamburger-line-container');
                    // var initialWidth, initialHeight;
                    // var startX, startY;
                    // var isResizing = false;
                    // var lineHeightField = document.getElementById('luxe_mobile_menu_slide_hamburger_line_gap');
                    // var lineWidthField = document.getElementById('luxe_mobile_menu_slide_hamburger_line_length');


                    // // Add event listeners for the mouse events
                    // rectangle.addEventListener('mousedown', startResize);
                    // window.addEventListener('mousemove', resize);
                    // window.addEventListener('mouseup', stopResize);

                    // // Function to start resizing
                    // function startResize(event) {
                    //     event.preventDefault();
                    //     initialWidth = parseInt(getComputedStyle(rectangle).width);
                    //     initialHeight = parseInt(getComputedStyle(rectangle).height);
                    //     startX = event.clientX;
                    //     startY = event.clientY;
                    //     isResizing = true;
                    // }

                    // // Function to stop resizing
                    // function stopResize(event) {
                    //     isResizing = false;
                    // }

                    // // Function to resize the rectangle
                    // function resize(event) {
                    //     if (!isResizing) return;
                    //     var newWidth = initialWidth + (event.clientX - startX);
                    //     var newHeight = initialHeight + (event.clientY - startY);

                    //     rectangle.style.width = newWidth + '%';
                    //     rectangle.style.height = newHeight + '%';
                    //     // convert the tens value into ones value to set the width for the input fields
                    //     var lineHeightFieldValue = newHeight / 10;
                    //     var lineWidthFieldValue = newWidth / 10;
                    //     // set the input field value
                    //     lineHeightField.value = lineHeightFieldValue;
                    //     lineWidthField.value = lineWidthFieldValue;

                    // }

    </script>
    <?php
}