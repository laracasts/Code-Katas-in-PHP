<?php

namespace algorithms\strings\FizzBuzz;

/**
 * Interface Monoid
 */
interface Monoid
{
    /**
     * @return Monoid
     */
    public function append($another);
}
