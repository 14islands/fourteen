<?php

class SVGMimeType {

	function __construct() {
		add_filter('upload_mimes', array($this, 'add_mime_type'));
		add_action('admin_head', array($this, 'fix_svg_thumb_display'));
	}

	/**
	 * Adds the SVG mimetype so the uploader allows it.
	 * @param Array $mimes Current allowed mime types.
	 */
	function add_mime_type($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}

	/**
	 * Since Wordpress 4.0, displaying SVGs in the grid
	 * looks broken. This is a hack to fix and give it some dimensions.
	 */
	function fix_svg_thumb_display() {
		echo '
		    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail {
		      width: 100% !important;
		      height: auto !important;
		    }
		  ';
	}

}

new SVGMimeType();
