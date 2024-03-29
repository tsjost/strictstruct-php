<?php declare(strict_types=1);

namespace tsjost;

abstract class StrictStruct
{
	public function __construct(array $defaults = array())
	{
		foreach ($defaults as $key => $value) {
			$this->{$key} = $value;
		}
	}

	public function __set($name, $value)
	{
		throw new \DomainException("Cannot use undeclared property '". $name ."'");
	}
}
