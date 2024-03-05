<?php

namespace App\Repositories\Modules;

use App\Models\modules\Module;
use App\Repositories\BaseRepository;

class ModulesRepository extends BaseRepository {

    protected $model;

    public function __construct(Module $module) {
        parent::__construct($module);
    }



}
?>
