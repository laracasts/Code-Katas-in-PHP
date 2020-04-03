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

    /**
     * Get instance
     * 
     * @return mixed
     */
    public function getInstance()
    {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class();
            self::$instance->initialize();
        }
        return self::$instance;
    }

    /**
     * Get object Instance
     * 
     * @param string $className
     * @return mixed
     */
    public static function getInstanceObject($className)
    {
        $class = $className;
        self::$instance = new $class();
        self::$instance->initialize();
        return self::$instance;
    }

}

class application {

    private static $instance;

    public $value1, $value2, $channel;

    public function checkit()
    {
        $this->channel = 1;
        
        echo "Another mothod... ".$this->channel;
    }
	
    public function initialize()
    {
        $this->value1 = 'test value';
        $this->value2 = 'test value2';
        $this->channel = 33;
    }

    /**
     * @return mixed
     */
    public function getInstance()
    {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class();
            self::$instance->initialize();
        }

        return self::$instance;
    }
}

// $myInstance = singleton::getInstance();
// echo $myInstance->value1;

// $myInstance = application::getInstance();
// echo $myInstance->channel;
// $myInstance->checkit();

$application = 'application';
$obj = singleton::getInstanceObject($GLOBALS['application']);
$obj->checkit();
