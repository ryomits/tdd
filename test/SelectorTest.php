<?php
require('Selector.php');
require('StdInStub.php');
require('StdOutSpy.php');
require('Logger.php');
class SelectorTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test1が渡るとFizzBuzzを実行すること() {
		$stub = new StdInStub('3');
		$spy = new StdOutSpy();
		$selector = new Selector($stub, $spy);
		$selector->select('1');
		$this->assertEquals($spy->result(), ['Fizz']);
	}

	/**
	 * @test
	 */
	public function testメニューにない値が渡るとなにもしないこと() {
		$spy = new StdOutSpy();
		$selector = new Selector(null, $spy);
		$illegalValue = '100';
		$selector->select($illegalValue);
		$this->assertEquals($spy->result(), []);
	}

#	/**
#	 * @test
#	 */
#	public function test2が渡ると履歴が表示されること() {
#		$spy = new StdOutSpy();
#		$logger = new Logger();
#		$logger->add('3: Fizz');
#		$logger->add('5: Buzz');
#		$selector = new Selector(null, $spy, $logger);
#
#		$selector->select('2');
#		$this->assertEquals($spy->result(), ["3: Fizz", "5: Buzz"]);
#	}
}

