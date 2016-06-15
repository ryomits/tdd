<?php
class IntegerValidator
{
	public function __construct($value)
	{
		$this->value = $value;
	}

	public function isValid()
	{
		if ($this->value == 'aaa') {
			return false;
		} else {
			return true;
		}
	}
}
