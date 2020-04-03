<?php

namespace design_patterns\behavioral\iterator;

class BookListReverseIterator extends BookListIterator {

    /**
     * @param BookList $bookList_in
     */
    public function __construct(BookList $bookList_in) {
        $this->bookList = $bookList_in;
        $this->currentBook = $this->bookList->getBookCount() + 1;
    }

    /**
     * @return null
     */
    public function getNextBook() {
        if ($this->hasNextBook()) {
            return $this->bookList->getBook(--$this->currentBook);
        } else {
            return NULL;
        }
    }

    /**
     * @return bool
     */
    public function hasNextBook() {
        if (1 < $this->currentBook) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}