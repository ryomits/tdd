<?php
require_once('FizzBuzz.php');
require_once('FizzBuzzLogging.php');
require_once('FizzBuzzRepository.php');
class FizzBuzzLoggingTest extends PHPUnit_Framework_TestCase
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
	public function test履歴を保存すること() {
		$repository = new FizzBuzzRepository($this->filepath);
		$fizz = new FizzBuzz(3);
		$buzz = new FizzBuzz(5);
		$repository->register($fizz);
		$repository->register($buzz);

		(new FizzBuzzLogging($repository))->run();
		$this->assertEquals(array_map(function($fizz_buzz) { return $fizz_buzz->toString(); }, $repository->past_all()), [$fizz->toString(), $buzz->toString()]);
	}
}
