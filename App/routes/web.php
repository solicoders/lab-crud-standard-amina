<?php

use Illuminate\Support\Facades\Route;
use App\Models\GestionCompetences\modules\Module;
use App\Repositories\GestionCompetences\Modules\ModulesRepository;

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
        'nom' => 'Module3',
        'description' => 'tesssssst3',
    ];


    $repository->store($data);

    return $data ;

});
