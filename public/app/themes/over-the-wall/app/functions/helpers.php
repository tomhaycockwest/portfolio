<?php

/**
 * Image Helper
 */
function get_img_url( $path ) {
	return get_template_directory_uri() . '/img/' . $path;
}

/**
 * Img Helper
 * @param	string Path to the image relative to images folder
 * @return Echo full path to image
 * @example `<img src="<?php img_url('image.png') ?>" alt="...">`
 */
function img_url( $path ) {
	echo get_img_url( $path );
}

/**
 * Add post type and post name to the body class
 * @param Array $classes
 * @return Array
 */
add_action( 'body_class', function( $classes ) {
	global $post;

	if ( isset( $post ) && ( is_single(  ) || ( is_page(  ) ) ) ) {
		$classes[  ] = $post->post_type . '-' . $post->post_name;
	}

	return $classes;
} );

/**
 * Output attachment src
 */
function get_attachment_src( $attachment_id, $size = null ) {
	$thumbnail = false;

	// If size is not set then set it as full
	if( is_null( $size ) ) { $size = 'full'; }

	if( !$attachment_id ) {
		if( is_array( $size ) ) {
			$thumbnail = sprintf( '//placehold.it/%sx%s?text=Placeholder', $size[ 0 ], $size[ 1 ] );
		}
	} else {
		$thumbnail_src = wp_get_attachment_image_src( $attachment_id, $size );
		$thumbnail = reset( $thumbnail_src );
	}

	return $thumbnail;
}

/**
 * Wrapper for wp_get_attachment_src that check the attachment id and returns a single src
 * @param int $attachment_id
 * @param mixed $size
 * @link https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src/
 * @return string
 * @example '<img src="<?php the_attachment_src( 1, array( 100, 100, true ) ); ?>" alt="...">'"
 */
function the_attachment_src( $attachment_id, $size = null ) {
	echo get_attachment_src( $attachment_id, $size );
}
