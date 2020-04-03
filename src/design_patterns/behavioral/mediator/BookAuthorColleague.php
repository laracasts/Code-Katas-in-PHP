<?php

namespace design_patterns\behavioral\mediator;

class BookAuthorColleague extends BookColleague {

    private $author;
    private $state;

    /**
     * @param string $author_in
     * @param string $mediator_in
     */
    public function __construct($author_in, $mediator_in) {
        $this->author = $author_in;

        parent::__construct($mediator_in);
    }

    /**
     * @return string
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
    public function getState() {
        return $this->state;
    }

    /**
     * @param $state_in
     */
    public function setState($state_in) {
        $this->state = $state_in;
    }

    public function setAuthorUpperCase() {
        $this->setAuthor(strtoupper($this->getAuthor()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    public function setAuthorLowerCase() {
        $this->setAuthor(strtolower($this->getAuthor()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }

}