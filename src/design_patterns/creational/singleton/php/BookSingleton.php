<?php

class BookSingleton {

	private $author = 'Gamma, Helm, Johnson, and Vlissides';
	private $title  = 'Design Patterns';
	private static $book = NULL;
	private static $isLoanedOut = FALSE;

	static function borrowBook() {
		if (FALSE == self::$isLoanedOut) {
			if (NULL == self::$book) {
				self::$book = new BookSingleton();
			}
			self::$isLoanedOut = TRUE;
			return self::$book;
		} else {
			return NULL;
		}
	}

	/**
	 * @param BookSingleton $bookReturned
	 */
	public function returnBook(BookSingleton $bookReturned) {
		self::$isLoanedOut = FALSE;
	}

	function getAuthor() {return $this->author;}

	function getTitle() {return $this->title;}

	/**
	 * @return string
	 */
	function getAuthorAndTitle() {
		return $this->getTitle() . ' by ' . $this->getAuthor();
	}

}
