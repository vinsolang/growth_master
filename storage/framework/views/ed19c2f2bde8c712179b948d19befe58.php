
<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->

            <?php if(Session::has('message')): ?>
                <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
            <?php endif; ?>

            <form id="formAuthentication" class="mb-3" action="<?php echo e(route('submit.login')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="mb-3 items-center">
                <img src="<?php echo e(asset('assets/logo.png')); ?>" alt="" width="150px" height="150px" class="items-center block m-auto">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email or Username</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="name_email"
                  placeholder="Enter your email or username"
                  autofocus
                />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                  />
                  
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" name="remember" value="true" />
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
              </div>
              <div class="mb-3">
                <?php if(Session::has('status')): ?>
                  <small class="text-danger">Invalid Username or Password</small>
                <?php endif; ?>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>

            
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master-login-register', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/auth/login.blade.php ENDPATH**/ ?>