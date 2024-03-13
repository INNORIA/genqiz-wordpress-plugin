<?php

if (!defined('ABSPATH')) {
    exit;
}


class GENQIZCHATBOT_Data
{
    /* Current view slug */
    public $current_view;


    public $data_token_id;
    public $data_inbox_id;

    public function __construct()
    {
        $this->load_db_data();
        $this->handle_actions();
    }

    public function get_action_url($action)
    {
        return GENQIZCHATBOT_ADMIN_PAGE_URL . '&nonce=' . wp_create_nonce(GENQIZCHATBOT_NONCE) . '&action=' . $action;
    }

    private function sanitize_email($input)
    {
        return sanitize_email($input);
    }
    private function sanitize_string($input)
    {
        return esc_html($input);
    }
    private function sanitize_boolean($input)
    {
        return boolval($input);
    }
    private function load_db_data()
    {
        $this->data_inbox_id = get_option(GENQIZCHATBOT_DATA_INBOX_ID);
        $this->data_token_id = get_option(GENQIZCHATBOT_DATA_TOKEN_ID);
    }
    private function verify_form_action()
    {
        return(
            current_user_can('manage_options') &&
            array_key_exists('nonce', $_GET) &&
            array_key_exists('action', $_GET) &&
            wp_verify_nonce($_GET['nonce'], GENQIZCHATBOT_NONCE)
        );
    }

    private function handle_actions()
    {
        if ($this->verify_form_action()) {
            switch ($this->sanitize_string($_GET['action'])) {
                case 'submit-settings':
                    $token_id = $this->sanitize_string($_POST['token_id']);
                    $inbox_id = $this->sanitize_string($_POST['inbox_id']);
                    update_option(GENQIZCHATBOT_DATA_TOKEN_ID, $token_id);
                    update_option(GENQIZCHATBOT_DATA_INBOX_ID, $inbox_id);
                    $this->data_inbox_id = $inbox_id;
                    $this->data_token_id = $token_id;
                    break;
                case 'settings':
                    return $this->set_current_view('settings');
            }
            return $this->set_current_view('settings');
        }

    }

    private function set_current_view($view)
    {
        return $this->current_view = $view;
    }
}
