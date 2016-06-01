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
			$this->stdOut->out(FizzBuzz::run($this->stdIn->in()));
		}
	}
}
