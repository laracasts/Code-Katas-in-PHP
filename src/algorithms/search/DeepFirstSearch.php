<?php

namespace algorithms\search;

class DeepFirstSearch
{
    /**
     * Recursively get an array element following the tree structure:
     *     A
     *    / \
     *   B   C
     *  / \   \
     * D   E   F
     *
     * @param string $needle
     * @param mixed $target
     * @return mixed|null
     */
    public static function getNode($needle, $target)
    {
        $res = null;
        foreach($target as $key=>$val) {
            if ($key === $needle) {
                $res = $target[$key];
                break;
            } elseif (is_array($target[$key])) {
                $res = self::getNode($needle, $target[$key]);
            }
        }
        return $res;
    }
}