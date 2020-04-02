<?php

namespace algorithms\math;

class Calculator {

	public $op1;

	public $op2;

	public function add()
	{
		return $this->op1 + $this->op2;
	}

	public function isDivisible()
	{
		return $this->op1 % $this->op2 == 0;
	}

	public function tellMeTheSum()
	{
		return 'The sum of '.$this->op1.' and '.$this->op2.' is '.$this->add();
	}
}