<?php

class SpicyPizzaBuilder extends PizzaBuilder {

    public function buildDough() {
        $this->pizza->setDough("pan baked");
    }

    public function buildSauce() {
        $this->pizza->setSauce("hot");
    }

    public function buildTopping() {
        $this->pizza->setTopping("pepperoni + salami");
    }
}