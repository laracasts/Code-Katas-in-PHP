<?php

class Book {

    private $author;
    private $title;

    /**
     * @param $title_in
     * @param $author_in
     */
    public function __construct($title_in, $author_in)
    {
        $this->author = $author_in;
        $this->title  = $title_in;
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
