<?php

class FizzBuzzLogShow
{
	public function __construct($stdOut, $repository)
	{
		$this->stdOut = $stdOut;
		$this->repository = $repository;
	}

	public function run()
	{
		foreach($this->repository->all() as $result) {
			$this->stdOut->out($result);
		}
	}
}
