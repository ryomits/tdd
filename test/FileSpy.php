<?php

class FileSpy
{
	public function __construct()
	{
		$this->results = [];
	}

	public function set($results)
	{
		$this->results = $results;
	}

	public function results()
	{
		return $this->results;
	}

	public function get()
	{
		return $this->results();
	}
}
