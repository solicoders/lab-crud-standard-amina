<?php

namespace App\Repository ;

use App\Models\Module ;
use App\Repository\BaseRepository ;

class ModulesRepository extends BaseRepository {
    public function __construct(Module $module){
        $this->model = $module;
    }
    protected $filedModule = [
        'nom' , 'description'
    ];

    public function getFieldData() : array {
        return $this -> $filedModule ;

    }
    public function model():string{
        return Project::class;
    }
}
?>
