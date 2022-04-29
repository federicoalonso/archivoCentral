<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuerza extends Model
{
    use HasFactory;

    public function grados()
    {
       return $this->hasMany(Grado::class);
    }
}
