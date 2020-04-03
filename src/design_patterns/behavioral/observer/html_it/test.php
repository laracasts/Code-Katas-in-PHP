<?php

include_once("SplSubject.php");
include_once("Observer.php");
include_once("ObserverB.php");

$observer = new Observer("Paperoga");
$observerB = new ObserverB("Paperone");
$subject = new Subject("Paperino");

?>
<h1>Observer pattern implementation test (HTML.it)</h1>
<?php

$subject->attach($observer);
$subject->attach($observerB);
$subject->chiedeMenoDiMille(false);
$subject->chiedeMenoDiMille(true);
$subject->chiedePiuDiMille(true);
$subject->detach($observerB);
$subject->chiedePiuDiMille(true);