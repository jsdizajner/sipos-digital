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
