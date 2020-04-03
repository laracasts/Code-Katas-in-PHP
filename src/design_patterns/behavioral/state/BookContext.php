<?php

class BookContext {

    private $book = NULL;
    private $bookTitleState = NULL;

    /**
     * BookList is not instantiated at construct time
     *
     * @param string $book_in
     */
    public function __construct($book_in) {

        $this->book = $book_in;

        $this->setTitleState(new BookTitleStateStars());
    }

    /**
     * @return mixed
     */
    public function getBookTitle() {
        return $this->bookTitleState->showTitle($this);
    }

    /**
     * @return null|string
     */
    public function getBook() {
        return $this->book;
    }

    /**
     * @param string $titleState_in
     */
    public function setTitleState($titleState_in) {
        $this->bookTitleState = $titleState_in;
    }

    /**
     * @return null|string
     */
    public function getBookTitleState()
    {
        return $this->bookTitleState;
    }
}