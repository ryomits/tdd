<?php
class FizzBuzz
{
	private function isMultipleOfAll($value) {
		return $value === 0;
	}

	private function isMultipleOf($multiple, $value) {
		return $value % $multiple === 0;
	}

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function toString()
	{
		$result = $this->execute();
		return "$this->value: $result";
	}

	public function execute()
	{
		if (!$this->isMultipleOfAll($this->value)) {
			if ($this->isMultipleOf(15, $this->value)) {
				return 'FizzBuzz';
			}

			if ($this->isMultipleOf(5, $this->value)) {
				return 'Buzz';
			}

			if ($this->isMultipleOf(3, $this->value)) {
				return 'Fizz';
			}
		}
		return $this->value;
	}
}
