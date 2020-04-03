<?php

namespace design_patterns\behavioral\command;

class BookStarsOffCommand extends BookCommand {

    public function execute() {
        $this->bookCommandee->setStarsOff();
    }

}
