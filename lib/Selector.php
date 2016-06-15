<?php
require('FizzBuzz.php');
class Selector
{
	public function __construct($stdIn, $stdOut) {
		$this->stdIn = $stdIn;
		$this->stdOut = $stdOut;
	}

	public function select($value) {
		switch ($value) {
		case 1:
			$this->stdOut->out(FizzBuzz::run((int)$this->stdIn->in()));
			break;
		case 2:
			$this->stdOut->out("3: Fizz");
			$this->stdOut->out("5: Buzz");
			break;
		}
	}
}
