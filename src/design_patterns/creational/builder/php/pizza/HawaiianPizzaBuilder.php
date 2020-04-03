<?php

class HawaiianPizzaBuilder extends PizzaBuilder {

    public function buildDough() {
        $this->pizza->setDough("cross");
    }

    public function buildSauce() {
        $this->pizza->setSauce("mild");
    }

    public function buildTopping() {
        $this->pizza->setTopping("ham + pineapple");
    }
}
