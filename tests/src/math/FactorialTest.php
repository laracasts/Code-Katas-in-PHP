<?php

namespace test\math;

use PHPUnit\Framework\TestCase;
use math\Factorial;

final class FactorialTest extends TestCase
{
    public function testFactorialRecursive()
    {
        $this->assertEquals(Factorial::getRecursive(5), 120);
    }
}