<?php

namespace tests\strings;
use strings\NumbersInWords;



class NumbersInWordsTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    public function testConvert()
    {
        $this->assertEquals( NumbersInWords::convert(1), 'one');
        $this->assertEquals( NumbersInWords::convert(100), 'one hundred');
    }
}