<?php

/**
 * Removes the emoji assets
 */
class RemoveEmoji {

	function __construct() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
}

new RemoveEmoji();
