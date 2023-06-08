<?php
// Add a settings page
function luxe_mobile_menu_slide_settings_page()
{
    add_menu_page(
        'Luxe Mobile Menu Slide Settings',
        'luxe- at the start',
        'manage_options',
        'luxe-mobile-menu-slide-settings',
        'luxe_mobile_menu_slide_settings_page_callback',
        'dashicons-menu',
        99
    );
    add_submenu_page(
        'luxe-mobile-menu-slide-settings',
        'Luxe Plugin Licence',
        'Licence',
        'manage_options',
        'luxe-mobile-menu-slide-settings&tab=styles',
        'luxe_mobile_menu_slide_settings_page_callback'
    );
    add_submenu_page(
        'luxe-mobile-menu-slide-settings',
        'Submenu Page Title',
        'Upgrade to Pro',
        'manage_options',
        'luxe-mobile-menu-slide-settings&tab=styles',
        'luxe_mobile_menu_slide_settings_page_callback'
    );
}
add_action('admin_menu', 'luxe_mobile_menu_slide_settings_page');


// Settings page callback function
function luxe_mobile_menu_slide_settings_page_callback()
{
    $current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'settings';
    ?>

    <div class="container">
        <div class="Luxe-banner">
            <div class="row align-items-center justify-space-between">
                <div style="position:relative;">
                    <h1>Luxe</h1>
                    <p>Plugins</p>
                </div>
                <div class="align-items-center" style="display:flex;">
                    <img src="<?php echo plugins_url('/assets/images/Help.png', __FILE__); ?>" />
                    <a href="/" class="text-white help-text"> Help </a>
                </div>
            </div>

        </div>
        <div class="luxe-settings-wrap">
            <!-- <h1 class="wp-heading-inline">Luxe Mobile Menu Settings</h1> -->
            <h2 class="nav-tab-wrapper">
                <a href="?page=luxe-mobile-menu-slide-settings&tab=settings" class="nav-tab <?php if ($current_tab === 'settings')
                    echo 'nav-tab-active'; ?>">Mobile Menu</a>
                <a href="?page=luxe-mobile-menu-slide-settings&tab=styles" class="nav-tab <?php if ($current_tab === 'styles')
                    echo 'nav-tab-active'; ?>">Styles</a>
                <a href="?page=luxe-mobile-menu-slide-settings&tab=shortcode" class="nav-tab <?php if ($current_tab === 'shortcode')
                    echo 'nav-tab-active'; ?>">Shortcode</a>
            </h2>
            <?php
            if ($current_tab === 'settings') {
                ?>
                <div class="luxe-settings-section active">

                    <form method="post" action="options.php">
                        <div class="luxe-settings-section-menu">
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
                            <div class="luxe-preview-container">
                                <span class="luxe-preview-badge">
                                    Preview
                                </span>
                            </div>
                        </div>
                        <div style="margin-top:20px" class="luxe-hamburger-styles-container">
                            <div class="luxe-settings-section-menu">


                                <?php
                                //  settings_fields('luxe_mobile_menu_slide_settings');
                                do_settings_sections('luxe_mobile_menu_slide_background_overlays_section_settingPage')
                                    ?>
                            </div>
                            <div class="luxe-upgrade-to-pro-container">
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
                        <div style="margin-top:20px" class="luxe-hamburger-styles-container">
                            <div class="luxe-settings-section-menu">
                                <table class="form-table">

                                    <div class="luxe-shortcode-bar">
                                        <div>
                                            <tr>
                                                <th style="width:70px;">
                                                    <label>Shortcode</label>

                                                </th>
                                                <td>
                                                    <input type="text" disabled value="[luxe-menu]" />
                                                </td>
                                                <th style="width:88px;"><label>PHP Function</label></th>
                                                <td><input type="text" style="width:100%" disabled
                                                        value="'<?php echo "do_shortcode('[luxe-menu]')" ?>" /></td>
                                            </tr>
                                        </div>

                                    </div>
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
        let copyText = document.querySelector(".copy-text");
        copyText.querySelector("button").addEventListener("click", function () {
            let input = copyText.querySelector("input.text");
            input.select();
            document.execCommand("copy");
            copyText.classList.add("active");
            window.getSelection().removeAllRanges();
            setTimeout(function () {
                copyText.classList.remove("active");
            }, 2500);
        });



    </script>

    <script>
        const labels = document.querySelectorAll('.luxe-hamburger-label');

        labels.forEach(label => {
            const input = label.querySelector('input');

            label.addEventListener('click', function () {
                labels.forEach(l => l.classList.remove('checked'));
                label.classList.add('checked');

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

        const divIds = ["luxe-nav-icon1", "luxe-nav-icon2", "luxe-nav-icon3", "luxe-nav-icon4"];
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
    <?php
}

function luxe_mobile_menu_slide_settings_licence_page_callback()
{
    echo 'gautam';
}