<?php

include_once("Memento.php");
include_once("Restorable.php");
include_once("RestorableIterator.php");

$it = new RestorableIterator(array('a', 'b', 'c', 'd'));
$itMemento = new Memento($it);
$it->next();
$itMemento->save();
$it->next();
$it->next();

echo "<h1>Memento pattern test</h1>";
echo "Current value ", $it->current(), "<br>";
$itMemento->restore();
echo "Current value ", $it->current(), "<br>";

// Output:
// Current value d
// Current value b