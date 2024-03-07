<?php

namespace App\Repositories\GestionCompetences\modules;

use App\Models\GestionCompetences\modules\Module;
use App\Repositories\BaseRepository;

class ModulesRepository extends BaseRepository {


    public function __construct(Module $Modules) {
        parent::__construct($Modules);
    }



}
?>
