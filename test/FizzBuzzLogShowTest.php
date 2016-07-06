<?php

require_once('FizzBuzzLogShow.php');
require_once('StdOutSpy.php');
require_once('FizzBuzzRepository.php');
class FizzBuzzLogShowTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function test履歴を表示すること() {
		$spy = new StdOutSpy();
		$repository = new FizzBuzzRepository();
		$fizz = new FizzBuzz(3);
		$buzz = new FizzBuzz(5);
		$repository->register($fizz->toString());
		$repository->register($buzz->toString());

		(new FizzBuzzLogShow($spy, $repository))->run();
		$this->assertEquals($spy->result(), [$fizz->toString(), $buzz->toString()]);
	}
}
