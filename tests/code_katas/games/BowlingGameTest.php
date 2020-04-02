<?php

namespace test\code_katas\games;

use PHPUnit\Framework\TestCase;
use code_katas\games\bowling\BowlingGame;

class BowlingGameTest extends TestCase
{
    /**
     * @var BowlingGame
     */
    private $bowlingGame;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bowlingGame = new BowlingGame();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->bowlingGame);
    }

    public function testItScoresAGutterGameAsZero()
    {
        $this->rollTimes(20, 0);

        $this->assertEquals($this->bowlingGame->score(), 0);
    }

    public function testItScoresTheSumOfAllKnockedDownPinsForAGame()
    {
        $this->rollTimes(20, 1);

        $this->assertEquals($this->bowlingGame->score(), 20);
    }

    public function testItAwardsAOneRollBonusForEverySpare()
    {
        $this->rollSpare();

        $this->bowlingGame->roll(5);

        $this->rollTimes(17, 0);

        $this->assertEquals($this->bowlingGame->score(), 20);
    }

    public function testItAwardsATwoRollBonusForAStrikeInThePreviousFrame()
    {
        $this->rollStrike();

        $this->bowlingGame->roll(7);
        $this->bowlingGame->roll(2);

        $this->rollTimes(17, 0);

        $this->assertEquals($this->bowlingGame->score(), 28);
    }

    public function testItScoresAPerfectGame()
    {
        $this->rollTimes(12, 10);

        $this->assertEquals($this->bowlingGame->score(), 300);
    }

    public function testItTakesExceptionWithInvalidRolls()
    {
        $this->expectException( \InvalidArgumentException::class );

        $this->bowlingGame->roll(-10);
    }

    private function rollSpare()
    {
        $this->bowlingGame->roll(2);
        $this->bowlingGame->roll(8);
    }

    private function rollStrike()
    {
        $this->bowlingGame->roll(10);
    }

    /**
     * @param integer $count
     * @param integer $pins
     */
    private function rollTimes($count, $pins)
    {
        for ($i = 0; $i < $count; $i++)
        {
            $this->bowlingGame->roll($pins);
        }
    }
}