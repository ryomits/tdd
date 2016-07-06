<?php

class FizzBuzzRepository
{
	private $fizz_buzzes = [];

	public function __construct($filepath)
	{
		$this->filepath = $filepath;
	}

	public function register($fizz_buzz)
	{
		$this->fizz_buzzes[] = $fizz_buzz;
	}

	public function all()
	{
		return $this->fizz_buzzes;
	}

	public function past_all()
	{
		if (!file_exists($this->filepath)) {
			return [];
		}
		return array_map(function($number) {
			return new FizzBuzz((int)$number);
		} ,explode("\n", file_get_contents($this->filepath)));
	}

	public function save()
	{
		$numbers = [];
		foreach ($this->fizz_buzzes as $fizz_buzz) {
			$numbers[] = $fizz_buzz->getNumber();
		}

		$file = fopen($this->filepath, 'w');
		fwrite($file, implode("\n", $numbers));
		fclose($file);
	}
}
