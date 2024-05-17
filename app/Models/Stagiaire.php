<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'stage_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'place_of_birth',
        'address',
        'blood_group',
        'email',
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_id');
    }
}
