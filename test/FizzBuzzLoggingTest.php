<?php
require_once('FizzBuzzLogging.php');
require_once('StdOutSpy.php');
require_once('FizzBuzzRepository.php');
require_once('FileSpy.php');
class FizzBuzzLoggingTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test履歴を保存すること() {
		$spy = new FileSpy();
		$repository = new FizzBuzzRepository();
		$fizz = new FizzBuzz(3);
		$buzz = new FizzBuzz(5);
		$repository->register($fizz->toString());
		$repository->register($buzz->toString());

		(new FizzBuzzLogging($spy, $repository))->run();
		$this->assertEquals($spy->results(), [$fizz->toString(), $buzz->toString()]);
	}
}
