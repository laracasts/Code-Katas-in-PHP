<?php

abstract class Visitor {

    /**
     * @param BookVisitee $bookVisitee_In
     * @return mixed
     */
    abstract function visitBook(BookVisitee $bookVisitee_In);

    /**
     * @param SoftwareVisitee $softwareVisitee_In
     * @return mixed
     */
    abstract function visitSoftware(SoftwareVisitee $softwareVisitee_In);
}