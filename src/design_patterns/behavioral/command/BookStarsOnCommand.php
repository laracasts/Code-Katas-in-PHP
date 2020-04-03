<?php

namespace design_patterns\behavioral\command;

class BookStarsOnCommand extends BookCommand {

    public function execute() {
        $this->bookCommandee->setStarsOn();
    }
}
