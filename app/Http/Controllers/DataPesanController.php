<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use DB;

class DataPesanController extends Controller
{
    public function data_pesan(){
        $data = DB::table('pengguna')
        ->join('lapangan', 'pengguna.id_pengguna', '=', 'lapangan.id_pengguna')
        ->get();
        
        return view('admin.data-pesan', compact(['data'])); 
    }
    public function data_lapangan(){
        $lapangan = Lapangan::all();
        return view('admin.data-lapangan', compact(['lapangan'])); 
    }
}