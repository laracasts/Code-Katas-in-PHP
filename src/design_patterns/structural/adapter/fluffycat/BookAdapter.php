<?php

class BookAdapter {

    private $book;

    /**
     * @param SimpleBook $book_in
     */
    public function __construct(SimpleBook $book_in) {
        $this->book = $book_in;
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle() {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}
