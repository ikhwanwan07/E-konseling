
@extends('layouts.master')

@section('content')
<style>
.panel {
        margin: 100px 250px 50px 450px;
        width: 700px;
        padding: 10px;


    }

    .btn {

        padding-top: 5px;

    }
    .form-check-inline {
      display: inline;
      padding: 22px;
    }

</style>
<div class="row">
  <div class="col-sm-auto">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-tittle">Konsultasi Akademik</div>
        </div>
        <div class="panel-body">
          <form action="" method="POST">
            {{csrf_field()}}

                <div class="form-group">
              <label>tipe konsultasi</label>
                <select name="tipe"id="tipe" class="form-control" >
                  <option value="ENFJ">Jalur A</option>
                  <option value="ENFP">Jalur B</option>
                  <option value="ENTJ">jalur C</option>
                </select>
              </div>

              <label>Nilai matkul </label>



              <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optradio">A
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optradio">A-
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optradio">A/B
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optradio">B+
                    </label>
                  </div>


                 <div class="form-group">
                 <textarea name="" id="" cols="30" class="form-control" placeholder="masukkan pesan anda"rows="10"></textarea>

                </div>
                <div>
                <button type="submit" class="btn btn-primary">Submit</button>


                </div>
              </form>



      </div>

    </div>



    </div>
    @endsection
