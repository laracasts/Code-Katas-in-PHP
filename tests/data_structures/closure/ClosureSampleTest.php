<?php

namespace tests\data_structures;

use PHPUnit\Framework\TestCase;
use data_structures\closure\ClosureSample;

class ClosureSampleTest extends TestCase
{
    public function testGetsFoo()
    {
        $cl1 = static function() {
            return ClosureSample::getsFoo();
        };

        $bcl1 = \Closure::bind($cl1, null, 'ClosureSample');

        $this->assertEquals($bcl1(), 1);
    }

    public function testGetiFoo()
    {
        $cl2 = function() {
            return ClosureSample::getiFoo();
        };

        $bcl2 = \Closure::bind($cl2, new ClosureSample(), 'ClosureSample');

        $this->assertEquals($bcl2(), 2);
    }
}
