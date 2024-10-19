<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    function store(Request $request){
        $request->validate([
            'judul' => 'required|max:225',
            'date' => 'required',
            'desc' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if(!empty($request->thumbnail)){
            $fileName = 'thumbnail-'.uniqid().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('img/berita'), $fileName);
        } else {
            $fileName = 'nophoto.jpg';
        }

        DB::table('beritas')->insert([
            'judul' => $request->judul,
            'date' => $request->date,
            'desc' => $request->desc,
            'thumbnail' => $fileName,
        ]);

        return redirect()->route('dashboard');
    }

    function edit(Berita $id){
        return view('admin.edit', compact('id'));
    }

    function update(Request $request, string $id){
        $request->validate([
            'judul' => 'required|max:225',
            'date' => 'required',
            'desc' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoLama = DB::table('beritas')->select('thumbnail')->where('id', $id)->get();
        foreach($fotoLama as $f1){
            $fotoLama = $f1->thumbnail;
        }

        if(!empty($request->thumbnail)){
            if(!empty($fotoLama->thumbnail)) unlink(public_path('img/berita'.$fotoLama->thumbnail));

            $fileName = 'thumbnail-'.$request->id.'.'.$request->thumbnail->extension();

            $request->thumbnail->move(public_path('img/berita'), $fileName);
        } else {
            $fileName = $fotoLama;
        }

        DB::table('beritas')->where('id', $id)->update([
            'judul' => $request->judul,
            'date' => $request->date,
            'desc' => $request->desc,
            'thumbnail' => $fileName,
        ]);

        return redirect()->route('dashboard');
    }

    function destroy(Berita $id){
        $id->delete();

        return redirect()->route('dashboard');
    }

}
