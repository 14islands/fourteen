<?php

class RegisterNavMenus {

	function __construct() {
		add_action( 'init', array($this, 'register_menus') );
	}

	/**
	 * @see https://codex.wordpress.org/Function_Reference/register_nav_menus
	 */
	function register_menus() {
		register_nav_menus(
			array(
				'primary-menu' => 'Primary menu'
			)
		);
	}
}

new RegisterNavMenus();
