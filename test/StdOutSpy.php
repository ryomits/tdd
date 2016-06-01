<?php
class StdOutSpy
{
	public function __construct() {
		$this->result = null;
	}

	public function result() {
		return $this->result;
	}

	public function out($result) {
		$this->result = $result;
	}
}
