<?php

namespace design_patterns\behavioral\iterator;

class BookListIterator {

    protected $bookList;
    protected $currentBook = 0;

    /**
     * @param BookList $bookList_in
     */
    public function __construct(BookList $bookList_in) {
        $this->bookList = $bookList_in;
    }

    /**
     * @return null
     */
    public function getCurrentBook() {
        if (($this->currentBook > 0) &&
            ($this->bookList->getBookCount() >= $this->currentBook)) {
            return $this->bookList->getBook($this->currentBook);
        }
    }

    /**
     * @return null
     */
    public function getNextBook() {
        if ($this->hasNextBook()) {
            return $this->bookList->getBook(++$this->currentBook);
        } else {
            return NULL;
        }
    }

    /**
     * @return bool
     */
    public function hasNextBook() {
        if ($this->bookList->getBookCount() > $this->currentBook) {
            return true;
        } else {
            return false;
        }
    }

}