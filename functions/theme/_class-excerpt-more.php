<?php

/**
 * Customies the Excerpt printed in the theme.
 */
class ExcerptMore {

	function __construct() {
		add_filter('excerpt_more', array($this, 'excerpt_more'));
	}

	/**
	 * Replaces the [...] wordpress puts in when using the the_excerpt() method.
	 */
	function excerpt_more($excerpt) {
		return '...';
	}

}
