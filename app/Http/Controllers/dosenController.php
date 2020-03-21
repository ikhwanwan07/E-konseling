<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;
use Auth;
use mahasiswa;
use \App\dosen;

class dosenController extends Controller
{
    public function index()
    {
        $data_dosen = dosen::paginate(5);
        return view('dosen.index',['data_dosen' => $data_dosen]);
    }
    public function create(Request $request)
    {
   
    //insert tabel user
    $user = new \App\User;
    $user->role = 'dosen';
    $user->name = $request->Nama;
    $user->email = $request->email;
    $user->password= bcrypt('rahasia');
    $user->remember_token = str_random(60);
    $user->save();

     //insert 
     $request->request->add(['user_id' => $user->id ]);
     $dosen = \App\dosen::create($request->all());

    return redirect('/dosen')->with('success','data berhasil diinput');
    }
    public function edit($id)
    {
      $dosen = \App\dosen::find($id);
      return view('dosen/edit',['dosen'=> $dosen]);


    }
    public function update(Request $request,$id)
    {
      $dosen = \App\dosen::find($id);
      $dosen->update($request->all());
      return redirect ('/dosen')->with('success','data berhasil diupdate');

    }
    public function delete($id)
    {
      $dosen = \App\dosen::find($id);
      $dosen->delete();
      return redirect('/dosen')->with('sukses','data berhasil didelete');
    }

    public function konseling()
    {
      $chat = Auth::user()->dosen->pesan;
      return view('dosen.konseling',compact('chat'));
    }

    public function chat()
    {
      return view('dosen.chat');
    }
    public function showchat($id)
    {
      $chat = \App\Chat::find($id);
      $balas = \App\Balas::where('chat_id',$id)->get();
      //dd($chat->id);
      return view('dosen.chat',compact('chat','balas'));
    }

    public function balas(Request $request)
    {
     
      $balas = new \App\Balas;
      $balas->chat_id = $request->chat_id;
      $balas->role = 'dosen';
      $balas->balas = $request->balas;  
      $balas->save();
      
      return redirect('/konseling/'.$balas->chat_id);

    }

    public function jadwal()
    {

      $jadwal = \App\Jadwal::all();
      return view('dosen.jadwal',compact('jadwal'));
    }
    public function tambahjadwal(Request $request)
    {
       $jadwal1 = new \App\Jadwal;
       $jadwal2 = new \App\Jadwal;
       $jadwal3 = new \App\Jadwal;
       $jadwal4 = new \App\Jadwal;
       $jadwal5 = new \App\Jadwal;
       $jadwal6 = new \App\Jadwal;
       $jadwal1->dosen_id = Auth::user()->dosen->id;
       $jadwal1->hari = $request->senin;
       $jadwal1->jam = $request->jam1;
       $jadwal2->dosen_id = Auth::user()->dosen->id;
       $jadwal2->hari = $request->selasa;
       $jadwal2->jam = $request->jam2;
       $jadwal3->dosen_id = Auth::user()->dosen->id;
       $jadwal3->hari = $request->rabu;
       $jadwal3->jam = $request->jam3;
       $jadwal4->dosen_id = Auth::user()->dosen->id;
       $jadwal4->hari = $request->kamis;
       $jadwal4->jam = $request->jam4;
       $jadwal5->dosen_id = Auth::user()->dosen->id;
       $jadwal5->hari = $request->jumat;
       $jadwal5->jam = $request->jam5;
       $jadwal6->dosen_id = Auth::user()->dosen->id;
       $jadwal6->hari = $request->sabtu;
       $jadwal6->jam = $request->jam6;
      
      $jadwal1->save();
       $jadwal2->save();
      $jadwal3->save();
      $jadwal4->save();
      $jadwal5->save();
      $jadwal6->save();

       //dd($jadwal1,$jadwal2,$jadwal3);

       return redirect('/jadwalkonsultasi')->with('success','data berhasil ditambah');
    }

    public function editjadwal($id)
    {
      $jadwal = \App\Jadwal::find($id);
      return view('dosen.editjadwal',compact('jadwal'));
    }
    public function updatejadwal()
    {
      
    }
    public function hapusjadwal()
    {
      $dosen = \App\Jadwal::find($id);
      $dosen->delete();
      return redirect('/jadwalkonsultasi')->with('sukses','data berhasil didelete');
    }
}
