<?php
require_once('FizzBuzzLogging.php');
require_once('StdOutSpy.php');
require_once('Logger.php');
require_once('FileSpy.php');
class FizzBuzzLoggingTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test履歴を保存すること() {
		$spy = new FileSpy();
		$logger = new Logger();
		$logger->add('3: Fizz');
		$logger->add('5: Buzz');
		(new FizzBuzzLogging($spy, $logger))->run();
		$this->assertEquals($spy->results(), ["3: Fizz", "5: Buzz"]);
	}
}
