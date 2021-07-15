<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Dokternak')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/price_rangs.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/slicknav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend/assets/css/style.css')); ?>">
        <style>
            .avatar{
                width: 35px;
                height: 35px;
                border-radius: 100%;
                background-color: black;
                border:1px solid white;
            }
        </style>
</head>
<body>

    <?php echo $__env->make('frontend/layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
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
        
</html><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/layouts/app.blade.php ENDPATH**/ ?>