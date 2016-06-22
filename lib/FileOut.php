<?php

class FileOut
{
	public function set($results)
	{
		$file = fopen('/tmp/data.txt', 'w');
		fwrite($file, implode("\n", $results));
		fclose($file);
	}
}
