<?php

/**
 * Add styles and scripts to your theme.
 */
class EnqueueScripts {

	protected $scripts_to_defer = array();
	protected $scripts_to_async = array();
	protected $protocol = 'http:';

	function __construct() {
		add_action( 'wp_enqueue_scripts', array($this, 'wp_enqueue_scripts') );
		add_filter( 'script_loader_tag', array($this, 'add_script_attribute'), 10, 2 );

		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
				$this->protocol = 'https:';
		}
	}

	/**
	 * 'wp_enqueue_scripts' is the proper hook to use when enqueuing items that are meant to appear on the front end.
	 * Despite the name, it is used for enqueuing both scripts and styles.
	 *
	 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
	 */
	function wp_enqueue_scripts() {

		// CSS
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );

		// make sure we are not in wp-admin
		if (is_admin()) return;

		// Deregister the core version of jQuery
		wp_deregister_script('jquery');

		// Register the Google CDN version
		wp_register_script( 'jquery', $this->protocol . "//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", array(), '2.2.4', true);

		// Add offline fallback
		$jquery_path = get_template_directory_uri() . '/src/js/vendor/jquery.min.js';

		wp_add_inline_script(
			"jquery",
			"window.jQuery || document.write('<script src=\"{$jquery_path}\"><\/script>')"
		);

		// And finally add it back into the queue
		wp_enqueue_script('jquery', array(), false, true );

		// Add your javascrupt here:
		// wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/main-bundled.js', array('jquery'), false, true );

		// remove Wordpress unnecessary scripts
		wp_deregister_script( 'wp-embed' );
	}

	/**
	 * Runs on the 'script_loader_tag' filter.
	 * Goes through the scripts that are desired to be async or deferred and makes them so.
	 * @param [String] $tag    The <script> tag for the enqueued script.
	 * @param [String] $handle The script's registered handle.
	 */
	function add_script_attribute($tag, $handle) {
		foreach($this->scripts_to_async as $async_script) {
			if ($async_script === $handle) {
				$tag = str_replace(' src', ' async="async" src', $tag);
			}
		}
		foreach($this->scripts_to_defer as $defer_script) {
			if ($defer_script === $handle) {
				$tag = str_replace(' src', ' defer="defer" src', $tag);
			}
		}
		return $tag;
	}

}

new EnqueueScripts();
