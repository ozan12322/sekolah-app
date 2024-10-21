<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        $berita = Berita::get();
        return view('index', compact('berita'), [
            'beritas' => DB::table('beritas')->paginate(2)
        ]);
    }

    function information(){
        $berita = Berita::get();
        return view('information', compact('berita'), [
            'beritas' => DB::table('beritas')->paginate(6)
        ]);
    }
}