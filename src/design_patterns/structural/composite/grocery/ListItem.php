<?php

abstract class ListItem {

    protected $description = "";
    protected $datedue = null;
    protected $datecreated = null;
    protected $datecompleted = null;

    /**
     * @param string $description
     * @param null $datedue
     */
    public function __construct( $description, $datedue=null ) {
        $this->setDescription( $description );
        $this->setDateDue( $datedue );
        $this->setDateCreated( time() );
    }

    /**
     * @return null
     */
    public function getComposite() {
        return null;
    }

    /**
     * @param $description
     */
    public function setDescription( $description ) {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param $datedue
     */
    public function setDateDue( $datedue ) {
        $this->datedue = $datedue ;
    }

    /**
     * @return null
     */
    public function getDateDue() {
        return $this->datedue;
    }

    public function setDateCompleted( $datecompleted ) {
        $this->datecompleted = $datecompleted;
    }

    /**
     * @return null
     */
    public function getDateCompleted() {
        return $this->datecompleted;
    }

    /**
     * @param $datecreated
     */
    public function setDateCreated( $datecreated ) {
        $this->datecreated = $datecreated;
    }

    /**
     * @return null
     */
    public function getDateCreated() {
        return $this->datecreated;
    }

}
