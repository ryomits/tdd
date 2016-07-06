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
		// executeの戻り値をキャッシュしたものを返却
		if (isset($this->result)) {
			return $this->result;
		}

		if (!$this->isMultipleOfAll()) {
			if ($this->isMultipleOf(15)) {
				return $this->result = 'FizzBuzz';
			}

			if ($this->isMultipleOf(5)) {
				return $this->result = 'Buzz';
			}

			if ($this->isMultipleOf(3)) {
				return $this->result = 'Fizz';
			}
		}
		return $this->result = $this->value;
	}

	public function getNumber()
	{
		return $this->value;
	}

	private function isMultipleOfAll() {
		return $this->value === 0;
	}

	private function isMultipleOf($multiple) {
		return $this->value % $multiple === 0;
	}
}
