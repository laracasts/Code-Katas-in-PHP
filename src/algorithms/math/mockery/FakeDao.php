<?php

namespace algorithms\math\mockery;

class FakeDao implements DbAccess
{
    private $data = [];

    public function insert($value)
    {
        $this->data[] = $value;
    }

    public function selectAll()
    {
        return $this->data;
    }
} 