<?php
declare (strict_types = 1);

namespace Towersystems\Resource\Model;

abstract class AbstractResourceItem implements ResourceInterface {

	/**
	 * @var [type]
	 */
	protected $id;

	/**
	 * {@inheritdoc}
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * {@inheritdoc}
	 */
	public function setId($id): void{
		$this->id = $id;
	}

}