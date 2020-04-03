<?php

class Subject implements SplSubject {

    private $papero;
    private $observers = array();
    private $menodimille = false;
    private $piudimille = false;

    public function __construct($papero) {
        $this->papero = $papero;
    }

    public function __toString() {
        return "(".__CLASS__.") ".$this->papero;
    }

    /**
     * il metodo attach() attribuisce gli observers al subject
     *
     * @param SplObserver $obs
     */
    public function attach(SplObserver $obs) {
        $this->observers[] = $obs;
    }

    /**
     * il metodo detach() dissocia gli observers al subject
     *
     * @param SplObserver $obs
     */
    public function detach(SplObserver $obs) {
        $this->observers = array_diff($this->observers, array($obs));
    }

    /**
     * notify() segnala il verificarsi di un evento a carico del subject
     */
    public function notify() {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * definizione dei valori di ritorno
     *
     * @param bool $val
     */
    public function chiedePiuDiMille($val) {

        $this->piudimille = $val;

        if ($val == true) {
            echo $this . ": - Mi servono 1.200 Dollari. <br />";
        }

        $this->notify();
    }

    /**
     * @return bool
     */
    public function piuDiMille() {
        return $this->piudimille;
    }

    /**
     * @param $val
     */
    public function chiedeMenoDiMille($val) {

        $this->menodimille = $val;

        if ($val == true) {
            echo $this . ": - Mi servono 500 Dollari. <br />";
        }

        $this->notify();
    }

    /**
     * @return bool
     */
    public function menoDiMille() {
        return $this->menodimille;
    }
}