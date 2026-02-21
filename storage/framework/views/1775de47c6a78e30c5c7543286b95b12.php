
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php $__env->startSection('site-title'); ?>
            Admin | Dashboard
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('page-main-title'); ?>
            ADMIN DASHBOARD 
        <?php $__env->stopSection(); ?>

        <div class="container-xxl grow container-p-y">
            <div class="flex items-center justify-center min-h-screen">
                <h1 class="text-center text-7xl font-bold">
                    Welcome to <br /> <br>
                    GROWTH MASTERS <br />
                </h1>
            </div>
        </div>
        <!-- / Content -->
    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/welcome.blade.php ENDPATH**/ ?>