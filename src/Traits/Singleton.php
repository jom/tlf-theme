<?php
/**
 * File containing the trait \TLF\Theme\Traits\Singleton.
 *
 * @package tlf-theme
 */

namespace TLF\Theme\Traits;

trait Singleton {

	/**
	 * Stores the instances.
	 *
	 * @var array
	 */
	private static $instance = [];

	/**
	 * Retrieves instance of singleton.
	 *
	 * @return static
	 */
	public static function instance() {
		if ( ! isset( self::$instance[ static::class ] ) ) {
			self::$instance[ static::class ] = new static();
		}

		return self::$instance[ static::class ];
	}
}
