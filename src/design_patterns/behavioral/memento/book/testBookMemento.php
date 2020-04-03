<?php

include_once('BookReader.php');  
include_once('BookMark.php');

$bookReader = new BookReader("Core PHP Programming, Third Edition","103");
$bookMark = new BookMark($bookReader);

?>
<html>
<head>
    <title>Testing Memento pattern implementation</title>
</head>
<body>

<h1>MEMENTO PATTERN</h1>

<p>(At beginning) bookReader title: <?php echo $bookReader->getTitle(); ?></p>
<p>(At beginning) bookReader page: <?php echo $bookReader->getPage(); ?></p>

<?php
$bookReader->setPage("104");
$bookMark->setPage($bookReader);

$bookReader->setPage('2005'); // Oops! a typo
?>
<p>(after typo) bookReader page: <?php echo $bookReader->getPage(); ?></p>
<?php
$bookMark->getPage($bookReader);
?>
<p>(back to one page later) bookReader page: <?php echo $bookReader->getPage() ?></p>

</body>
</html>