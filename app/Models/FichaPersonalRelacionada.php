<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaPersonalRelacionada extends Model
{
    use HasFactory;
    public function fichaPersonal()
    {
        return $this->belongsTo(FichaPersonal::class, 'ficha_personal_id');
    }
    public function fichaImpersonal()
    {
        return $this->belongsTo(FichaImpersonal::class, 'ficha_impersonal_id');
    }
    /*public function documento()
    {
        return $this->belongsTo(FichaPersonal::class, 'documento_id');
    }
    public function dossier()
    {
        return $this->belongsTo(FichaPersonal::class, 'dossier_id');
    }*/
}
