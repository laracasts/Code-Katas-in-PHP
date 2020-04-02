<?php

namespace tests\algorithms\math;

use PHPUnit\Framework\TestCase;
use algorithms\math\ArmstrongNumber;

class ArmstrongNumberTest extends TestCase
{
    public function testIsArmstrongNumberWithOneDigit() {
        $this->assertFalse( ArmstrongNumber::isArmstrongNumber(1) );
    }

	public function testIsArmstrongNumberWithTwoDigits() {
        $this->assertFalse( ArmstrongNumber::isArmstrongNumber(11) );
	}
	
	public function testIsArmstrongNumberAsTrue() {
        $this->assertTrue( ArmstrongNumber::isArmstrongNumber(153) );
	}
	
	public function testIsArmstrongNumberAsTrue2() {
        $this->assertTrue( ArmstrongNumber::isArmstrongNumber(371) );
	}
	
	public function testIsArmstrongNumberAsFalse() {
        $this->assertFalse( ArmstrongNumber::isArmstrongNumber(154) );
	}
}