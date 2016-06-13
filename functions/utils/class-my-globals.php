<?php

class MyGlobals {

	public static $props = [];
	private static $_instance;

	public function __construct() {
	}

	public static function set($key, $value) {
		$o = self::getInstance();
		$o::$props[$key] = $value;
	}

	public static function get($key) {
		$o = self::getInstance();
		return $o::$props[$key];
	}

	public static function increment($key) {
		$o = self::getInstance();
		if (isset($o::$props[$key]) && is_numeric($o::$props[$key])) {
			$o::$props[$key]++;
		} else {
			throw new Exception("Property {$o::$props[$key]} is not numeric.", 1);
		}
	}

	public static function getInstance() {
		if(!isset(self::$_instance)) {
			$class = __CLASS__;
			self::$_instance = new $class();
		}
		return self::$_instance;
	}

}
