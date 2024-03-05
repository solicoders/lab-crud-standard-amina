<?php

namespace App\Models\modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
         'nom' , 'description'
    ];

    public function Competences() {
        return $this->hasManey(Competence::class);
    }
}
