<?php

require_once("Application.php");
require_once("App.php");
require_once("ConfigDecorator.php");

$app = new App();

$configDecorator = new ConfigDecorator($app);
$configDecorator->setConfig('this is config');

echo "<pre>".print_r($app, 1)."</pre>";
