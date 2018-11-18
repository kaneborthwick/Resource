<?php

namespace Towersystems\Resource\Metadata;

use Doctrine\Common\Inflector\Inflector;

class Metadata implements MetadataInterface {

	/**
	 * [$name description]
	 * @var [type]
	 */
	private $name;

	/**
	 * [$parameters description]
	 * @var [type]
	 */
	private $parameters;

	/**
	 * [$applicationName description]
	 * @var [type]
	 */
	private $applicationName;

	/**
	 * [__construct description]
	 * @param [type] $name       [description]
	 * @param array  $parameters [description]
	 */
	public function __construct($name, $applicationName, array $parameters) {
		$this->name = $name;
		$this->parameters = $parameters;
		$this->applicationName = $applicationName;
	}

	/**
	 * @param string $alias
	 * @param array $parameters
	 *
	 * @return self
	 */
	public static function fromAliasAndConfiguration($alias, array $parameters) {
		list($applicationName, $name) = self::parseAlias($alias);
		return new self($name, $applicationName, $parameters);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAlias() {
		return $this->applicationName . '.' . $this->name;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getApplicationName() {
		return $this->applicationName;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getHumanizedName() {
		return trim(strtolower(preg_replace(['/([A-Z])/', '/[_\s]+/'], ['_$1', ' '], $this->name)));
	}

	/**
	 * {@inheritdoc}
	 */
	public function getPluralName() {
		return Inflector::pluralize($this->name);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getClass($name) {
		if (!$this->hasClass($name)) {
			throw new \InvalidArgumentException(sprintf('Class "%s" is not configured for resource "%s".', $name, $this->getAlias()));
		}

		return $this->parameters['classes'][$name];
	}

	/**
	 * {@inheritdoc}
	 */
	public function hasClass($name) {
		return isset($this->parameters['classes'][$name]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getServiceName($serviceName) {
		return sprintf('%s.%s.%s', $this->getApplicationName(), $serviceName, $this->name);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getParameter($name) {
		if (!$this->hasParameter($name)) {
			throw new \InvalidArgumentException(sprintf('Parameter "%s" is not configured for resource "%s".', $name, $this->getAlias()));
		}

		return $this->parameters[$name];
	}

	/**
	 * {@inheritdoc}
	 */
	public function hasParameter($name) {
		return array_key_exists($name, $this->parameters);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getParameters() {
		return $this->parameters;
	}

	/**
	 * @param string $alias
	 *
	 * @return array
	 */
	private static function parseAlias(string $alias): array
	{
		if (false === strpos($alias, '.')) {
			throw new \InvalidArgumentException('Invalid alias supplied, it should conform to the following format "<applicationName>.<name>".');
		}

		return explode('.', $alias);
	}
}