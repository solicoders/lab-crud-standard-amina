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
                    'reference' => 'C1',
                    'code' => 'Maquette',
                    'nom' => 'Maquetter une application mobile',
                    'description' => 'Cette compétence vous permettra de concevoir des maquettes d\'applications mobiles, aidant ainsi à visualiser et à planifier l\'interface utilisateur',
                    'moduleId' => 1,
                ],
                [
                    'reference' => 'C2',
                    'code' => 'Base Données',
                    'nom' => 'Manipuler une base de données - perfectionnement',
                    'description' => 'Cette compétence vous permettra de maîtriser la manipulation avancée des bases de données, ce qui est essentiel pour stocker et gérer des informations',
                    'moduleId' => 1,
                ],
                [
                    'reference' => 'C3',
                    'code' => 'back-end',
                    'nom' => 'Développer la partie back-end d’une application web ou web mobile - perfectionnement',
                    'description' => 'Cette compétence vous permettra de créer et de gérer la logique côté serveur d\'applications web et mobiles avancées',
                    'moduleId' => 1,
                ],
                [
                    'reference' => 'C4',
                    'code' => 'Gestion',
                    'nom' => 'Collaborer à la gestion d’un projet informatique et à l’organisation de l’environnement de développement - perfectionnement',
                    'description' => 'Cette compétence vous préparera à jouer un rôle essentiel dans la gestion de projets informatiques et l\'optimisation de l\'environnement de développement',
                    'moduleId' => 2,
                ],
                [
                    'reference' => 'C5',
                    'code' => 'mobile Native',
                    'nom' => 'Développer une application mobile native, with Android and React Native',
                    'description' => 'Cette compétence vous permettra de créer des applications mobiles performantes pour les plateformes Android et React Native',
                    'moduleId' => 2,
                ],
                [
                    'reference' => 'C6',
                    'code' => 'Tests',
                    'nom' => 'Préparer et exécuter les plans de tests d’une application',
                    'description' => 'Cette compétence vous aidera à élaborer des stratégies de test efficaces pour garantir la qualité des applications',
                    'moduleId' => 3,
                ],

            ];


            Module::insert($modulesData);
        });
    }
}
