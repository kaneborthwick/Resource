<?php
declare (strict_types = 1);

namespace Towersystems\Resource\Model;

trait ExternalSourceTrait {

	/**
	 * @var string
	 */
	protected $externalId;

	/**
	 * @return string
	 */
	public function getExternalId() {
		return $this->externalId;
	}

	/**
	 * @param string $externalId
	 */
	public function setExternalId($externalId) {
		$this->externalId = $externalId;
	}
}
