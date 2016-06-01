<?php
require('Selector.php');
require('StdInStub.php');
require('StdOutSpy.php');
class SelectorTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test1が渡るとFizzBuzzを実行すること() {
		$stub = new StdInStub(3);
		$spy = new StdOutSpy();
		$selector = new Selector($stub, $spy);
		$selector->select(1);
		$this->assertEquals($spy->result(), 'Fizz');
	}
}

