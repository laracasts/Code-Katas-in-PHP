<?php

class ProxyBookList {

    private $bookList = NULL;

    /**
     * @return mixed
     */
    public function getBookCount()
    {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        }
        return $this->bookList->getBookCount();
    }

    /**
     * @param $book
     * @return mixed
     */
    public function addBook($book)
    {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        }

        return $this->bookList->addBook($book);
    }

    /**
     * @param $bookNum
     * @return mixed
     */
    public function getBook($bookNum)
    {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        }

        return $this->bookList->getBook($bookNum);
    }

    /**
     * @param $book
     * @return mixed
     */
    public function removeBook($book)
    {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        }

        return $this->bookList->removeBook($book);
    }

    /**
     * Create
     */
    public function makeBookList()
    {
        $this->bookList = new bookList();
    }
}
