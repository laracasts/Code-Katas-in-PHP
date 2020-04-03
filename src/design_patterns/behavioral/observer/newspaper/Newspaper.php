<?php

namespace design_patterns\behavioral\observer\newspaper;

/**
 * http://php.net/manual/it/class.splobserver.php
 *
 * Subject,that who makes news
 */
class Newspaper implements \SplSubject
{
    private $name;
    private $observers = array();
    private $content;

    /**
     * @param string $name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * Add observer
     *
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer) {
        $this->observers[] = $observer;
    }

    /**
     * Remove observer
     *
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer) {

        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }

    /**
     * Set breakouts news
     *
     * @param $content
     */
    public function breakOutNews($content) {
        $this->content = $content;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getContent() {
        return $this->content." ({$this->name})";
    }

    /**
     * Notify observers (or some of them)
     */
    public function notify() {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}
