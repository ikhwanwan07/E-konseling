@extends('layouts.master')
@section('content')


<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
            <div class="panel">
				<div class="panel-heading">
				<h3 class="panel-title">Mahasiswa</h3>
                  
				</div>
				<div class="panel-body">
<table class="table table-hover">

    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>NIM</th>
        <th>Dosen</th>
        <th>Type</th>
        <th></th>

    </tr>
    @foreach($mahasiswa as $m)
        <tr>
        <td><a href="{{route('showProfile',$m)}}">{{$m->Nama}}</a></td>
        <td>{{$m->email}}</td>
        <td>{{$m->Nim}}</td>
        <td>{{$m->dosen->Nama}}</td>
        <td>{{$m->tipe->nama}}</td>
        </tr>
        @endforeach
</table>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection


