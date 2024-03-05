<?php

use Illuminate\Support\Facades\Route;
use App\Models\modules\Module;
use App\Repositories\Modules\ModulesRepository;

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

Route::get('/module/store', function () {
    $repository = new ModulesRepository(new Module);
    $data = [
        'nom' => 'Module2',
        'description' => 'tesssssst',
    ];


    $repository->create($data);

    return $data ;

});
