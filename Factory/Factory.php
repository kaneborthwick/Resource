<?php
declare (strict_types = 1);
namespace Towersystems\Resource\Factory;

final class Factory implements FactoryInterface {
	/**
	 * @var string
	 */
	private $className;

	/**
	 * @param string $className
	 */
	public function __construct($className) {
		$this->className = $className;
	}

	/**
	 * {@inheritdoc}
	 */
	public function createNew() {
		return new $this->className();
	}
}
