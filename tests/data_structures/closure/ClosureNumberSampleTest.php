<?php

namespace tests\data_structures;

use PHPUnit\Framework\TestCase;
use data_structures\closure\ClosureNumberSample;

class ClosureSampleTest extends TestCase
{
    public function testMul()
    {
        $two = new ClosureNumberSample(2);

        $double = $two->mul();

        $x = \Closure::bind($double, null, 'Number');

        $this->assertEquals($x(5),50);
    }
}
