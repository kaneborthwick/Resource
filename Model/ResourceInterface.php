<?php
declare (strict_types = 1);

namespace Towersystems\Resource\Model;

interface ResourceInterface {

	/**
	 * @return [type] $id
	 */
	public function getId();

	/**
	 * @param [type] $id
	 */
	public function setId($id): void;

}