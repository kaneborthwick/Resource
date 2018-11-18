<?php
declare (strict_types = 1);

namespace Towersystems\Resource\Model;

interface TimestampableInterface {

	const DEFAULT_TIMESTAMP_FORMAT = 'Y-m-d H:i:s';

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt(): \DateTime;

	/**
	 * @param \DateTime $createdAt
	 */
	public function setCreatedAt(\DateTime $createdAt): void;

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt(): ?\DateTime;

	/**
	 * @param \DateTime $updatedAt
	 */
	public function setUpdatedAt(\DateTime $updatedAt): void;
}
