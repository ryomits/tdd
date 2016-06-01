<?php
class FizzBuzz
{
	public static function run($value) {
		if (!static::isMultipleOfAll($value)) {
			if (static::isMultipleOf(15, $value)) {
				return 'FizzBuzz';
			}

			if (static::isMultipleOf(5, $value)) {
				return 'Buzz';
			}

			if (static::isMultipleOf(3, $value)) {
				return 'Fizz';
			}
		}
		return $value;
	}

	private static function isMultipleOfAll($value) {
		return $value == 0;
	}

	private static function isMultipleOf($multiple, $value) {
		return $value % $multiple == 0;
	}
}
