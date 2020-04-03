<?php

class SamsMySQLBook extends AbstractMySQLBook {

  private $author;
    
  private $title;

  public function __construct() {
    $this->author = 'Paul Dubois';
    $this->title  = 'MySQL, 3rd Edition';
  }

  /**
   * @return string
   */
  public function getAuthor() {
    return $this->author;
  }

  /**
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }

}
