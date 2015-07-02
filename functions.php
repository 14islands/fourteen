<?php

namespace Fourteen;

class Theme {

	function __construct() {

		// Our theme "main" functionality
		add_action( 'after_setup_theme', array($this, 'after_setup_theme') );
		add_action( 'wp_enqueue_scripts', array($this, 'wp_enqueue_scripts') );
		add_action( 'init', array($this, 'init') );

		/**
		 * This loop will go through all the classes in /inc/functions
		 * and include them dynamically.
		 *
		 * Since every class instanciates themselves,
		 * all the functionality will be available on the fly
		 * keeping your theme neat and happy.
		 */
		$functions_path = get_template_directory() . '/inc/functions/';
		foreach(new \DirectoryIterator($functions_path) as $file) {
		   if ( ! $file->isDot()
		   		&& $file->isFile()
		   		&& $file->getFilename()[0] !== '_'
		   	) {
		       include $functions_path . $file->getFilename();
		   }
		}

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
		 */
		load_theme_textdomain( 'fourteen', get_template_directory() . '/languages' );

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
    	add_editor_style( array( 'typography.css' ) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		//  add_theme_support( 'post-formats', array(
		// 	'aside',
		// 	'image',
		// 	'video',
		// 	'quote',
		// 	'link',
		// ) );

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

	/**
	 * 'wp_enqueue_scripts' is the proper hook to use when enqueuing items that are meant to appear on the front end.
	 * Despite the name, it is used for enqueuing both scripts and styles.
	 *
	 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
	 */
	function wp_enqueue_scripts() {
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	}

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 * Most of WP is loaded at this stage, and the user is authenticated. 
	 * WP continues to load on the init hook that follows (e.g. widgets), and many plugins instantiate themselves on it for all sorts of reasons (e.g. they need a user, a taxonomy, etc.).
	 *
	 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/init
	 */
	function init() {
		// @TODO move this away to a class?
	  	register_nav_menus(
				array(
				  'primary-menu' => 'Primary menu'
				)
			);
		}
		// register_post_type( 'games',
		// 	array(
		// 		'labels' => array(
		// 			'name' => __( 'Games' ),
		// 			'singular_name' => __( 'Game' )
		// 		),
		// 		'public' => true,
		// 		'has_archive' => true,
		// 	)
		// );
	}

}

// Go!
new Theme();
