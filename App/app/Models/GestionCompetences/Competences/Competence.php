<?php

namespace App\Models\GestionCompetences\Competences;

use App\Models\GestionCompetences\modules\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competence extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'reference',
        'code',
        'moduleId',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
