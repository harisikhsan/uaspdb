<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Kewarganegaraan;

class KartuKeluargaController extends Controller
{
    public function data()
    {
        $penduduk = Penduduk::with('kartu_keluarga', 'level_pendidikan', 'pekerjaan', 'kewarganegaraan');
        return view('penduduk', compact('penduduk'));
    }
}
