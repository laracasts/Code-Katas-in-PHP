<?php

/**
 * ConcreteDecoratorB
 */
class MultiplyTreeDecorator extends MathDecorator
{
    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->_math->execute() * 3;
    }
}