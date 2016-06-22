<?php
require_once('IntegerValidator.php');
class IntegerValidatorTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test数値が渡るとtrueが返ること() {
		$validator = new IntegerValidator("1");
		$this->assertTrue($validator->isValid());
	}

	/**
	 * @test
	 */
	public function testアルファベットが渡るとfalseが返ること() {
		$validator = new IntegerValidator("a");
		$this->assertFalse($validator->isValid());
	}

	/**
	 * @test
	 */
	public function test数値と文字列が混ざったものが渡るとfalseが返ること() {
		$validator = new IntegerValidator("1a");
		$this->assertFalse($validator->isValid());
	}

	/**
	 * @test
	 */
	public function test連続する数値が渡るとtrueが返ること() {
		$validator = new IntegerValidator("123");
		$this->assertTrue($validator->isValid());
	}


	// 数値
	// アルファベット
	// 制御コード
	// 記号
	// 日本語
	// 数値と文字列
}
