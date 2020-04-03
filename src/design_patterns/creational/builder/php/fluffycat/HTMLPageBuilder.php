<?php

class HTMLPageBuilder extends AbstractPageBuilder {
    
    private $page = NULL;
    
    public function __construct() {
      $this->page = new HTMLPage();
    }

    /**
     * @inheritdoc
     */
    public function setTitle($title_in) {
      $this->page->setTitle($title_in);
    }

    /**
     * @inheritdoc
     */
    public function setHeading($heading_in) {
      $this->page->setHeading($heading_in);
    }

    /**
     * @inheritdoc
     */
    public function setText($text_in) {
      $this->page->setText($text_in);
    }

    /**
     * @inheritdoc
     */
    public function formatPage() {
        $this->page->formatPage();
    }

    /**
     * @inheritdoc
     */
    public function getPage() {
        return $this->page;
    }
}