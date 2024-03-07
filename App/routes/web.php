<?php

use Illuminate\Support\Facades\Route;
use App\Models\GestionCompetences\modules\Module;
use App\Repositories\GestionCompetences\Modules\ModulesRepository;
use App\Repositories\GestionCompetences\Competences\CompetencesRepository;
use App\Models\GestionCompetences\Competences\Competence;

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

// Route::get('/module/store', function () {
//     $repository = new ModulesRepository(new Module);
//     $data = [
//         'nom' => 'Module3',
//         'description' => 'tesssssst3',
//     ];


//     $repository->store($data);

//     return $data ;

// });


// Route::get('/competence/store', function () {
//     $repository = new CompetencesRepository(new Competence);
//     $data = [
//         'nom' => 'C1',
//         'description' => 'test',
//         'reference' => 'code',
//         'code' => 'Codage',
//         'moduleId' => 1,
//     ];


//     $repository->store($data);

//     return $data ;

// });


// Route::get('/Competence/update', function () {
//     $repository = new CompetencesRepository(new Competence);
//     $validatedData = [
//         'nom' => 'C5',
//         'description' => 'test',
//         'reference' => 'code',
//         'code' => 'Codage',
//         'moduleId' => 1,
//     ];

//     $update = $repository->update(1, $validatedData);

//     if ($update) {
//         echo 'updated';
//     }

//     $repository->store($validatedData);

//     return $validatedData;
// });



Route::get('/Competence/{id}', function ($id) {
    $repository = new CompetencesRepository(new Competence);
    $delete = $repository->destroy($id);
    if($delete){
        echo 'deleted';
    }else{
        echo 'failed';
    }
});

