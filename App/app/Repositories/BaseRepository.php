<?php

namespace App\Repositories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
abstract class BaseRepository {

    protected $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

   public function create($data){
     return $this->model->create($data);
   }



}
?>
