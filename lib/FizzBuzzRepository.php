<?php

class FizzBuzzRepository
{
	private $results = [];

	public function register($result)
	{
		$this->results[] = $result;
	}

	public function all()
	{
		return $this->results;
	}
}
