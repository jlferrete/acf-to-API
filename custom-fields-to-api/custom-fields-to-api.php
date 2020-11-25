<?php 

/**
 * Plugin Name:       Advanced Custom fields to Api Extension
 * Description:       Extended options for controlling API
 * Version:           1.0.0
 * Author:            Jlferrete
 * Author URI:        https://jlferrete.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       jlf-acf-to-api
 * Domain Path:       /languages
 */

//https://es.wordpress.org/plugins/acf-to-rest-api/

//Versión minima para funcione 3
define( 'ACF_TO_REST_API_REQUEST_VERSION', 3 );

// Opción de mostrar o no en RestAPI
add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

// Opción de permitir o no edición en RestAPI
add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );