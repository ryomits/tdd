<?php
require_once('FizzBuzzExec.php');
require_once('FizzBuzzLogShow.php');
require_once('FizzBuzzLogging.php');
require_once('FizzBuzzPermanentLogShow.php');
require_once('FizzBuzzNotDoing.php');
require_once('FizzBuzzView.php');
class Selector
{
	public function __construct($stdIn, $stdOut, $repository, $file) {
		$this->stdIn = $stdIn;
		$this->stdOut = $stdOut;
		$this->repository = $repository;
		$this->file = $file;
	}

	public function select($value) {
		if ($value === '1') {
			return (new FizzBuzzExec($this->stdIn, new FizzBuzzView, $this->repository));
		} elseif ($value === '2') {
			return (new FizzBuzzLogShow($this->stdOut, $this->repository));
		} elseif ($value === '3') {
			return (new FizzBuzzLogging($this->file, $this->repository));
		} elseif ($value === '4') {
			return (new FizzBuzzPermanentLogShow($this->file, $this->stdOut));
		} else {
			return new FizzBuzzNotDoing;
		}
	}
}
