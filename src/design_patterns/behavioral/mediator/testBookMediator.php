<?php

include_once('BookColleague.php');
include_once('BookAuthorColleague.php');
include_once('BookTitleColleague.php');
include_once('BookMediator.php');

/**
 * @param $line_in
 */
function writeln($line_in) {
    echo $line_in.'<'.'BR'.'>';
}

writeln('MEDIATOR PATTERN TEST');
writeln('');

$mediator = new BookMediator('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');

$author = $mediator->getAuthor();
$title = $mediator->getTitle();

writeln('Original Author and Title: ');
writeln('author: ' . $author->getAuthor());
writeln('title: ' . $title->getTitle());
writeln('');

$author->setAuthorLowerCase();

writeln('After Author set to Lower Case: ');
writeln('author: ' . $author->getAuthor());
writeln('title: ' . $title->getTitle());
writeln('');


$title->setTitleUpperCase();

writeln('After Title set to Upper Case: ');
writeln('author: ' . $author->getAuthor());
writeln('title: ' . $title->getTitle());
