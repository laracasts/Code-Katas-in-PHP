<?php

class Automobile
{
	private $vehicleMake;
	private $vehicleModel;

	/**
	 * @param string $make
	 * @param string $model
	 */
	public function __construct($make, $model)
	{
		$this->vehicleMake = $make;
		$this->vehicleModel = $model;
	}

	/**
	 * @return string
	 */
	public function getMakeAndModel()
	{
		return $this->vehicleMake . ' ' . $this->vehicleModel;
	}
}

class AutomobileFactory
{
	/**
	 * @param string $make
	 * @param string $model
	 *
	 * @return Automobile
	 */
	public static function create($make, $model)
	{
		return new Automobile($make, $model);
	}
}

$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"
