<?php

include_once('AbstractBook.php');
include_once('AbstractFactoryMethod.php');
include_once('AbstractPHPBook.php');
include_once('OReillyFactoryMethod.php');
include_once('SamsFactoryMethod.php');
include_once('OReillyFactoryMethod.php');
include_once('OReillyPHPBook.php');
include_once('SamsFactoryMethod.php');
include_once('SamsPhpBook.php');
include_once('VisualQuickstartPHPBook.php');

/**
 * @param $factoryMethodInstance
 */
function testFactoryMethod(AbstractFactoryMethod $factoryMethodInstance)
{
	$phpUs = $factoryMethodInstance->makePHPBook("us");
	echo 'us php Author: '.
		$phpUs->getAuthor()."<br>";
	echo 'us php Title: '.
		$phpUs->getTitle()."<br>";


	$phpUs = $factoryMethodInstance->makePHPBook("other");
	echo 'other php Author: '.
		$phpUs->getAuthor()."<br>";
	echo 'other php Title: '.
		$phpUs->getTitle()."<br>";

	$phpUs = $factoryMethodInstance->makePHPBook("otherother");
	echo 'otherother php Author: '.
		$phpUs->getAuthor()."<br>";
	echo 'otherother php Title: '.
		$phpUs->getTitle()."<br>";
}


?>
<html>
	<head>
		<title>Factory pattern test</title>
	</head>
	<body>
		<h1>TESTING FACTORY METHOD PATTERN</h1>
		<p><strong>Testing OReillyFactoryMethod:</strong> </p>
		<p><?php testFactoryMethod(new OReillyFactoryMethod()) ?></p>
		<p><strong>Testing SamsFactoryMethod:</strong> </p>
		<p><?php testFactoryMethod(new SamsFactoryMethod()); ?></p>
	</body>
</html>
