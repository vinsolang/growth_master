<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="backend/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(url('backend/img/favicon/favicon.ico')); ?>" />
    <!-- Fonts -->
    <link rel="preconnect" href="<?php echo e(url('https://fonts.googleapis.com')); ?>" />
    <link rel="preconnect" href="<?php echo e(url('https://fonts.gstatic.com')); ?>" crossorigin />
    <link href="<?php echo e(url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap')); ?>"rel="stylesheet">
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/fonts/boxicons.css')); ?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/core.css')); ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/theme-default.css')); ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/demo.css')); ?>" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/pages/page-auth.css')); ?>" />
    <!-- Helpers -->
    <script src="<?php echo e(url('backend/vendor/js/helpers.js')); ?>"></script>
    <script src="<?php echo e(url('backend/js/config.js')); ?>"></script>
    
    <link rel="icon" href="<?php echo e(asset('image/logo.png')); ?>">
  </head>

  <body>
    <!-- Content -->

    <?php echo $__env->yieldContent('content'); ?>
    
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- / Content -->

    <script src="<?php echo e(asset('vendor/libs/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/libs/popper/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/menu.js')); ?>"></script>
    <!-- Main JS -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <!-- Page JS -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="<?php echo e(url('https://buttons.github.io/buttons.js')); ?>"></script>
  </body>
</html>
<?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/master-login-register.blade.php ENDPATH**/ ?>