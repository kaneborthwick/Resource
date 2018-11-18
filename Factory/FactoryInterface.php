<?php
declare (strict_types = 1);
namespace Towersystems\Resource\Factory;

interface FactoryInterface {
	/**
	 * @return object
	 */
	public function createNew();
}