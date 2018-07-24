<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 24/7/18
 * Time: 6:44 PM
 */

namespace Codilar\ApiDemo\Api\Data;


interface CalculatorResultInterface
{
    /**
     * @return double
     */
    public function getResult();

    /**
     * @param double $result
     * @return $this
     */
    public function setResult($result);
}