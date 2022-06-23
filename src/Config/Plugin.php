<?php

declare(strict_types=1);

namespace Dgd\AlgoliaAcf\Config;

use Dgd\AlgoliaAcf\Common\Traits\Singleton;

/**
 * Plugin data used throughout the plugin, most of them are defined
 * by the root file meta data. The data is being inserted in each class
 * that extends the Base abstract class
 *
 * @see Base
 * @package ThePluginName\Config
 * @since 1.0.0
 */
final class Plugin
{
	use Singleton;

	public function data(): array
	{
		return [
			'plugin_path' => untrailingslashit(plugin_dir_path(WP_SEARCH_WITH_ALGOLIA_PLUGIN_FILE)),
			'plugin_template_folder' => 'templates',
		];
	}

	public function templatePath(): string
	{
		return $this->data()['plugin_path'] . '/' . $this->data()['plugin_template_folder'];
	}
}
