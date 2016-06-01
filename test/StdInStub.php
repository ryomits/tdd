<?php
class StdInStub
{
	public function __construct($param) {
		$this->param = $param;
	}
	public function in() {
		return $this->param;
	}
}
