<?php
require('FizzBuzzExec.php');
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
			(new FizzBuzzExec($this->stdIn, $this->stdOut, $this->logger))->run();
			break;
		case 2:
			foreach($this->logger->results() as $result) {
				$this->stdOut->out($result);
			}
			break;
		}
	}
}
