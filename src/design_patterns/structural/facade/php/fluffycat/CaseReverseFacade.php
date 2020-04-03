<?php

class CaseReverseFacade {

    /**
     * @param string $stringIn
     * @return null|string
     */
    public static function reverseStringCase($stringIn) {
        $arrayFromString = ArrayStringFunctions::stringToArray($stringIn);
        $reversedCaseArray = ArrayCaseReverse::reverseCase($arrayFromString);
        $reversedCaseString = ArrayStringFunctions::arrayToString($reversedCaseArray);
        return $reversedCaseString;
    }
}