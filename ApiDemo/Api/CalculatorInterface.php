<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 24/7/18
 * Time: 6:41 PM
 */

namespace Codilar\ApiDemo\Api;

interface CalculatorInterface
{
    /**
     * @param double $a
     * @param double $b
     * @return \Codilar\ApiDemo\Api\Data\CalculatorResultInterface
     */
    public function add($a, $b);

    /**
     * @param double $a
     * @param double $b
     * @return \Codilar\ApiDemo\Api\Data\CalculatorResultInterface
     */
    public function multiply($a, $b);
}