<?php

namespace Towersystems\Resource\Metadata;

interface MetadataInterface {

	/**
	 * [getAlias description]
	 * @return [type] [description]
	 */
	public function getAlias();

	/**
	 * [getName description]
	 * @return [type] [description]
	 */
	public function getName();

	/**
	 * [getPluralName description]
	 * @return [type] [description]
	 */
	public function getPluralName();

	/**
	 * [getClass description]
	 * @param  [type] $name [description]
	 * @return [type]       [description]
	 */
	public function getClass($name);

	/**
	 * [getServiceId description]
	 * @param  [type] $serviceName [description]
	 * @return [type]              [description]
	 */
	public function getServiceName($serviceName);

	/**
	 * [getParameter description]
	 * @param  [type] $name [description]
	 * @return [type]       [description]
	 */
	public function getParameter($name);

	/**
	 * [getParameters description]
	 * @return [type] [description]
	 */
	public function getParameters();

	/**
	 * [hasParameter description]
	 * @param  [type]  $name [description]
	 * @return boolean       [description]
	 */
	public function hasParameter($name);
}