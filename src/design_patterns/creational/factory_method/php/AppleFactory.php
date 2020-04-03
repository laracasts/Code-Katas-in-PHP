<?php

class AppleFactory {

    static $id = 0;

    /**
     * @param $className
     * @return mixed
     * @throws Exception
     */
    static public function getApple($className) {
        if (!class_exists($className)) {
            throw new Exception('The Apple class does not exist');
        }
        $apple = new $className();
        $apple->id = self::$id++;
        return $apple;
    }

}

abstract class Apple {

    public $id;
    public $color;
    public $size;
    public $origin;
    public $season;

}

class GrannySmith extends Apple {

    public function __construct() {
        $this->color    = 'Green';
        $this->size     = 'medium';
        $this->origin   = 'Australia';
        $this->season   = 'October - Desember';
    }

}

$a = AppleFactory::getApple('GrannySmith');

var_dump($a);
