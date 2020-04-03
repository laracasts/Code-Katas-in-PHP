<?php

class StrategyExclaim implements StrategyInterface {

    private $titleCount;

    /**
     * @param Book $book_in
     * @return string
     */
    public function showTitle(Book $book_in) {

        $title = $book_in->getTitle();

        $this->titleCount++;

        return Str_replace(' ', '!', $title);
    }
}
