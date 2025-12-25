<?php

namespace CalmCanvas\ArchetypeThemeKit\DI\Config;

use Aura\Di\{Container, ContainerConfig};
use Aura\Di\Exception\{ContainerLocked, ServiceNotObject};
use CalmCanvas\ArchetypeThemeKit\Contract\I18n\{DictionaryInterface, TranslatorInterface};
use CalmCanvas\ArchetypeThemeKit\I18n\{Dictionary, Translator};
use CalmCanvas\ArchetypeThemeKit\Contract\Helper\{CssNamingInterface, DataInterface};
use CalmCanvas\ArchetypeThemeKit\Helper\{BemCssNaming, Data};

class Common extends ContainerConfig {
	/**
	 * @throws ServiceNotObject
	 * @throws ContainerLocked
	 */
	public function define( Container $di ): void {
		$di->set( CssNamingInterface::class, $di->lazyNew( BemCssNaming::class ) );

		$di->set( DataInterface::class, $di->lazyNew( Data::class ) );
		$di->set( DictionaryInterface::class, $di->lazyNew( Dictionary::class ) );

		$di->params[ Translator::class ]['dictionary'] = $di->lazyGet( DictionaryInterface::class );
		$di->set( TranslatorInterface::class, $di->lazyNew( Translator::class ) );
	}

	public function modify( Container $di ): void {
		// TODO: modify some thing.
	}
}