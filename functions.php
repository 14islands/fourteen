<?php

namespace Fourteen;

class Theme {

	const FUNCTIONS_FOLDER = 'functions';

	function __construct() {

		/**
		 * This loop will go recursively through all the classes
		 * in FUNCTIONS_FOLDER and include them dynamically.
		 *
		 * Since most of the classes are singletons and instanciates themselves,
		 * all the functionality will be available on the fly
		 * keeping your theme neat and happy.
		 */
		$functions_path = get_template_directory() . DIRECTORY_SEPARATOR;
		$functions_path .= self::FUNCTIONS_FOLDER . DIRECTORY_SEPARATOR;

		$iterator = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator($functions_path),
			\RecursiveIteratorIterator::SELF_FIRST
		);

		foreach($iterator as $file) {
			if ( !$iterator->isDot()
				&& $file->isFile()
				&& strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION)) === 'php'
				&& $file->getFilename()[0] !== '_'
			) {
				include $file->getPathname();
			}
		}

	}

}

// Go!
new Theme();
