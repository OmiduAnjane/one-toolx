<link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>"/>

<!-- Pace -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/pace-theme-default.min.css')); ?>">

<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome.min.css')); ?>">

<?php
  $dir_mode = ( Cookie::get('dir_mode') ) ? Cookie::get('dir_mode') : 'ltr';
?>
 <!-- Theme CSS -->
<link type="text/css" href="<?php echo e(asset('assets/css/main.'.$dir_mode.'.min.css')); ?>" rel="stylesheet">

<!-- Toastr -->
<link href="<?php echo e(asset('assets/css/toastr.min.css')); ?>" rel="stylesheet">

<!-- Aweet Alert 2 -->
<link href="<?php echo e(asset('assets/css/sweetalert2.min.css')); ?>" rel="stylesheet">

<!-- Custom -->
<link type="text/css" href="<?php echo e(asset('assets/css/custom.css')); ?>" rel="stylesheet">

<!-- jQuery -->
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>   <?php /**PATH C:\xampp\htdocs\laravel\sumowebtools\components\resources\views/components/admin/headerAssets.blade.php ENDPATH**/ ?>