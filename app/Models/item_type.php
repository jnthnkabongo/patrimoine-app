<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_type',
        'nom_type',
        'id_marque'
    ];
}