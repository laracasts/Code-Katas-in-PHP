<?php

/**
 * Tree implementation that contains one value and the references to the
 * left and right branches (other Tree objects).
 * This is our Product, which usually is not hidden with an interface
 * because of the very different Products that ConcreteBuilders create.
 */
class Tree
{
    private $_value;
    private $_left;
    private $_right;

    /**
     * @param integer
     */
    public function __construct($value)
    {
        $this->_value = $value;
    }

    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @return Tree
     */
    public function getLeft()
    {
        return $this->_left;
    }

    public function setLeft(Tree $t)
    {
        $this->_left = $t;
    }

    /**
     * @return Tree
     */
    public function getRight()
    {
        return $this->_right;
    }

    /**
     * @param Tree $t
     */
    public function setRight(Tree $t)
    {
        $this->_right = $t;
    }

    /**
     * Prints values visiting Tree with in-order traversal
     */
    public function dump()
    {
        $string = '';
        if ($this->_left) {
            $string .= $this->_left->dump();
        }
        $string .= " $this->_value ";
        if ($this->_right) {
            $string .= $this->_right->dump();
        }
        return $string;
    }
}
