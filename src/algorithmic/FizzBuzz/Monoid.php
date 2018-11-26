<?php

namespace algorithmic\FizzBuzz;

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
