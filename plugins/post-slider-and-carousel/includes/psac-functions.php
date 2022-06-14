<?php
/**
 * Plugin generic functions file
 *
 * @package Post Slider and Carousel
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Escape Tags & Slashes
 * Handles escapping the slashes and tags
 *
 * @since 1.0
 */
function psac_esc_attr($data) {
	return esc_attr( stripslashes($data) );
}

/**
 * Function to unique number value
 * 
 * @since 1.0
 */
function psac_get_unique() {
	static $unique = 0;
	$unique++;

	return $unique;
}

/**
 * Function to get post excerpt
 * 
 * @since 1.0
 */
function psac_get_post_excerpt( $post_id = null, $content = '', $word_length = '55', $more = '...' ) {

	$word_length = !empty($word_length) ? $word_length : 55;

	// If post id is passed
	if( !empty($post_id) ) {
		if (has_excerpt($post_id)) {

			$content = get_the_excerpt();

		} else {
			$content = !empty($content) ? $content : get_the_content();
		}
	}

	if( ! empty( $content ) ) {
		$content = strip_shortcodes( $content ); // Strip shortcodes
		$content = wp_trim_words( $content, $word_length, $more );
	}

	return $content;
}

/**
 * Function to get post featured image
 * 
 * @since 1.0
 */
function psac_get_post_featured_image( $post_id = '', $size = 'full' ) {
    
    $size   = !empty($size) ? $size : 'full';
    $image  = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size );
    $image 	= isset($image[0]) ? $image[0] : '';

    return $image;
}

/**
 * Function to get post external link or permalink
 * 
 * @since 1.0
 */
function psac_get_post_link( $post_id = '' ) {

	$post_link = '';

	if( ! empty( $post_id ) ) {
		$post_link = get_permalink( $post_id );
	}

	return $post_link;
}

/**
 * Function to get 'psac_post_slider' shortcode designs
 * 
 * @since 1.0
 */
function psac_post_slider_designs() {
	$design_arr = array(
		'design-1'	=> esc_html__('Design 1', 'post-slider-and-carousel'),
		'design-2'	=> esc_html__('Design 2', 'post-slider-and-carousel'),		
	);
	return $design_arr;
}

/**
 * Function to get 'psac_post_carousel' shortcode designs
 * 
 * @since 1.0
 */
function psac_post_carousel_designs() {
	$design_arr = array(
		'design-1'	=> esc_html__('Design 1', 'post-slider-and-carousel'),
		'design-2'	=> esc_html__('Design 2', 'post-slider-and-carousel'),		
	);
	return $design_arr;
}