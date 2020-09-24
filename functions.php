<?php
/**
 * Tlf Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tlf
 */

define( 'TLF_THEME_VERSION', '1.0.0' );
define( 'TLF_THEME_FILE', __FILE__ );
define( 'TLF_THEME_DIR', __DIR__ );

require __DIR__ . '/vendor/autoload.php';

\TLF\Theme\Main::instance()->init();
