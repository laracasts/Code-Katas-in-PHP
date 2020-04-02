<?php

namespace tests\algorithms\math;

use PHPUnit\Framework\TestCase;
use algorithms\math\Factorial;

final class FactorialTest extends TestCase
{
    public function testFactorialRecursive()
    {
        $this->assertEquals(Factorial::getRecursive(5), 120);
    }
}