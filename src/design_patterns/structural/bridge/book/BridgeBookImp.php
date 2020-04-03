<?php

abstract class BridgeBookImp {

    /**
     * @param $author
     * @return mixed
     */
    abstract function showAuthor($author);

    /**
     * @param $title
     * @return mixed
     */
    abstract function showTitle($title);
}
