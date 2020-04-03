<?php

/**
 * The above class would be fine for the most basic of properties, but what if we wanted something a little more complicated - perhaps code to validate the property on set or to transform it on get.
 *
 * In each of these situations we could use a decorator to change the behaviour of the base property object. The following two classes (not including the abstract base class) could be used to transform a string property to uppercase or pad it to a particular length:
 *
 */
abstract class PropertyDecoratorAbstract implements PropertyInterface
{
    /**
     * @var PropertyInterface
     */
    protected $_property;

    /**
     * @param PropertyInterface $product
     */
    public function __construct(PropertyInterface $product)
    {
        $this->_property = $product;
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function setValue($value)
    {
        return $this->_property->setValue($value);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_property->getValue();
    }
}