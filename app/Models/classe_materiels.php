<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe_materiels extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_class_mat',
        'nom_class'
    ];
}
