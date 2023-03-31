<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class DataPenggunaController extends Controller
{
    public function data_pengguna(){
        $pengguna = Pengguna::all();
        return view('admin.data-pengguna', compact(['pengguna'])); 
    }
}