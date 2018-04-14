<?php

namespace algorithmic\FizzBuzz;

/**
 * Class Maybe
 */
class Maybe implements Monoid
{
    private $value;

    /**
     * @param string $value
     */
    private function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param $value
     *
     * @return Maybe
     */
    public static function just($value)
    {
        return new self($value);
    }

    /**
     * @return Maybe
     */
    public static function nothing()
    {
        return new self(null);
    }

    /**
     * @param $default
     *
     * @return mixed
     */
    public function getOr($default)
    {
        if ($this->value !== null) {
            return $this->value;
        }
        return $default;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }

    /**
     * @param $another
     *
     * @return $this|Maybe
     */
    public function append(/*Maybe*/ $another)
    {
        if ($this->value === null) {
            return $another;
        }
        if ($another->value === null) {
            return $this;
        }
        return Maybe::just($this->value->append($another->value));
    }
}