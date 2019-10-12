@extends('layouts.master')

@section('content')

<style>
.panel {
        margin: 150px auto;
        width: 500px;
        padding: 10px;
        border: 1px solid ;
        background: white;
    }
    input[type=text], {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    input[type=submit] {
        margin 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid ;
        cursor: pointer;
    }

</style>
<div class="row">
  <div class="col-sm-auto">
    <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Update Data</h3>
        </div>
        <div class="panel-body">
          <form action="/dosen/{{$dosen->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group-sm" >
                  <label >Nama</label>
                  <input name="Nama"type="text" class="form-control" id="nama"  placeholder="Masukan nama" value="{{$dosen->Nama}}">

                </div>
                <div class="form-group">
                  <label >NIP</label>
                  <input name="NIP" type="text" class="form-control" id="nip" placeholder="masukkan nip" value="{{$dosen->NIP}}">
                </div>
                <div class="form-group">
                  <label >NO HP</label>
                  <input name="HP"type="text" class="form-control" id="No_hp" placeholder="No_HP" value="{{$dosen->HP}}">
                </div>
                <button type="submit" class="btn btn-warning ">Update</button>
                <button class="btn btn-danger "><a href="/dosen"></a>Cancel</button>
              </form>
        </div>
      </div>

  </div>

</div>


@endsection
