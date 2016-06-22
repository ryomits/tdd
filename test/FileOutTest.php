<?php
require_once('FileOut.php');
class FileOutTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function testログを永続化できること() {
		$file = new FileOut();
		$file->set(["3: Fizz", "5: Buzz"]);

		$rows = explode("\n", file_get_contents('/tmp/data.txt'));
		$this->assertEquals($rows, ["3: Fizz", "5: Buzz"]);
	}
}
