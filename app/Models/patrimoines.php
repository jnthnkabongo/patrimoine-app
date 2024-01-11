<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patrimoines extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pat',
        'class_mat',
        'item_type_mat',
        'marque_modele',
        'quantite',
        'numero_serie',
        'autorisant',
        'emetteur',
        'observation',
        'motif',
        'province_provenance',
        'provenance_destination',
        'statut_provenance',
        'date-sortie-date-entrer',
        'fonct_id'
    ];
}
