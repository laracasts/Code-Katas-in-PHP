<?php

include_once('Book.php');
include_once('TemplateAbstract.php');
include_once('TemplateExclaim.php');
include_once('TemplateStars.php');


define('BR', '<'.'BR'.'>');


echo 'BEGIN TESTING TEMPLATE PATTERN'.BR;
echo BR;

$book = new Book('PHP for Cats','Larry Truett');

$exclaimTemplate = new TemplateExclaim();
$starsTemplate = new TemplateStars();

echo 'test 1 - show exclaim template'.BR;
echo $exclaimTemplate->showBookTitleInfo($book);
echo BR.BR;


echo 'test 2 - show stars template'.BR;
echo $starsTemplate->showBookTitleInfo($book);
echo BR.BR;