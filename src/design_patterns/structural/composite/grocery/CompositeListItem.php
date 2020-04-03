<?php

abstract class CompositeListItem extends ListItem {

    protected $listitems = array();

    /**
     * @return $this
     */
    public function getComposite() {
        return $this;
    }

    /**
     * @return array
     */
    public function listItems() {
        return $this->listitems;
    }

    /**
     * @param ListItem $listitem
     */
    public function removeListItem( ListItem $listitem ) {

        $listitems = array();

        foreach ( $this->listitems as $thisitem ) {
            if ( $listitem !== $thisitem ) {
                $listitems[] = $thisitem;
            }
        }

        $this->listitems = $listitems;
    }

    /**
     * @param ListItem $listitem
     */
    public function addListItem(ListItem $listitem) {
     
        if ( in_array( $listitem, $this->listitems, true ) ) {
            return;
        }

        $this->listitems[] = $listitem;
    }
}
