<?php

namespace algorithmic\FizzBuzz;

/**
 * A Monoid over ('', .)
 */
class Words implements Monoid
{
    /**
     * @var array
     */
    private $words = array();

    /**
     * @param string|array $singleWord
     */
    public function __construct($singleWord)
    {
        $this->words = $singleWord;
    }

    /**
     * Create new Words singleton
     *
     * @param $word
     * @return Words
     */
    public static function single($word)
    {
        return new self( [$word] );
    }

    /**
     * Append new Words singleton
     *
     * @param Words $words
     *
     * @return Words
     */
    public function append($words)
    {
        return new self(array_merge($this->words, $words->words));
    }

    /**
     * Convert to string
     *
     * @return string
     */
    public function __toString()
    {
        return implode('', $this->words);
    }
}