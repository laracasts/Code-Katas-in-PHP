<?php

include_once('Interpreter.php');
include_once('BookList.php');
include_once('Book.php');

define('BR', '<'.'BR'.'>');

echo 'BEGIN TESTING INTERPRETER PATTERN'.BR;
echo BR;

$bookList = new BookList();
$inBook1 = new Book('PHP for Cats','Larry Truett');
$inBook2 = new Book('MySQL for Cats','Larry Truett');
$bookList->addBook($inBook1);
$bookList->addBook($inBook2);

$interpreter = new Interpreter($bookList);

echo 'test 1 - invalid request missing "book"'.BR;
echo $interpreter->interpret('author 1');
echo BR.BR;

echo 'test 2 - valid book author request'.BR;
echo $interpreter->interpret('book author 1');
echo BR.BR;

echo 'test 3 - valid book title request'.BR;
echo $interpreter->interpret('book title 2');
echo BR.BR;

echo 'test 4 - valid book author title request'.BR;
echo $interpreter->interpret('book author title 1');
echo BR.BR;

echo 'test 5 - invalid request with invalid book number'.BR;
echo $interpreter->interpret('book title 3');
echo BR.BR;

echo 'test 6 - invalid request with nuo numeric book number'.BR;
echo $interpreter->interpret('book title one');
echo BR.BR;

echo 'END TESTING INTERPRETER PATTERN'.BR;