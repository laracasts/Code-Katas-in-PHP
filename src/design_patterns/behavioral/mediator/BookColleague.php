<?php

namespace design_patterns\behavioral\mediator;

abstract class BookColleague {

    private $mediator;

    /**
     * @param $mediator_in
     */
    public function __construct($mediator_in) {
        $this->mediator = $mediator_in;
    }

    /**
     * @return mixed
     */
    public function getMediator() {return $this->mediator;}

    /**
     * @param $changingClassIn
     */
    public function changed($changingClassIn) {
        $this->getMediator()->titleChanged($changingClassIn);
    }

}