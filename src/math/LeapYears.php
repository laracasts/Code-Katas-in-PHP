<?php

/**
 * Detect a leap year
 *
 * @author Andrea Fiori
 * @since  29 January 2015
 */
class LeapYears
{
    /**
     * Detect if it's leap year
     *
     * @param int $year
     * @return bool
     */
    public static function isLeap($year)
    {
        if (!is_int($year)) {
            throw new InvalidArgumentException($year.' is not an integer number');
        }

        return self::isAtypicalLeapYear($year) and !self::isAtypicalCommonYear($year);
    }

    /**
     * Detect if it's atypical common year
     *
     * @param int $year
     *
     * @return bool
     */
    private static function isAtypicalCommonYear($year)
    {
        return $year % 100 == 0 and !($year % 400 == 0);
    }

    /**
     * Detect if it's an atypical leap year
     *
     * @param $year
     *
     * @return bool
     */
    private static function isAtypicalLeapYear($year)
    {
        return $year % 4 == 0;
    }
}