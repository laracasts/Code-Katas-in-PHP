<?php

class BridgeBookTitleAuthor extends BridgeBook {

    /**
     * @return string
     */
    public function showTitleAuthor() {
        return $this->showTitle() . ' by ' . $this->showAuthor();
    }
}
