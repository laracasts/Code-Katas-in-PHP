<?php

namespace design_patterns\behavioral\memento\restorable;

/**
 * The Originator. Creates a ConcreteMemento and returns it
 * as a Memento, taking back the Memento and checking it
 * to rebuild its internal state.
 * This class responsibility is to take an url and
 * returning one line from it at the time. Its work is
 * often broken into multiple [Ajax] requests, depending
 * on the parts the user wants to see.
 */
class Service
{
    protected $_url;
    protected $_currentLine = 0;
    protected $_content;

    /**
     * @param null $url
     */
    public function __construct($url = null)
    {
        $this->_url = $url;
    }

    public function init()
    {
        $this->_content = file($this->_url);
    }

    /**
     * @return ConcreteMemento
     */
    public function getState()
    {
        return new ConcreteMemento($this->_url, $this->_currentLine);
    }

    /**
     * @param ConcreteMemento $state
     * @throws Exception
     */
    public function setState(ConcreteMemento $state)
    {
        $this->_url= $state->getUrl();

        $this->_currentLine = $state->getCurrentLine();

        $this->init();
    }

    /**
     * @return mixed
     */
    public function getLine()
    {
        $line = $this->_content[$this->_currentLine];

        $this->_currentLine++;

        return $line;
    }
}