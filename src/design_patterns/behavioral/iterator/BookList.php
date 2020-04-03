<?php

namespace design_patterns\behavioral\iterator;

class BookList {

    private $books = array();
    private $bookCount = 0;

    /**
     * @return int
     */
    public function getBookCount() {
        return $this->bookCount;
    }

    /**
     * @param $newCount
     */
    private function setBookCount($newCount) {
        $this->bookCount = $newCount;
    }


    public function getBook($bookNumberToGet) {
        if ( (is_numeric($bookNumberToGet)) &&
            ($bookNumberToGet <= $this->getBookCount())) {
            return $this->books[$bookNumberToGet];
        } else {
            return NULL;
        }
    }

    /**
     * @param Book $book_in
     * @return int
     */
    public function addBook(Book $book_in) {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book_in;
        return $this->getBookCount();
    }

    /**
     * @param Book $book_in
     * @return int
     */
    public function removeBook(Book $book_in) {
        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if ($book_in->getAuthorAndTitle() ==
                $this->books[$counter]->getAuthorAndTitle())
            {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->books[$x] = $this->books[$x + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }
        return $this->getBookCount();
    }

}