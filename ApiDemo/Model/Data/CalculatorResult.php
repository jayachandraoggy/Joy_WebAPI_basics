<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 24/7/18
 * Time: 6:50 PM
 */

namespace Codilar\ApiDemo\Model\Data;


use Codilar\ApiDemo\Api\Data\CalculatorResultInterface;

class CalculatorResult implements CalculatorResultInterface
{

    /**
     * @var double
     */
    private $result;

    /**
     * @return double
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param double $result
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}