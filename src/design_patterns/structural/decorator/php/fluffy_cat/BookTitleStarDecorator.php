<?php

class BookTitleStarDecorator extends BookTitleDecorator {

    /**
     * @var BookTitleDecorator
     */
    private $btd;

    /**
     * @param BookTitleDecorator $btd_in
     */
    public function __construct(BookTitleDecorator $btd_in)
    {
        $this->btd = $btd_in;
    }

    /**
     * @return $this
     */
    public function starTitle()
    {
        $this->btd->title = str_replace(" ","*",$this->btd->title);

        return $this;
    }
}
