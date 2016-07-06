<?php
require_once('FizzBuzzPermanentLogShow.php');
require_once('StdOutSpy.php');
require_once('FizzBuzzRepository.php');
class FizzBuzzPermanentLogShowTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function mode4が渡ると履歴が表示されること() {
		$stdOutSpy = new StdOutSpy();
		$fileSpy = new FileSpy();
		$fileSpy->set(["3: Fizz", "5: Buzz"]);
		(new FizzBuzzPermanentLogShow($fileSpy, $stdOutSpy))->run();
		$this->assertEquals($stdOutSpy->result(), ["3: Fizz", "5: Buzz"]);
	}
}
