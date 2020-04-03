<?php

include_once("Service.php");
include_once("Memento.php");
include_once("ConcreteMemento.php");

$service = new Service('http://mywebsite.com');
$service->init();
echo $service->getLine();
echo $service->getLine();
echo $service->getLine();
$memento = $service->getState();

// Now we can store Memento in the session let's simulate its handling
$mementoString = serialize($memento);
$newService = new Service();
$newService->setState(unserialize($mementoString));
echo $newService->getLine();
echo $newService->getLine();
echo $newService->getLine();