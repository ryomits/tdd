<?php
require('lib/Selector.php');
require('lib/Logger.php');
require('lib/FileOut.php');

class StdIn
{
	public function in()
	{
		return trim(fgets(STDIN));
	}
}

class StdOut
{
	public function out($param)
	{
		print "$param\n";
	}
}

$selector = new Selector(new StdIn, new StdOut, new Logger, new FileOut('./production.txt'));
while (true) {
	$value = trim(fgets(STDIN));
	if ($value === '0') {
		break;
	}

	$selector->select($value);
}
