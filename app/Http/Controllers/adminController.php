<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\categoris;

class adminController extends Controller
{
    public function index(){
      return view('op.index');
    }
    public function show(){

     $posts = Artikel::paginate(2);
      return view('op.tabelpost',compact('posts'));
    }
    public function edit($id){
      $post = \App\Artikel::find($id);
      return view('op.edit',['post'=> $post]);
      
    }
    public function tipe(){
      return view('dosen.tipe');
    }
    public function prestasi(){
      return view('op.prestasi');
    }
    public function jadwal(){
      return view('op.jadwal');
    }
    public function nilai_mhs(){
      return view('op.nilai_mhs');
    }
    public function tabel(){
      return view('dosen.tabel');
    }
    public function setting(){
      return view('setting');
    }
    public function tambah(){

            return view('op.post');
    }
    public function konsultasi(){
      return view('mahasiswa.konsultasi');
    }
    public function konsentrasi(){
      return view('mahasiswa.konsentrasi');
    }
    
  
    public function postBerita(Request $request){

     Artikel::create([
       'title' => request('title'),
       'kategori' => request('kategori'),
       'content' => request('content'),
       
     ]);

        return redirect('tabelpost');
    }
    public function update($id, Request $request){
      $post = \App\Artikel::find($id);
      $post->update($request->all());
      return redirect ('tabelpost');

    }
    public function delete($id)
    {
      $post = \App\Artikel::find($id);
      $post->delete();
      return redirect('tabelpost')->with('sukses','data berhasil didelete');
    }

}
