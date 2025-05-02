<?php
/*
Plugin Name: TheCocktailDB API Integration
Description: Displays cocktails from TheCocktailDB API.
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH')) exit;

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/cocktail-list.php';
require_once plugin_dir_path(__FILE__) . 'includes/cocktail-detail.php';
require_once plugin_dir_path(__FILE__) . 'includes/rewrite-rules.php';
