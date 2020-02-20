<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\categoris;
use App\mahasiswa;
use App\User;
use App\IPK;
use Auth;
use Alert;
use DB;

class adminController extends Controller
{
    public function index(){
      return view('op.index');
      
    }
    public function show(){

     $posts = Artikel::paginate(5);
      return view('op.tabelpost',compact('posts'));
    }
    public function edit($id){
      $post = \App\Artikel::find($id);
      return view('op.edit',['post'=> $post]);
      
    }
    public function tipe(){
      return view('dosen.tipe');
    }
    public function ipk(){

      $mahasiswa = mahasiswa::all();
      $ipk = \App\IPK::all();
      return view('op.IPK',compact('mahasiswa','ipk'));
    }
    public function showipk($id){

      $mahasiswa = mahasiswa::find($id);
      $mhs = mahasiswa::all();
      //dd($mahasiswa->ipk);
      
      return view('op.showIPK',compact('mahasiswa','mhs'));
    }
    public function ipkcreate(Request $request){
     
      
      //if (IPK::whereIn(['user_id','semester','tahun_ajaran'],$request->user_id,$request->semester,$request->tahun_ajaran)->exists()) {
        //return redirect('/ipk')->with('info','data sudah ada');
     //}
     $ipk= \App\IPK::create($request->all());
      return redirect('/ipk')->with('success','data berhasil ditambah');
     
      //return $ipk;
      
    }

    public function deleteipk($id){

      $ipk = IPK::find($id);
      $ipk->delete();
      return redirect('/ipk')->with('success','data berhasil didelete');
    }
    
    public function jadwal(){
      return view('op.jadwal');
    }
    public function nilai_mhs(){
      $mhs = \App\mahasiswa::all();
      $matkul = \App\Matkul::all();
      return view('op.nilai_mhs',compact('mhs','matkul'));
    }
    public function showNilai($id){
      $mhs1 = \App\mahasiswa::find($id);
      $mhs = \App\mahasiswa::all();
      $matkul = \App\Matkul::all();
      return view('op.showNilai',compact('mhs','mhs1','matkul'));
    }
    public function tabel(){

      $mahasiswa = Auth::user()->dosen->mahasiswa;
      return view('dosen.tabel',compact('mahasiswa'));
    }
    public function profilemhs($id)
    {
      $lihat = mahasiswa::find($id);
      return view('dosen.profile',compact('lihat'));
    }
    public function setting(){
      return view('setting');
    }
    public function tambah(){

            return view('op.post');
    }
    public function konsultasi(){

      $chat = Auth::user()->mahasiswa->pesan;

      return view('mahasiswa.konsultasi',compact('chat'));
    }
    public function showchat($id)
    {
      $chat = \App\Chat::find($id);
      $balas = \App\Balas::where('chat_id',$id)->get();
      //dd($chat->id);
      
      return view('mahasiswa.chat',compact('chat','balas'));
    }
    public function balas(Request $request)
    {
     
      $balas = new \App\Balas;
      $balas->chat_id = $request->chat_id;
      $balas->role = 'mahasiswa';
      $balas->balas = $request->balas;  
      $balas->save();
      //dd($balas);
      return redirect('/konsultasi/'.$balas->chat_id);

    }
    public function konsentrasi()
    {

      $hasil = Auth::user()->mahasiswa->konsentrasi;

      $data = [];
     
//dd($hasil);
      foreach($hasil as $key => $h)
      { 

        $data[$key]['name'] = $h->jalur;
        $data[$key]['y'] = $h->nilai;

        $key++;
        
      }
      // dd($data);
    
      return view('mahasiswa.konsentrasi',compact('data'));
    }
    

    public function createkonsentrasi(Request $request)
    {
      $data = new \App\Konsentrasi;
      $data1 = new \App\Konsentrasi;
      $data2 = new \App\Konsentrasi;
      $data3 = new \App\Konsentrasi;
      $data4 = new \App\Konsentrasi;
      $data->mahasiswa_id = Auth::user()->mahasiswa->id;
      $data1->mahasiswa_id = Auth::user()->mahasiswa->id;
      $data2->mahasiswa_id = Auth::user()->mahasiswa->id;
      $data3->mahasiswa_id = Auth::user()->mahasiswa->id;
      $data4->mahasiswa_id = Auth::user()->mahasiswa->id;
      $data->jalur = 'magang';
      $dataMagang = $request->magang1 + $request->magang2 + $request->magang3 +$request->magang4 +$request->magang5;
      $data1->jalur = 'penelitian';
      $dataPeneliti = $request->penelitian1 + $request->penelitian2 + $request->penelitian3 +$request->penelitian4 +$request->penelitian5;
      $data2->jalur = 'perintisan bisnis';
      $dataPb = $request->pb1 + $request->pb2 + $request->pb3 +$request->pb4 +$request->pb5;
      $data3->jalur = 'kuliah di luar negeri';
      $dataKuliah = $request->kuliah1 + $request->kuliah2 + $request->kuliah3 +$request->kuliah4 +$request->kuliah5;
      $data4->jalur = 'pengabdian';
      $dataPengabdian = $request->pengabdian1 + $request->pengabdian2 + $request->pengabdian3 +$request->pengabdian4 +$request->pengabdian5;

      $total = $dataMagang + $dataKuliah + $dataPb + $dataPeneliti + $dataPengabdian;
      $data->nilai = $dataMagang * 100 / $total;
      $data1->nilai = $dataPeneliti * 100 / $total;
      $data2->nilai = $dataPb * 100 / $total;
      $data3->nilai = $dataKuliah * 100 / $total;
      $data4->nilai = $dataPengabdian * 100 / $total;

      
      $data->save();
      $data1->save();
      $data2->save();
      $data3->save();
      $data4->save();
     // dd($data,$data1,$data2,$data3,$data4);
      return redirect('/konsentrasi');
      
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
