<?php

declare (strict_types = 1);

namespace Towersystems\Resource\Model;

interface ToggleableInterface {

	public function isEnabled();

	/**
	 * @param bool $enabled
	 */
	public function setEnabled($enabled);

	public function enable();

	public function disable();
}
