<?php

if (!defined('ABSPATH')) { exit; }

// CONFIG
define('GENQIZCHATBOT_CHATBOT_URL', 'chat.genqiz.com');
define('GENQIZCHATBOT_TOKEN', '14b8a7d1-1605-47a8-93f3-b31233b3f3ee');
define('GENQIZCHATBOT_INBOX', '3a4ea611-816f-4844-86cc-87e9631443f4');
define('GENQIZCHATBOT_WEBSITE_URL', 'https://app.genqiz.com');

// MENU
define('GENQIZCHATBOT_MENU_TITLE', 'Genqiz');
define('GENQIZCHATBOT_MENU_SLUG', 'genqizchatbot-configuration');

// INTERNALS
define('GENQIZCHATBOT_ROOT_FILE_PATH', 'genqiz-ai-chatbot/genqizchatbot.php');
define('GENQIZCHATBOT_ADMIN_URL', plugin_dir_url(__FILE__).'../admin/');
define('GENQIZCHATBOT_ADMIN_DIR', dirname(__FILE__).'/../admin/');
define('GENQIZCHATBOT_PUBLIC_DIR', dirname(__FILE__).'/../public/');
define('GENQIZCHATBOT_ADMIN_PAGE_URL', admin_url('admin.php?page='.GENQIZCHATBOT_MENU_SLUG));

// PAGE
define('GENQIZCHATBOT_PAGE_TITLE', 'Genqiz Configuration');
define('GENQIZCHATBOT_PAGE_HOOK', 'toplevel_page_genqizchatbot-configuration');
define('GENQIZCHATBOT_ASSETS_PREFIX', 'genqizchatbot-configuration-');

// DATABASE PROPERTY
define('GENQIZCHATBOT_DATA_TOKEN_ID', 'genqizchatbot_configuration_token_id');
define('GENQIZCHATBOT_DATA_INBOX_ID', 'genqizchatbot_configuration_inbox_id');


// NONCE
define('GENQIZCHATBOT_NONCE', 'genqizchatbot_security_nonce');