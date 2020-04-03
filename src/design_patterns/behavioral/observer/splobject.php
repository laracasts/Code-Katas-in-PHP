<?php

// SPL object: http://www.php.net/manual/it/book.spl.php

class MyObserver1 implements SplObserver {

    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject) {
        echo __CLASS__ . ' - ' . $subject->getName();
    }
}
 
class MyObserver2 implements SplObserver {

    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject) {
        echo __CLASS__ . ' - ' . $subject->getName();
    }
}

class MySubject implements SplSubject {

    private $_observers;
    private $_name;

    /**
     * @param $name
     */
    public function __construct($name) {
        $this->_observers = new SplObjectStorage();
        $this->_name = $name;
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer) {
        $this->_observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer) {
        $this->_observers->detach($observer);
    }
 
    public function notify() {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->_name;
    }
}
 
$observer1 = new MyObserver1();
$observer2 = new MyObserver2();
 
$subject = new MySubject("test");
 
$subject->attach($observer1);
$subject->attach($observer2);
$subject->notify();
 
/* 
Output:

MyObserver1 - test
MyObserver2 - test
*/
 
$subject->detach($observer2);
$subject->notify();
 
/* 
Output:
 
MyObserver1 - test
*/

