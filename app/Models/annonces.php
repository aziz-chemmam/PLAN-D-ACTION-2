<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonces extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'userId',
        'type_annances',
        'type_biens',
        'description',
        'prix',

        
    ];
}
