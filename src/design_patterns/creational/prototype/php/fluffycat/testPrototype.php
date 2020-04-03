<?php

include_once('BookPrototype.php');
include_once('PHPBookPrototype.php');
include_once('SQLBookPrototype.php');

$phpProto = new PHPBookPrototype();
$sqlProto = new SQLBookPrototype();

$book1 = clone $sqlProto;
$book1->setTitle('SQL For Cats');

$book2 = clone $phpProto;
$book2->setTitle('OReilly Learning PHP 5');

$book3 = clone $sqlProto;
$book3->setTitle('OReilly Learning SQL');
?>
<html>
<head>
</head>
<body>
    <h1>TESTING PROTOTYPE PATTERN</h1>
    <p><strong>Book 1 topic:</strong> <?php echo $book1->getTopic() ?></p>
    <p><strong>Book 1 title:</strong> <?php echo $book1->getTitle() ?></p>

    <p><strong>Book 2 topic:</strong> <?php echo $book2->getTopic() ?></p>
    <p><strong>Book 2 title:</strong> <?php echo $book2->getTitle() ?></p>

    <p><strong>Book 3 topic:</strong> <?php echo $book3->getTopic() ?></p>
    <p><strong>Book 3 title:</strong> <?php echo $book3->getTitle() ?></p>
</body>
</html>