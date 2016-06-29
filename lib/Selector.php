<?php
require_once('FizzBuzzExec.php');
require_once('FizzBuzzLogShow.php');
require_once('FizzBuzzLogging.php');
require_once('FizzBuzzPermanentLogShow.php');
class Selector
{
	public function __construct($stdIn, $stdOut, $logger, $file) {
		$this->stdIn = $stdIn;
		$this->stdOut = $stdOut;
		$this->logger = $logger;
		$this->file = $file;
	}

	public function select($value) {
		if ($value === '1') {
			(new FizzBuzzExec($this->stdIn, $this->stdOut, $this->logger))->run();
		} elseif ($value === '2') {
			(new FizzBuzzLogShow($this->stdOut, $this->logger))->run();
		} elseif ($value === '3') {
			(new FizzBuzzLogging($this->file, $this->logger))->run();
		} elseif ($value === '4') {
			(new FizzBuzzPermanentLogShow($this->file, $this->stdOut))->run();
		}
	}
}
