<?php
/**
 * Plugin Name:     Wp Acf Extended Config
 * Plugin URI:      https://github.com/andriilive/wp-acf-extended-config
 * Description:     Wp Acf Extended Config
 * Author:          DigitalAndy (@digitalandy.eu)
 * Author URI:      https://digitalandy.eu
 * Version:         0.1.0
 *
 * @package         Wp_Acf_Extended_Config
 */

// Your code starts here.

if (!defined('ABSPATH')) {
	exit;
} // Exit if accessed directly

// Removes the <p> wrap from ACF WYSIWYG @see https://support.advancedcustomfields.com/forums/topic/removing-paragraph-tags-from-wysiwyg-fields/
add_action('acf/init', fn() => remove_filter('acf_the_content', 'wpautop'));

if (class_exists('ACFE')) {

	// Enable ACF Extended Dev Mode
	add_action('acfe/init', function () {

		if (!defined(WP_DEBUG) && !defined(WP_ENV)) return;

		if (WP_DEBUG || WP_ENV === 'development') {
			acf_update_setting('acfe/dev', true);
		}
	});

//	add_action('acfe/init', function () {
//	    acf_update_setting('acfe/modules/single_meta', true);
//	});
//
//
//	add_filter('acf/load_field_group', function ($field_group) {
//	    $field_group['acfe_autosync'] = ['json','php'];
//	    return $field_group;
//	});

}