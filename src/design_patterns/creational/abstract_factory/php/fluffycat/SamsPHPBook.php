<?php

class SamsPHPBook extends AbstractPHPBook {
  
  private $author;

  private $title;

  public function __construct() {

    mt_srand((double)microtime()*10000000);
    $rand_num = mt_rand(0,1);

    if (1 > $rand_num) {
      $this->author = 'George Schlossnagle';
      $this->title  = 'Advanced PHP Programming';
    } else {
      $this->author = 'Christian Wenz';
      $this->title  = 'PHP Phrasebook';
    }

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