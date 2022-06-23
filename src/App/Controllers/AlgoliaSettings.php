<?php

namespace Dgd\AlgoliaAcf\App\Controllers;

use Dgd\AlgoliaAcf\Common\Abstracts\Base;

class AlgoliaSettings extends Base
{
	public function init()
	{
		add_action('algolia_searchable_posts_index_settings', [$this, 'makeFieldsSearchable']);
	}

	public function makeFieldsSearchable($settings)
	{
		$key = $this->plugin->acfAttributeKey();
		$settings['searchableAttributes'][] = "unordered($key)";

		return $settings;
	}
}
