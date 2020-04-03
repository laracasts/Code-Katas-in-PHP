<?php

class OReillyMySQLBook extends AbstractMySQLBook {

  private $author;
    
  private $title;
    
  public function __construct() {
    $this->author = 'George Reese, Randy Jay Yarger, and Tim King';
    $this->title  = 'Managing and Using MySQL';
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