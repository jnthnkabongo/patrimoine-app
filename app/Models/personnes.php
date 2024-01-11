<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pers',
        'nom_pers',
        'genre',
        'depart_id',
        'fonct_id'
    ];
}
