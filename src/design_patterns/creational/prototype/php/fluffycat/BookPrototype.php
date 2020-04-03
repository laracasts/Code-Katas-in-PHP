<?php

abstract class BookPrototype {

	protected $title;
	protected $topic;

	abstract function __clone();

	/**
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param $titleIn
	 */
	public function setTitle($titleIn) {
		$this->title = $titleIn;
	}

	/**
	 * @return mixed
	 */
	public function getTopic() {
		return $this->topic;
	}
}
