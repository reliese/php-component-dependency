<?php

namespace Reliese\Component\Dependency;

use Reliese\Component\Dependency\Exceptions\UnresolvableDependencyException;

interface DependencyCaller
{
	/**
	 * @param object $object
	 * @param string $method
	 *
	 * @return mixed
	 * @throws UnresolvableDependencyException
	 */
	public function call(object $object, string $method);
}