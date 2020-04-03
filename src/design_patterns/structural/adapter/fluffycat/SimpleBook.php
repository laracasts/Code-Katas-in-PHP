<?php

class SimpleBook {

    private $author;
    private $title;

    /**
     * @param $author_in
     * @param $title_in
     */
    public function __construct($author_in, $title_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }

    /**
     * @return mixed
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

}
