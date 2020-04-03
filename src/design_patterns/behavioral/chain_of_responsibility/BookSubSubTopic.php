<?php

namespace design_patterns\behavioral\chain_of_responsibility;

class BookSubSubTopic extends AbstractBookTopic {

	private $topic;
	private $parentTopic;
	private $title;

	/**
	 * @param $topic_in
	 * @param BookSubTopic $parentTopic_in
	 */
	public function __construct($topic_in, BookSubTopic $parentTopic_in) {
		$this->topic        = $topic_in;
		$this->parentTopic  = $parentTopic_in;
		$this->title        = NULL;
	}

	/**
	 * @return mixed
	 */
	public function getTopic() {
		return $this->topic;
	}

	/**
	 * @return BookSubTopic
	 */
	public function getParentTopic() {
		return $this->parentTopic;
	}

	/**
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
	 * @param string $title_in
	 */
	public function setTitle($title_in) {
		$this->title = $title_in;
	}
}