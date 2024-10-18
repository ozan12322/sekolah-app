<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $berita = Berita::get();
        return view('index', compact('berita'));
    }

    function information(){
        $berita = Berita::get();
        return view('information', compact('berita'));
    }
}