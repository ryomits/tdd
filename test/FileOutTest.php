<?php
require_once('FileOut.php');
class FileOutTest extends PHPUnit_Framework_TestCase
{
	protected function tearDown()
	{
		unlink('/tmp/data.txt');
	}

	/**
	 * @test
	 */
	public function testログを永続化できること() {
		$file = new FileOut();
		$file->set(["3: Fizz", "5: Buzz", "15: FizzBuzz"]);

		$rows = explode("\n", file_get_contents('/tmp/data.txt'));
		$this->assertEquals($rows, ["3: Fizz", "5: Buzz", "15: FizzBuzz"]);
	}

	/**
	 * @test
	 */
	public function test永続化した情報がかえること() {
		$file = new FileOut();
		$file->set(["3: Fizz", "5: Buzz"]);

		$this->assertEquals($file->get(), ["3: Fizz", "5: Buzz"]);
	}
}
