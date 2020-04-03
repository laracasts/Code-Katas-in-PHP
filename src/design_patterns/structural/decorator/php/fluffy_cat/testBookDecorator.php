<?php

include_once('Book.php');
include_once('BookTitleDecorator.php');
include_once('BookTitleStarDecorator.php');
include_once('BookTitleExclaimDecorator.php');

/**
 * @param $stuffing
 * @return string
 */
function tagins($stuffing)
{
    return "<".$stuffing.">";
}

$patternBook = new Book("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$decorator = new BookTitleDecorator($patternBook);
$starDecorator = new BookTitleStarDecorator($decorator);
$exclaimDecorator = new BookTitleExclaimDecorator($decorator);

?>
<html>
<head>
    <title>DECORATOR PATTERN</title>
</head>
<body>
<h1>DECORATOR PATTERN TEST</h1>

<p>Showing title: <?php echo $decorator->showTitle(); ?></p>

<p>Showing title after two exclaims added: </p>
<?php

$exclaimDecorator->exclaimTitle();
$exclaimDecorator->exclaimTitle();

echo $decorator->showTitle();

?>

<p>Showing title after star added: </p>

<?php

$starDecorator->starTitle();

echo $decorator->showTitle();

?>
<p>Showing title after reset: </p>

<?php

$decorator->resetTitle();
$decorator->showTitle();

?>
</body>
</html>