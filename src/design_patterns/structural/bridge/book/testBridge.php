<?php

include_once('BridgeBook.php');
include_once('BridgeBookImp.php');
include_once('BridgeBookCapsImp.php');
include_once('BridgeBookStarsImp.php');
include_once('BridgeBookAuthorTitle.php');
include_once('BridgeBookTitleAuthor.php');

define('BR', '<'.'BR'.'>');

echo '<h1>BRIDGE PATTERN TEST</h1>';

echo '<h2>test 1 - author title with caps</h2>';
$book = new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','CAPS');
echo $book->showAuthorTitle();
echo BR.BR;

echo '<h2>test 2 - author title with stars</h2>';
$book = new BridgeBookAuthorTitle('Larry Truett','PHP for Cats','STARS');
echo $book->showAuthorTitle();
echo BR.BR;

echo '<h2>test 3 - title author with caps</h2>';
$book = new BridgeBookTitleAuthor('Larry Truett','PHP for Cats','CAPS');
echo $book->showTitleAuthor();
echo BR.BR;

echo '<h2>test 4 - title author with stars</h2>';
$book = new BridgeBookTitleAuthor('Larry Truett','PHP for Cats','STARS');
echo $book->showTitleAuthor();
