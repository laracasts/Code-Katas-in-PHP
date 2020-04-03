<?php

namespace data_structures\closure;

/**
 * Resources:
 *
 * http://php.net/manual/en/functions.anonymous.php
 * http://php.net/manual/en/closure.bindto.php
 */
class ClosureSample
{
    private static $sfoo = 1;
    private $ifoo = 2;

    static function getsFoo() {
        return self::$sfoo;
    }

    static function getiFoo() {
        return self::$ifoo;
    }
}