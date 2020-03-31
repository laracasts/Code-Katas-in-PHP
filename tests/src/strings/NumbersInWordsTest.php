<?php

namespace tests\strings;

use PHPUnit\Framework\TestCase;
use strings\NumbersInWords;

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