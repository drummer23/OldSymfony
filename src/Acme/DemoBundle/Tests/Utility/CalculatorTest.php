<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 19.11.2014
 * Time: 14:32
 */

namespace Acme\DemoBundle\Tests\Utility;

use Acme\DemoBundle\Utility\Calculator;


class CalculatorTest extends \PHPUnit_Framework_TestCase {

    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(30,12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }

    public function testSubtract()
    {
        $calc = new Calculator();
        $result = $calc->subtract(30,12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(18, $result);
    }
} 