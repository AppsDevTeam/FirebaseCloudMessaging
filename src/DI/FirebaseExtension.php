<?php

namespace Adt\FirebaseCloudMessaging\DI;

use Nette\DI\CompilerExtension;
use sngrl\PhpFirebaseCloudMessaging\Client;

class FirebaseExtension extends CompilerExtension
{

	private $defaults = [
		'serverKey' => NULL
	];

	public function loadConfiguration()
	{
		$this->validateConfig($this->defaults);

		$builder = $this->getContainerBuilder();
		$config = $this->getConfig();

		$builder->addDefinition($this->prefix('httpClient'))
			->setClass(\GuzzleHttp\Client::class);

		$builder->addDefinition($this->prefix('client'))
			->setClass(Client::class)
			->addSetup('setApiKey', [$config['serverKey']])
			->addSetup('injectGuzzleHttpClient', [$this->prefix('@httpClient')]);
	}

}
