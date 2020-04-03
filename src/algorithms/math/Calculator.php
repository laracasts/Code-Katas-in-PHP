<?php

namespace algorithms\math;

class Calculator
{
	public $op1;

	public $op2;

	public function add()
	{
		return $this->op1 + $this->op2;
	}

	public function subtract()
	{
		return $this->op1 - $this->op2;
	}

	public function isDivisible()
	{
		return $this->op1 % $this->op2 == 0;
	}
}