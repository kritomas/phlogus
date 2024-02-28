<?php

class User
{
	public string $name;

	public function __construct(int $name)
	{
		$this->name = $name;
	}
}

?>