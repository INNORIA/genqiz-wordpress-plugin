<?php

if (!defined('ABSPATH')) {
    exit;
}

class GENQIZCHATBOT_Public
{
    private static $instance;
    public $data_token_id;
    public $data_inbox_id;

    private function __construct()
    {
        $this->load_db_data();
        add_action('wp_footer', array($this, 'html'));
    }
    private function is_mobile()
    {
        $userAgent = array_key_exists('HTTP_USER_AGENT', $_SERVER) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $regex = '/((Chrome).*(Mobile))|((Android).*)|((iPhone|iPod).*Apple.*Mobile)|((Android).*(Mobile))/i';
        return preg_match($regex, $userAgent);
    }
    private function load_db_data()
    {
        $this->data_token_id = get_option(GENQIZCHATBOT_DATA_TOKEN_ID);
        $this->data_inbox_id = get_option(GENQIZCHATBOT_DATA_INBOX_ID);
    }
    public static function get_instance()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
    public function html()
    {
        if (
            !$this->data_token_id || !$this->data_inbox_id
        ) {
            return;
        }

        require_once GENQIZCHATBOT_PUBLIC_DIR . '/views/footer.php';
    }
}
