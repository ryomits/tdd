<?php
require('FizzBuzz.php');
require('IntegerValidator.php');
class Selector
{
	public function __construct($stdIn, $stdOut, $logger) {
		$this->stdIn = $stdIn;
		$this->stdOut = $stdOut;
		$this->logger = $logger;
	}

	public function select($value) {
		switch ($value) {
		case 1:
			$input = $this->stdIn->in();
			if (!(new IntegerValidator($input))->isValid()) {
				break;
			}
			$result = FizzBuzz::run($input);
			$this->logger->add("$input: $result");
			$this->stdOut->out($result);
			break;
		case 2:
			foreach($this->logger->results() as $result) {
				$this->stdOut->out($result);
			}
			break;
		}
	}
}
