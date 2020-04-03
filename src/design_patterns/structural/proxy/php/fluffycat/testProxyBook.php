<?php

require_once("Book.php");
require_once("BookList.php");
require_once("ProxyBookList.php");

define('BR', '<'.'BR'.'>');

echo '<h1>PROXY PATTERN TEST</h1>';

$proxyBookList = new ProxyBookList();

$inBook = new Book('PHP for Cats','Larry Truett');

$proxyBookList->addBook($inBook);

echo '<strong>Test 1 - show the book count after a book is added:</strong> '.$proxyBookList->getBookCount();
echo BR.BR;

echo '<strong>Test 2 - show the book:</strong> ';
$outBook = $proxyBookList->getBook(1);
echo $outBook->getAuthorAndTitle();
echo BR.BR;

$proxyBookList->removeBook($outBook);

echo '<strong>Test 3 - show the book count after a book is removed:</strong> '.$proxyBookList->getBookCount();
