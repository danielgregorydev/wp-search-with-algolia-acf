<?php

namespace Dgd\AlgoliaAcf;

/**
 * Plugin Name: WP Search with Algolia ACF
 * Description: Add acf fields to algolia indexes created by WP Search with Algolia.
 * Author: Daniel Gregory
 * Version: 0.0.1
 */

if (!defined('WP_SEARCH_WITH_ALGOLIA_PLUGIN_FILE')) {
	define('WP_SEARCH_WITH_ALGOLIA_PLUGIN_FILE', __FILE__);
}

require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');

$main = new App\Main();
$main->init();

/**
 * Create a main function for external uses
 *
 * @return \ThePluginName\Common\Functions
 * @since 1.0.0
 */
function algoliaAcfPlugin(): \Dgd\AlgoliaAcf\Common\Functions
{
	return new \Dgd\AlgoliaAcf\Common\Functions();
}
