<?php
require_once('FizzBuzzExec.php');
require_once('StdInStub.php');
require_once('StdOutSpy.php');
require_once('Logger.php');
class FizzBuzzExecTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test数値を渡すとFizzBuzzが実行されること() {
		$stub = new StdInStub('3');
		$spy = new StdOutSpy();
		$logger = new Logger();
		(new FizzBuzzExec($stub, $spy, $logger))->run();
		$this->assertEquals($spy->result(), ['Fizz']);
	}
}
