<?php
require('lib/Selector.php');

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

while (true) {
	$value = trim(fgets(STDIN));
	if ($value === '0') {
		break;
	}

	(new Selector(new StdIn, new StdOut))->select($value);
}

