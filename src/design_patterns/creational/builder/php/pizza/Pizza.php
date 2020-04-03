<?php

class Pizza {

    protected $dough;
    protected $sauce;
    protected $topping;

    /**
     * @param $dough
     */
    public function setDough($dough) {
        $this->dough = $dough;
    }

    /**
     * @param $sauce
     */
    public function setSauce($sauce) {
        $this->sauce = $sauce;
    }

    /**
     * @param $topping
     */
    public function setTopping($topping) {
        $this->topping = $topping;
    }

    /**
     * Print ingredients
     */
    public function showIngredients() {
        echo "Dough   : ".$this->dough."<br/>";
        echo "Sauce   : ".$this->sauce."<br/>";
        echo "Topping : ".$this->topping."<br/>";
    }
}
