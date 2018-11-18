<?php
declare (strict_types = 1);

namespace Towersystems\Resource\Model;

interface ExternalSourceInterface {

	/**
	 * @return string
	 */
	public function getExternalId();

	/**
	 * @param string $externalId
	 */
	public function setExternalId($externalId);
}
