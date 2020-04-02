<?php

namespace test\algorithms\math;

use PHPUnit\Framework\TestCase;
use algorithms\math\Calculator;
use algorithms\math\mockery\MathematicalLibrary;
use algorithms\math\mockery\Display;
use algorithms\math\mockery\FakeDao;

class MathematicalLibraryTest extends TestCase
{
    public function testItCanDouble()
    {
        $mathLib = new MathematicalLibrary(new Calculator(), new DummyDisplay());

        $this->assertEquals(4, $mathLib->double(2));
    }

    /* public function testItCanTellIfSumIsEven()
    {
        $mathLib = new MathematicalLibrary($this->aCalculatorWithSum(2), new DummyDisplay());

        $this->assertTrue( $mathLib->isSumEven(1,1) );
    }

    public function testItCanTellIfSumIsOdd()
    {
        $mathLib = new MathematicalLibrary($this->aCalculatorWithSum(3), new DummyDisplay());

        $this->assertFalse( $mathLib->isSumEven(1,1) );
    }

    public function testItCanDisplayTriple()
    {
        $spyDisplay = \Mockery::mock('Display');

        $mathLib = new MathematicalLibrary(new Calculator(), $spyDisplay);

        $spyDisplay->shouldReceive('show')->atLeast()->once()->with(9);

        $mathLib->displayTriple(3);

        \Mockery::close();
    } */

    public function testItCanDoubleAndSave()
    {
        $realDao = new FakeDao();
        $mathLib = new MathematicalLibrary(new Calculator(), new DummyDisplay(), $realDao);
        $mathLib->doubleAndSave(2);

        $this->assertEquals(4, $realDao->selectAll()[0]);
    }

    /**
     * @return \Mockery\MockInterface
     */
    private function aCalculatorWithSum($sum)
    {
        $stubCalc = \Mockery::mock('Calculator');
        $stubCalc->shouldReceive('add')->andReturn($sum);
        return $stubCalc;
    }
}

class DummyDisplay extends Display
{
    public function __construct()
    {

    }
}

class SpyDisplay extends Display
{
    private $shownValue;

    public function __construct()
    {

    }

    /**
     * Show value
     *
     * @param mixed $value
     */
    public function show($value)
    {
        $this->shownValue = $value;
    }

    /**
     * @return mixed
     */
    public function getShownValue()
    {
        return $this->shownValue;
    }
}
