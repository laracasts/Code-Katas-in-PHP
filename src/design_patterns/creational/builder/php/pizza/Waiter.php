<?php

class Waiter {

	protected $pizzaBuilder;

	/**
	 * @param PizzaBuilder $pizzaBuilder
	 */
	public function setPizzaBuilder(PizzaBuilder $pizzaBuilder) {
		$this->pizzaBuilder = $pizzaBuilder;
	}

	/**
	 * @return mixed
	 */
	public function getPizza() {
		return $this->pizzaBuilder->getPizza();
	}

	public function constructPizza() {
		$this->pizzaBuilder->createNewPizzaProduct();
		$this->pizzaBuilder->buildDough();
		$this->pizzaBuilder->buildSauce();
		$this->pizzaBuilder->buildTopping();
	}
}
