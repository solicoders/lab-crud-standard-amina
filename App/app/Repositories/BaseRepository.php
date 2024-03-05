<?php

namespace App\Repositories\Modules;

use App\Models\Module;
use App\Repositories\BaseRepository;

abstract class ModulesRepository extends BaseRepository {

    protected $model;

    public function __construct(Module $module) {
        $this->model = $module;
    }

    protected $fieldModule = [
        'nom', 'description'
    ];

    public function getFieldData(): array {
        return $this->fieldModule;
    }

    public function model(): string {
        return Module::class; 
    }
}
?>
