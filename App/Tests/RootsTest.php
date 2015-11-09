<?php

require_once('../Equation/QuadraticRoots.php');

class RootsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider rootProvider
     **/

    public function testRoot($ex, $a, $b, $d)
    {
        $equation = new QuadraticRoots();

        $this->assertEquals($ex, $equation->roots($a, $b, $d));
    }

    public function rootProvider()
    {
        return [
            [3, 3, -18, 0],
            [3, 1, -6, 0],
            [-6, 1, 12, 0],
        ];
    }
}