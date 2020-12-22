<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelPendidikan extends Model
{
    use HasFactory;
    
    protected $table = "levelpendidikans";

    public function penduduk(){
        return $this->hasMany('App\Models\Penduduk');
    }
}
