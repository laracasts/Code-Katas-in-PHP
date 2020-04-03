<?php

/**
 * Il secondo observer viene definito all’interno di una sottoclasse che estende la classe del primo observer
 */
class ObserverB extends Observer {

    /**
     * @param SplSubject $sub
     */
    public function update(SplSubject $sub) {
        if ($sub->piuDiMille() == true) {
            echo $this . ": - Non ti do un centesimo. <br />";
        }
    }
}