<?php

abstract class BridgeBookImp {

    /**
     * @param string $author
     * @return mixed
     */
    abstract function showAuthor($author);

    /**
     * @param string $title
     * @return mixed
     */
    abstract function showTitle($title);
}
