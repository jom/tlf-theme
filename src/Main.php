<?php
/**
 * File containing the class \TLF\Theme\Main.
 *
 * @package tlf-theme
 */

namespace TLF\Theme;

use TLF\Theme\Traits\Singleton;

/**
 * Main plugin class.
 */
class Main {

	use Singleton;

	/**
	 * Initializes the hooks.
	 */
	public function init() {
		Go::instance()->init();
	}
}
