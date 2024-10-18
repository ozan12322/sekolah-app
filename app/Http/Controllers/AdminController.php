<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function dashboard(){
        $berita = Berita::get();
        return view('admin.dashboard', compact('berita'));
    }

    function tambah(){
        $berita = Berita::get();
        return view('admin.tambah', compact('berita'));
    }

    function submit(Request $request){

        // $thumbnail = $request->file('thumbnail');
        // $filename = $thumbnail->getClientOriginalName();
        // $path = 'img/berita/'.$filename;

        // Storage::disk('public')->put($path,file_get_contents($thumbnail));

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->desc = $request->desc;
        $berita->date = $request->date;
        $berita->thumbnail = $request->hashName();
        $berita->save();

        return Redirect::route('dashboard');
    }

    function edit($id){
        $berita = Berita::get();
        return view('admin.edit', compact('berita'));
    }
}
