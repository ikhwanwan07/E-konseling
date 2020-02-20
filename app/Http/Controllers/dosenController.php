<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;
use Auth;
use mahasiswa;

class dosenController extends Controller
{
    public function index()
    {
        $data_dosen = \App\dosen::all();
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
}
