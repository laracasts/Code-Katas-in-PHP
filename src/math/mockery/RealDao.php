<?php

namespace math\mockery;

class RealDao implements DbAccess
{
    private $data = [];

    public function insert($value)
    {
        sleep(1);

        $this->data[] = $value;
    }

    public function selectAll()
    {
        sleep(1);

        return $this->data;
    }
}