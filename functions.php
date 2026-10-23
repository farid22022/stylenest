<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function stylenest_setup() { load_theme_textdomain( 'stylenest', get_template_directory() . '/languages' ); add_theme_support( 'title-tag' ); add_theme_support( 'post-thumbnails' ); add_theme_support( 'custom-logo', array( 'height'=>80, 'width'=>280, 'flex-height'=>true, 'flex-width'=>true ) ); add_theme_support( 'woocommerce' ); register_nav_menus( array( 'primary'=>'Primary Menu', 'footer'=>'Footer Menu' ) ); }
add_action( 'after_setup_theme', 'stylenest_setup' );
function stylenest_assets() { wp_enqueue_style( 'stylenest-style', get_stylesheet_uri(), array(), '1.0.0' ); wp_enqueue_script( 'stylenest-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true ); }
add_action( 'wp_enqueue_scripts', 'stylenest_assets' );
function stylenest_cart_count() { if ( function_exists( 'WC' ) && WC()->cart ) return WC()->cart->get_cart_contents_count(); return 0; }
function stylenest_wc_hooks() { remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 ); remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 ); add_action( 'woocommerce_before_main_content', function(){ echo '<main id="main" class="site-main container">'; }, 10 ); add_action( 'woocommerce_after_main_content', function(){ echo '</main>'; }, 10 ); }
add_action( 'after_setup_theme', 'stylenest_wc_hooks' );
