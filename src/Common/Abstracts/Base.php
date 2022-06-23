<?php

namespace Dgd\AlgoliaAcf\Common\Abstracts;

use Dgd\AlgoliaAcf\Config\Plugin;

abstract class Base
{
	/**
	 * @see Plugin
	 */
	protected Plugin $plugin;

	/**
	 * Base constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct()
	{
		$this->plugin = Plugin::init();
	}
}
