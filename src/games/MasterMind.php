<?php

namespace games;

class MasterMind
{
    /**
     * @var bool
     */
    private $solved;

    /**
     * @var array
     */
    private $guesses;

    /**
     * @var int
     */
    private $current_guess;

    /**
     * Set guesses
     */
    public function __construct()
    {
        $this->solved = false;

        $this->guesses = array(
            'AAAA',
            'ABCD',
            'ABDC',
            'ACBD',
            'BACD',
            'BCAD',
            'BACD',
            'BCDA',
            'BCDA',
            'BACD',
        );

        $this->current_guess = 0;
    }

    /**
     * @return mixed|string
     */
    public function guess()
    {
        if ($this->solved) {
            return "Yay! I win!";
        }
        return $this->guesses[$this->current_guess++];
    }

    /**
     * Set the score
     *
     * @param string $score
     * @return bool
     */
    public function score($score)
    {
        $this->solved = ($score == "++++") ? true : false;

        return $this->solved;
    }
}