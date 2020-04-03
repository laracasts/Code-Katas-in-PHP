<?php

/**
 * la classe Observer implementa l’interfaccia SplObserver
 * e introduce i due metodi che verranno invocati al momento
 * della registrazione di una modifica di stato del subject
 */
class Observer implements SplObserver {

    protected $papero;

    /**
     * @param $papero
     */
    public function __construct($papero) {
        $this->papero = $papero;
    }

    /**
     * Il nome della classe viene concatenato al costruttore
     *
     * @return string
     */
    public function __toString() {
        return "(".__CLASS__.") ".$this->papero;
    }

    /**
     * il metodo update() introduce i metodi richiamati in seguito all’evento in cui è coinvolto il subject
     *
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject) {

        if ($subject->menoDiMille() == true) {
            echo $this . ": - Te li presto. <br />";
        }

        if ($subject->piuDiMille() == true) {
            echo $this . ": - Ma in due rate. <br />";
        }
    }
}