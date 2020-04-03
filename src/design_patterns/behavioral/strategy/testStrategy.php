<?php

include_once("StrategyInterface.php");
include_once("Book.php");
include_once("StrategyCaps.php");
include_once("StrategyContext.php");
include_once("StrategyExclaim.php");
include_once("StrategyStars.php");

$book = new Book('PHP for Cats','Larry Truett');

$strategyContextC = new StrategyContext('C');
$strategyContextE = new StrategyContext('E');
$strategyContextS = new StrategyContext('S');

?>
<h1>STRATEGY PATTERN TEST</h1>

<p><strong>Test 1 - show name context C:</strong> <?php echo $strategyContextC->showBookTitle($book); ?></p>

<p><strong>Test 2 - show name context E:</strong> <?php echo $strategyContextE->showBookTitle($book); ?></p>

<p><strong>Test 3 - show name context S:</strong> <?php echo $strategyContextS->showBookTitle($book); ?></p>