<?php

namespace tests\algorithmic;

use algorithmic\RomanNumeralsConverter;

class RomanNumeralsConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RomanNumeralsConverter
     */
    private $romanNumeralsConverter;

    protected function setUp()
    {
        parent::setUp();

        $this->romanNumeralsConverter = new RomanNumeralsConverter();
    }

    public function testItCalculatesTheRomanNumeralFor1()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(1), 'I');
    }

    public function testItCalculatesTheRomanNumeralFor2()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(2), 'II');
    }

    public function testItCalculatesTheRomanNumeralFor4()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(4), 'IV');
    }

    public function testItCalculatesTheRomanNumeralFor5()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(5), 'V');
    }

    public function testItCalculatesTheRomanNumeralFor6()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(6), 'VI');
    }

    public function testItCalculatesTheRomanNumeralFor9()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(9), 'IX');
    }

    public function testItCalculatesTheRomanNumeralFor10()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(10), 'X');
    }

    public function testItCalculatesTheRomanNumeralFor11()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(11), 'XI');
    }

    public function testItCalculatesTheRomanNumeralFor20()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(20), 'XX');
    }

    function testItCalculatesTheRomanNumeralFor50()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(50), 'L');
    }

    public function testItCalculatesTheRomanNumeralFor100()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(100), 'C');
    }

    public function testItCalculatesTheRomanNumeralFor500()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(500), 'D');
    }

    public function testItCalculatesTheRomanNumeralFor1000()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(1000), 'M');
    }

    public function testItCalculatesTheRomanNumeralFor1999()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(1999), 'MCMXCIX');
    }

    public function testItCalculatesTheRomanNumeralFor4990()
    {
        $this->assertEquals($this->romanNumeralsConverter->convert(4990), 'MMMMCMXC');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testItTakesExceptionWithZero()
    {
        $this->romanNumeralsConverter->convert(0);
    }
}