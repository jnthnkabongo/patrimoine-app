<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cellules extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cell',
        'nom_cell',
        'id_depart'
    ];
}
