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
            {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Peternak
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
                  <form class="needs-validation" id="userdokter_form" method="POST"
                            action="{{ isset($userdokter) ? route('userdokter.update',$userdokter->id) : 
                            route('userdokter.store') }}">
                                {!! csrf_field() !!}
                                {!! isset($userdokter) ? method_field('PUT') : '' !!}
                      <input type="hidden" name="id" value="{{ isset($userdokter) ? $userdokter->id : '' }}"> <br/>
                      <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom3">Nama Lengkap</label>
                        <input class="form-control" id="name" name="name" minlength="5" type="text" placeholder="Masukkan nama"
                        value="{{ isset($userdokter) ? $userdokter->name : '' }}"  
                            required>
                        <div class="valid-feedback"> Looks good! </div>
                      </div>
                    </div> <!-- /.form-row -->
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationCustomUsername">Username</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" name="username" minlength="5" placeholder="Masukkan username" aria-describedby="inputGroupPrepend" 
                        value="{{ isset($userdokter) ? $userdokter->username : '' }}"  
                        required>
                        <div class="invalid-feedback"> Please choose a username. </div>
                      </div>
                    </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-8 mb-3">
                        <label for="exampleInputEmail2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" name="email" minlength="5" placeholder="Masukkan email" aria-describedby="Masukkan email" 
                        value="{{ isset($userdokter) ? $userdokter->email : '' }}"  
                        required>
                        <div class="invalid-feedback"> Please use a valid email </div>
                        <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                    </div> <!-- /.form-row -->
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationCustomPassword">Password</label>
                      <div class="input-group">
                        <input type="password" class="form-control" id="validationCustomPassword" name="password" minlength="5" placeholder="Masukkan password" aria-describedby="inputGroupPrepend" 
                        value="{{ isset($userdokter) ? $userdokter->password : '' }}"  
                        required>
                        <div class="invalid-feedback"> Please choose a password. </div>
                      </div>
                    </div>
                    </div>
                   
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('userdokter.index') }}"><button class="btn btn-default"
                        type="button">Cancel</button></a>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->

@endsection