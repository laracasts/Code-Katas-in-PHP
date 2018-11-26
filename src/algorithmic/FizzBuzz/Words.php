<?php

namespace algorithmic\FizzBuzz;

/**
 * A Monoid over ('', .)
 */
class Words implements Monoid
{
    private $words = array();

    /**
     * @param $singleWord
     */
    public function __construct($singleWord)
    {
        $this->words = $singleWord;
    }

    public static function identity()
    {
        return new self(array());
    }

    public static function single($word)
    {
        return new self(array($word));
    }

    /**
     * @param $words
     *
     * @return Words
     */
    public function append(/*Words*/ $words)
    {
        return new self(array_merge($this->words, $words->words));
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return implode('', $this->words);
    }
}