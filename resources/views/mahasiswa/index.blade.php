@extends('layouts.master')
@section('content')


<style>

.main{
  position: static;
}

</style>
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tabel Mahasiswa</h3>
                  <i class="fa fa-user-plus right" data-toggle="modal" data-target="#exampleModal"></i>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
                      <tr>
                          <th>Nama</th>
                          <th>Nim</th>
                          <th>Email</th>
                          <th>Jurusan</th>
                          <th>Alamat</th>
                          <th>IPK</th>
                          <th>Tipe Kepribadian</th>
                          <th>Nama DPA</th>
                          <th>Aksi</th>
                      </tr>
                      @foreach($data_mahasiswa as $mahasiswa)
                          <tr>
                          <td>{{$mahasiswa->Nama}}</td>
                          <td>{{$mahasiswa->Nim}}</td>
                          <td>{{$mahasiswa->email}}</td>
                          <td>{{$mahasiswa->jurusan}}</td>
                          <td>{{$mahasiswa->alamat}}</td>
                          <td>{{$mahasiswa->IPK}}</td>
                          <td>{{$mahasiswa->tipe}}</td>
                          <td>{{$mahasiswa->DPA}}</td>
                          <td>
                            <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm fa fa-pencil"></a>
                            <a href="/mahasiswa/{{$mahasiswa->id}}/hapus" class="btn btn-danger btn-sm fa fa-trash" onclick="return confirm('yakin mau di hapus ?')"></a>
                          </td>

                          </tr>
                          @endforeach
                  </table>
									</table>
								</div>
							</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/mahasiswa/create" method="POST">
        {{csrf_field()}}
            <div class="form-groups {{ $errors->has('Nama') ? ' has-error' : '' }}">
              <label>Nama</label>
              <input name="Nama" type="text" value="{{ old('Nama') }}" class="form-control"  placeholder="Masukan nama">
              @if($errors->has('Nama'))
              <span class="help-block">{{$errors->first('Nama')}}</span>
              @endif
            </div>
            <div class="form-group {{$errors->has('Nim') ? 'has-error' : ''}}">
              <label >Nim</label>
              <input name="Nim"type="text" value="{{ old('Nim') }}"  class="form-control"  placeholder="masukkan nim">
              @if($errors->has('Nim'))
              <span class="help-block">{{$errors->first('Nim')}}</span>
              @endif
            </div>
            <div class="form-group {{$errors->has('jurusan') ? 'has-error' : ''}}">
              <label >Jurusan</label>
              <input name="jurusan"type="text" class="form-control"  placeholder="jurusan" value="{{ old('jurusan') }}" >
              @if($errors->has('jurusan'))
              <span class="help-block">{{$errors->first('jurusan')}}</span>
              @endif
            </div>
            <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
              <label >Alamat</label>
              <input name="alamat"type="text" class="form-control"  placeholder="alamat" value="{{ old('alamat') }}" >
              @if($errors->has('alamat'))
              <span class="help-block">{{$errors->first('alamat')}}</span>
              @endif
            </div>
            <div class="form-group {{$errors->has('IPK') ? 'has-error' : ''}}">
              <label >IPK</label>
              <input name="IPK"type="text" class="form-control"  placeholder="IPK" value="{{ old('IPK') }}" >
              @if($errors->has('IPK'))
              <span class="help-block">{{$errors->first('IPK')}}</span>
              @endif
            </div>
            <div class="form-group {{$errors->has('tipe') ? 'has-error' : ''}}">
              <label>Tipe Kepribadian</label>
                <select name="tipe" class="form-control" value="{{ old('tipe') }}" >
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
              @if($errors->has('tipe'))
              <span class="help-block">{{$errors->first('tipe')}}</span>
              @endif
            <div class="form-group {{$errors->has('DPA') ? 'has-error' : ''}}">
              <label>Nama DPA</label>
                <select name="DPA" class="form-control" value="{{ old('DPA') }}" >
                  @foreach($data_dosen as $dosen)
                  <option value="{{}}">{{$dosen->Nama}}</option>
                  @endforeach
                </select>
                @if($errors->has('DPA'))
              <span class="help-block">{{$errors->first('DPA')}}</span>
              @endif
            </div>
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
              <label >Email</label>
              <input name="email"type="email" value="{{ old('email') }}" class="form-control"  placeholder="Email">
              @if($errors->has('email'))
              <span class="help-block">{{$errors->first('email')}}</span>
              @endif
            </div>
            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
              <label >Password</label>
              <input name="password" type="password" class="form-control" value="{{ old('password') }}"   placeholder="password">
            </div>
            @if($errors->has('password'))
              <span class="help-block">{{$errors->first('password')}}</span>
              @endif
            <button type="submit" class="btn btn-primary float-right">Submit</button>
          </form>
      </div>
    </div>
  </div>
@endsection
