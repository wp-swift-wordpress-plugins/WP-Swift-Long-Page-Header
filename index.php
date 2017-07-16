<?php
/*
Plugin Name: 		WP Swift: Long Page Header
Description: 		Optional descriptive header which will be used as the h1 header on pages while using the regular title in menus and widgets
Version:           	1.0.1
Author:            	Gary Swift
Author URI:        	https://github.com/GarySwift
License:            GPL-2.0+
License URI:        http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain:       	wp-swift-long-header
*/
function wp_swift_long_page_title( $title ) {
	if ( is_page() && in_the_loop() ) {
		if( function_exists('get_field') ) {
			if( get_field('long_header') ) {
				return get_field('long_header');
			}
		}	
	}
	return $title;
}
add_filter( 'the_title', 'wp_swift_long_page_title' );
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_596b4867bf454',
	'title' => 'Long Header',
	'fields' => array (
		array (
			'key' => 'field_596b486d20402',
			'label' => 'Long Header',
			'name' => 'long_header',
			'type' => 'text',
			'instructions' => 'Optional descriptive header which will be used as the h1 header',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => 'Optional descriptive header which will be used as the h1 header',
));

endif;