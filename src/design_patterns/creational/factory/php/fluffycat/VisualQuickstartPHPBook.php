<?php

class VisualQuickstartPHPBook extends AbstractPHPBook {

	private $author;

	private $title;

	public function __construct() {
		$this->author = 'Larry Ullman';
		$this->title  = 'PHP for the World Wide Web';
	}

	/**
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
}