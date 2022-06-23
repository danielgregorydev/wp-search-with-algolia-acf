<?php

namespace Dgd\AlgoliaAcf\App\Controllers;

use Dgd\AlgoliaAcf\App\Models\ACF as ACFModel;
use Dgd\AlgoliaAcf\Common\Abstracts\Base;

class InjectAcfFields extends Base
{
	public function init()
	{
		add_action('algolia_post_shared_attributes', [$this, 'inject'], 10, 2);
	}

	public function inject($attributes, $post)
	{
		$acf = new ACFModel($post);
		$key = $this->plugin->acfAttributeKey();
		$attributes[$key] = $acf->stringifyAllFields();

		return $attributes;
	}
}
