<?php

namespace design_patterns\behavioral\memento\restorable_iterator;

class Memento
{
    private $_originator;

    /**
     * @param $originator
     */
    public function  __construct(&$originator)
    {
        $this->_originator = &$originator;
    }

    public function save()
    {
        $this->_state = $this->_originator->getState();
    }

    public function restore()
    {
        $this->_originator->setState($this->_state);
    }
}