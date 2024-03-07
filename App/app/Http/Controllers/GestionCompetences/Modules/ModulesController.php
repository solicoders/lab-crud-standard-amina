<?php

namespace App\Http\Controllers\Modules;
use App\Http\Controllers\Controller;
use App\Repositories\Modules\ModulesRepository;

use App\Models\Module;
use Illuminate\Http\Request;

class ModulesController extends Controller {
    protected $moduleRepository;
    public function __construct(ModulesRepository $ModulesRepository){
        $this->moduleRepository = $ModulesRepository;
    }
    public function index(){
        $Modules = $this->moduleRepository->index();
        return view('Modules.index', compact('Modules'));
    }
 }
