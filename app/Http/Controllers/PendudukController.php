<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Kewarganegaraan;

class PendudukController extends Controller
{
    public function data()
    {
        $penduduk = DB::table('penduduks')
                        // ->join('kartukeluargas','penduduks.keluarga_id','=','kartukeluargas.no')
                        ->get();
        return view('home', ['penduduks'=>$penduduk]);
        // $penduduk = Penduduk::with('kartu_keluarga', 'level_pendidikan', 'pekerjaan', 'kewarganegaraan');
        // return view('home', ['penduduk'=>$penduduk]);
    }
}
