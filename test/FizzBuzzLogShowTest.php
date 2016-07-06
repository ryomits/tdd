<?php

require_once('FizzBuzzLogShow.php');
require_once('StdOutSpy.php');
require_once('Logger.php');
class FizzBuzzLogShowTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test履歴を表示すること() {
		$spy = new StdOutSpy();
		$logger = new Logger();
		$fizz = new FizzBuzz(3);
		$buzz = new FizzBuzz(5);
		$logger->add($fizz->toString());
		$logger->add($buzz->toString());

		(new FizzBuzzLogShow($spy, $logger))->run();
		$this->assertEquals($spy->result(), [$fizz->toString(), $buzz->toString()]);
	}
}
