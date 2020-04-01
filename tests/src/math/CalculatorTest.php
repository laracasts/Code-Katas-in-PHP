<?php

namespace test\math;

use PHPUnit\Framework\TestCase;
use math\Calculator;

final class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private static $calc;

    public static function setUpBeforeClass(): void
    {
        self::$calc = new Calculator();
        self::$calc->op1 = 4;
        self::$calc->op2 = 2;
    }

    public function testItCanAddTwoNumbers()
    {
        $expectedSum = 6;

        $this->assertEquals($expectedSum, self::$calc->add());
    }

    public function testIfCanTellIfTwoNumbersAreDivisible()
    {
        $this->assertTrue( self::$calc->isDivisible() );
    }

    public function testIfCanTellIfTwoNumbersAreNotDivisible()
    {
        self::$calc->op1 = 5;
        self::$calc->op2 = 2;

        $this->assertFalse( self::$calc->isDivisible() );
    }

    public function testItCanTellTheSum()
    {
        $actualResult = self::$calc->tellMeTheSum();

        $this->assertRegExp('/^.*(5.*2)|(2.*5).*7/', $actualResult);
    }
}
