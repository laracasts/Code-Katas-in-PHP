<?php

namespace design_patterns\behavioral\command;

class BookCommandee {

    private $author;
    private $title;

    /**
     * @param string $title_in
     * @param string $author_in
     */
    public function __construct($title_in, $author_in) {
        $this->setAuthor($author_in);
        $this->setTitle($title_in);
    }

    /**
     * @return mixed
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @param $author_in
     */
    public function setAuthor($author_in) {
        $this->author = $author_in;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param $title_in
     */
    public function setTitle($title_in) {
        $this->title = $title_in;
    }

    /**
     * Set author and title
     */
    public function setStarsOn() {
        $this->setAuthor(Str_replace(' ','*',$this->getAuthor()));
        $this->setTitle(Str_replace(' ','*',$this->getTitle()));
    }

    /**
     * Set author and title
     */
    public function setStarsOff() {
        $this->setAuthor(Str_replace('*', ' ', $this->getAuthor()));
        $this->setTitle(Str_replace('*', ' ', $this->getTitle()));
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle() {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }

}
