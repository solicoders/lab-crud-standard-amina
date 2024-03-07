<?php

namespace App\Repositories\GestionCompetences\Competences;

use App\Repositories\BaseRepository;
use App\Models\GestionCompetences\Competences\Competence;


class CompetencesRepository extends BaseRepository
{
    public function __construct(Competence $competence)
    {
        $this->model = $competence;
    }

    protected $fieldCompetence = [
        'nom',
        'description',
        'reference',
        'code',
        'moduleId',
    ];

    public function getFieldData(): array
    {
        return $this->fieldCompetence;
    }

    public function model(): string
    {
        return Competence::class;
    }
}
