@extends('backend/layouts.template')
  
@section('content')
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row align-items-center mb-2">
          <div class="col">
            <h2 class="h5 page-title">Welcome!</h2>
          </div>
          <div class="col-auto">
            <form class="form-inline">
              <div class="form-group d-none d-lg-inline">
                <label for="reportrange" class="sr-only">Date Ranges</label>
                <div id="reportrange" class="px-2 py-2 text-muted">
                  <span class="small"></span>
                </div>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <header class="panel-heading">
            {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Data Artikel
        </header>
          @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <h2 class="page-title">Form validation</h2>
          <p class="text-muted">Provide valuable, actionable feedback to your users with HTML5 form validation</p>
              <div class="card shadow">
                <div class="card-header">
                  <strong class="card-title">Advanced Validation</strong>
                </div>
                <div class="card-body">
                  <form class="needs-validation" id="artikel_form" method="POST"
                            action="{{ isset($artikel) ? route('data_artikel.update',$artikel->id_artikel) : 
                            route('data_artikel.store') }}">
                                {!! csrf_field() !!}
                                {!! isset($artikel) ? method_field('PUT') : '' !!}
                      <input type="hidden" name="id_artikel" value="{{ isset($artikel) ? $artikel->id_artikel : '' }}"> <br/>
                      <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Kategori</label>
                        <input class="form-control" id="id_ktg" name="kategori" minlength="5" type="text" placeholder="Masukkan kategori"
                        value="{{ isset($artikel) ? $artikel->name : '' }}"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div> <!-- /.form-row -->
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Tanggal</label>
                        <input class="form-control" id="tanggal" name="tangggal" minlength="5" type="date" placeholder="Masukkan tanggal"
                        value="{{ isset($artikel) ? $artikel->tanggal : '' }}"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Nama Penulis</label>
                        <input class="form-control" id="nama_penulis" name="nama_penulis" minlength="5" type="text" placeholder="Masukkan nama penulis"
                        value="{{ isset($artikel) ? $artikel->nama_penulis : '' }}"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Judul</label>
                        <input class="form-control" id="judul" name="judul" minlength="5" type="text" placeholder="Masukkan judul"
                        value="{{ isset($artikel) ? $artikel->judul : '' }}"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Isi</label>
                        <input class="form-control" id="isi" name="isi" minlength="5" type="text" placeholder="tulis isi artikel"
                        value="{{ isset($artikel) ? $artikel->isi : '' }}"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Gambar</label>
                        <input class="form-control" id="gambar" name="gambar" minlength="5" type="text" placeholder="Masukkan gambar"
                        value="{{ isset($artikel) ? $artikel->gambar : '' }}"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Sumber</label>
                      <input class="form-control" id="sumber" name="sumber" minlength="5" type="text" placeholder="Masukkan sumber"
                      value="{{ isset($artikel) ? $artikel->sumber : '' }}"  
                          required>
                      <div class="valid-feedback"> Looks good! </div>
                    </div>
                  </div>
                   
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('data_artikel.index') }}"><button class="btn btn-default"
                        type="button">Cancel</button></a>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->

@endsection