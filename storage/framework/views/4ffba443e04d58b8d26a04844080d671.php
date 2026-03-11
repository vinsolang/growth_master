

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-main-title'); ?>
        UPDATE Referral Program
    <?php $__env->stopSection(); ?>

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">

                <?php if(session('success')): ?>
                    <div id="successAlert" class="mb-4 rounded bg-green-100 border border-green-400 text-green-800 px-4 py-3">
                        <?php echo e(session('success')); ?>

                    </div>

                    <script>
                        // Hide after 5 seconds (5000ms)
                        setTimeout(function () {
                            const alert = document.getElementById('successAlert');
                            if (alert) {
                                // Fade out smoothly
                                alert.style.transition = "opacity 0.5s ease";
                                alert.style.opacity = "0";

                                // Remove from DOM after fade
                                setTimeout(() => alert.remove(), 500);
                            }
                        }, 5000);
                    </script>
                <?php endif; ?>

                <!-- File input -->
                <form action="<?php echo e(route('referralprogram.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_1" class="form-control" id="desc_1"
                                            placeholder="Description"><?php echo e($getContent->desc_1); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <div id="jsonWrapper" class="space-y-3">
                                        
                                        <?php if(isset($getContent->img_json) && isset($getContent->title_json)): ?>
                                            <?php
                                                $images = is_string($getContent->img_json) ? json_decode($getContent->img_json, true) : ($getContent->img_json ?? []);
                                                $titles = is_string($getContent->title_json) ? json_decode($getContent->title_json, true) : ($getContent->title_json ?? []);
                                            ?>

                                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="border border-[#0F4634] p-3 relative jsonItem">
                                                    <div class="mb-2">
                                                        <img src="<?php echo e(asset($image)); ?>" width="150" class="rounded border previewImg">
                                                    </div>
                                                    <input type="file" name="img_json[]" class="form-control imgInput" accept="image/*">
                                                    <input type="hidden" name="old_img_json[]" value="<?php echo e($image); ?>">
                                                    <div class="mt-2">
                                                        <textarea name="title_json[]" class="form-control" placeholder="Description"><?php echo e($titles[$index] ?? ''); ?></textarea>
                                                    </div>
                                                    <button type="button" class="rabsolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center removeItem hover:bg-red-600">&times;</button>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>

                                    <button type="button" id="addJsonItem" class="mt-2 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">+ Add</button>
                                </div>


                                <div class="flex gap-3">
                                    <input type="submit"
                                        class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                        value="Submit">
                                </div>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#desc_1'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
const jsonWrapper = document.getElementById('jsonWrapper');
const addBtn = document.getElementById('addJsonItem');

addBtn.addEventListener('click', function() {
    const html = `
    <div class="border border-[#0F4634] p-3 relative jsonItem">
        <div class="mb-2">
            <img src="" width="150" class="rounded border previewImg" style="display:none;">
        </div>
        <input type="file" name="img_json[]" class="form-control imgInput" accept="image/*">
        <div class="mt-2">
            <textarea name="title_json[]" class="form-control" placeholder="Description"></textarea>
        </div>
        <button type="button" class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center removeItem hover:bg-red-600">&times;</button>
    </div>
    `;
    jsonWrapper.insertAdjacentHTML('beforeend', html);
});

// Remove item
jsonWrapper.addEventListener('click', function(e){
    if(e.target.classList.contains('removeItem')){
        e.target.closest('.jsonItem').remove();
    }
});

// Image preview
jsonWrapper.addEventListener('change', function(e){
    if(e.target.classList.contains('imgInput')){
        const file = e.target.files[0];
        const preview = e.target.closest('.jsonItem').querySelector('.previewImg');

        if(file){
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/apply-of-cac/referral-program.blade.php ENDPATH**/ ?>