<?php

class FileOut
{
	public function __construct($filepath)
	{
		$this->filepath = $filepath;
	}

	public function set($results)
	{
		$file = fopen($this->filepath, 'w');
		fwrite($file, implode("\n", $results));
		fclose($file);
	}

	public function get()
	{
		if (!file_exists($this->filepath)) {
			return [];
		}
		return explode("\n", file_get_contents($this->filepath));
	}
}
