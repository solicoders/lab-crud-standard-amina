<?php

namespace Database\Seeders\GestionCompetences\Modules;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GestionCompetences\modules\Module;


class SeederModules extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Module::withoutEvents(function () {

            $modulesData = [
                [
                    'nom' => 'Module 1',
                    'description' => 'Description for  Module 1',
                ],
                [
                    'nom' => 'Module 2',
                    'description' => 'Description for Module 2',
                ],
                [
                    'nom' => 'Module 3',
                    'description' => 'Description for Module 3',
                ],

            ];


            Module::insert($modulesData);
        });
    }
}
