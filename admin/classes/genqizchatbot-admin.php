<?php

if (!defined('ABSPATH')) {
    exit;
}

class GENQIZCHATBOT_Admin
{
    private static $instance;
    public $data;

    private function __construct()
    {
        add_action('admin_menu', array($this, 'register_menu_links'), 99);
        add_filter('plugin_action_links_' . GENQIZCHATBOT_ROOT_FILE_PATH, array($this, 'register_plugin_link'));
        add_action('admin_init', array($this, 'init_data'));
    }
    public static function get_instance()
    {
        if (!isset (self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
    public function register_menu_links()
    {
        add_menu_page(
            GENQIZCHATBOT_PAGE_TITLE,
            GENQIZCHATBOT_MENU_TITLE,
            'manage_options',
            GENQIZCHATBOT_MENU_SLUG,
            array($this, 'view'),
            GENQIZCHATBOT_ADMIN_URL . 'assets/images/logo-white.svg'
        );

        add_action('admin_enqueue_scripts', array($this, 'register_scripts'));
    }
    public function register_plugin_link($links)
    {
        return array_merge(
            array(sprintf('<a href="' . GENQIZCHATBOT_ADMIN_PAGE_URL . '">%s</a>', __('Settings'))),
            $links
        );
    }
    public function register_scripts($hook)
    {
        wp_enqueue_style(GENQIZCHATBOT_ASSETS_PREFIX . 'style-menu-icon', GENQIZCHATBOT_ADMIN_URL . 'assets/style/menu-icon.css', array(), wp_rand(1, 999));
        wp_enqueue_style(GENQIZCHATBOT_ASSETS_PREFIX . 'style', GENQIZCHATBOT_ADMIN_URL . 'assets/style/style.css', array(), wp_rand(1, 999));
    }
    public function view()
    {
        require_once GENQIZCHATBOT_ADMIN_DIR . 'views/index.php';
    }
    public function init_data()
    {
        $this->data = new GENQIZCHATBOT_Data();
    }
}
