<?php

namespace algorithmic\FizzBuzz;

/**
 * Class FizzBuzz
 */
class FizzBuzz
{
    /**
     * @var array
     */
    private $words;

    /**
     * @var array
     */
    private $divisors;

    /**
     * Set default words
     */
    public function __construct()
    {
        $this->words = array(
            3 => Words::single('fizz'),
            5 => Words::single('buzz'),
            7 => Words::single('bang'),
        );
        $this->divisors = array_keys($this->words);
    }

    /**
     * @param int $number
     *
     * @return mixed
     */
    public function say($number)
    {
        $words = array_map(function($divisor) use ($number) {
            return $this->wordFor($number, $divisor);
        }, $this->divisors);

        return self::reduce_objects($words, 'append')->getOr($number);
    }

    /**
     * @param int $number
     * @param int $divisor
     *
     * @return Maybe
     */
    private function wordFor($number, $divisor)
    {
        if ($number % $divisor == 0) {
            return Maybe::just($this->words[$divisor]);
        }

        return Maybe::nothing();
    }

    /**
     * @param array $array
     * @param string $methodName
     *
     * @return mixed
     */
    private static function reduce_objects($array, $methodName)
    {
        return array_reduce($array, function($one, $two) use ($methodName) {
            return $one->$methodName($two);
        }, Maybe::nothing());
    }
}





