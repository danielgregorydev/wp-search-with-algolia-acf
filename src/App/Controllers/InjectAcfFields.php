<?php

namespace Dgd\AlgoliaAcf\App\Controllers;

use Dgd\AlgoliaAcf\App\Models\ACF as ACFModel;
use Dgd\AlgoliaAcf\Common\Abstracts\Base;

class InjectAcfFields extends Base
{
	public function init()
	{
		add_action('algolia_post_records', [$this, 'inject'], 10, 2);
	}

	public function inject($records, $post)
	{
		$acf = new ACFModel($post);
		$records['acf'] = $acf->stringifyAllFields();

		return $records;
	}
}
