<?php
defined( 'ABSPATH' ) || exit;


/**
 * Initiate Update Checker
 */
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/jsdizajner/heba-medizin',
	__FILE__,
	'heba-medizin'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


/**
 * Load Bootstrap 5
 *
 * @since 0.0.2
 */
function load_bootstrap_scripts() {
	wp_enqueue_style( 'bs-5-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.3.0-alpha3', 'all' );
	wp_enqueue_script( 'bs-5-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.3.0-alpha3', false );
}
add_action( 'wp_enqueue_scripts', 'load_bootstrap_scripts' );
