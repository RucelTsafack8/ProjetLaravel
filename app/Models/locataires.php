<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locataires extends Model
{
    use HasFactory;
    protected $fillable = [
        'NomPrenom',
        'Email',
        'Telephone',
        'Profession',
        'Nbr_person',
        'Date_entrer',
        'Date_sorti'
    ];
    
}
