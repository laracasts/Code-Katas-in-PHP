<?php

class singleton {

    private static $instance;

    public $value1;
    public $value2;

    private function initialize() 
    {
		$this->value1 = 'test value';
		$this->value2 = 'test value2';
    }

    public function getInstance()
    {
        if (!isset(self::$instance))
        {
            $class = __CLASS__;
            self::$instance = new $class();
            self::$instance->initialize();
        }
        return self::$instance;
    }
}

$myInstance = singleton::getInstance();

echo $myInstance->value1;
