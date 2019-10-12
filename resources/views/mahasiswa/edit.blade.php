
@extends('layouts.master')

@section('content')
<style>
.panel {
        margin: 100px 250px 50px 450px;
        width: 500px;
        padding: 10px;
        border: 1px solid ;

    }
    input[type=text], {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    .btn {

        padding-top: 5px;

    }

</style>
<div class="row">
  <div class="col-sm-auto">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-tittle">Update Data Mahasiswa</div>
        </div>
        <div class="panel-body">
          <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                  <label >Nama</label>
                  <input name="Nama"type="text" class="form-control" id="nama"  placeholder="Masukan nama" value="{{$mahasiswa->Nama}}">

                </div>
                <div class="form-group">
                  <label >Nim</label>
                  <input name="Nim"type="text" class="form-control" id="nim" placeholder="masukkan nim" value="{{$mahasiswa->Nim}}">
                </div>
                <div class="form-group">
                  <label >Jurusan</label>
                  <input name="jurusan"type="text" class="form-control" id="jurusan" placeholder="jurusan" value="{{$mahasiswa->jurusan}}">
                </div>
                <div class="form-group">
                  <label >Alamat</label>
                  <input name="alamat"type="text" class="form-control"  placeholder="alamat" value="{{$mahasiswa->alamat}}">
                </div>
                <div class="form-group">
                  <label >IPK</label>
                  <input name="IPK"type="text" class="form-control"  placeholder="IPK" value="{{$mahasiswa->IPK}}">
                </div>
                <div class="form-group">
              <label>Tipe Kepribadian</label>
                <select name="tipe"id="tipe" class="form-control" value="{{$mahasiswa->tipe}}">
                  <option value="ENFJ">ENFJ</option>
                  <option value="ENFP">ENFP</option>
                  <option value="ENTJ">ENTJ</option>
                  <option value="ENTP">ENTP</option>
                  <option value="ESFJ">ESFJ</option>
                  <option value="ESFP">ESFP</option>
                  <option value="ESTJ">ESTJ</option>
                  <option value="ESTP">ESTP</option>
                  <option value="INTP">INTP</option>
                  <option value="INTJ">INTJ</option>
                  <option value="INFP">INFP</option>
                  <option value="INFJ">INFJ</option>
                  <option value="ISFJ">ISFJ</option>
                  <option value="ISFP">ISFP</option>
                  <option value="ISTJ">ISTJ</option>
                  <option value="ISTP">ISTP</option>
              </select>
                <div class="form-group">
                  <label>Nama DPA</label>
                    <select name="DPA"id="dpa" class="form-control" value="{{$mahasiswa->DPA}}">
                      @foreach($data_dosen as $dosen)
                      <option>{{$dosen->Nama}}</option>
                      @endforeach
                    </select>

                </div>
                <button type="submit" class="btn btn-warning">Update</button>
                <button class="btn btn-danger"><a href="/mahasiswa"></a>Cancel</button>
              </form>



      </div>

    </div>



    </div>
    @endsection
