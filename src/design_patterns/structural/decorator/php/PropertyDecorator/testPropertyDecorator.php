<?php

require_once("PropertyInterface.php");
require_once("Property.php");
require_once("PropertyDecoratorAbstract.php");
require_once("UppercasePropertyDecorator.php");
require_once("PaddedPropertyDecorator.php");


/**
 * Because the decorators and the concrete Property objects all implement the same PropertyInterface and the decorators will accept any objects which also implement this interface, the decorators can be combined to make more complex decorations.
 *
 * So here's some examples of how we can use these decorators:
 *
 * Resource: http://www.labelmedia.co.uk/blog/posts/design-patterns-decorator-pattern.html
 */
$property = new Property();
$property->setValue('property value');

echo $property->getValue(); // Outputs: property value

echo "<br>";

$decoratedProperty = new UppercasePropertyDecorator($property);

echo $decoratedProperty->getValue(); // Outputs: PROPERTY VALUE

echo "<br>";

$paddedUpperProperty = new PaddedPropertyDecorator($decoratedProperty, 20, '*');

echo $paddedUpperProperty->getValue(); // Outputs: PROPERTY VALUE******

echo "<br>";

echo $property->getValue(); // Outputs: property value