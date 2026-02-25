
<?php $__env->startSection('site-title'); ?>
    LOGOUT USER
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row mx-11 my-2">
                <div class="col-xl-12">
                  <!-- HTML5 Inputs -->
                  <div class="card mb-4">
                    <h5 class="card-header">
                        <?php echo $__env->yieldContent('site-title'); ?>
                    </h5>
                    <form action="<?php echo e(route('logout.submit')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                        <div class="mb-3 row">
                        </div>
                        <p>Are you sure do you went to logout?</p>
                        <div class="mb-3 mt-4">
                            <button type="submit" class="btn btn-outline-primary">Logout</button>
                            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-outline-danger">Cancel</a>
                        </div>
                        </div>
                    </form>
                  </div>
                </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/auth/logout.blade.php ENDPATH**/ ?>