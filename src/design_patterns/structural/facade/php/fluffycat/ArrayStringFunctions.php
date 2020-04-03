<?php

class ArrayStringFunctions {

    /**
     * @param $arrayIn
     * @return null|string
     */
    public static function arrayToString($arrayIn) {
        $string_out = NULL;
        foreach ($arrayIn as $oneChar) {
            $string_out .= $oneChar;
        }

        return $string_out;
    }

    /**
     * @param $stringIn
     * @return array
     */
    public static function stringToArray($stringIn) {
        return str_split($stringIn);
    }
}