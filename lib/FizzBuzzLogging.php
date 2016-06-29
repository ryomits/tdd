<?php

class FIzzBuzzLogging
{
	public function __construct($file, $logger)
	{
		$this->file = $file;
		$this->logger = $logger;
	}

	public function run()
	{
		$this->file->set($this->logger->results());
	}
}
