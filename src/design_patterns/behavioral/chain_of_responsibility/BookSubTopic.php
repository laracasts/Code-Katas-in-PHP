<?php

namespace design_patterns\behavioral\chain_of_responsibility;

class BookSubTopic extends AbstractBookTopic {

	private $topic;
	private $parentTopic;
	private $title;

	/**
     * Set topic and parent topic
     *
	 * @param string $topic_in
	 * @param BookTopic $parentTopic_in
	 */
	public function __construct($topic_in, BookTopic $parentTopic_in) {
		$this->topic = $topic_in;
		$this->parentTopic = $parentTopic_in;
		$this->title = NULL;
	}

	/**
     * Get related topic
     *
	 * @return string
	 */
	public function getTopic() {
		return $this->topic;
	}

	/**
     * Get parent topic
     *
	 * @return BookTopic
	 */
	public function getParentTopic() {
		return $this->parentTopic;
	}

	/**
     * Get title
     *
	 * @return null|string
	 */
	public function getTitle() {
		if (NULL != $this->title) {
			return $this->title;
		} else {
			return $this->parentTopic->getTitle();
		}
	}

	/**
	 * @inheritDoc
	 */
	public function setTitle($title_in) {
		$this->title = $title_in;
	}
}