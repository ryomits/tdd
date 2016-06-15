<?php
require('IntegerValidator.php');
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



	// 数値
	// アルファベット
	// 制御コード
	// 記号
	// 日本語
	// 数値と文字列
}
