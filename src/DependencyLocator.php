<?php

namespace Reliese\Component\Dependency;

use Reliese\Component\Dependency\Exceptions\UnresolvableDependencyException;

interface DependencyLocator
{
	/**
	 * @param string $dependency
	 *
	 * @return mixed
	 * @throws UnresolvableDependencyException
	 */
	public function resolve(string $dependency);
}