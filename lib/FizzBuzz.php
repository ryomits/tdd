<?php
class FizzBuzz
{
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
		if (isset($this->result)) {
			return $this->result;
		}

		if (!$this->isMultipleOfAll($this->value)) {
			if ($this->isMultipleOf(15, $this->value)) {
				return $this->result = 'FizzBuzz';
			}

			if ($this->isMultipleOf(5, $this->value)) {
				return $this->result = 'Buzz';
			}

			if ($this->isMultipleOf(3, $this->value)) {
				return $this->result = 'Fizz';
			}
		}
		return $this->result = $this->value;
	}

	private function isMultipleOfAll($value) {
		return $value === 0;
	}

	private function isMultipleOf($multiple, $value) {
		return $value % $multiple === 0;
	}
}
