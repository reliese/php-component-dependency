<?php

namespace Reliese\Component\Dependency;

use Closure;

interface DependencyRegistrar
{
	/**
	 * @param string $dependency
	 * @param Closure $abstraction
	 *
	 * @return Container
	 */
	public function singleton(string $dependency, Closure $abstraction) : Container;

	/**
	 * @param string $dependency
	 * @param Closure $abstraction
	 *
	 * @return Container
	 */
	public function register(string $dependency, Closure $abstraction) : Container;
}