<?php
require_once('Selector.php');
require_once('StdInStub.php');
require_once('StdOutSpy.php');
require_once('FileSpy.php');
require_once('Logger.php');
require_once('FizzBuzzExec.php');
class SelectorTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test1が渡るとFizzBuzzを実行すること() {
		$selector = new Selector(null, null, null, null);
		$this->assertTrue($selector->select('1') instanceof FizzBuzzExec);
	}

	/**
	 * @test
	 */
	public function testFizzBuzzのログが残ること() {
		$stub = new StdInStub('3');
		$spy = new StdOutSpy();
		$logger = new Logger();
		$selector = new Selector($stub, $spy, $logger, null);
		$selector->select('1')->run();
		$this->assertEquals($logger->results(), ['3: Fizz']);
	}




	/**
	 * @test
	 */
	public function testメニューにない値が渡るとなにもしないこと() {
		$spy = new StdOutSpy();
		$selector = new Selector(null, $spy, null, null);
		$illegalValue = '100';
		$selector->select($illegalValue)->run();
		$this->assertEquals($spy->result(), []);
	}

	/**
	 * @test
	 */
	public function test2が渡ると履歴が表示されること() {
		$spy = new StdOutSpy();
		$logger = new Logger();
		$logger->add('3: Fizz');
		$logger->add('5: Buzz');
		$selector = new Selector(null, $spy, $logger, null);

		$selector->select('2')->run();
		$this->assertEquals($spy->result(), ["3: Fizz", "5: Buzz"]);
	}

	/**
	 * @test
	 */
	public function testFizzBuzzに数値意外が入力されたらFizzBuzzが実行されないこと() {
		$stub = new StdInStub('aaa');
		$spy = new StdOutSpy();
		$logger = new Logger();
		$selector = new Selector($stub, $spy, $logger, null);
		$selector->select('1')->run();
		$this->assertEquals($spy->result(), []);
	}

	/**
	 * @test
	 */
	public function test3が渡ると履歴が保存されること() {
		$spy = new FileSpy();
		$logger = new Logger();
		$logger->add('3: Fizz');
		$logger->add('5: Buzz');
		$selector = new Selector(null, null, $logger, $spy);

		$selector->select('3')->run();
		$this->assertEquals($spy->results(), ["3: Fizz", "5: Buzz"]);
	}

	/**
	 * @test
	 */
	public function mode4が渡ると履歴が表示されること() {
		$stdOutSpy = new StdOutSpy();
		$fileSpy = new FileSpy();
		$fileSpy->set(["3: Fizz", "5: Buzz"]);
		$selector = new Selector(null, $stdOutSpy, null, $fileSpy);

		$selector->select('4')->run();
		$this->assertEquals($stdOutSpy->result(), ["3: Fizz", "5: Buzz"]);
	}
}
