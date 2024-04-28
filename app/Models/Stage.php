<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme',
        'type_stage',
        'date_debut',
        'date_fin',
        'niveau',
        'structure_affectation_id',
        'encadrant_id',
        'etablissement_id',
        'spécialité_id',
    ];

    public function encadrant()
    {
        return $this->belongsTo(encadrant::class, 'encadrant_id');
    }
    public function affectation()
    {
        return $this->belongsTo(affectation::class, 'structuresAffectation_id');
    }
    public function etablissement()
    {
        return $this->belongsTo(universite::class, 'etablissement_id');
    }
}
