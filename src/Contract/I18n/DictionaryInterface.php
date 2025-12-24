<?php

namespace ArchetypeThemeKit\Contract\I18n;

use ArchetypeThemeKit\Constant\I18n\Slug;

interface DictionaryInterface extends Slug {
	public function get( string $key ): string;
}