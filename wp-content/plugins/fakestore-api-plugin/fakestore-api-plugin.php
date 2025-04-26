<?php
/*
Plugin Name: FakeStore API Viewer
Description: View and browse products from fakestoreapi.com
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH')) exit;

// Load all plugin parts
require_once plugin_dir_path(__FILE__) . 'includes/product-list.php';
require_once plugin_dir_path(__FILE__) . 'includes/product-detail.php';
require_once plugin_dir_path(__FILE__) . 'includes/rewrite-rules.php';
?>