
@extends('layouts.master')

@section('content')
<style>

    .btn {

        padding-top: 5px;

    }
    div .form-check-inline{
      display: inline;
      padding-left: 15px;
    }
    label {
      padding:10px;
    }
    
    .panel {
      width: 70%;
    }

</style>
<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="col-md-12">
<div class="panel">
<div class="panel-heading">
<h3 class="panel-title">Konsultasi Akademik</h3>
</div>
<div class="panel-body">
<form action="/createkonsentrasi" method="POST">
          {{ csrf_field()}}
          <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda akan melanjutkan study s2 ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="magang1" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="magang1" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang1" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang1" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang1" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda bisa Pemrograman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="magang2" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="magang2" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang2" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang2" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang2" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap terjun di dunia kerja ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="magang3" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="magang3" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang3" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang3" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang3" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap komitmen membagi waktu ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="magang4" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="magang4" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang4" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang4" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang4" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda ingin mendapatkan pengalaman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="magang5" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="magang5" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang5" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang5" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="magang5" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda akan melanjutkan study s2 ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="penelitian1" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="penelitian1" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian1" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian1" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian1" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda bisa Pemrograman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="penelitian2" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="penelitian2" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian2" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian2" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian2" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap terjun di dunia kerja ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="penelitian3" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="penelitian3" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian3" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian3" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian3" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap komitmen membagi waktu ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="penelitian4" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="penelitian4" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian4" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian4" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian4" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda ingin mendapatkan pengalaman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="penelitian5" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="penelitian5" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian5" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian5" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="penelitian5" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda akan melanjutkan study s2 ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pb1" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pb1" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb1" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb1" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb1" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda bisa Pemrograman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pb2" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pb2" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb2" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb2" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb2" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap terjun di dunia kerja ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pb3" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pb3" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb3" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb3" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb3" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap komitmen membagi waktu ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pb4" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pb4" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb4" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb4" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb4" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda ingin mendapatkan pengalaman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pb5" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pb5" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb5" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb5" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pb5" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda akan melanjutkan study s2 ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="kuliah1" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="kuliah1" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah1" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah1" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah1" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda bisa Pemrograman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="kuliah2" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="kuliah2" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah2" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah2" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah2" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap terjun di dunia kerja ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="kuliah3" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="kuliah3" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah3" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah3" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pkuliah3" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap komitmen membagi waktu ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="kuliah4" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="kuliah4" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah4" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah4" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah4" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda ingin mendapatkan pengalaman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="kuliah5" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="kuliah5" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah5" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah5" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="kuliah5" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda akan melanjutkan study s2 ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pengabdian1" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pengabdian1" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian1" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian1" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian1" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda bisa Pemrograman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pengabdian2" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pengabdian2" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian2" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian2" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian2" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap terjun di dunia kerja ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pengabdian3" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pengabdian3" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian3" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian3" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian3" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda siap komitmen membagi waktu ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pengabdian4" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pengabdian4" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian4" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian4" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian4" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    <div class="form-group">
          <div class="form-check-inline">
          <label for="">Apakah anda ingin mendapatkan pengalaman ?</label>
          <br>
          <label for="">Tidak</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="pengabdian5" value="1" checked>1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="pengabdian5" value="2"> 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian5" value="3">3
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian5" value="4">4
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="pengabdian5" value="5">5
      </label>
    </div>
    <label for="">Ya</label>
    </div>
    
    <button  class="btn btn-primary">Submit</button>
              
</form>

</div>
<div id="jurusan"></div>

</div>

</div>


</div>

</div>
</div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script></script>
    <script>
  Highcharts.chart('jurusan', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'IPK mahasiswa'
    },
    subtitle: {
        text: 'Uii.ac.id'
    },
    xAxis: {
        categories: {!!json_encode($data) !!},
        crosshair: true,
		title: {
            text: 'Semester'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'IPK'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },
    series: [{
        name: 'jalur',
        data: {!!json_encode($data) !!},
        

    }]
});

    </script>
   
    @endsection
