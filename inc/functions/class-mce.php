<?php

/**
 * Tiny CME editor customisations.
 */
class MceButtons {

	function __construct() {
		add_filter( 'mce_buttons', array($this, 'mce_buttons'), 0 );
		add_filter( 'mce_buttons_2', array($this, 'mce_buttons_2'), 0 );
		add_filter( 'tiny_mce_before_init', array($this, 'tiny_mce_before_init'), 0 );
	}

	/**
	 * Customise the editor buttons.
	 *
	 * This function takes care of the first row.
	 *
	 * @param Array $buttons Buttons that are going to be displayed if unchanged.
	 */
	function mce_buttons($buttons) {

		// Full reference list here:
		// http://www.tinymce.com/wiki.php/TinyMCE3x:Buttons/controls
		// Or just dump the $buttons variable.
		return array(
			"bold",
			"italic",
			"underline",
			"strikethrough",
			"bullist",
			"numlist",
			"blockquote",
			"link",
			"unlink",
			"wp_more",
			"redo",
			"undo",
			"styleselect",
			"fullscreen",
			"wp_help"
		);
	}

	/**
	 * Customise the editor buttons.
	 *
	 * This function takes care of the second row.
	 *
	 * @param Array $buttons Buttons that are going to be displayed if unchanged.
	 */
	function mce_buttons_2($buttons) {
		// No second row!
		return array();
	}

	/**
	 * Add custom classes to be available in the editor styles dropdown.
	 *
	 * @param Array $init_array tiny_mce configuration values.
	 */
	function tiny_mce_before_init( $init_array ) {

		// Define the style_formats array
		$style_formats = array(
			// Each array child is a format with it's own settings
			array(
				'title' => 'paragraph',
				'block' => 'p',
				'wrapper' => true
			),
			array(
				'title' => 'preformatted',
				'block' => 'pre',
			),
			array(
				'title' => 'blockquote',
				'block' => 'blockquote',
			),
			array(
				'title' => 'cite',
				'block' => 'cite',
			),
			array(
				'title' => 'button',
				'selector' => 'a',
				'classes' => 'button button--cta'
			),
			array(
				'title' => 'divider',
				'selector' => 'p',
				'classes' => 'divider'
			),
			array(
				'title' => 'Heading 1',
				'block' => 'h1',
			),
			array(
				'title' => 'Heading 2',
				'block' => 'h2',
			),
			array(
				'title' => 'Heading 3',
				'block' => 'h3',
			),
			array(
				'title' => 'Heading 4',
				'block' => 'h4',
			),
			array(
				'title' => 'Heading 5',
				'block' => 'h5',
			),
			array(
				'title' => 'Heading 6',
				'block' => 'h6',
			)
		);

		// Insert the array, JSON ENCODED, into 'style_formats'
		$init_array['style_formats'] = json_encode( $style_formats );

		return $init_array;
	}

}

new MceButtons();
