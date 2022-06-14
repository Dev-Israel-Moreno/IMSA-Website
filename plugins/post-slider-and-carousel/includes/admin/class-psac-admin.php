<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package Post Slider and Carousel
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Psac_Admin {

	function __construct() {

		// Action to register admin menu
		add_action( 'admin_menu', array($this, 'psac_register_menu') );
	}

	/**
	 * Function to register admin menus
	 * 
	 * @since 1.0
	 */
	function psac_register_menu() {

		// Getting Started Page
		add_menu_page( __('Post Slider and Carousel', 'post-slider-and-carousel'), __('Post Slider and Carousel', 'post-slider-and-carousel'), 'edit_posts', 'psac-about', array($this, 'psac_getting_started_page'), 'dashicons-sticky' );
	}

	/**
	 * Function to get 'How It Works' HTML
	 *
	 * @since 1.0
	 */
	function psac_getting_started_page() {
		include_once( PSAC_DIR . '/includes/admin/getting-started.php' );
	}
}

$psac_admin = new Psac_Admin();