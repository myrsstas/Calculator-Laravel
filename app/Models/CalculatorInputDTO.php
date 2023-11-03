<?php

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

