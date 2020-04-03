<?php

namespace design_patterns\behavioral\observer;

abstract class AbstractObserver {
    abstract function update(AbstractSubject $subject_in);
}

abstract class AbstractSubject {

    /**
     * @param AbstractObserver $observer_in
     * @return mixed
     */
    abstract function attach(AbstractObserver $observer_in);

    /**
     * @param AbstractObserver $observer_in
     * @return mixed
     */
    abstract function detach(AbstractObserver $observer_in);

    abstract function notify();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

class PatternObserver extends AbstractObserver {
    public function __construct() {
    }
    public function update(AbstractSubject $subject) {
      writeln('*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*');
      writeln(' new favorite patterns: '.$subject->getFavorites());
      writeln('*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*');      
    }
}

class PatternSubject extends AbstractSubject {

    private $favoritePatterns = NULL;

    private $observers = array();

    /**
     * @param AbstractObserver $observer_in
     */
    public function attach(AbstractObserver $observer_in) {
        // Could also use array_push($this->observers, $observer_in);
        $this->observers[] = $observer_in;
    }

    /**
     * @param AbstractObserver $observer_in
     */
    public function detach(AbstractObserver $observer_in) {
        // $key = array_search($observer_in, $this->observers);
        foreach($this->observers as $okey => $oval) {
            if ($oval == $observer_in) {
                unset($this->observers[$okey]);
            }
        }
    }

    public function notify() {
        foreach($this->observers as $obs) {
            $obs->update($this);
        }
    }

    /**
     * @param $newFavorites
     */
    public function updateFavorites($newFavorites) {
        $this->favorites = $newFavorites;
        $this->notify();
    }

    public function getFavorites() {
        return $this->favorites;
    }
}

?>
<h1>OBSERVER PATTERN</h1>
<?php

$patternGossiper = new PatternSubject();
$patternGossipFan = new PatternObserver();
$patternGossiper->attach($patternGossipFan);
$patternGossiper->updateFavorites('abstract factory, decorator, visitor');
$patternGossiper->updateFavorites('abstract factory, observer, decorator');
$patternGossiper->detach($patternGossipFan);
$patternGossiper->updateFavorites('abstract factory, observer, paisley');
