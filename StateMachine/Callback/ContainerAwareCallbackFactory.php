<?php

declare (strict_types = 1);

namespace Towersystems\Resource\StateMachine\Callback;

use Interop\Container\ContainerInterface;
use SM\Callback\Callback;
use SM\Callback\CallbackFactoryInterface;
use SM\SMException;

final class ContainerAwareCallbackFactory implements CallbackFactoryInterface {

	/**
	 * @var string
	 */
	protected $class;

	/**
	 * @var ContainerInterface
	 */
	protected $container;

	/**
	 * [__construct description]
	 * @param [type]             $class     [description]
	 * @param ContainerInterface $container [description]
	 */
	public function __construct(ContainerInterface $container) {
		$this->class = Callback::class;
		$this->container = $container;
	}

	/**
	 * {@inheritDoc}
	 */
	public function get(array $specs) {
		if (!isset($specs['do'])) {
			throw new SMException(sprintf(
				'CallbackFactory::get needs the index "do" to be able to build a callback, array %s given.',
				json_encode($specs)
			));
		}
		$class = $this->class;
		$specs["do"][0] = $specs['do'][0] == "object" ? $specs['do'][0] : $this->container->get($specs['do'][0]);
		return new $class($specs, $specs['do']);
	}
}