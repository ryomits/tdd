<?php
require_once('FizzBuzzPermanentLogShow.php');
require_once('StdOutSpy.php');
require_once('FizzBuzzRepository.php');
require_once('FizzBuzz.php');
class FizzBuzzPermanentLogShowTest extends PHPUnit_Framework_TestCase
{
	private $filepath = 'data.txt';

	protected function setUp()
	{
		$this->delete_file();
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
	public function mode4が渡ると履歴が表示されること() {
		$stdOutSpy = new StdOutSpy();
		$repository = new FizzBuzzRepository($this->filepath);
		$fizz = new FizzBuzz(3);
		$buzz = new FizzBuzz(5);
		$repository->register($fizz);
		$repository->register($buzz);
		$repository->save();

		(new FizzBuzzPermanentLogShow($repository, $stdOutSpy))->run();
		$this->assertEquals($stdOutSpy->result(), ["3: Fizz", "5: Buzz"]);
	}
}
