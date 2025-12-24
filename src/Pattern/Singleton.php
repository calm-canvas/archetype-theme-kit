<?php

namespace ArchetypeThemeKit\Pattern;

/**
 * Trait Singleton
 * @package ArchetypeThemeKit\Pattern
 */
trait Singleton {
	private static $_instance;

	public static function get_instance() {
		$class = __CLASS__;

		if ( ! self::$_instance instanceof $class ) {
			self::$_instance = new $class();
		}

		return self::$_instance;
	}
}
