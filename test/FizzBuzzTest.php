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
}
