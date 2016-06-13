<?php

class HideAdminBar {

	function __construct() {
		// hide it
		add_filter('show_admin_bar', '__return_false');
	}
}

new HideAdminBar();
