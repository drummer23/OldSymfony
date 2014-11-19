<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 19.11.2014
 * Time: 14:30
 */

namespace Acme\DemoBundle\Utility;


class Calculator {
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a,$b)
    {
        return $a - $b;
    }
} 