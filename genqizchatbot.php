<?php
/*
Plugin Name: Genqiz Chatbot - AI Chatbot platform
Plugin URI: https://app.genqiz.com/
Description: Easy to use chatbot platform for business. This plugin allows to quickly install Genqiz Chatbot on any WordPress website.
Author: Genqiz
Author URI: https://genqiz.com/
Text Domain: genqiz-wordpress-plugin
Version: 1.0.0
*/

if (!defined('ABSPATH')) {
   exit;
}

require_once 'config/config.php';

is_admin()
   ? require_once ('admin/index.php')
   : require_once ('public/index.php');