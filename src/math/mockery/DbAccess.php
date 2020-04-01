<?php

namespace math\mockery;

interface DbAccess
{
	public function insert($value);

	public function selectAll();
}
