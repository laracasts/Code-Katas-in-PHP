<?php

/**
 * Component
 */
abstract class Basket
{
    protected $_components = array();

    /**
     * @param Basket $component
     */
    public function add(Basket $component)
    {
        array_push($this->_components, $component);
        // throw new BasketException( get_class($this)." is a leaf" );
    }

    /**
     * @param $pos
     */
    public function remove($pos)
    {
        unset($this->_components[$pos]);
        // throw new BasketException( get_class($this)." is a leaf" );
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        $points = 0;

        foreach ($this->_components as $component) {
            $points += $component->getPoints();    
        }

        return $points;
    }

    /**
     * @return string
     */
    public function show()
    {
        $res = '';
        foreach ($this->_components as $component) {
            $res .= "{$component->show()}";
        }
        return $res;
    }

}


/**
 * Composite
 */
class Team extends Basket
{
    private $_name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function show()
    {
        // $res = "$this->_name ({$this->getPoints()}) <br>";
        return $res . parent::show();
    }
}

/**
 * Composite
 */
class Game extends Basket
{
    private $_date;

    public function __construct()
    {
        $this->_date = date("d/m/Y");
    }

    /**
     * @return string
     */
    public function show()
    {
        $res = "Partita del: ({$this->_date}) <br>";
        return $res . parent::show();
    }	
}

/**
 * Leaf
 */
class Player extends Basket
{
    private $_name;
	
    private $_points;

    /**
     * @param $name
     * @param int $points
     */
    public function __construct($name, $points = 0)
    {
        $this->_name = $name;
        $this->_points = $points;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->_points;
    }

    /**
     * @return string
     */
    public function show()
    {
        return "{$this->_name} ({$this->getPoints()}) <br>";
    }
}

$team1 = new Team('Boston Celtics');
$team2 = new Team('Los Angeles Lakers');

$team1->add(new Player('Larry Bird', 33));
$team1->add(new Player('Kevin McHale', 12));

$team2->add(new Player('Magic Johnson', 28));
$team2->add(new Player('Kareem Abdul-Jabbar', 16));

$game = new Game();

$game->add($team1);
$game->add($team2);

echo $game->show();