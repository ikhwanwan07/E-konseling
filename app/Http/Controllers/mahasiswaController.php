<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Artikel;

class mahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\mahasiswa::all();
        $data_dosen = \App\dosen::all();

        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa],['data_dosen'=> $data_dosen]);
    }
    public function create (Request $request)
    {

        $this->validate($request,[

          'Nama' => 'required|string|max:255',
            'Nim' => 'required|int|min:8|unique:mahasiswa',
            'jurusan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'IPK' => 'required|string|max:3',
            'tipe' => 'required|string|max:255',
            'DPA' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|',

        ]);
        
              //insert tabel user
            $user = new \App\User;
            $user->role = 'mahasiswa';
            $user->name = $request->Nama;
            $user->email = $request->email;
            $user->password= bcrypt($request->password);
            $user->remember_token = str_random(60);
            $user->save();

       //insert tabel dosen
      $request->request->add(['user_id' => $user->id ]);
      $mahasiswa = \App\mahasiswa::create($request->all());
      return redirect('/mahasiswa')->with('sukses','data berhasil diinput');
    }
    public function edit($id)
    {
      $mahasiswa = \App\mahasiswa::find($id);
      $data_dosen = \App\dosen::all();
      return view('mahasiswa/edit',['mahasiswa'=> $mahasiswa],['data_dosen'=> $data_dosen]);


    }
    public function update(Request $request,$id)
    {
      $mahasiswa = \App\mahasiswa::find($id);
      $mahasiswa->update($request->all());
      return redirect ('/mahasiswa')->with('sukses','data berhasil diupdate');

    }
    public function delete($id)
    {
      $mahasiswa = \App\mahasiswa::find($id);
      $mahasiswa->delete();
      return redirect('/mahasiswa')->with('sukses','data berhasil didelete');
    }
    public function berita()
    {
      $posts= Artikel::latest()->paginate(5);
      return view('mahasiswa.berita',compact('posts'));
    }
    public function profile()
    {
      
      return view('mahasiswa.profile');
    }
    public function nilai()
    {
      
      return view('mahasiswa.nilai');
    }
    public function lihat($id){

      $post_detail = Artikel::find($id);
      
      return view('mahasiswa.blog',compact('post_detail'));
    }
}
