<?php
require_once('FizzBuzzExec.php');
require_once('FizzBuzzLogShow.php');
require_once('FizzBuzzLogging.php');
require_once('FizzBuzzPermanentLogShow.php');
require_once('FizzBuzzNotDoing.php');
class Selector
{
	public function __construct($stdIn, $stdOut, $logger, $file) {
		$this->stdIn = $stdIn;
		$this->stdOut = $stdOut;
		$this->logger = $logger;
		$this->file = $file;
	}

	public function select($value) {
		$this->select_command($value);
	}

	private function select_command($value)
	{
		if ($value === '1') {
			return (new FizzBuzzExec($this->stdIn, $this->stdOut, $this->logger))->run();
		} elseif ($value === '2') {
			return (new FizzBuzzLogShow($this->stdOut, $this->logger))->run();
		} elseif ($value === '3') {
			return (new FizzBuzzLogging($this->file, $this->logger))->run();
		} elseif ($value === '4') {
			return (new FizzBuzzPermanentLogShow($this->file, $this->stdOut))->run();
		} else {
			return (new FizzBuzzNotDoing)->run();
		}
	}
}
