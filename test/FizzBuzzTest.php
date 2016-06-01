<?php
require('FizzBuzz.php');
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test15の倍数を渡すとFizzBuzzと返すこと() {
		$this->assertEquals(FizzBuzz::run(15), 'FizzBuzz');
	}
	/**
	 * @test
	 */
	public function test5の倍数を渡すとBuzzと返すこと() {
		$this->assertEquals(FizzBuzz::run(5), 'Buzz');
	}
	/**
	 * @test
	 */
	public function test3の倍数を渡すとFizzと返すこと() {
		$this->assertEquals(FizzBuzz::run(3), 'Fizz');
	}
}
