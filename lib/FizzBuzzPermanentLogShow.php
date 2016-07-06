<?php

class FizzBuzzPermanentLogShow
{
	public function __construct($repository, $stdOut)
	{
		$this->repository = $repository;
		$this->stdOut = $stdOut;
	}

	public function run()
	{
		foreach ($this->repository->past_all() as $fizz_buzz) {
			$this->stdOut->out($fizz_buzz->toString());
		}
	}
}
