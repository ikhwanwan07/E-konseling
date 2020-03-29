<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Artikel;
Use Alert;
use Auth;
use \App\mahasiswa;

class mahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = mahasiswa::paginate(10);
        $data_dosen = \App\dosen::all();
        $tipe = \App\Tipe::all();
        

        return view('mahasiswa.index',compact('tipe','data_mahasiswa','data_dosen'));
    }

    public function create (Request $request)
    {

        $this->validate($request,[

          'Nama' => 'required|string|max:255',
            'Nim' => 'required|int|min:8|unique:mahasiswa',
            'jurusan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            
            'tipe_id' => 'required|string|max:255',
            'dosen_id' => 'required|string|max:255',
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

        //insert tabel mahasiswa
        $request->request->add(['user_id' => $user->id ]);
        $mahasiswa = \App\mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success','data berhasil ditambah');
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
      $mhs = Auth::user()->mahasiswa->matkul;
      $ipk1 = Auth::user()->mahasiswa->ipk;
      

      $data = [];
      $data2 = [];
      foreach($ipk1 as $m)
      {
        if($ipk1->first()){
            $data[] = $m->semester;
            $data2[] = $m->ipk;
        }
      }
      //dd($data2);
      return view('mahasiswa.profile',compact('data','data2','mhs'));
    }
    public function nilai()
    {
      
      $nilai = Auth::user()->mahasiswa->matkul;
      return view('mahasiswa.nilai',compact('nilai'));
    }
    public function lihat($id){

      $post_detail = Artikel::find($id);
      
      return view('mahasiswa.blog',compact('post_detail'));
    }
    public function chat(Request $request)
    {
    $data = new \App\Chat;  
    $data->mahasiswa_id = Auth::user()->mahasiswa->id;
    $data->dosen_id = Auth::user()->mahasiswa->dosen->id;
    $data->subjek = $request->subjek;
    $data->pesan = $request->pesan;
    $data->save();

    return redirect('/konsultasi');
      

//      dd($data);

    }
}
