<?php
require_once('Selector.php');
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
	public function test4が渡るとFizzBuzzPermanentLogShowインスタンスを返すこと() {
		$selector = new Selector(null, null, null, null);
		$this->assertTrue($selector->select('4') instanceof FizzBuzzPermanentLogShow);
	}

	/**
	 * @test
	 */
	public function testメニューにない値が渡るとFizzBuzzNotDoingインスタンスを返すこと() {
		$selector = new Selector(null, null, null, null);
		$illegalValue = '100';
		$this->assertTrue($selector->select($illegalValue) instanceof FizzBuzzNotDoing);
	}
}
