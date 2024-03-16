<?php

if (!defined('ABSPATH')) {
    exit;
}
wp_enqueue_style(GENQIZCHATBOT_ASSETS_PREFIX . 'style-panel-settings', plugin_dir_url(__FILE__) . 'settings.css', array(), wp_rand(1, 999));
?>

<div class="panel-settings">

    <form method="post" action="<?php echo esc_html(GENQIZCHATBOT_Admin::get_instance()->data->get_action_url('submit-settings')) ?>"
        class="panel-settings-content">
        <div text-type="h5" text-color="black">
            Token Id
        </div>
        <input type="text" id="token_id" name="token_id"
            value="<?php echo esc_html(GENQIZCHATBOT_Admin::get_instance()->data->data_token_id); ?>"><br>
        <div text-type="h5" text-color="black">
            Inbox Id
        </div>
        <input type="text" id="inbox_id" name="inbox_id"
            value="<?php echo esc_html(GENQIZCHATBOT_Admin::get_instance()->data->data_inbox_id); ?>"><br>

        <button class="submit-button" role="button">Save Change</button>
    </form>
</div>