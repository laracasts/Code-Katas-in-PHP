<?php

abstract class OnTheBookShelf {

    /**
     * @param $previousBook
     * @return mixed
     */
    abstract function getBookInfo($previousBook);

    abstract function getBookCount();

    /**
     * @param $new_count
     * @return mixed
     */
    abstract function setBookCount($new_count);

    /**
     * @param $oneBook
     * @return mixed
     */
    abstract function addBook($oneBook);

    /**
     * @param $oneBook
     * @return mixed
     */
    abstract function removeBook($oneBook);

}


class OneBook extends OnTheBookShelf {

    private $title;

    private $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * @param $bookToGet
     * @return bool|string
     */
    public function getBookInfo($bookToGet)
    {
        if (1 == $bookToGet)
            return $this->title." by ".$this->author;
        else
            return false;
    }

    /**
     * @return int
     */
    public function getBookCount()
    {
        return 1;
    }

    /**
     * @param $newCount
     * @return bool
     */
    public function setBookCount($newCount)
    {
        return false;
    }

    /**
     * @param $oneBook
     * @return bool
     */
    public function addBook($oneBook)
    {
        return false;
    }

    /**
     * @param $oneBook
     * @return bool
     */
    public function removeBook($oneBook)
    {
        return false;
    }

}


class SeveralBooks extends OnTheBookShelf {

    private $oneBooks = array();
	
    private $bookCount;

    public function __construct() {
		$this->setBookCount(0);
    }

    /**
     * @return mixed
     */
    public function getBookCount() {
        return $this->bookCount;
    }

    /**
     * @param $newCount
     */
    public function setBookCount($newCount) {
        $this->bookCount = $newCount;
    }

    /**
     * @param $bookToGet
     * @return bool
     */
    public function getBookInfo($bookToGet) {
        if ($bookToGet <= $this->bookCount) {
            return $this->oneBooks[$bookToGet]->getBookInfo(1);
        } else {
            return false;
        }
    }

    /**
     * @param mixed $oneBook
     * @return mixed
     */
    public function addBook($oneBook) {
        $this->setBookCount($this->getBookCount() + 1);

        $this->oneBooks[$this->getBookCount()] = $oneBook;

        return $this->getBookCount();
    }

    /**
     * @param mixed $oneBook
     * @return mixed
     */
    public function removeBook($oneBook) {

        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if ($oneBook->getBookInfo(1) == 
            $this->oneBooks[$counter]->getBookInfo(1)) {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->oneBooks[$x] = $this->oneBooks[$x + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }

        return $this->getBookCount();
    }

}

/**
 * @param $stuffing
 * @return string
 */
function tagins($stuffing) {
    return "<".$stuffing.">";
}

echo tagins("html");
echo tagins("head");
echo tagins("/head");
echo tagins("body");

echo "BEGIN TESTING COMPOSITE PATTERN";
echo tagins("br").tagins("br");

$firstBook = new OneBook("Core PHP Programming, Third Edition", "Atkinson and Suraski");
echo "(after creating first book) oneBook info: ".tagins("br");
echo $firstBook->getBookInfo(1);
echo tagins("br").tagins("br");

$secondBook = new OneBook("PHP Bible", "Converse and Park");
echo "(after creating second book) oneBook info: ".tagins("br");
echo $secondBook->getBookInfo(1);
echo tagins("br").tagins("br");


$thirdBook = new OneBook("Design Patterns", "Gamma, Helm, Johnson, and Vlissides");
echo "(after creating third book) oneBook info: ".tagins("br");
echo $thirdBook->getBookInfo(1);
echo tagins("br").tagins("br");


$books = new SeveralBooks();


$booksCount = $books->addBook($firstBook);
echo "(after adding firstBook to books) SeveralBooks info : " .tagins("br");
echo $books->getBookInfo($booksCount);
echo tagins("br").tagins("br");


$booksCount = $books->addBook($secondBook);
echo "(after adding secondBook to books) SeveralBooks info : " .tagins("br");
echo $books->getBookInfo($booksCount);
echo tagins("br").tagins("br");


$booksCount = $books->addBook($thirdBook);
echo "(after adding thirdBook to books) SeveralBooks info : " .tagins("br");
echo $books->getBookInfo($booksCount);
echo tagins("br").tagins("br");


$booksCount = $books->removeBook($firstBook);
echo "(after removing firstBook from books) SeveralBooks count : ";
echo $books->getBookCount();
echo tagins("br").tagins("br");

echo "(after removing firstBook from books) SeveralBooks info 1 : ".tagins("br");
echo $books->getBookInfo(1);
echo tagins("br").tagins("br");

echo "(after removing firstBook from books) SeveralBooks info 2 : " .tagins("br");
echo $books->getBookInfo(2);
echo tagins("br").tagins("br");


echo tagins("br");
echo "END TESTING COMPOSITE PATTERN";
echo tagins("br");

echo tagins("/body");
echo tagins("/html");