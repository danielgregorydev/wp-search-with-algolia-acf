<?php

namespace Dgd\AlgoliaAcf\App\Models;

class ACF
{
	private $fields = [];

	public function __construct($post = null)
	{
		if (function_exists('get_fields')) {
			$this->fields = get_fields($post ?? []);
		}
	}

	public function stringifyAllFields()
	{
		return ACF::stringifyFields($this->fields);
	}

	protected function fieldsToString(): string
	{
		return
			join(
				' ',
				collect($this->stringifyAllFields())
					->flatten()
					->filter()
					->map(fn ($item) => trim($item))
					->all()
			);
	}

	public function countWords()
	{
		return str_word_count($this->fieldsToString(), 0);
	}

	public static function wordCount($post = null)
	{
		$instance = new ACF($post);

		return $instance->countWords();
	}

	public static function stringifyFields($fields)
	{
		if (is_string($fields)) {
			return strip_tags($fields);
		}

		if (!$fields || is_bool($fields) || is_object($fields) || is_numeric($fields)) {
			return '';
		}

		if (isset($fields['type']) && $fields['type'] == 'image') {
			return '';
		}

		return collect($fields)
			->filter(fn ($_, $key) => $key !== 'acf_fc_layout')
			->map(fn ($nestedFields) => self::stringifyFields($nestedFields))
			->all();
	}
}
