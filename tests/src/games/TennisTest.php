<?php

namespace test\games;

use PHPUnit\Framework\TestCase;
use games\tennis\Player;
use games\tennis\Tennis;

class TennisTest extends TestCase
{
    /**
     * @var Player
     */
    protected $john;

    /**
     * @var Player
     */
    protected $jane;

    /**
     * @var Tennis
     */
    private $game;
    
    protected function setUp(): void
    {
        parent::setUp();

        $this->john = new Player('John Doe', 0);
        $this->jane = new Player('Jane Doe', 0);

        $this->game = new Tennis($this->john, $this->jane);
    }
    
    public function testItScoresAScorelessGame()
    {
        $this->assertEquals('Love-All', $this->game->score());
    }

    public function testItScoresA_1_0_Game()
    {
        $this->john->earnPoints(1);

        $this->assertEquals('Fifteen-Love', $this->game->score());
    }

    public function testItScoresA_2_0_Game()
    {
        $this->john->earnPoints(2);

        $this->assertEquals('Thirty-Love', $this->game->score());
    }

    public function testItScoresA_3_0_Game()
    {
        $this->john->earnPoints(3);

        $this->assertEquals('Forty-Love', $this->game->score());
    }

    public function testItScoresA_4_0_Game()
    {
        $this->john->earnPoints(4);

        $this->assertEquals('Win for John Doe', $this->game->score());
    }

    public function testItScoresA_0_4_Game()
    {
        $this->jane->earnPoints(4);

        $this->assertEquals('Win for Jane Doe', $this->game->score());
    }

    public function testItScoresA_4_3_Game()
    {
        $this->john->earnPoints(4);
        $this->jane->earnPoints(3);

        $this->assertEquals('Advantage John Doe', $this->game->score());
    }

    public function it_scores_a_3_4_Game()
    {
        $this->john->earnPoints(3);
        $this->jane->earnPoints(4);

        $this->assertEquals('Advantage Jane Doe', $this->game->score());
    }

    public function testItScores_A_4_4_Game()
    {
        $this->john->earnPoints(3);
        $this->jane->earnPoints(3);

        $this->assertEquals('Deuce', $this->game->score());
    }

    public function testItScoresA_8_8_Game()
    {
        $this->john->earnPoints(8);
        $this->jane->earnPoints(8);

        $this->assertEquals('Deuce', $this->game->score());
    }

    public function testItScoresA_8_9_Game()
    {
        $this->john->earnPoints(8);
        $this->jane->earnPoints(9);

        $this->assertEquals('Advantage Jane Doe', $this->game->score());
    }

    public function testItScores_A_8_10_Game()
    {
        $this->john->earnPoints(8);
        $this->jane->earnPoints(10);

        $this->assertEquals('Win for Jane Doe', $this->game->score());
    }
}