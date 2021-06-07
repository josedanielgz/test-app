<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'primer_nombre',
        'primer_apellido',
        'correo_electronico',
        'cargo',
        'direccion',
        'telefono'
    ];
}
