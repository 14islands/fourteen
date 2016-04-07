<?php

/**
 * Displays the ACF options panel if available.
 *
 * Examples:
 *
 *	acf_add_options_page(array(
 * 		'page_title' 	=> 'Theme General Settings',
 * 		'menu_title'	=> 'Theme Settings',
 * 		'menu_slug' 	=> 'theme-general-settings',
 * 		'capability'	=> 'edit_posts',
 * 		'redirect'		=> false
 * 	));
 *
 *	acf_add_options_sub_page(array(
 *		'page_title' 	=> 'Theme Footer Settings',
 *		'menu_title'	=> 'Footer',
 *		'parent_slug'	=> 'theme-general-settings',
 *	));
 *
 * In the template: <?php the_field('header_title', 'option'); ?>
 *
 * @see  https://www.advancedcustomfields.com/resources/options-page/
 */
class ACFAddOptionsPage {

	function __construct() {
		if ( function_exists('acf_add_options_page')) $this->acf_add_options_page();
	}

	function acf_add_options_page() {
		// Add your options page here! See examples above.
		// acf_add_options_page(array(
		// ));
	}
}

new ACFAddOptionsPage();
