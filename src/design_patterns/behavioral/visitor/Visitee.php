<?php

abstract class Visitee {

    /**
     * @param Visitor $visitorIn
     * @return mixed
     */
    abstract function accept(Visitor $visitorIn);
}