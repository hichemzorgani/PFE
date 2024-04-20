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
        'université_id',
        'spécialité_id'
    ];
}
