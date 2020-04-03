<?php

abstract class BridgeBook {

    private $bbAuthor;
    private $bbTitle;
    private $bbImp;

    /**
     * @param string $author_in
     * @param string $title_in
     * @param $choice_in
     */
    public function __construct($author_in, $title_in, $choice_in) {
        $this->bbAuthor = $author_in;
        $this->bbTitle  = $title_in;
        if ('STARS' == $choice_in) {
        $this->bbImp = new BridgeBookStarsImp();
        } else {
        $this->bbImp = new BridgeBookCapsImp();
        }
    }

    /**
     * @return mixed|string
     */
    public function showAuthor() {
        return $this->bbImp->showAuthor($this->bbAuthor);
    }

    /**
     * @return mixed|string
     */
    public function showTitle() {
        return $this->bbImp->showTitle($this->bbTitle);
    }

}