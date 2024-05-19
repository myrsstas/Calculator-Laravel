<?php
//Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/calculator',[CalculatorController::class, 'index']);

Route::post('/calculator',[CalculatorController::class,'calculate']);
