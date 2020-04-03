<?php

include_once('BookSingleton.php');

class BookBorrower {

    private $borrowedBook;
    private $haveBook = FALSE;

    function getAuthorAndTitle()
    {
        if (TRUE == $this->haveBook) {
            return $this->borrowedBook->getAuthorAndTitle();
        } else {
            return "I don't have the book";
        }
    }

    function borrowBook()
    {
        $this->borrowedBook = BookSingleton::borrowBook();
        if ($this->borrowedBook == NULL) {
            $this->haveBook = FALSE;
        } else {
            $this->haveBook = TRUE;
        }
    }

    function returnBook()
    {
        $this->borrowedBook->returnBook($this->borrowedBook);
    }

}
