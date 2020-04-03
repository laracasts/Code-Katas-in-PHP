<?php

class StrategyStars implements StrategyInterface {

    private $titleCount;

    /**
     * @param Book $book_in
     * @return mixed
     */
    public function showTitle(Book $book_in) {

        $title = $book_in->getTitle();

        $this->titleCount++;

        return str_replace(' ', '*', $title);
    }
}