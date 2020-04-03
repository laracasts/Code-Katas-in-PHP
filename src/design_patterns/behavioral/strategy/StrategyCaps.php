<?php

class StrategyCaps implements StrategyInterface {

    private $titleCount;

    /**
     * @param $book_in
     * @return string
     */
    public function showTitle(Book $book_in) {

        $title = $book_in->getTitle();

        $this->titleCount++;

        return strtoupper ($title);
    }
}