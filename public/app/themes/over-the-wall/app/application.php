<?php

/**
 * Enqueue Styles & Scripts
 */
add_action( 'wp_enqueue_scripts', 'scripts' );
function scripts(  ) {

	$debug = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG );
	$theme = get_template_directory_uri();

	$package = file_get_contents( get_template_directory(  ) . '/package.json' );
	$package = json_decode( $package );
	$ver = $package->version;

	$assets = file_get_contents( get_template_directory(  ) . '/assets.json' );
	$assets = json_decode( $assets );
	$assets_js = $assets->js;
	$assets_css = $assets->css;

	$external = array(
		'css' => array(  ),
		'js'  => array(  )
	);

	$handle = 'app';

	// CSS from assets.json
	foreach( $assets_css as $asset ) {
		$asset = json_encode( $asset );
		$asset = str_replace( '$ver', $ver, $asset );
		$asset = json_decode( $asset );

		$asset_defaults = array(
			'handle' => '',
			'path' => '',
			'dependencies' => null,
			'version' => $ver
		);

		$asset = ( object ) array_merge( ( array ) $asset_defaults, ( array ) $asset );

		if( isset( $asset->external ) && $asset->external ) {
			$asset->path = $asset->src;
			$external[ 'css' ][  ] = $asset;
		} else {
			$asset->path = $theme . '/' . $asset->src;
		}

		// Unminified Styles
		if( $debug ) {
			wp_enqueue_style( $asset->handle, $asset->path, $asset->dependencies, $asset->version );
		}
	}

	// Main stylesheet should come after the others to allow easy overwriting of any vendor styles
	if( $debug ) {
		wp_enqueue_style( 'style', $theme . '/build/style.css', null, null );
	}

	// JS from assets.json
	foreach( $assets_js as $asset ) {

		// Dont include assets marked for dist build only.
		if( isset($asset->dist_only) && $asset->dist_only ) { continue; }

		$asset = json_encode( $asset );
		$asset = str_replace( '$ver', $ver, $asset );
		$asset = json_decode( $asset );

		$asset_defaults = array(
			'handle' => '',
			'path' => '',
			'dependencies' => null,
			'version' => $ver,
			'in_footer' => true
		);

		$asset = ( object ) array_merge( ( array ) $asset_defaults, ( array ) $asset );

		if( isset( $asset->external ) && $asset->external ) {
			$asset->path = $asset->src;
			$external[ 'js' ][  ] = $asset;
		} else {
			$asset->path = $theme . '/' . $asset->src;
		}

		// Unminified Scripts
		if( $debug ) {
			wp_enqueue_script( $asset->handle, $asset->path, $asset->dependencies, $asset->version, $asset->in_footer );
		}
	}

	// Enqueue concatenated files
	if( !$debug ) {

		$handle = 'script-build';
		$scripts_build_header = '/build/build-header-' . $ver . '.js';

		wp_enqueue_style( 'style-build', $theme . '/build/build-' . $ver . '.css', null, null );
		wp_enqueue_script( 'script-build', $theme . '/build/build-footer-' . $ver . '.js', null, null, true );

		// Only enqueue the file if there are some header scripts
		if( file_exists( get_template_directory(  ) . $scripts_build_header ) ){
			wp_enqueue_script( 'script-build-header', $theme . $scripts_build_header, null, null, false );
		}
	}

	// External Assets
	if( !empty( $external[ 'css' ] ) ) {
		foreach( $external[ 'css' ] as $asset ) {
			wp_enqueue_style( $asset->handle, $asset->path, $asset->dependencies, $asset->version );
		}
	}

	if( !empty( $external[ 'js' ] ) ) {
		foreach( $external[ 'js' ] as $asset ) {
			wp_enqueue_script( $asset->handle, $asset->path, $asset->dependencies, $asset->version, $asset->in_footer );
		}
	}

	wp_localize_script( $handle, 'WP', array(
		'themeDir' => $theme,
		'homeUrl' => get_bloginfo( 'url' ),
		'ajaxUrl' => admin_url( 'admin-ajax.php' )
	) );

}
