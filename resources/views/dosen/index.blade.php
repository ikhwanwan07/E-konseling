@extends('layouts.master')

@section('content')
<style>
.main{
  margin-left:280px;
  width:100%;


}
.panel{
  width:900px;
}

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif


<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tabel Dosen</h3>
                  <i class="fa fa-user-plus right" data-toggle="modal" data-target="#exampleModal"></i>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
<table class="table table-hover">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>NIP</th>
        <th>NO HP</th>
        <th>Aksi</th>

    </tr>
    @foreach($data_dosen as $dosen)
        <tr>
        <td>{{$dosen->Nama}}</td>
        <td>{{$dosen->email}}</td>
        <td>{{$dosen->NIP}}</td>
        <td>{{$dosen->HP}}</td>
        <td>
          <a href="/dosen/{{$dosen->id}}/edit" class="btn btn-warning btn-sm fa fa-pencil"></a>
          <a href="/dosen/{{$dosen->id}}/hapus" class="btn btn-danger btn-sm fa fa-trash" onclick="return confirm('yakin mau di hapus ?')"></a>

        </td>

        </tr>
        @endforeach
</table>
<div>{{$data_dosen->links()}}</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="documenllt">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="dosen/create" method="POST">
          {{csrf_field()}}
              <div class="form-group" >
                <label >Nama</label>
                <input name="Nama"type="text" class="form-control" id="nama"  placeholder="Masukan nama">
              </div>
              <div class="form-group" >
                <label >Email</label>
                <input name="email"type="email" class="form-control" id="Email"  placeholder="Email">
              </div>
              <div class="form-group">
                <label >NIP</label>
                <input name="NIP" type="text" class="form-control" id="nip" placeholder="masukkan nip">
              </div>
              <div class="form-group">
                <label >NO HP</label>
                <input name="HP"type="text" class="form-control" id="No_hp" placeholder="No_HP">
              </div>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>

            
      </div>
    </div>
  </div>
</div>

@endsection
