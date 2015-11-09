<?php

class QuadraticRoots
{
    public function roots($a, $b, $d)
    {
        $x = (-1 * $b - sqrt($d)) / (2 * $a);

        echo $x;

        return $x;
    }
}