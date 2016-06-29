<?php
class StdInStub
{
	public function in() {
		return $this->input;
	}

	public function set_input($input)
	{
		$this->input = $input;
	}
}
