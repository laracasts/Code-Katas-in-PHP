<?php

class BookTitleDecorator {

    protected $book;
    protected $title;

    /**
     * @param Book $book_in
     */
    public function __construct(Book $book_in)
    {
        $this->book = $book_in;

        $this->resetTitle();
    }

    /**
     * Doing this so original object is not altered
     */
    public function resetTitle()
    {
        $this->title = $this->book->getTitle();
    }

    /**
     * @return mixed
     */
    public function showTitle()
    {
        return $this->title;
    }
}
