<?php

namespace Acme;

class Tennis {

    /**
     * Player one for the game.
     *
     * @var Player
     */
    private $player1;

    /**
     * Player two for the game.
     *
     * @var Player
     */
    private $player2;

    /**
     * Points to score lookup table.
     *
     * @var array
     */
    private $pointsToScore = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    /**
     * Create a new Tennis instance.
     *
     * @param Player $player1
     * @param Player $player2
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player2 = $player2;
        $this->player1 = $player1;
    }

    /**
     * Calculate the current tennis score.
     *
     * @return string
     */
    public function score()
    {
        if ($this->hasAWinner())
        {
            return 'Win for ' . $this->leader()->name;
        }

        if ($this->inAdvantage())
        {
            return 'Advantage ' . $this->leader()->name;
        }

        if ($this->inDeuce())
        {
            return 'Deuce';
        }

        return $this->generalScore();
    }

    /**
     * Determine if there is currently a winner.
     *
     * @return bool
     */
    private function hasAWinner()
    {
        return $this->hasEnoughPointsToBeWon() && $this->isLeadingByAtLeastTwo();
    }

    /**
     * Determine if either player has accumulated enough points to win.
     *
     * @return bool
     */
    private function hasEnoughPointsToBeWon()
    {
        return max([$this->player1->points, $this->player2->points]) >= 4;
    }

    /**
     * Determine if one player is leading by at least two points.
     *
     * @return bool
     */
    private function isLeadingByAtLeastTwo()
    {
        return abs($this->player1->points - $this->player2->points) >= 2;
    }

    /**
     * Determine if one player has the advantage.
     *
     * @return bool
     */
    private function inAdvantage()
    {
        return $this->hasEnoughPointsToBeWon() && $this->isLeadingByOne();
    }

    /**
     * Determine if one player is leading by exaclty one point.
     *
     * @return bool
     */
    private function isLeadingByOne()
    {
        return abs($this->player1->points - $this->player2->points) == 1;
    }

    /**
     * Determine if the current game mode is deuce.
     *
     * @return bool
     */
    private function inDeuce()
    {
        return $this->player1->points + $this->player2->points >= 6 && $this->tied();
    }

    /**
     * Determine if the two players are tied.
     *
     * @return bool
     */
    private function tied()
    {
        return $this->player1->points == $this->player2->points;
    }

    /**
     * Get the leading player.
     *
     * @return Player
     */
    private function leader()
    {
        return $this->player1->points > $this->player2->points
            ? $this->player1
            : $this->player2;
    }

    /**
     * Build up a general score result.
     *
     * @return string
     */
    private function generalScore()
    {
        $score = $this->pointsToScore[$this->player1->points] . '-';

        return $score .= $this->tied() ? 'All' : $this->pointsToScore[$this->player2->points];
    }

}
