<?php
/*
Plugin Name: genqiz.com - Genqiz AI platform
Plugin URI: https://genqiz.com/
Description: Easy to use chatbot platform for business. This plugin allows to quickly install Genqiz on any WordPress website.
Author: Genqiz
Author URI: https://genqiz.com/
Text Domain: genqiz-ai-chatbot
Version: 1.0.0
*/

if (!defined('ABSPATH')) { exit; } 

require_once 'config/config.php';

 is_admin()
    ? require_once('admin/index.php')
    : require_once('public/index.php');