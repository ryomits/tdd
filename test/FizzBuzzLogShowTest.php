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
		$logger->add('3: Fizz');
		$logger->add('5: Buzz');

		(new FizzBuzzLogShow($spy, $logger))->run();
		$this->assertEquals($spy->result(), ["3: Fizz", "5: Buzz"]);
	}
}
