<?php
require_once('FizzBuzzExec.php');
require_once('StdInStub.php');
require_once('StdOutSpy.php');
require_once('Logger.php');
class FizzBuzzExecTest extends PHPUnit_Framework_TestCase
{
	protected function setUp()
	{
		$this->stub = new StdInStub();
		$this->spy = new StdOutSpy();
		$this->logger = new Logger();
		$this->command = new FizzBuzzExec($this->stub, $this->spy, $this->logger);
	}

	/**
	 * @test
	 */
	public function test数値を渡すとFizzBuzzが実行されること()
	{
		$this->stub->set_input('3');
		$this->command->run();
		$this->assertEquals($this->spy->result(), ['Fizz']);
	}

	/**
	 * @test
	 */
	public function testFizzBuzzのログが残ること() {
		$this->stub->set_input('3');
		$this->command->run();
		$this->assertEquals($this->logger->results(), ['3: Fizz']);
	}

	/**
	 * @test
	 */
	public function testFizzBuzzに数値意外が入力されたらFizzBuzzが実行されないこと() {
		$this->stub->set_input('aaa');
		$this->command->run();
		$this->assertEquals($this->spy->result(), []);
	}
}
