<?php

namespace Towersystems\Resource\Model;

trait CodeAwareTrait {

	protected $code;

	/**
	 * @return string
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * @param string $code
	 */
	public function setCode($code) {
		$this->code = $code;
	}
}
