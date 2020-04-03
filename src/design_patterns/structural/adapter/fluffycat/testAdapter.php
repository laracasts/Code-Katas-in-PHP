<?php

include_once('SimpleBook.php');
include_once('BookAdapter.php');
include_once('BridgeBookImp.php');
include_once('BridgeBookStarsImp.php');

define('BR', '<'.'BR'.'>');

echo 'ADAPTER PATTERN TEST'.BR;
echo BR;

$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
  
$bookAdapter = new BookAdapter($book);
  
echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();

echo BR.BR;
echo 'END TESTING ADAPTER PATTERN'.BR;
