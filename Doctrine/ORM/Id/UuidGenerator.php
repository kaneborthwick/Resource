<?php

namespace Towersystems\Resource\Doctrine\ORM\Id;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;

class UuidGenerator extends AbstractIdGenerator {
	/**
	 * {@inheritDoc}
	 */
	public function generate(EntityManager $em, $entity) {

		if ($entity->getId()) {

			$UUIDv4 = '/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';

			if (!preg_match($UUIDv4, $entity->getId())) {
				throw new \Exception("Invalid UUID4 id: " . $entity->getId(), 1);
			}

			// do : add a check to see if the id exists
			return $entity->getId();
		}

		//this is generating UUIDv1 not UUIDv4
		$conn = $em->getConnection();
		$sql = 'SELECT ' . $conn->getDatabasePlatform()->getGuidExpression();
		return $conn->query($sql)->fetchColumn(0);
	}
}
