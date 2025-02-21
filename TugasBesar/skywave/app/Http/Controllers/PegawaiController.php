<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index() {
        $barang = Barang::all(); 
        return view('user', ['barang' => $barang]);
    }
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function homelogin() {
        return view('homelogin');
    }
}
