<?php

class PlainDescriptionVisitor extends Visitor {

    private $description = NULL;

    /**
     * @return null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $descriptionIn
     */
    public function setDescription($descriptionIn) {
        $this->description = $descriptionIn;
    }

    /**
     * @param BookVisitee $bookVisiteeIn
     * @return $this
     */
    public function visitBook(BookVisitee $bookVisiteeIn) {
        $this->setDescription($bookVisiteeIn->getTitle()
            .' written by ' .  $bookVisiteeIn->getAuthor() );

        return $this;
    }

    /**
     * @param SoftwareVisitee $softwareVisiteeIn
     * @return $this
     */
    public function visitSoftware(SoftwareVisitee $softwareVisiteeIn) {
        $this->setDescription($softwareVisiteeIn->getTitle()
            . ' made by ' . $softwareVisiteeIn->getSoftwareCompany()
            . ' website at ' . $softwareVisiteeIn->getSoftwareCompanyURL() );

        return $this;
    }
}