<?php

class BridgeBookAuthorTitle extends BridgeBook {

    /**
     * @return string
     */
    public function showAuthorTitle() {
        return $this->showAuthor() . "'s " . $this->showTitle();
    }
}