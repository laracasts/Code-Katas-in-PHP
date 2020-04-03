<?php

namespace design_patterns\behavioral\memento\restorable_iterator;

/**
 * The ConcreteMemento should be used only in the Originator (and in testing).
 */
class ConcreteMemento implements Memento
{
    protected $_url;
    protected $_currentLine;

    /**
     * @param string $url
     * @param string $currentLine
     */
    public function __construct($url, $currentLine)
    {
        $this->_url = $url;
        $this->_currentLine = $currentLine;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * @return string
     */
    public function getCurrentLine()
    {
        return $this->_currentLine;
    }
}