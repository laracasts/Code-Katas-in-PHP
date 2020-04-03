<?php

class BookSingleton {

    private $author = 'Gamma, Helm, Johnson, and Vlissides';
    private $title  = 'Design Patterns';
    private static $book = NULL;
    private static $isLoanedOut = FALSE;

    /**
     * @return BookSingleton|null
     */
    static function borrowBook()
    {
        if (FALSE == self::$isLoanedOut) {
            if (NULL == self::$book) {
                self::$book = new BookSingleton();
            }
            self::$isLoanedOut = TRUE;
            return self::$book;
        } else {
            return NULL;
        }
    }

    /**
     * @param BookSingleton $bookReturned
     */
    public function returnBook(BookSingleton $bookReturned)
    {
        self::$isLoanedOut = FALSE;
    }

    /**
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
