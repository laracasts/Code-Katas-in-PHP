<?php

namespace algorithms\math;

/**
 * Given an integer n, the task is to find whether n can be expressed as sum of five consecutive integer. If yes, find the five consecutive integers, else print “-1”.
 *
 * Examples:
 * Input : n = 15
 * Output : 1 2 3 4 5
 * 15 = 1 + 2 + 3 + 4 + 5
 *
 * Check if a number can be expressed as sum of five consecutive integers.
 *
 * https://www.geeksforgeeks.org/number-expressed-sum-five-consecutive-integers/
 */
class CheckSumFiveNumbers
{
    public static function efficientApproach(int $n)
    {
        if ($n == 0) {
            return  [ -2, -1, 0, 1, 2 ];
        } else if ($n % 5 == 0) {
            // if n is multiple of 5
            return [
                $n / 5 - 2,
                $n / 5 - 1,
                $n / 5,
                $n / 5 + 1,
                $n / 5 + 2
            ];
        }

        // return list with -1 only
        return [ -1 ];
    }
}