<?php
declare (strict_types = 1);
namespace Towersystems\Resource\Loader;

interface LoaderInterface {
	/**
	 * [load description]
	 * @param  [type] $resource [description]
	 * @return [type]           [description]
	 */
	public function load($resource);

	/**
	 * [supports description]
	 * @param  [type] $resource [description]
	 * @return [type]           [description]
	 */
	public function supports($resource);
}