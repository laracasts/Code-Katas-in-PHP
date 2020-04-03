<?php

include_once('BookSingleton.php');
include_once('BookBorrower.php');

$bookBorrower1 = new BookBorrower();
$bookBorrower2 = new BookBorrower();

/**
 * @param string $line_in
 */
function writeln($line_in) {
    echo $line_in.'<'.'BR'.'>';
}

writeln('BEGIN TESTING SINGLETON PATTERN');
writeln('');

$bookBorrower1->borrowBook();
writeln('BookBorrower1 asked to borrow the book');
writeln('BookBorrower1 Author and Title: ');
writeln($bookBorrower1->getAuthorAndTitle());
writeln('');

$bookBorrower2->borrowBook();
writeln('BookBorrower2 asked to borrow the book');
writeln('BookBorrower2 Author and Title: ');
writeln($bookBorrower2->getAuthorAndTitle());
writeln('');

$bookBorrower1->returnBook();
writeln('BookBorrower1 returned the book');
writeln('');

$bookBorrower2->borrowBook();
writeln('BookBorrower2 Author and Title: ');
writeln($bookBorrower1->getAuthorAndTitle());
