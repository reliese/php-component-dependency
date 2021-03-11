<?php

namespace Reliese\Component\Dependency\Exceptions;

use Throwable;

class UnresolvableDependencyException extends \Exception
{

	/**
	 * UnresolvableDependencyException constructor.
	 *
	 * @param string $dependency
	 * @param int $code
	 * @param Throwable|null $previous
	 */
	public function __construct($dependency = "", $code = 0, Throwable $previous = null) {
		parent::__construct("Unable to resolve dependency [$dependency]", $code, $previous);
	}
}