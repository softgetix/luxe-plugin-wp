<?php

function luxe_mobile_menu_slide_settings_page_licence_callback()
{
    ?>
    <div class="luxe-container">

        <?php
        $current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'licence';
        require plugin_dir_path(__FILE__) . '../../luxe-banner.php';
        require plugin_dir_path(__FILE__) . '../../luxe-nav-tabs.php';

        ?>
        <style>
            #licence_form th {
                width: 122px;
            }
        </style>
        <div class="luxe-settings-wrap">
            <form action="options.php" method="post" id="licence_form">
                <div class="luxe-settings-section-menu luxe-choose-menu">

                    <?php

                    settings_fields('luxe_mobile_menu_slide_licence_key');
                    do_settings_sections('luxe-mobile-menu-slide-licence');


                    ?>
                </div>
                <?php submit_button();
                ?>
            </form>
        </div>
    </div>
    <?php
}
?>