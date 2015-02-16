<?php
/**
 * Plugin Name: Shortcake Fieldmanager Plugin
 * Version: v1.0
 * Description: Fieldmanager fields in shortcake
 * Author: Fusion Engineering and community
 * Author URI: http://next.fusion.net/tag/shortcode-ui/
 * Text Domain: shortcode-ui
 * License: GPL v2 or later
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

add_action( 'init', function() {

	// Add fieldmanager fields if plugin is available.
	if ( class_exists( 'Fieldmanager_Field' ) ) {
		require_once dirname( __FILE__ ) . '/class-shortcake-fields-fieldmanager.php';
		$fieldmanager = Shortcode_UI_Fields_Fieldmanager::get_instance();
	}

}, 5 );
