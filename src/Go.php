<?php
/**
 * File containing the class \TLF\Theme\Go.
 *
 * @package tlf-theme
 */

namespace TLF\Theme;

use TLF\Theme\Traits\Singleton;

/**
 * Class containing customizations to the parent theme.
 */
class Go {

	use Singleton;

	/**
	 * Initializes the hooks.
	 */
	public function init() {
		add_filter( 'go_design_styles', [ $this, 'add_tlf_styles' ] );
	}

	/**
	 * Remove the default styles and replace it just with the styles for TLF.
	 */
	public function add_tlf_styles( $styles ) {

		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$rtl    = ! is_rtl() ? '' : '-rtl';

		$styles = array(
			'tlf'      => array(
				'slug'          => 'tlf',
				'label'         => _x( 'The Loss Foundation', 'design style name', 'tlf' ),
				'url'           => get_theme_file_uri( "dist/css/design-styles/style-tlf{$rtl}{$suffix}.css" ),
				'editor_style'  => "dist/css/design-styles/style-tlf-editor{$rtl}{$suffix}.css",
				'color_schemes' => array(
					'one'   => array(
						'label'      => _x( 'Gold', 'color palette name', 'tlf' ),
						'primary'    => '#455a64',
						'secondary'  => '#8b7022',
						'tertiary'   => '#eceff1',
						'background' => '#ffffff',
					),
				),
				'fonts'         => array(
					'Crimson Text' => array(
						'400',
						'400i',
						'700',
						'700i',
					),
					'Nunito Sans'  => array(
						'400',
						'400i',
						'600',
						'700',
					),
				),
			),
		);

		return $styles;
	}
}
