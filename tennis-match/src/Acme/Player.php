<?php

namespace Acme;

class Player {

    /**
     * The name of the player.
     *
     * @var string
     */
    public $name;

    /**
     * The current points assigned to the player.
     *
     * @var integer
     */
    public $points;

    /**
     * Create a new Player.
     *
     * @param $name
     * @param $points
     */
    public function __construct($name, $points)
    {
        $this->points = $points;
        $this->name = $name;
    }

    /**
     * Set the points for the player.
     * 
     * @param $points
     */
    public function earnPoints($points)
    {
        $this->points = $points;
    }

}