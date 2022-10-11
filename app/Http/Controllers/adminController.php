<?php

namespace App\Http\Controllers;


use App\Lib\KMeans;
use App\Imports\mahasiswaImport;
use App\Exports\mahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Artikel;
use App\categoris;
use App\mahasiswa;
use App\User;
use App\IPK;
use App\Data;
use Auth;
use Alert;
use App\Konsentrasi;
use DB;
use App\Jadwal;
use App\Nilai;

class adminController extends Controller
{
  public function index()
  {
    return view('op.index');
  }
  public function show()
  {

    $posts = Artikel::paginate(5);
    return view('op.tabelpost', compact('posts'));
  }
  public function edit($id)
  {
    $post = \App\Artikel::find($id);
    return view('op.edit', ['post' => $post]);
  }
  public function tipe()
  {
    return view('dosen.tipe');
  }
  public function ipk()
  {

    $mahasiswa = mahasiswa::all();
    $ipk = \App\IPK::all();
    return view('op.IPK', compact('mahasiswa', 'ipk'));
  }
  public function showipk($id)
  {

    $mahasiswa = mahasiswa::find($id);
    $mhs = mahasiswa::all();
    //dd($mahasiswa->ipk);

    return view('op.showIPK', compact('mahasiswa', 'mhs'));
  }

  public function editipk($id){
    $dataipk = IPK::find($id);
    return view('op.editIPK',compact('dataipk'));
  }

  public function updateipk($id, Request $request)
  {

    $ipk = IPK::find($id);

    if (IPK::where('mahasiswa_id','=',$request->mahasiswa_id)
      ->where('tahun_ajaran','=',$request->tahun_ajaran)
      ->where('semester','=',$request->semester)
      ->exists()) {
    return redirect()->back()->with('info','data sudah ada');
    }else {
      $ipk->update($request->all());
      return redirect('ipk/'.$request->mahasiswa_id);
    }
   
   
  }

  public function ipkcreate(Request $request){
// if ($orderers = DB::table('ipk')->where(function($query) use ($term) {
//   $query->where('mahasiswa_id',$request->mahasiswa_id)
//           ->where('tahun_ajaran',$request->tahun_ajaran)
//           ->where('semester',$request->semester)
// })->exist()) {
//   return redirect()->back()->with('info','data sudah ada');
// }else {
//   $ipk = \App\IPK::create($request->all());
//    return redirect('/ipk')->with('success', 'data berhasil ditambah');
// } 



    if (IPK::where('mahasiswa_id','=',$request->mahasiswa_id)
      ->where('tahun_ajaran','=',$request->tahun_ajaran)
      ->where('semester','=',$request->semester)
      ->exists()) {
    return redirect()->back()->with('info','data sudah ada');
    }else {
    $ipk = \App\IPK::create($request->all());
    return redirect('/ipk')->with('success', 'data berhasil ditambah');
    }
    //return $ipk;

  }

  public function deleteipk($id)
  {
    
    $ipk = IPK::find($id);
    $ipk->delete();
    $mhsid = $ipk->mahasiswa_id;
    return redirect('ipk/'.$mhsid)->with('success', 'data berhasil didelete');
  }

  public function jadwal()
  {
    $jadwal = Jadwal::all();
    return view('op.jadwal', compact('jadwal'));
  }
  public function nilai_mhs()
  {
    $mhs = \App\mahasiswa::all();
    $matkul = \App\Matkul::all();
    return view('op.nilai_mhs', compact('mhs', 'matkul'));
  }

  public function addnilai_mhs(Request $request,$mhsid){
    // dd($request->all());
    $mhs = \App\mahasiswa::findorFail($mhsid);

    if(Nilai::where('mahasiswa_id','=',$request->mahasiswa_id)
        ->where('matkul_id','=',$request->matkul_id)
        ->exists()) {
          // return "data sudah ada gan";
           return redirect('/nilai_mhs')->with('info','data sudah ada');
        }else{
    $mhs->matkul()->attach($request->matkul_id,['nilai' => $request->nilai]);
    return redirect('nilai/'.$mhsid);
  }
    // return $mhs;
  }

  public function deleteNilai($id)
  { 
    return "ini delete nilai";
  }
  public function editNilai($id)
  {
    $dataNilai = Nilai::find($id);
    $mhs = \App\mahasiswa::all();
    $matkul = \App\Matkul::all();
    return view('op.edit_nilai_mhs',compact('dataNilai','mhs','matkul'));
  }
  public function updateNilai(Request $request,$id)
  {
     $mhs = \App\mahasiswa::findorFail($id);
     $mhs->matkul()->updateExistingPivot($request->matkul_id,['nilai' => $request->nilai]);
    // return $request->all();
    
    // if(Nilai::where('mahasiswa_id','=',$request->mahasiswa_id)
    //     ->where('matkul_id','=',$request->matkul_id)
    //     ->exists()) {
    //       // return "data sudah ada gan";
    //        return redirect('/nilai_mhs')->with('info','data sudah ada');
    //     }else{
    // $mhs->matkul()->updateExistingPivot($request->matkul_id,['nilai' => $request->nilai]);
    return redirect('nilai/'.$id);
    // return "ini update nilai";
  // }
}

  public function showNilai($id)
  {
    $mhs1 = \App\mahasiswa::find($id);
    $mhs = \App\mahasiswa::all();
    $matkul = \App\Matkul::all();
    return view('op.showNilai', compact('mhs', 'mhs1', 'matkul'));
  }
  public function tabel()
  {

    $mahasiswa = Auth::user()->dosen->mahasiswa;
    return view('dosen.tabel', compact('mahasiswa'));
  }
  public function profilemhs($id)
  {
    $lihat = mahasiswa::find($id);
    $mhs = $lihat->matkul;
    $ipk1 = $lihat->ipk;


    $data = [];
    $data2 = [];
    foreach ($ipk1 as $m) {
      if ($ipk1->first()) {
        $data[] = $m->semester;
        $data2[] = $m->ipk;
      }
    }
    //dd($data2);

    return view('dosen.profile', compact('lihat', 'data', 'data2'));
  }
  public function setting()
  {
    return view('setting');
  }
  public function tambah()
  {

    return view('op.post');
  }
  public function konsultasi()
  {

    $chat = Auth::user()->mahasiswa->pesan;

    return view('mahasiswa.konsultasi', compact('chat'));
  }
  public function showchat($id)
  {
    $chat = \App\Chat::find($id);
    $balas = \App\Balas::where('chat_id', $id)->get();
    //dd($chat->id);

    return view('mahasiswa.chat', compact('chat', 'balas'));
  }
  public function balas(Request $request)
  {

    $balas = new \App\Balas;
    $balas->chat_id = $request->chat_id;
    $balas->role = 'mahasiswa';
    $balas->balas = $request->balas;
    $balas->save();
    //dd($balas);
    return redirect('/konsultasi/' . $balas->chat_id);
  }
  public function konsentrasi()
  {

    $hasil = Auth::user()->mahasiswa->konsentrasi;

    $data = [];

    //dd($hasil);
    foreach ($hasil as $key => $h) {

      $data[$key]['name'] = $h->jalur;
      $data[$key]['y'] = $h->nilai;

      $key++;
    }
    // dd($data);

    return view('mahasiswa.konsentrasi', compact('data'));
  }


  public function createkonsentrasi(Request $request)
  {
    $data = new \App\Konsentrasi;
    $data1 = new \App\Konsentrasi;
    $data2 = new \App\Konsentrasi;
    $data3 = new \App\Konsentrasi;
    $data4 = new \App\Konsentrasi;
    $mahasiswa_id =  Auth::user()->mahasiswa->id;

    $data->mahasiswa_id = Auth::user()->mahasiswa->id;
    $data1->mahasiswa_id = Auth::user()->mahasiswa->id;
    $data2->mahasiswa_id = Auth::user()->mahasiswa->id;
    $data3->mahasiswa_id = Auth::user()->mahasiswa->id;
    $data4->mahasiswa_id = Auth::user()->mahasiswa->id;
    $data->jalur = 'magang';
    $dataMagang = $request->magang1 + $request->magang2 + $request->magang3 + $request->magang4 + $request->magang5;
    $data1->jalur = 'penelitian';
    $dataPeneliti = $request->penelitian1 + $request->penelitian2 + $request->penelitian3 + $request->penelitian4 + $request->penelitian5;
    $data2->jalur = 'perintisan bisnis';
    $dataPb = $request->pb1 + $request->pb2 + $request->pb3 + $request->pb4 + $request->pb5;
    $data3->jalur = 'kuliah di luar negeri';
    $dataKuliah = $request->kuliah1 + $request->kuliah2 + $request->kuliah3 + $request->kuliah4 + $request->kuliah5;
    $data4->jalur = 'pengabdian';
    $dataPengabdian = $request->pengabdian1 + $request->pengabdian2 + $request->pengabdian3 + $request->pengabdian4 + $request->pengabdian5;

    $total = $dataMagang + $dataKuliah + $dataPb + $dataPeneliti + $dataPengabdian;
    $data->nilai = $dataMagang * 100 / $total;
    $data1->nilai = $dataPeneliti * 100 / $total;
    $data2->nilai = $dataPb * 100 / $total;
    $data3->nilai = $dataKuliah * 100 / $total;
    $data4->nilai = $dataPengabdian * 100 / $total;


    if (Konsentrasi::where('mahasiswa_id', $mahasiswa_id)->exists()) {
      // post with the same slug already exists
      return redirect()->back()->with('info', 'data konsentrasi sudah ada');
    } else {
      $data->save();
      $data1->save();
      $data2->save();
      $data3->save();
      $data4->save();
      // dd($data,$data1,$data2,$data3,$data4);
      return redirect('/konsentrasi')->with('success', 'data berhasil di tambah');
    }
  }


  public function postBerita(Request $request)
  {

    Artikel::create([
      'title' => request('title'),
      'kategori' => request('kategori'),
      'content' => request('content'),

    ]);

    return redirect('tabelpost');
  }
  public function update($id, Request $request)
  {
    $post = \App\Artikel::find($id);
    $post->update($request->all());
    return redirect('tabelpost');
  }
  public function delete($id)
  {
    $post = \App\Artikel::find($id);
    $post->delete();
    return redirect('tabelpost')->with('sukses', 'data berhasil didelete');
  }
  public function sistem()
  {

    $data = \App\Data::all();
    return view('op.sistem', compact('data'));
  }

  public function proses($cluster, $iteration = null, $centroids = null)
  {
    //get data
    $data = Data::all()->toArray();

    //init kmeans object
    $kmeans = new KMeans($data, $cluster);
    //set label berdasarkan data (berdasarkan nama kolom pada data)
    $kmeans->setLabel('nim');
    // set attribute untuk data matriks clustering (berdasarkan nama kolom pada data)
    $kmeans->setAttributes(['ipk_sem_1', 'ipk_sem_2', 'ipk_sem_3', 'ipk_sem_4', 'ipk_sem_5']);

    $custom = [];
    if ($iteration != null) {
      $custom[] = $iteration;
    }

    if ($centroids != null) {
      $array_centroid = explode(',', $centroids);
      if (sizeof($array_centroid) != $cluster) {
        return ['status' => 'error', 'message' => 'Jumlah centroid harus sama dengan cluster!'];
      }
      if (in_array('', $array_centroid) || in_array(null, $array_centroid)) {
        return ['status' => 'error', 'message' => 'Centroid harus terisi semua!'];
      }
      $custom[] = $array_centroid;
    }

    $kmeans->setCustom($custom);

    //return hasil clustering
    return $kmeans->clustering();
  }

  public function export_excel()
  {
    return Excel::download(new mahasiswaExport, 'siswa.xlsx');
  }

  public function import_excel(Request $request)
  {
    //Remove all data first
    Data::truncate();

    // validasi
    $this->validate($request, [
      'file' => 'required|mimes:csv,xls,xlsx'
    ]);

    // menangkap file excel
    $file = $request->file('file');

    // membuat nama file unik
    $nama_file = rand() . $file->getClientOriginalName();

    // upload ke folder file_siswa di dalam folder public
    $file->move('file_cluster', $nama_file);

    // import data
    Excel::import(new mahasiswaImport, public_path('/file_cluster/' . $nama_file));

    // alihkan halaman kembali
    return redirect('/sistem')->with('success', 'Data Berhasil Diimport!');
  }
}
