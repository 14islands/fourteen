<?php

class Utils {

	function __construct() {
	}

	/**
	 * Similar to file_get_contents except this will evaluate the PHP
	 * before returning the data.
	 *
	 * @param  [String] $filename The filename path.
	 * @return [String]           The filename data.
	 * @see  http://php.net/manual/en/function.include.php
	 */
	static function get_include_contents($filename) {
		if (is_file($filename)) {
			ob_start();
			include $filename;
			$contents = ob_get_contents();
			ob_end_clean();
			return $contents;
		}
		return false;
	}

	/**
	 * Trim and add '...' to string if passing the limit of characters.
	 *
	 * @param  [String]  $string The string to work with.
	 * @param  [Integer] $limit  The max number of characters.
	 * @return [String]          The modified string.
	 */
	static function trim_with_ellipsis($string, $limit = 30) {
		return Utils::truncate($string, $limit)."...";
	}

	/**
	 * Truncates a string if it passes the limit of characters.
	 *
	 * @param  [String]  $string The string to work with.
	 * @param  [integer] $limit  The max number of characters.
	 * @return [String]          The modified string.
	 */
	static function truncate($string, $limit = 30) {
		return strlen($string) > $limit ? substr($string, 0, $limit) : $string;
	}

	/**
	 * Prints encoded JSON with friendly UTF8 quotes.
	 *
	 * @param  [Mixed] $data Data to be encoded with json_encode.
	 * @return [String]       String to be printed.
	 */
	static function get_encoded_data($data) {
		return htmlspecialchars(json_encode($data), ENT_QUOTES, 'UTF-8');
	}

}

