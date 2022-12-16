<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ornitologo extends Model
{
    use HasFactory;
    protected $fillable  = ['nombre', 'codigo_profesional'];
    public function avistamientos()
    {
        return $this->hasMany(Avistamiento::class);
    }
    

}
