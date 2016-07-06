<?php
require_once('FizzBuzz.php');
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test15の倍数を渡すとFizzBuzzと返すこと() {
		$this->assertEquals((new FizzBuzz(15))->execute(), 'FizzBuzz', 'fail at 15');
		$this->assertEquals((new FizzBuzz(30))->execute(), 'FizzBuzz', 'fail at 30');
	}
	/**
	 * @test
	 */
	public function test5の倍数を渡すとBuzzと返すこと() {
		$this->assertEquals((new FizzBuzz(5))->execute(), 'Buzz', 'fail at 5');
		$this->assertEquals((new FizzBuzz(10))->execute(), 'Buzz', 'fail at 10');
	}
	/**
	 * @test
	 */
	public function test3の倍数を渡すとFizzと返すこと() {
		$this->assertEquals((new FizzBuzz(3))->execute(), 'Fizz', 'fail at 3');
		$this->assertEquals((new FizzBuzz(6))->execute(), 'Fizz', 'fail at 6');
	}
	/**
	 * @test
	 */
	public function testその他を渡すとその値を返すこと() {
		$this->assertEquals((new FizzBuzz(1))->execute(), '1', 'fail at 1');
		$this->assertEquals((new FizzBuzz(7))->execute(), '7', 'fail at 7');
	}
	/**
	 * @test
	 */
	public function test0のとき() {
		$this->assertEquals((new FizzBuzz(0))->execute(), '0');
	}
}
