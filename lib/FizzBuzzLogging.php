<?php

class FIzzBuzzLogging
{
	public function __construct($repository)
	{
		$this->repository = $repository;
	}

	public function run()
	{
		$this->repository->save();
	}
}
