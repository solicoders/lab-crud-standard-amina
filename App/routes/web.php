<?php

use Illuminate\Support\Facades\Route;
use App\Repository\ModulesRepository

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/module', function () {
    $repository = new ModulesRepository(new Modules);
    $data = [
        'nom' => 'Module1' ,
        'description' => 'tesssssst',

    ];
});
