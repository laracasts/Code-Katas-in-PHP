<?php

include_once('AbstractBook.php');
include_once('AbstractBookFactory.php');
include_once('AbstractMySQLBook.php');
include_once('AbstractPHPBook.php');
include_once('OReillyBookFactory.php');
include_once('OReillyPHPBook.php');
include_once('OReillyMySQLBook.php');
include_once('SamsBookFactory.php');
include_once('SamsMySQLBook.php');
include_once('SamsPHPBook.php');

/**
 * @param AbstractBookFactory $bookFactoryInstance
 */
function testConcreteFactory(AbstractBookFactory $bookFactoryInstance) {
  $phpBookOne = $bookFactoryInstance->makePHPBook();
  echo 'first php Author: '.
      $phpBookOne->getAuthor()."<br>";
  echo 'first php Title: '.
      $phpBookOne->getTitle()."<br>";

  $phpBookTwo = $bookFactoryInstance->makePHPBook();
  echo 'second php Author: '.
      $phpBookTwo->getAuthor()."<br>";
  echo 'second php Title: '.
      $phpBookTwo->getTitle()."<br>";

  $mySqlBook = $bookFactoryInstance->makeMySQLBook();
  echo 'MySQL Author: '. $mySqlBook->getAuthor()."<br>";
  echo 'MySQL Title: '.
      $mySqlBook->getTitle()."<br>";
}


?>
<html>
<head>
  <title>ABSTRACT FACTORY PATTERN test</title>
</head>
<body>
  <h1>ABSTRACT FACTORY PATTERN test</h1>
  <p><strong>testing OReillyBookFactory:</strong> <?php testConcreteFactory(new OReillyBookFactory); ?></p>
  <p><strong>testing SamsBookFactory:</strong> <?php testConcreteFactory(new SamsBookFactory); ?></p>
</body>
</html>