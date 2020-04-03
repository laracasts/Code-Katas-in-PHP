<?php

include_once('Visitee.php');
include_once('BookVisitee.php');
include_once('SoftwareVisitee.php');
include_once('Visitor.php');
include_once('PlainDescriptionVisitor.php');
include_once('FancyDescriptionVisitor.php');

$book =
    new BookVisitee("Design Patterns",
        "Gamma, Helm, Johnson, and Vlissides");

$software =
    new SoftwareVisitee("Zend Studio",
        "Zend Technologies",
        "wIn the Visitor pattern, one class calls a function in another class with the current instance of itself. The called class has special functions for each class that can call it. ww.Zend.com");


$plainVisitor = new PlainDescriptionVisitor();

acceptVisitor($book,$plainVisitor);

/**
 * Double dispatch any visitor and visitee objects
 *
 * @param Visitee $visitee_in
 * @param Visitor $visitor_in
 */
function acceptVisitor(Visitee $visitee_in, Visitor $visitor_in) {
    $visitee_in->accept($visitor_in);
}

?>
<html>
<head>
    <title>Visitor pattern test</title>
</head>
<body>
    <h1>TESTING VISITOR PATTERN</h1>
    <?php

    echo "plain description of book: ".$plainVisitor->getDescription();

    ?>
    <br>
    <?php

    acceptVisitor($software, $plainVisitor);
    echo "plain description of software: ".$plainVisitor->getDescription();

    ?>
    <br><br>
    <?php

    $fancyVisitor = new FancyDescriptionVisitor();

    acceptVisitor($book, $fancyVisitor);
    echo "fancy description of book: ".$fancyVisitor->getDescription();

    ?>
    <br>
    <?php

    acceptVisitor($software, $fancyVisitor);
    echo "fancy description of software: ".$fancyVisitor->getDescription();

    ?>
    <br>
</body>
</html>