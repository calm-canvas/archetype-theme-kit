<?php

namespace ArchetypeThemeKit\I18n;

use ArchetypeThemeKit\Contract\I18n\DictionaryInterface;
use ArchetypeThemeKit\Contract\I18n\TranslatorInterface;

class Translator implements TranslatorInterface {
	private DictionaryInterface $dictionary;

	public function __construct( $dictionary ) {
		$this->dictionary = $dictionary;
	}

	public function i18n( string $key, bool $echo = false, bool $is_attr = true ): string {
		$content = $this->dictionary->get( $key );

		if ( $echo ) {
			echo $content;
		}

		return $content;
	}
}