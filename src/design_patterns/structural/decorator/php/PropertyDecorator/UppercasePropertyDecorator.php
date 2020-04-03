<?php

class UppercasePropertyDecorator extends PropertyDecoratorAbstract
{
    /**
     * @return string
     */
    public function getValue()
    {
        return strtoupper($this->_property->getValue());
    }
}