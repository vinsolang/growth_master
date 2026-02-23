

<?php $__env->startSection('content'); ?>
<div class="flex justify-center mt-4">
    <div class="w-full max-w-7xl bg-white shadow-xl rounded-2xl p-10">

        <h2 class="text-3xl font-bold text-[#4DA358] text-center mb-8 border-b pb-4">
            Admin Profile
        </h2>

        
        <?php if(session('success')): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-6 text-center">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        
        <?php if(session('error')): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-6 text-center">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('submit.update.profile')); ?>"
              method="POST"
              enctype="multipart/form-data"
              class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php echo csrf_field(); ?>

            
            <div class="flex flex-col items-center">

                <img src="<?php echo e(asset('assets/profile/'.$user->profile)); ?>"
                     class="w-40 h-40 rounded-full border-4 border-[#4DA358] object-contain mb-4">

                <label class="font-semibold mb-2">Change Profile Picture</label>
                <input typxe="file" name="update_profile"
                       class="w-full border rounded-lg p-2">

                <?php $__errorArgs = ['update_profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            
            <div>

                
                <div class="mb-5">
                    <label class="font-semibold mb-2 block">Username</label>
                    <input type="text" name="update_username"
                           value="<?php echo e($user->username); ?>"
                           class="w-full border p-3 rounded-lg">
                </div>

                
                <div class="mb-5">
                    <label class="font-semibold mb-2 block">Email</label>
                    <input type="email" name="update_email"
                           value="<?php echo e($user->email); ?>"
                           class="w-full border p-3 rounded-lg">
                </div>

                
                <div class="mb-5 hidden">
                    <label class="font-semibold mb-2 block">Old Password</label>
                    <input type="password" name="old_password"
                           class="w-full border p-3 rounded-lg">
                </div>

                
                <div class="mb-5">
                    <label class="font-semibold mb-2 block">New Password</label>
                    <input type="password" name="update_password"
                           class="w-full border p-3 rounded-lg">
                </div>

            </div>

            
            <div class="md:col-span-2 text-center">
                <button type="submit"
                        class="bg-[#4DA358] text-white px-10 py-3 rounded-lg font-semibold hover:bg-green-700 transition">
                    Update Profile
                </button>
            </div>

        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/profile.blade.php ENDPATH**/ ?>