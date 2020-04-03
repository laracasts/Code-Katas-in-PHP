<?php

namespace tests\design_patterns\behavioral\chain_of_responsability;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\chain_of_responsibility\BookSubSubTopic;
use design_patterns\behavioral\chain_of_responsibility\BookSubTopic;
use design_patterns\behavioral\chain_of_responsibility\BookTopic;

class ChainOfResponsabilityBookTest extends TestCase
{
    /**
     * @var BookTopic
     */
    private $bookTopic;

    /**
     * @var BookSubTopic
     */
    private $bookSubTopic;

    /**
     * @var BookSubSubTopic
     */
    private $bookSubSubTopic;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bookTopic = new BookTopic('PHP 7');
        $this->bookSubTopic = new BookSubTopic('PHP 7 Patterns', $this->bookTopic);
        $this->bookSubSubTopic = new BookSubSubTopic('PHP 7 Patterns for Cats', $this->bookSubTopic);
    }

    public function testBeforeSetTitleIsSet()
    {
        $this->assertEquals($this->bookTopic->getTopic(), 'PHP 7');
        $this->assertEquals($this->bookTopic->getTitle(), 'there is no title avaialble');
    }

    public function testAfterTitleIsSet()
    {
        $this->bookTopic->setTitle('PHP 7 Recipes by Babin, Good, Kroman, and Stephens');

        $this->assertEquals($this->bookTopic->getTopic(), 'PHP 7');
        $this->assertEquals($this->bookTopic->getTitle(), 'PHP 7 Recipes by Babin, Good, Kroman, and Stephens');
    }
}