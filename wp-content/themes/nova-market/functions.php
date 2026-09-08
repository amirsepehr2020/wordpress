<?php
/*
Theme Name: NOVA Market
Theme URI: https://github.com/amirsepehr2020/wordpress
Author: Sepehr
Description: A cinematic, localStorage-powered demo storefront. No real accounts, payments or orders are processed.
Version: 1.0.0
Text Domain: nova-market
*/

if (!defined('ABSPATH')) exit;

function nova_market_assets() {
  wp_enqueue_style('nova-market-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0.0');
  wp_enqueue_script('nova-market-app', get_template_directory_uri() . '/assets/js/app.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'nova_market_assets');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);

function nova_market_menu() {
  register_nav_menus(['primary' => __('Primary Menu', 'nova-market')]);
}
add_action('after_setup_theme', 'nova_market_menu');

function nova_market_body_class($classes) {
  $classes[] = 'nova-market-app';
  return $classes;
}
add_filter('body_class', 'nova_market_body_class');
