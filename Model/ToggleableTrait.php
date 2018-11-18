<?php

namespace Towersystems\Resource\Model;

/**
 * @author Kane Borthwick <kane.borthwick@hotmail.com>
 */
trait ToggleableTrait {
	/**
	 * @var bool
	 */
	protected $enabled = true;

	/**
	 * @return bool
	 */
	public function isEnabled() {
		return $this->enabled;
	}

	/**
	 * @param bool $enabled
	 */
	public function setEnabled($enabled) {
		$this->enabled = (bool) $enabled;
	}

	public function enable() {
		$this->enabled = true;
	}

	public function disable() {
		$this->enabled = false;
	}
}
