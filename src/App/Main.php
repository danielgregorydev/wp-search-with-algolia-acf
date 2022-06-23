<?php

namespace Dgd\AlgoliaAcf\App;

use Dgd\AlgoliaAcf\App\Controllers\InjectAcfFields;

class Main
{
	public function init()
	{
		$injector = new InjectAcfFields();
		$injector->init();
	}
}
