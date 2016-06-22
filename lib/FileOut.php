<?php

class FileOut
{
	public function set($results)
	{
		$file = fopen('/tmp/data.txt', 'w');
		fwrite($file, implode("\n", $results));
		fclose($file);
	}

	public function get()
	{
		return explode("\n", file_get_contents('/tmp/data.txt'));
	}
}
