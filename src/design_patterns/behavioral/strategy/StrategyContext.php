<?php

class StrategyContext {

    private $strategy = NULL;

    /**
     * BookList is not instantiated at construct time
     *
     * @param $strategy_ind_id
     */
    public function __construct($strategy_ind_id) {
        switch ($strategy_ind_id) {
            case "C":
                $this->strategy = new StrategyCaps();
                break;
            case "E":
                $this->strategy = new StrategyExclaim();
                break;
            case "S":
                $this->strategy = new StrategyStars();
                break;
        }
    }

    /**
     * @param mixed $book
     * @return mixed
     */
    public function showBookTitle($book) {
        return $this->strategy->showTitle($book);
    }
}

