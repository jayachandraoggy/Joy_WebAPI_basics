<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 24/7/18
 * Time: 6:48 PM
 */

namespace Codilar\ApiDemo\Model;


use Codilar\ApiDemo\Api\CalculatorInterface;
use Codilar\ApiDemo\Api\Data\CalculatorResultInterface;
use Codilar\ApiDemo\Api\Data\CalculatorResultInterfaceFactory;

class Calculator implements CalculatorInterface
{
    /**
     * @var CalculatorResultInterfaceFactory
     */
    private $calculatorResultFactory;

    /**
     * Calculator constructor.
     * @param CalculatorResultInterfaceFactory $calculatorResultFactory
     */
    public function __construct(
        CalculatorResultInterfaceFactory $calculatorResultFactory
    )
    {
        $this->calculatorResultFactory = $calculatorResultFactory;
    }

    /**
     * @param double $a
     * @param double $b
     * @return \Codilar\ApiDemo\Api\Data\CalculatorResultInterface
     */
    public function add($a, $b)
    {
        /** @var CalculatorResultInterface $result */
        $result = $this->calculatorResultFactory->create();
        $c = $a + $b;
        $result->setResult($c);
        return $result;
    }

    /**
     * @param double $a
     * @param double $b
     * @return \Codilar\ApiDemo\Api\Data\CalculatorResultInterface
     */
    public function multiply($a, $b)
    {
        /** @var CalculatorResultInterface $result */
        $result = $this->calculatorResultFactory->create();
        $c = $a * $b;
        $result->setResult($c);
        return $result;
    }
}