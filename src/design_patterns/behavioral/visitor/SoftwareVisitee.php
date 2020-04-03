<?php

class SoftwareVisitee extends Visitee {

    private $title;
    private $softwareCompany;
    private $softwareCompanyURL;

    /**
     * @param string $title_in
     * @param string $softwareCompany_in
     * @param string $softwareCompanyURL_in
     */
    public function __construct($title_in, $softwareCompany_in, $softwareCompanyURL_in) {
        $this->title  = $title_in;
        $this->softwareCompany = $softwareCompany_in;
        $this->softwareCompanyURL = $softwareCompanyURL_in;
    }

    /**
     * @return mixed
     */
    public function getSoftwareCompany() {
        return $this->softwareCompany;
    }

    /**
     * @return mixed
     */
    public function getSoftwareCompanyURL() {
        return $this->softwareCompanyURL;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param Visitor $visitorIn
     */
    public function accept(Visitor $visitorIn) {
        $visitorIn->visitSoftware($this);
    }
}
