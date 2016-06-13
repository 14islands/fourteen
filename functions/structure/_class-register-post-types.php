<?php

class RegisterPostTypes {

	function __construct() {
		add_action( 'init', array($this, 'register_types') );
	}

	/**
	 * @see https://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function register_types() {
		register_post_type( 'projects',
			array(
				'labels' => array(
					'name' => __( 'Projects' ),
					'singular_name' => __( 'Projects' )
				),
				'public' => true,
				'has_archive' => true,
			)
		);
	}
}

new RegisterPostTypes();
