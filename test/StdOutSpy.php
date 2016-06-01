<?php
class StdOutSpy
{
	public function result() {
		return $this->result;
	}

	public function out($result) {
		$this->result = $result;
	}
}
