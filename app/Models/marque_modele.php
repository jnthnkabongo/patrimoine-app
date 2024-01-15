<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marque_modele extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_marque',
        'nomination',
        'id_class_mat'
    ];
}
