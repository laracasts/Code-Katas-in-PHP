<?php

class HTMLPageDirector extends AbstractPageDirector {

    /**
     * @var AbstractPageBuilder|null
     */
    private $builder = NULL;

    /**
     * @param AbstractPageBuilder $builder_in
     */
    public function __construct(AbstractPageBuilder $builder_in) {
        $this->builder = $builder_in;
    }

    public function buildPage() {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing, testing, testing!');
        $this->builder->setText('Testing, testing, testing, or!');
        $this->builder->setText('Testing, testing, testing, more!');
        $this->builder->formatPage();
    }

    /**
     * @return mixed
     */
    public function getPage() {
        return $this->builder->getPage();
    }
}
