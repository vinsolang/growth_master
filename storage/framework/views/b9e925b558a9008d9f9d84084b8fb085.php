

<?php $__env->startSection('content'); ?>
  <?php $__env->startComponent('components.navbar'); ?>
  <?php echo $__env->renderComponent(); ?>
  <?php echo $__env->make('frontend.homesection.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  
  

  <?php $__env->startComponent('components.footer'); ?>
  
  <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/home.blade.php ENDPATH**/ ?>