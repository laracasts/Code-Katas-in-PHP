<?php

require_once("Math.php");
require_once("MathDecorator.php");
require_once("MultiplyTreeDecorator.php");
require_once("StandardMath.php");
require_once("AddTwoDecorator.php");

$m = new AddTwoDecorator( new MultiplyTreeDecorator( new AddTwoDecorator( new StandardMath() ) ) );

echo $m->execute(); // 8
