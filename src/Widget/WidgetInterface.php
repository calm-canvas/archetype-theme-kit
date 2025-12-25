<?php

namespace CalmCanvas\ArchetypeThemeKit\Widget;

/**
 * Interface WidgetInterface
 * @package ArchetypeThemeKit\Contract
 */
interface WidgetInterface {

	/**
	 * @param $args
	 * @param $instance
	 */
	function get_widget_content( $args, $instance ): void;

	/**
	 * @return array
	 */
	function get_default(): array;
}