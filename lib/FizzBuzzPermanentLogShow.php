<?php

class FizzBuzzPermanentLogShow
{
	public function __construct($file, $stdOut)
	{
		$this->file = $file;
		$this->stdOut = $stdOut;
	}

	public function run()
	{
		$file = $this->file->get();
		foreach ($file as $row) {
			$this->stdOut->out($row);
		}
	}
}
