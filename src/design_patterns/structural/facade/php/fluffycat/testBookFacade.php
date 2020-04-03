<?php

require_once("Book.php");
require_once("ArrayStringFunctions.php");
require_once("ArrayCaseReverse.php");
require_once("CaseReverseFacade.php");

$book = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

$bookTitleReversed = CaseReverseFacade::reverseStringCase($book->getTitle());

?>

<h1>FACADE PATTERN TEST</h1>

<p><strong>Original book title:</strong> <?php echo $book->getTitle() ?></p>

<p><strong>Reversed book title:</strong> <?php echo $bookTitleReversed ?></p>
