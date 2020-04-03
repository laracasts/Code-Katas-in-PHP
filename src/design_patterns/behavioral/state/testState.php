<?php

include_once('Book.php');
include_once('BookContext.php');
include_once('BookTitleStateInterface.php');
include_once('BookTitleStateStars.php');
include_once('BookTitleStateExclaim.php');

define('BR', '<BR>');

$book = new Book('PHP for Cats','Larry Truett');;

$context = new bookContext($book);

echo '<h1>STATE PATTERN TEST</h1>';

echo 'test 1 - show name'.BR;
echo $context->getBookTitle();
echo BR.BR;


echo 'test 2 - show name'.BR;
echo $context->getBookTitle();
echo BR.BR;

echo 'test 3 - show name'.BR;
echo $context->getBookTitle();
echo BR.BR;

echo 'test 4 - show name'.BR;
echo $context->getBookTitle();
echo BR.BR;