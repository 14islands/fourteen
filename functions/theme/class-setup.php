<?php

class Setup {

	function __construct() {
		// Our theme "main" functionality
		add_action( 'after_setup_theme', array($this, 'after_setup_theme') );
	}

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
	 */
	function after_setup_theme() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 *
		 * Make sure to update the domain if you are changing it.
		 * Right now the domain is set to 'fourteen'
		 *
		 * @fixme remember to change the domain name to your own!
		 */
		load_theme_textdomain( 'fourteen', get_template_directory() . DIRECTORY_SEPARATOR . 'languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 *
		 * The default image sizes of WordPress are:
		 * - "thumbnail" (and its "thumb" alias)
		 * - "medium"
		 * - "large"
		 * - "full" (the image you uploaded).
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// This theme styles the visual editor to resemble the theme style.
		add_editor_style( array( 'editor.css' ) );

		// Disable wordpress generator banner
		remove_action('wp_head', 'wp_generator');

		// Disable all meta junk
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'wp_shortlink_wp_head');
		remove_action('wp_head', 'feed_links_extra', 3 );
		remove_action('wp_head', 'feed_links', 2 );

	}
}

new Setup();
