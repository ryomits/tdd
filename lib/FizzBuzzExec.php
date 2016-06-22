<?php
require('IntegerValidator.php');
require('FizzBuzz.php');
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
		$result = FizzBuzz::run($input);
		$this->logger->add("$input: $result");
		$this->stdOut->out($result);
	}
}
