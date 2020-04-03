<?php
//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved
  
  include_once('BridgeBook.php');;  
  
  class BridgeBookTitleAuthor extends BridgeBook {    
  
    function showTitleAuthor() {
      return $this->showTitle() . ' by ' . $this->showAuthor();
    }
  
  }
?>