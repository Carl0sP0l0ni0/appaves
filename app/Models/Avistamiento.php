<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avistamiento extends Model
{
    use HasFactory;
    protected $fillable  = ['ave_id', 'ornitologo_id', 'fecha', 'ubicacion'];

    public function ave()
    {
        return $this->belongsTo(Ave::class);
    }
    public function ornitologo()
    {
        return $this->belongsTo(Ornitologo::class);
    }
}
