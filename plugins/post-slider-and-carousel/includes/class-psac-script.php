<?php
/**
 * Script Class
 *
 * Handles the script and style functionality of plugin
 *
 * @package Post Slider and Carousel
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Psac_Script {

	function __construct() {

		// Action to add style at front side
		add_action( 'wp_enqueue_scripts', array($this, 'psac_front_style') );

		// Action to add script at front side
		add_action( 'wp_enqueue_scripts', array($this, 'psac_front_script') );
	}

	/**
	 * Function to add style at front side
	 * 
	 * @since 1.0
	 */
	function psac_front_style() {

		// Registring and enqueing slick slider css
		if( ! wp_style_is( 'owl-carousel-style', 'registered' ) ) {
			wp_register_style( 'owl-carousel-style', PSAC_URL.'assets/css/owl.carousel.min.css', array(), PSAC_VERSION );
		}

		// Registring and enqueing public css
		wp_register_style( 'psac-public-style', PSAC_URL.'assets/css/psac-public.css', array(), PSAC_VERSION ); 
		
		wp_enqueue_style( 'owl-carousel-style' );
		wp_enqueue_style( 'psac-public-style' );
	}

	/**
	 * Function to add script at front side
	 * 
	 * @since 1.0
	 */
	function psac_front_script() {

		// Registring slick slider script
		if( ! wp_script_is( 'jquery-owl-carousel', 'registered' ) ) {
			wp_register_script( 'jquery-owl-carousel', PSAC_URL. 'assets/js/owl.carousel.min.js', array('jquery'), PSAC_VERSION, true);
		}
		
		// Registring News Ticker script
		wp_register_script( 'jquery-vticker', PSAC_URL. 'assets/js/post-vticker.min.js', array('jquery'), PSAC_VERSION, true);
		
		// Registring and enqueing public script
		wp_register_script( 'psac-public-script', PSAC_URL. 'assets/js/psac-public.js', array('jquery'), PSAC_VERSION, true );
		wp_localize_script( 'psac-public-script', 'Psac', array(
																'is_mobile' => ( wp_is_mobile() ) ? 1 : 0,
																'is_rtl' 	=> ( is_rtl() ) ? 1 : 0
															));
	}
}

$psac_script = new Psac_Script();