<?php

class OReillyBookFactory extends AbstractBookFactory {

    private $context = "OReilly";

    /**
     * @return OReillyPHPBook
     */
    public function makePHPBook() {
        return new OReillyPHPBook();
    }

    /**
     * @return OReillyMySQLBook
     */
    public function makeMySQLBook() {
        return new OReillyMySQLBook();
    }

}
