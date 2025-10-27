<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Contrat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_debut',
        'date_fin',
        'montant',
        'etat_contrat',
    ];
}
