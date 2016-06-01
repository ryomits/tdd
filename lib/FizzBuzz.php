<?php
class FizzBuzz
{
	public static function run($value) {
		if ($value % 15 == 0) {
			return 'FizzBuzz';
		} elseif ($value % 5 == 0) {
			return 'Buzz';
		} elseif ($value == 3) {
			return 'Fizz';
		}
		return 1;
	}
}
