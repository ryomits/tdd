<?php
require_once('IntegerValidator.php');
require_once('FizzBuzz.php');
class FizzBuzzExec
{
	public function __construct($stdIn, $stdOut, $logger) {
		$this->stdIn = $stdIn;
		$this->stdOut = $stdOut;
		$this->logger = $logger;
	}

	public function run() {
		$input = $this->stdIn->in();
		if (!(new IntegerValidator($input))->isValid()) {
			return;
		}
		$fizz_buzz = new FizzBuzz($input);
		$this->logger->add($fizz_buzz->toString());
		$this->stdOut->out($fizz_buzz->execute());
	}
}
