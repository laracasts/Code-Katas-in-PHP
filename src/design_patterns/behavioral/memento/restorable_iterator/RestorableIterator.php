<?php

namespace design_patterns\behavioral\memento\restorable_iterator;

class RestorableIterator implements Iterator, Restorable
{
    private $_data;
    private $_cursor = 0;
    private $_valid = false;

    /**
     * @param array $data
     */
    public function  __construct(array $data = array())
    {
        $this->_data = $data;
        $this->_valid = (bool)count($this->_data);
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->_data[$this->_cursor];
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->_cursor;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->_cursor;
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->_cursor = $state;
    }

    public function next()
    {
        $max = count($this->_data) - 1;

        $this->_valid = $this->_cursor < $max ? (bool)(++$this->_cursor) : false;
    }

    public function rewind()
    {
        $this->_valid = (bool)count($this->_data);
        $this->_cursor = 0;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return $this->_valid;
    }
}
