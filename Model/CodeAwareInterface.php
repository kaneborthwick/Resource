<?php

namespace Towersystems\Resource\Model;

interface CodeAwareInterface {

	/**
	 * @return string
	 */
	public function getCode();

	/**
	 * @param string $code
	 */
	public function setCode($code);
}
