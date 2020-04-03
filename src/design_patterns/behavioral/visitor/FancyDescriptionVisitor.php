<?php

class FancyDescriptionVisitor extends Visitor {

    private $description = NULL;

    /**
     * @return null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param $descriptionIn
     */
    public function setDescription($descriptionIn) {
        $this->description = $descriptionIn;
    }

    /**
     * @param BookVisitee $bookVisiteeIn
     */
    public function visitBook(BookVisitee $bookVisiteeIn) {
        $this->setDescription($bookVisiteeIn->getTitle()
            . '...!*@*! written !*! by !@! ' .  $bookVisiteeIn->getAuthor() );
    }

    /**
     * @param SoftwareVisitee $softwareVisiteeIn
     */
    public function visitSoftware(SoftwareVisitee $softwareVisiteeIn) {
        $this->setDescription($softwareVisiteeIn->getTitle()
            . '...!!! made !*! by !@@! ' .
            $softwareVisiteeIn->getSoftwareCompany()
            . '...www website !**! at http://' .
            $softwareVisiteeIn->getSoftwareCompanyURL());
    }
}