<?php

interface StrategyInterface {

    /**
     * @param Book $book_in
     * @return mixed
     */
    public function showTitle(Book $book_in);
}