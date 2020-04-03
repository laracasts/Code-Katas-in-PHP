<?php

class Car
{
    private $vehicleMake;
    private $vehicleModel;

    /**
     * @param $make
     * @param $model
     */
    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class CarFactory
{
    /**
     * @param $make
     * @param $model
     * @return Automobile
     */
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}

$veyron = CarFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel());

