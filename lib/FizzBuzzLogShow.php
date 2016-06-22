<?php

class FizzBuzzLogShow
{
	public function __construct($stdOut, $logger)
	{
		$this->stdOut = $stdOut;
		$this->logger = $logger;
	}

	public function run()
	{
		foreach($this->logger->results() as $result) {
			$this->stdOut->out($result);
		}
	}
}
