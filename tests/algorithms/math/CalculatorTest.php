<?php

namespace tests\algorithms\math;

use PHPUnit\Framework\TestCase;
use algorithms\math\Calculator;

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
        $this->assertEquals(6, self::$calc->add());
    }

    public function testItCanSubtractTwoNumbers()
    {
        $this->assertEquals(2, self::$calc->subtract());
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
}
