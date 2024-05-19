<?php
//Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0
namespace App\Models;

class CalculatorInputDTO {

    public $firstNumber;
    public $secondNumber;
    public $operation;

    /**
     * @param $firstNumber
     * @param $secondNumber
     * @param $operation
     */
    public function __construct($firstNumber, $secondNumber, $operation)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operation = $operation;
    }


}

