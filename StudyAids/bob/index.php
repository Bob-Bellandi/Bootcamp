<?php

class Math {

	//attributes / members
	protected $default_number = NULL;
	
	function __construct()
	{
		//parent::__construct();
		$this->default_number = 22;
	}
	
	//methods
	function add($first_number, $last_number)
	{
		return $first_number + $last_number + $this->default_number;
		//return $this->subtract($first_number, $last_number);
	}

	function subtract($first_number, $last_number)
	{
		return $first_number - $last_number;
	}

	function multiply($first_number, $last_number)
	{
		return $first_number * $last_number;
	}

	function divide($first_number, $last_number)
	{
		return $first_number / $last_number;
	}

}

$new_math = new Math();

echo $new_math->add(2,7);
