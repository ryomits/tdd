<?php

class FIzzBuzzLogging
{
	public function __construct($file, $repository)
	{
		$this->file = $file;
		$this->repository = $repository;
	}

	public function run()
	{
		$this->file->set($this->repository->all());
	}
}
