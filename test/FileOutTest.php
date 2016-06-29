<?php
require_once('FileOut.php');
class FileOutTest extends PHPUnit_Framework_TestCase
{
	private $filepath = '/tmp/data.txt';

	protected function setUp()
	{
		$this->delete_file();
		$this->file = new FileOut($this->filepath);
	}

	protected function tearDown()
	{
		$this->delete_file();
	}

	private function delete_file()
	{
		if (file_exists($this->filepath)) {
			unlink($this->filepath);
		}
	}

	/**
	 * @test
	 */
	public function testログを永続化できること() {
		$this->file->set(["3: Fizz", "5: Buzz", "15: FizzBuzz"]);

		$this->assertEquals($this->file->get(), ["3: Fizz", "5: Buzz", "15: FizzBuzz"]);
	}

	/**
	 * @test
	 */
	public function test永続化した情報がない場合は空の配列が返ること() {
		$this->assertEquals($this->file->get(), []);
	}
}
