<?php

interface Window
{
    public function isOpen();
    public function open();
    public function close();
}
 
class StandardWindow implements Window
{
    protected $_open = false;

    /**
     * @return bool
     */
    public function isOpen()
    {
        return $this->_open;
    }

    /**
     * assert is open
     */
    public function open()
    {
        if (!$this->_open) {
            $this->_open = true;
        }
    }

    /**
     * assert is close
     */
    public function close()
    {
        if ($this->_open)
            $this->_open = false;
    }
	
}


class LockedWindow implements Window
{
    protected $_window;

    /**
     * @param Window $window
     */
    public function __construct(Window $window)
    {
        $this->_window = $window;
        $this->_window->close();
    }

    /**
     * @return bool
     */
    public function isOpen()
    {
        return false;
    }

    /**
     * @throws Exception
     */
    public function open()
    {
        throw new Exception('Cannot open locked windows');
    }

    /**
     * close window
     */
    public function close()
    {
        $this->_window->close();
    }
	
}

$w = new LockedWindow( new StandardWindow() );
$w->open();
