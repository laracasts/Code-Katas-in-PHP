<?php

namespace algorithms\strings;

/**
 * FizzBuzz implementation
 *
 * http://en.wikipedia.org/wiki/Fizz_buzz
 */
class FizzBuzzSimple
{
    /**
     * Process an array of values and return the related values
     *
     * @param array $inputSet
     * @return array
     */
    public static function process(array $inputSet)
    {
        $results = array();
        foreach ($inputSet as $value) {
            $results[] = self::getFizzBuzz($value);
        }
        return $results;
    }

    /**
     * Given a number, get the related FizzBuzz value
     *
     * @param $num
     * @return string|integer
     */
    public static function getFizzBuzz($num)
    {
        if ($num % 3 == 0 && $num % 5 == 0) {
            return 'FizzBuzz';
        } elseif ($num % 3 == 0) {
            return 'Fizz';
        } elseif ($num % 5 == 0) {
            return 'Buzz';
        }
        return $num;
    }
}
