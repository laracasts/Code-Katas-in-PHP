<?php

class BookVisitee extends Visitee {

    private $author;
    private $title;

    /**
     * @param string $title_in
     * @param string $author_in
     */
    function __construct($title_in, $author_in) {
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
     * @param Visitor $visitorIn
     */
    public function accept(Visitor $visitorIn) {
        $visitorIn->visitBook($this);
    }

}