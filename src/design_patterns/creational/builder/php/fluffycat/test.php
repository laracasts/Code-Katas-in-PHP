<?php

include_once('AbstractPageBuilder.php');
include_once('AbstractPageBuilder.php');
include_once('AbstractPageDirector.php');
include_once('HTMLPage.php');
include_once('HTMLPageBuilder.php');
include_once('HTMLPageDirector.php');

$pageBuilder = new HTMLPageBuilder();

$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();

$page = $pageDirector->GetPage();

?>
<html>
<head>
	<title>BUILDER PATTERN TEST</title>
</head>
<body>
	<h1>BUILDER PATTERN TEST</h1>
	<p><?php echo $page->showPage(); ?></p>
</body>
</html>