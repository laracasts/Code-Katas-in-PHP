<?php

class PaddedPropertyDecorator extends PropertyDecoratorAbstract
{
    private $_length = 0;
    private $_string = ' ';

    /**
     * @param PropertyInterface $product
     * @param $length
     * @param bool|false $string
     */
    public function __construct(PropertyInterface $product, $length, $string = false)
    {
        if (is_numeric($length)) {
            $this->_length = $length;
        }

        if (is_string($string)) {
            $this->_string = $string;
        }

        return parent::__construct($product);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return str_pad($this->_property->getValue(), $this->_length, $this->_string);
    }
}
