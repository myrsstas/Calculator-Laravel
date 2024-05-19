<?php
//Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0
namespace App\Models;


class CalculatorOutputDTO{

    public $firstNumber;
    public $secondNumber;
    public $operation;
    public $result;

    /**
     * @param $firstNumber
     * @param $secondNumber
     * @param $operation
     * @param $result
     */
    public function __construct($firstNumber, $secondNumber, $operation, $result)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operation = $operation;
        $this->result = $result;
    }


}
