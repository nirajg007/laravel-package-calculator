<?php 



Route::get('add/{a}/{b}', 'NirajK\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'NirajK\Calculator\CalculatorController@subtract');
Route::get('test', 'NirajK\Calculator\CalculatorController@test');