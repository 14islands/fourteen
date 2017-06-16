<?php

class FeaturedImage {

	public $id = null;
	public $src = null;
	public $width = null;
	public $height = null;

	public function __construct($id = null) {
		if (is_null($id)) {
			throw new Exception("Model FeaturedImage is missing an id.", 1);
		}

		$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
		$this->src = $thumb['0'];
		$this->width = $thumb['1'];
		$this->height = $thumb['2'];

	}
}
