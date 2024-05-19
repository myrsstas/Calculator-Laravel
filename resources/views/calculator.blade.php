{{--Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0 --}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .calculator-div {
            border-style: solid;
            margin: auto;
            width: 350px;
            height: 400px;
            display: flex;
            flex-direction: column;
        }

        input[type = submit]{
            margin: auto;
            width: 150px;
            height: 30px;
            font-size:100%;
        }

        select {
            margin:auto;
            margin-bottom: 20px;
            font-size:120%;
        }


        .menuAndButtonDiv{
            position: inherit;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: #302e2e;
        }

        input[type = number]{
            height: 50px;
            margin: 20px;
        }

    </style>
    <title>Calculator</title>
</head>

<body>
<div class = "calculator-div">
        <form action="" method="POST">
        @csrf
    <div>
        <label for="firstNumber">First Number
            <input type="number" name="firstNumber" placeholder="First Number" value="{{$result->firstNumber}}" >
        </label>
        <label for="secondNumber">Second Number
            <input type="number" name="secondNumber" placeholder="Second Number" value="{{$result->secondNumber}}">
        </label>

    </div>
            <div class="menuAndButtonDiv">
                <select name="operation">
                    <option value="addition" @if($result->operation==='addition') selected @endif > Addition</option>
                    <option value="subtraction" @if($result->operation==='subtraction') selected @endif > Subtraction</option>
                    <option value="multiplication" @if($result->operation==='multiplication') selected @endif > Multiplication</option>
                    <option value="division" @if($result->operation==='division') selected @endif > Division</option>
                </select>
                <input type ="submit" name="Calculate" value="Calculate">
            </div>

    <label for="result">Result
        <input type="text" name="result" placeholder="Result" value="{{$result->result}}" disabled >
    </label>

        </form>
</div>

</body>
</html>
