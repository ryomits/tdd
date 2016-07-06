<?php
require_once('IntegerValidator.php');
require_once('FizzBuzz.php');
class FizzBuzzExec
{
	public function __construct($stdIn, $stdOut, $repository) {
		$this->stdIn = $stdIn;
		$this->stdOut = $stdOut;
		$this->repository = $repository;
	}

	public function run() {
		$input = $this->stdIn->in();
		if (!(new IntegerValidator($input))->isValid()) {
			return;
		}
		$fizz_buzz = new FizzBuzz($input);
		$this->repository->register($fizz_buzz->toString());
		$this->stdOut->out($fizz_buzz->execute());
	}
}
