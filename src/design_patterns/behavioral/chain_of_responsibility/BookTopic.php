<?php

namespace design_patterns\behavioral\chain_of_responsibility;

class BookTopic extends AbstractBookTopic
{
    /**
     * @var string
     */
	private $topic;

    /**
     * @var string
     */
	private $title;

	/**
	 * @param $topic_in
	 */
	public function __construct($topic_in)
    {
		$this->topic = $topic_in;
		$this->title = NULL;
	}

	/**
	 * @return mixed
	 */
	public function getTopic()
    {
		return $this->topic;
	}

	/**
	 * This is the end of the chain - returns title or says there is none
	 *
	 * @return null|string
	 */
	public function getTitle()
    {
        return (NULL != $this->title) ? $this->title : 'there is no title avaialble';
	}

	/**
	 * @inheritDoc
	 */
	public function setTitle($title_in)
    {
		$this->title = $title_in;
	}
}