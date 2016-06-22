<?php
require_once('FizzBuzzExec.php');
require_once('FizzBuzzLogShow.php');
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
			(new FizzBuzzLogShow($this->stdOut, $this->logger))->run();
			break;
		}
	}
}
