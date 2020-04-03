<?php

include_once("Tree.php");
include_once("DumbUnbalancedTreeBuilder.php");

$builder = new DumbUnbalancedTreeBuilder();
$builder->addNumber(7);
$builder->addNumber(1);
$builder->addNumber(3);
$builder->addNumber(5);
$builder->addNumber(8);
$builder->addNumber(6);
$builder->addNumber(9);
$builder->addNumber(5);
$builder->addNumber(4);
$builder->addNumber(2);

echo $builder->getTree()->dump(), "\n";
