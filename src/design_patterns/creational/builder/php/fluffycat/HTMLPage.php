<?php

class HTMLPage {

    private $page = NULL;
    private $page_title = NULL;
    private $page_heading = NULL;
    private $page_text = NULL;

    /**
     * @return null
     */
    public function showPage() {
        return $this->page;
    }

    /**
     * @param string $title_in
     */
    public function setTitle($title_in) {
        $this->page_title = $title_in;
    }

    /**
     * @param string $heading_in
     */
    public function setHeading($heading_in) {
        $this->page_heading = $heading_in;
    }

    /**
     * @param $text_in
     */
    public function setText($text_in) {
        $this->page_text .= $text_in;
    }

    public function formatPage() {
        $this->page  = '[html]';
        $this->page .=  '[head][title]'.$this->page_title.'[/title][/head]';
        $this->page .= '[body]';
        $this->page .= '[h1]'.$this->page_heading.'[/h1]';
        $this->page .= $this->page_text;
        $this->page .= '[/body]';
        $this->page .= '[/html]';
    }

}
