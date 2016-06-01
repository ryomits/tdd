<?php
require('FizzBuzz.php');
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test15の倍数を渡すとFizzBuzzと返すこと() {
		$this->assertEquals(FizzBuzz::run(15), 'FizzBuzz', 'fail at 15');
		$this->assertEquals(FizzBuzz::run(30), 'FizzBuzz', 'fail at 30');
	}
	/**
	 * @test
	 */
	public function test5の倍数を渡すとBuzzと返すこと() {
		$this->assertEquals(FizzBuzz::run(5), 'Buzz', 'fail at 5');
		$this->assertEquals(FizzBuzz::run(10), 'Buzz', 'fail at 10');
	}
	/**
	 * @test
	 */
	public function test3の倍数を渡すとFizzと返すこと() {
		$this->assertEquals(FizzBuzz::run(3), 'Fizz');
	}
	/**
	 * @test
	 */
	public function testその他を渡すとその値を返すこと() {
		$this->assertEquals(FizzBuzz::run(1), '1');
	}
}
