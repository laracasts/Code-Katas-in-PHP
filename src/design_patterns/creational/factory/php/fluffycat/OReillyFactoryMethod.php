<?php

class OReillyFactoryMethod extends AbstractFactoryMethod {

	private $context = "OReilly";

	/**
	 * @param mixed $param
	 * 
	 * @return mixed
	 */
	public function makePHPBook($param) {
		$book = NULL;

		switch ($param) {

			case "us":
				$book = new OReillyPHPBook;
			break;

			case "other":
				$book = new SamsPHPBook;
			break;

			default:
				$book = new OReillyPHPBook;
			break;
		}

		return $book;
	}
}