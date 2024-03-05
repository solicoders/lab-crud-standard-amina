<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ModulesController ;
use App\Models\Module;
use Illuminate\Http\Request;

class ModulesController extends Controller {
    protected $projectRepository;
    public function __construct(ModulesRepository $ModulesRepository){
        $this->moduleRepository = $ModulesRepository;
    }
    public function index(){
        $Modules = $this->ModulesRepository->index();
        return view('Modules.index', compact('Modules'));
    }
 }
