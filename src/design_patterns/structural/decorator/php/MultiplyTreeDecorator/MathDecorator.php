<?php

/**
 * Decorator
 */
abstract class MathDecorator extends Math
{
    protected $_math;

    /**
     * @param Math $math
     */
    public function __construct(Math $math)
    {
        $this->_math = $math;
    }
}