<?php

abstract class TemplateAbstract {

    /**
     * The template method sets up a general algorithm for the whole class
     *
     * @param $book_in
     * @return string
     */
    public final function showBookTitleInfo($book_in) {
        $title = $book_in->getTitle();
        $author = $book_in->getAuthor();
        $processedTitle = $this->processTitle($title);
        $processedAuthor = $this->processAuthor($author);
        if (NULL == $processedAuthor) {
            $processed_info = $processedTitle;
        } else {
            $processed_info = $processedTitle.' by '.$processedAuthor;
        }
        return $processed_info;
    }

    /**
     * The primitive operation this function must be overridded
     *
     * @param string $title
     * @return mixed
     */
    abstract function processTitle($title);

    /**
     * The hook operation this function may be overridden, but does nothing if it is not
     *
     * @param $author
     * @return null
     */
    public function processAuthor($author) {
        return NULL;
    }

}