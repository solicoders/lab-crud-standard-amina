<?php

namespace App\Repositories\Modules;

use App\Models\Module;
use App\Repositories\BaseRepository;

class ModulesRepository extends BaseRepository {

    protected $model;

    public function __construct(Module $module) {
        $this->model = $module;
    }

    protected $fieldModule = [
        'nom', 'description'
    ];

}
?>
