<?php

abstract class PizzaBuilder {

    /**
     * @var Pizza
     */
    protected $pizza;

    /**
     * @return mixed
     */
    public function getPizza() {
        return $this->pizza;
    }

    /**
     * Set a new Pizza object
     */
    public function createNewPizzaProduct() {
        $this->pizza = new Pizza();
    }

    abstract public function buildDough();

    abstract public function buildSauce();

    abstract public function buildTopping();
}