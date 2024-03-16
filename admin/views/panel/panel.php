<?php

if (!defined('ABSPATH')) {
    exit;
}
wp_enqueue_style(GENQIZCHATBOT_ASSETS_PREFIX . 'style-panel', plugin_dir_url(__FILE__) . 'panel.css', array(), wp_rand(1, 999));

?>

<div class="panel">
    <!--Header-->
    <div class="panel-header-wrapper">
        <div class="panel-header">
            <img
                class="logo"
                src="<?php echo esc_html(GENQIZCHATBOT_ADMIN_URL . 'assets/images/logo.svg'); ?>"/>
            <span class="panel-text">GENQIZ</span>
        </div>
    </div>

    <!--Content-->
    <div class="panel-content-outer-wrapper">
        <div class="panel-content-wrapper">
            <div class="panel-content">
                <?php
                require_once 'settings/settings.php';
                ?>
            </div>
        </div>

        <div class="panel-image">
            <div class="panel-tutorial">
                <div>
                    <h2>Tutorial</h2>
                </div>
               <div class="panel-tutorial-content">
                <span> Step 1: Open <a target="_blank" href="<?php echo esc_html(GENQIZCHATBOT_WEBSITE_URL) ?>"><?php echo esc_html(GENQIZCHATBOT_WEBSITE_URL) ?></a></span>
                <span> Step 2: Login or create new account</span>
                <span> Step 3: Select "GEN Bots" at the left side menu</span>
                <span> Step 4: Create new bot or choose existing bot</span>
                <span> Step 5: Go to bot detail page (URL will looke like: https://app.genqiz.com/ai-bot/xxx)</span>
                <span> Step 6: Select "Connect" tab at the header</span>
                <span> Step 7: Copy token and inbox id and add to form configuration above.</span>
               </div>
            </div>
            <img
                src="<?php echo esc_html(GENQIZCHATBOT_ADMIN_URL) . 'assets/images/screen-shot.png'; ?>"
                alt="dashboard"/>
        </div>
    </div>
</div>