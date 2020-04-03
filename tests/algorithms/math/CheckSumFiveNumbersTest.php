<?php

namespace algorithms\math;

use PHPUnit\Framework\TestCase;

class CheckSumFiveNumbersTest extends TestCase
{
    public function testEfficientApproachWithNull()
    {
        $expected = [ -2, -1, 0, 1, 2 ];

        $this->assertEquals(CheckSumFiveNumbers::efficientApproach(0), $expected);
    }

	public function testEfficientApproach()
    {
        $expected = [1, 2, 3, 4, 5];

        $this->assertEquals(CheckSumFiveNumbers::efficientApproach(15), $expected);
	}
	
	public function testEfficientApproachLessOnes() {
        $expected = [-1];

        $this->assertEquals(CheckSumFiveNumbers::efficientApproach(18), $expected);
	}
}