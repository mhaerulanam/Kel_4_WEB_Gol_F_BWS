@include('petugas/layouts.navbar');

@extends('layouts.petugas')
@section('content')
<header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">  -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <style>
        .emp-profile{
            width: 80%;
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem black;
            background: #f0f0f0;
            /* background-color: rgba(255,255,255,0.8); */
            border-style: 1px solid black ;
        }
        .profile-img{
            text-align: center;
        }
        .profile-img img{
            width: 70%;
            height: 100%;
        }
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        .profile-head h5{
            color: #333;
        }
        .profile-head h6{
            color: #0062cc;
        }
        .profile-edit-btn{
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        .proile-rating{
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        .proile-rating span{
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        .profile-head .nav-tabs{
            margin-bottom:5%;
        }
        .profile-head .nav-tabs .nav-link{
            font-weight:600;
            border: none;
        }
        .profile-head .nav-tabs .nav-link.active{
            border: none;
            border-bottom:2px solid #0062cc;
        }
        .profile-work{
            padding: 14%;
            margin-top: -15%;
        }
        .profile-work p{
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        .profile-work a{
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        .profile-work ul{
            list-style: none;
        }
        /* .nav-tabs{
            background-color: #818182;
        } */
        .nav-item{
            background-color: #818182;
            color: black;
        }
        .profile-tab label{
            font-weight: 600;
        }
        .profile-tab p{
            font-weight: 600;
            color: #818182;
        }
    </style>
   </header>

<main>

<div class="slider-area ">
        <div class="slider-active">
        </div>
<section>
<div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('Petugas/assets/img/gallery/s2.jpg') }}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                            <h2>Hallo!</h2>
                            <h2> Petugas </h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
    <div class="section-tittle text-center">
    <hr><br><br><h2>Akun Profile</h2>
    </div>
<div class="container emp-profile">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="#" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                <input type="file" name="foto" id="foto">
                                Ubah Foto Profil
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h4><b>
                                     Nama Dokter</b>
                                    </h4>
                                    <h6>
                                    Jabatan
                                    </h6>
                                    <p>Tempat</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tsab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Pribadi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dokumen Berkas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="editbiodatadokter.php" class="genric-btn primary">Edit Profile</a> <br><br><br>
                        <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       <div class="profile-work">
                                <center>
                                <input type="submit" name="sfoto" class="genric-btn second" value="Simpan"/> <br><br><br>
                                <label><b>Username : </b></label><br>
                                <label><b>Password : </b></label>
                                </center>
                         </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="container tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama :</label>
                                            </div>
                                    
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jenis Kelamin :</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>No. Handphone/Whatsapp :</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Kecamatan (Tempat Dinas/Praktek) :</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jadwal Kerja :</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat :</label>
                                            </div>
                                            
                                        </div>
                            </div>
                            <div class="container tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sertifikasi :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile-img">
                                                <img src="#" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        </section>

            <section>
                    <!-- Tips dan Trik Start -->
                    <div class="home-blog-area blog-h-padding">
                        <div class="container">
                            <!-- Section Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-tittle text-center">
                                        <span>Artikel Terkini</span>
                                        <h2>TIPS DAN TRIK</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                        <table>
                            <tbody>         
                            <tr>
                                @foreach ($data['artikel'] as $data_artikel)                           
                                    <td>
                                        <div class="col-xl-10 col-lg-10 col-md-10">
                                                <div class="home-blog-single mb-30">
                                                    <div class="blog-img-cap">
                                                        <div class="blog-img">  
                                                            <!-- <img src="assets/img/blog/home-blog1.jpg" alt=""> -->
                                                            <!-- Baris img src dibawah ini untuk memanggil gambar sesuai syntax di gambar.php -->
                                                            <img class="card-img rounded-0" src="/data/data_artikel/{{ $data_artikel->gambar }}"alt="post" width="100px"/>
                                                            <div class="blog-date text-center">
                                                                <span>{{ $data_artikel->tanggal }}</span>
                                                                <p>Kategori :{{ $data_artikel->id_ktg }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="blog-cap">
                                                            <p>{{ $data_artikel->nama_penulis}}</p>
                                                            <h3>{{ $data_artikel->judul }}<a href="detailartikel.php?id_artikel={{ $data_artikel->judul }}"></a></h3>
                                                            <a href="#" class="more-btn">Read more »</a>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </td>
                            @endforeach
                            </tr>
                            </tbody>
                        </table> 
                    <!-- Blog Area End -->
                    </div>
            </section>

    

        <!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('Petugas/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('Petugas/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('Petugas/assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('Petugas/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/price_rangs.js') }}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('Petugas/assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('Petugas/assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('Petugas/assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('Petugas/assets/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('Petugas/assets/js/contact.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('Petugas/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('Petugas/assets/js/main.js') }}"></script>
</body>
</html>