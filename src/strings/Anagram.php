<?php

namespace strings;

class Anagram
{
    /**
     * @param string $a
     * @param string $b
     * @return boolean
     */
    public static function isAnagram($a, $b)
    {
        return(count_chars($a, 1) == count_chars($b, 1));
    }
}