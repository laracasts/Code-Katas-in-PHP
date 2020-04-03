<?php

namespace design_patterns\behavioral\memento\restorable_iterator;

/**
 * Originator
 */
interface Restorable
{
    public function getState();
    public function setState($state);
}