<?php

namespace algorithms\math;

final class Factorial
{
    /**
     * Formula: n! = n*(n-1)*(n-2)*(n-3)...3.2.1 and zero factorial is defined as one i.e. 0! = 1.
     *
     * @param $n
     * @return float|int
     */
    public static function getRecursive($n)
    {
        return ($n == 0) ? 1 : ($n * self::getRecursive($n - 1));
    }
}
