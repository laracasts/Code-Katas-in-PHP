<?php

class Property implements PropertyInterface
{
    private $_value;

    /**
     * @param mixed $value
     * @return bool
     */
    public function setValue($value)
    {
        $this->_value = $value;
        return true;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }
}