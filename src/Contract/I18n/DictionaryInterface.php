<?php

namespace CalmCanvas\ArchetypeThemeKit\Contract\I18n;

use CalmCanvas\ArchetypeThemeKit\Constant\I18n\Slug;

interface DictionaryInterface extends Slug {
	public function get( string $key ): string;
}