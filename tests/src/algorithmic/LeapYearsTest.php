<?php

namespace tests\algorithmic;

use algorithmic\LeapYears;

/**
 * Class LeapYearsTest
 *
 * @author Andrea Fiori
 * @since  29 January 2015
 */
class LeapYearsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LeapYears
     */
	private $leapYears;

	public function setUp()
	{
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

	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testInvalidYear()
	{
		$this->leapYears->isLeap('A string');
	}
}
