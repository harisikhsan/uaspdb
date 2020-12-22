<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'keluarga_id',
        'nama',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'level_pedidikan_id',
        'pekerjaan_id',
        'status_pernikahan',
        'status_keluarga',
        'kewarganegaraan_id',
        'ayah',
        'ibu'
        ];

    public function kartukeluarga(){
        return $this->belongsTo('App\Models\KartuKeluarga');
    }

    public function levelpendidikan(){
        return $this->belongsTo('App\Models\LevelPendidikan');
    }

    public function pekerjaan(){
        return $this->belongsTo('App\Models\Pekerjaan');
    }

    public function kewarganegaraan(){
        return $this->belongsTo('App\Models\Kewarganegaraan');
    }

}
