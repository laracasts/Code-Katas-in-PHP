<?php

/**
 * ConcreteDecoratorA
 */
class AddTwoDecorator extends MathDecorator
{
    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->_math->execute() + 2;
    }
}