<?php

namespace tests\algorithms\strings;

use algorithms\strings\NumbersInWords;
use PHPUnit\Framework\TestCase;

class NumbersInWordsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testConvert()
    {
        $this->assertEquals( NumbersInWords::convert(1), 'one');
        $this->assertEquals( NumbersInWords::convert(100), 'one hundred');
    }
}