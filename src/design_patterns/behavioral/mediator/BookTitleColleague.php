<?php

namespace design_patterns\behavioral\mediator;

class BookTitleColleague extends BookColleague {


    private $title;
    private $state;

    /**
     * @param $title_in
     * @param $mediator_in
     */
    public function __construct($title_in, $mediator_in) {
        $this->title = $title_in;
        parent::__construct($mediator_in);
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

    public function setTitleUpperCase() {
        $this->setTitle(strtoupper($this->getTitle()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }


    public function setTitleLowerCase() {
        $this->setTitle(strtolower($this->getTitle()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }

}