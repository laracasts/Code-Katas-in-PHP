<?php
  
class BookMark
{
    private $title;
    
    private $page;
    
    /**
     * @param BookReader $bookReader
     */
    public function __construct(BookReader $bookReader) {
        $this->setPage($bookReader);
        $this->setTitle($bookReader);
    }
    
    /**
     * @param BookReader $bookReader
     */
    public function getPage(BookReader $bookReader) {
        $bookReader->setPage($this->page);
    }
    
    /**
     * @param BookReader $bookReader
     */
    public function setPage(BookReader $bookReader) {
        $this->page = $bookReader->getPage();
    }
    
    /**
     * @param BookReader $bookReader
     */
    public function getTitle(BookReader $bookReader) {
        $bookReader->setTitle($this->title);
    }
    
    /**
     * @param BookReader $bookReader
     */
    public function setTitle(BookReader $bookReader) {
        $this->title = $bookReader->getTitle();
    }
}
