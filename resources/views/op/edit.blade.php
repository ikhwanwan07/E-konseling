@extends('layouts.master')

@section('content')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<style>
.panel {
        margin: 100px auto;
        margin-left:280px;;
        width: 1000px;
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
        <div class="panel-tittle">Post Artikel</div>
        </div>
        <div class="panel-body">
          <form action="/Berita/{{$post->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                  <label >Judul</label>
                  <input name="title" type="text" class="form-control"  placeholder="Masukan nama" " value="{{$post->title}}">
                </div>
                <div class="form-group">
                <label >Kategori</label>
                <select name="kategori" value="{{$post->kategori}}" class="form-control">
                <option value="event">Event</option>
                <option value="info">Info</option>
                
                  </select>
                </div>
                <div class="form-group">
                <textarea name="content" class="form-control" >{{$post->content}}</textarea>
                
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
                <button class="btn btn-danger"><a href="tabelpost"></a>Cancel</button>
              </form>



      </div>

    </div>



    </div>

@endsection
