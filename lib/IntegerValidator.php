<?php
class IntegerValidator
{
	public function __construct($value)
	{
		$this->value = $value;
	}

	public function isValid()
	{
		if (preg_match('/^\d+$/', $this->value)) {
			return true;
		}

		return false;
	}
}
