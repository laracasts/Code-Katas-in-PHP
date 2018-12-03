<?php

namespace tests\strings;

use PHPUnit\Framework\TestCase;
use strings\StringCalculator;

class StringCalculatorTest extends TestCase
{
    /**
     * @var StringCalculator
     */
    private $stringCalculator;

    protected function setUp()
    {
        parent::setUp();

        $this->stringCalculator = new StringCalculator();
    }

    public function testItTranslatesAnEmptyStringIntoZero()
    {
        $this->assertEquals($this->stringCalculator->add(''), 0);
    }

    public function testItFindsTheSumOfOneNumber()
    {
        $this->assertEquals($this->stringCalculator->add('5'), 5);
    }

    public function test_it_finds_the_sum_of_two_numbers()
    {
        $this->assertEquals($this->stringCalculator->add('1,2'), 3);
    }

    public function test_it_finds_the_sum_of_any_amount_of_numbers()
    {
        $this->assertEquals($this->stringCalculator->add('1,2,3,4,5'), 15);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_it_disallows_negative_numbers()
    {
        $this->stringCalculator->add('3,-2');
    }

    public function test_it_ignores_any_number_that_is_one_thousand_or_greater()
    {
        $this->assertEquals($this->stringCalculator->add('2, 2, 1000'), 4);
    }

    public function test_it_allows_for_new_line_delimiters()
    {
        $this->assertEquals($this->stringCalculator->add('2,2\n2'), 6);
    }
}