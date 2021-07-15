<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Dokternak.id - Tips dan Trik </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  
   <!-- CSS here -->
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/owl.carousel.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/slicknav.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/price_rangs.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/animate.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/magnific-popup.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/fontawesome-all.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/themify-icons.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/slick.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/nice-select.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/style.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/responsive.css')); ?>">
</head>

<body>

<?php echo $__env->make('frontend/layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

   <!-- Hero Area Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="<?php echo e(asset('Frontend/assets/img/gallery/s2.jpg')); ?>">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>TIPS DAN TRIK</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Hero Area End -->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
             
            <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img src="/data/data_artikel/<?php echo e($artikel->gambar); ?>" width="650">
                     </div>
                     <div class="blog_details">
                           <h2><?php echo e($artikel->judul); ?></h2>
                           <ul class="blog-info-link mt-3 mb-4">
                              <li><a href="#"><i class="fa fa-user"></i> <?php echo e($artikel->nama_penulis); ?></a></li>
                              <li><a href="#"><i></i><?php echo e($artikel->kategori_artikel); ?></a></li>
                              <li><a href="#"><i class="fa fa-comments"></i><?php echo e($artikel->tanggal); ?></a></li>
                           </ul>
                           <p class="excert">
                              <?php echo e($artikel->isi); ?>

                           </p>
                           <div class="quote-wrapper">
                              <div class="quotes">
                              <p><?php echo e($artikel->sumber); ?></p>
                           </div>
                     </div>
                  </div>
               </div>
               
                <!-- Icon Bagikan -->
                <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
               </div>

               
            </div>

            <!-- Sidebar kanan -->
            <div class="col-lg-4">
               <div class="blog_right_sidebar">

               <!-- Tulis Artikel -->
                    <div class="btn_tulis">
                            <div class="items-link f-center">
                                <a href="/artikel" class="genric-btn primary">DAFTAR ARTIKEL</a>
                                </div>
                     </div>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Category</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Kucing</p>
                                            <p>(3)</p>
                                        </a>
                                    </li>   
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Kambing</p>
                                            <p>(2)</p>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Ikan</p>
                                            <p>(2)</p>
                                        </a>
                                    </li>                           
                                </ul>
                            </aside>
                  
                  <!-- Artikel Lainnya -->
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Artikel Lainnya</h3>
                     <?php $__currentLoopData = $artikel2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                     <div class="media post_item">
                           <img src="data:image/png;base64,<?php echo e(chunk_split(base64_encode($data_artikel->gambar))); ?>" width="120px" />
                           <div class="media-body">
                                 <a href="detailartikel.php?id_artikel=">
                                    <h6><?php echo e($data_artikel->judul); ?></h6>
                                 </a>
                                 <p><?php echo e($data_artikel->tanggal); ?></p>
                           </div>
                     </div> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </aside>
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
   
 <!-- JS here -->
	
		  <!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo e(asset('Petugas/assets/js/vendor/modernizr-3.5.0.min.js')); ?>"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="<?php echo e(asset('Petugas/assets/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/bootstrap.min.js')); ?>"></script>
        <!-- Jquery Mobile Menu -->
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.slicknav.min.js')); ?>"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?php echo e(asset('Petugas/assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/price_rangs.js')); ?>"></script>
        
        <!-- One Page, Animated-HeadLin -->
        <script src="<?php echo e(asset('Petugas/assets/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/animated.headline.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.magnific-popup.js')); ?>"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.scrollUp.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.nice-select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.sticky.js')); ?>"></script>
        
        <!-- contact js -->
        <script src="<?php echo e(asset('Petugas/assets/js/contact.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.form.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/mail-script.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/jquery.ajaxchimp.min.js')); ?>"></script>
        
        <!-- Jquery Plugins, main Jquery -->	
        <script src="<?php echo e(asset('Petugas/assets/js/plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('Petugas/assets/js/main.js')); ?>"></script>
      
        
      
</body>
</html><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/frontend/detailartikel.blade.php ENDPATH**/ ?>