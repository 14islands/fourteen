<?php

class GoogleAnalytics {

	protected $guid = 'UA-XXXXXXX-1';

	function __construct() {
		if ( defined('WP_DEBUG') && WP_DEBUG === false ) {
			add_filter('wp_head', array($this, 'add_google_analytics'));
		}
	}

	function add_google_analytics() {
		echo "
		<script>
			var _gaq = [['_setAccount', '{$this->guid}'], ['_trackPageview']];
			(function(d, t) {
				var ga = d.createElement(t),
						s = d.getElementsByTagName(t)[0];
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				s.parentNode.insertBefore(ga, s);
			})(document, 'script');
		</script>
		";
	}
}

new GoogleAnalytics();
