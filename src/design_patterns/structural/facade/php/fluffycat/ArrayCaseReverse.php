<?php

class ArrayCaseReverse {

    private static $uppercase_array =
        array('A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z');

    private static $lowercase_array =
        array('a', 'b', 'c', 'd', 'e', 'f',
            'g', 'h', 'i', 'j', 'k', 'l',
            'm', 'n', 'o', 'p', 'q', 'r',
            's', 't', 'u', 'v', 'w', 'x',
            'y', 'z');

    /**
     * @param array $arrayIn
     * @return array
     */
    public static function reverseCase(array $arrayIn) {
        $array_out = array();

        for ($x = 0; $x < count($arrayIn); $x++) {
            if (in_array($arrayIn[$x], self::$uppercase_array)) {
                $key = array_search($arrayIn[$x], self::$uppercase_array);
                $array_out[$x] = self::$lowercase_array[$key];
            } elseif (in_array($arrayIn[$x], self::$lowercase_array)) {
                $key = array_search($arrayIn[$x], self::$lowercase_array);
                $array_out[$x] = self::$uppercase_array[$key];
            } else {
                $array_out[$x] = $arrayIn[$x];
            }
        }

        return $array_out;
    }
}