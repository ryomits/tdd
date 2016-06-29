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
	public function test2が渡るとFizzBuzzLogShowインスタンスを返すこと() {
		$selector = new Selector(null, null, null, null);
		$this->assertTrue($selector->select('2') instanceof FizzBuzzLogShow);
	}

	/**
	 * @test
	 */
	public function test3が渡るとFizzBuzzLoggingインスタンスを返すこと() {
		$selector = new Selector(null, null, null, null);
		$this->assertTrue($selector->select('3') instanceof FizzBuzzLogging);
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
	public function mode4が渡ると履歴が表示されること() {
		$stdOutSpy = new StdOutSpy();
		$fileSpy = new FileSpy();
		$fileSpy->set(["3: Fizz", "5: Buzz"]);
		$selector = new Selector(null, $stdOutSpy, null, $fileSpy);

		$selector->select('4')->run();
		$this->assertEquals($stdOutSpy->result(), ["3: Fizz", "5: Buzz"]);
	}
}
