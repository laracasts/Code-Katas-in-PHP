<?php

class CarFactory {
    public static function createCar($carType) {
        if (class_exists($carType)) {
            return new $carType;
        } else {
            die("Unkonwn car type");
        }
    }
}

abstract class Car {
    public function getType() {
        echo $this->_type . PHP_EOL;
    }
}


class Ferrari extends Car {
	protected $_type = "Ferrari";
}


class Lamborghini extends Car {
	protected $_type = "Lamborghini";
}
 

class Bianchina extends Car {

    protected $_type = "Bianchina";

    public function getType(){
        echo $this->_type . ' still exist!';
    }
}

$carFactory = new CarFactory();
 
$Ferrari = $carFactory->createCar('Ferrari');
$Ferrari->getType();

$Lamborghini = $carFactory->createCar('Lamborghini');
$Lamborghini->getType();
 
$Bianchina = $carFactory->createCar('Bianchina');
$Bianchina->getType();
