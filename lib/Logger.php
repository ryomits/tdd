<?php

class Logger
{
	private $results = [];

	public function add($result)
	{
		$this->results[] = $result;
	}

	public function results()
	{
		return $this->results;
	}
}
