<?php
/*
Plugin Name: StoreFront front page full width widget area
Plugin URI: https://bogaczek.com
Description: This plugin creates full width widget area under header on frontpage. For WooCommerce StoreFront theme only.
Version: 0.7
Author: Black Sun
Author URI: https://bogaczek.com
Text Domain: storefront-frontpage-full-width-widget-area
*/
defined('ABSPATH') or die();

function dexter_storefront_full_width_widget_area_init() {
 
    register_sidebar( array(
        'name'          => 'Front page full-width widget Area',
        'id'            => 'storefront-full-width-widget-area',
        'before_widget' => '<div class="storefront-full-width-widget-area-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="storefront-full-width-widget-area-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'dexter_storefront_full_width_widget_area_init' );

function dexter_storefront_full_width_widget_area() {
	if ( is_front_page()){
	//Static homepage
		dynamic_sidebar( 'storefront-full-width-widget-area' );
	} else {
	//everything else
		NULL;

	}
}
add_action( 'storefront_before_content', 'dexter_storefront_full_width_widget_area' );
?>