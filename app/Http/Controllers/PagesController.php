<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view("welcome")
    }
    public function data(){
        return view("data-sewa")
    }
    public function data(){
        return view("data-lama-sewa")
    }
    public function data(){
        return view("data-pelanggan")
    }
    public function data(){
        return view("fasilitas")
    }
    public function data(){
        return view("ketentuan")
    }
}