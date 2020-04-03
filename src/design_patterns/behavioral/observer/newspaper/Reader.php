<?php

namespace design_patterns\behavioral\observer\newspaper;

/**
 * Observer,that who recieves news
 */
class Reader implements SplObserver {

    private $name;

    /**
     * @param string $name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @param SplSubject $subject
     */
    public function update(\SplSubject $subject) {
        echo $this->name.' is reading breakout news <b>'.$subject->getContent().'</b><br>';
    }
}