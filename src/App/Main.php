<?php

namespace Dgd\AlgoliaAcf\App;

use Dgd\AlgoliaAcf\App\Controllers\AlgoliaSettings;
use Dgd\AlgoliaAcf\App\Controllers\InjectAcfFields;

class Main
{
	public function init()
	{
		$settings = new AlgoliaSettings();
		$settings->init();

		$injector = new InjectAcfFields();
		$injector->init();
	}
}
