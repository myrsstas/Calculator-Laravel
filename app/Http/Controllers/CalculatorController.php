<?php
//Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculatorInputDTO;
use App\Models\CalculatorOutputDTO;


class CalculatorController extends Controller
{
    public function index(){
        $defaultResult= new CalculatorOutputDTO('','','addition','')  ;
        return view('calculator')->withResult($defaultResult);
    }

    public function parseRequest(Request $request){
        $number1=  $request->get('firstNumber');
        $number2=  $request->get('secondNumber');
        $operation= $request->get('operation');
        return new CalculatorInputDTO($number1, $number2, $operation);

    }

    public function calculate(Request $request){
        $calculateInput = $this->parseRequest($request);

        switch($calculateInput->operation){
            case "addition":
                $calculationResult = $this-> addition($calculateInput->firstNumber, $calculateInput->secondNumber);
                break;
            case "subtraction":
                $calculationResult = $this-> subtraction($calculateInput->firstNumber, $calculateInput->secondNumber);
                break;
            case "multiplication":
                $calculationResult = $this-> multiplication($calculateInput->firstNumber, $calculateInput->secondNumber);
                break;
            case "division":
                $calculationResult = $this-> division($calculateInput->firstNumber, $calculateInput->secondNumber);
                break;

        }

        $result = new CalculatorOutputDTO($calculateInput->firstNumber , $calculateInput->secondNumber, $calculateInput->operation, $calculationResult );
        return view('calculator')->withResult($result);

    }
    public function addition ($firstNumber, $secondNumber){
        $result = $firstNumber + $secondNumber;
        return $result;
    }

    public function subtraction($firstNumber,$secondNumber){
        $result = $firstNumber - $secondNumber;
        return $result;
    }

    public function multiplication ($firstNumber , $secondNumber){
        $result = $firstNumber * $secondNumber;
        return $result;
    }

    public function division ($firstNumber , $secondNumber){
        if ($secondNumber != 0){
            $result = $firstNumber / $secondNumber;
            return $result;
        } else {
            $result = "Undefined" ;
            return $result;
        }

    }
}
