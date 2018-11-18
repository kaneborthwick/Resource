<?php
declare (strict_types = 1);

namespace Towersystems\Resource\Repository;

use Doctrine\Common\Persistence\ObjectRepository;
use Towersystems\Resource\Model\ResourceInterface;

interface RepositoryInterface extends ObjectRepository {

	const ORDER_ASCENDING = 'ASC';
	const ORDER_DESCENDING = 'DESC';

	/**
	 * @param array $criteria
	 * @param array $sorting
	 *
	 * @return mixed
	 */
	public function createPaginator(array $criteria = [], array $sorting = []);

	/**
	 * @param ResourceInterface $resource
	 */
	public function add(ResourceInterface $resource);

	/**
	 * @param ResourceInterface $resource
	 */
	public function remove(ResourceInterface $resource);

	/**
	 * Retrieve a count from the passed criteria
	 * @param  array  $criteria [description]
	 * @return [type]           [description]
	 */
	public function count(array $criteria = []);
}