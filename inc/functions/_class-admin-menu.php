<?php

/**
 * Customises the Admin menu
 */
class AdminMenu {

	function __construct() {
		add_action( 'admin_menu', array($this, 'admin_menu') );
		add_filter( 'custom_menu_order', array($this, 'custom_menu_order') ); // Activate custom_menu_order
		add_filter( 'menu_order', array($this, 'custom_menu_order') );
	}

	/**
	 * Edits the menu items in the admin menu
	 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/admin_menu
	 */
	function admin_menu() {
		// global $menu;
    	// remove_menu_page('edit-comments.php');
    	// add_submenu_page()
    	// etc...
	}

	/**
	 * Adds the ability for plugins to reorder top-level menus.
	 * @see  https://codex.wordpress.org/Plugin_API/Filter_Reference/menu_order
	 * @return Array           Customised menu order
	 */
	function custom_menu_order() {
		return array(
		    'index.php', // Dashboard
		    'separator1', // First separator
		    'edit.php?post_type=page', // Pages
		    'edit.php', // Posts
		    'upload.php', // Media
		    'link-manager.php', // Links
		    'separator2', // Second separator
		    'edit-comments.php', // Comments
		    'separator3', // Second separator
		    'themes.php', // Appearance
		    'plugins.php', // Plugins
		    'users.php', // Users
		    'tools.php', // Tools
		    'options-general.php', // Settings
		    'separator-last', // Last separator
		);
	}

}

new AdminMenu();
