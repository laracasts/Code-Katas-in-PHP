<?php

namespace tests\algorithmic;

use PHPUnit\Framework\TestCase;
use algorithmic\LeapYears;

/**
 * Leap Years Test
 *
 * @author Andrea Fiori
 * @since  29 January 2015
 */
class LeapYearsTest extends TestCase
{
    /**
     * @var LeapYears
     */
	private $leapYears;

    protected function setUp(): void
	{
        parent::setUp();

		$this->leapYears = new LeapYears();
	}

	public function testNormalLeapYear()
	{
		$this->assertTrue( $this->leapYears->isLeap(1996) );
	}
	
	public function testNormalCommonYear()
	{
		$this->assertFalse( $this->leapYears->isLeap(2001) );
	}
	
	public function testAtypicalCommonYear()
	{
		$this->assertFalse( $this->leapYears->isLeap(1900) );
	}
	
	public function testAtypicalLeapYear()
	{
		$this->assertTrue( $this->leapYears->isLeap(2000) );
	}

	public function testInvalidYear()
	{
        $this->expectException( \InvalidArgumentException::class );

        $this->leapYears->isLeap('A string');
	}
}
