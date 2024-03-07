<?php

namespace App\Http\Controllers\GestionCompetences\CompetencesController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GestionCompetences\modules\CompetencesRepository;
use App\Repositories\GestionCompetences\modules\ModulesRepository;


class CompetenceController extends Controller
   {


    protected $CompetenceRepository;
    protected $ProjectsRepository;
    public function __construct(CompetenceRepository $TasksRepository, ModulesRepository $ModulesRepository ){
        $this->CompetenceRepository = $CompetenceRepository;
        $this->ModulesRepository = $ModulesRepository;
    }
   }
