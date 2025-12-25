<?php

namespace CalmCanvas\ArchetypeThemeKit\Contract\I18n;

interface TranslatorInterface {
	public function i18n( string $key, bool $echo = false, bool $is_attr = true ): string;
}