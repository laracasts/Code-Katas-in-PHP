<?php
  
class OReillyPHPBook extends AbstractPHPBook {
  
  private $author;
    
  private $title;
    
  private static $oddOrEven = 'odd';

  public function __construct() {
      
    if ('odd' == self::$oddOrEven) {
        $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
        $this->title  = 'Programming PHP';
        self::$oddOrEven = 'even';
      } else {
        $this->author = 'David Sklar and Adam Trachtenberg';
        $this->title  = 'PHP Cookbook'; 
        self::$oddOrEven = 'odd';
      }  
    }
  
    function getAuthor() {return $this->author;}
    
    function getTitle() {return $this->title;}
  
  }

?>
