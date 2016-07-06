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
		$fizz = new FizzBuzz(3);
		$buzz = new FizzBuzz(5);
		$logger->add($fizz->toString());
		$logger->add($buzz->toString());

		(new FizzBuzzLogging($spy, $logger))->run();
		$this->assertEquals($spy->results(), [$fizz->toString(), $buzz->toString()]);
	}
}
