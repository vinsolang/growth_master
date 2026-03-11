

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-main-title'); ?>
        UPDATE Licensee
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
                        setTimeout(function() {
                            const alert = document.getElementById('successAlert');
                            if(alert){
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
                <form action="<?php echo e(route('licensee.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text below Banner</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_1" value="<?php echo e($getContent->title_1); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_1" class="form-control" id="desc_1"
                                            placeholder="Description"><?php echo e($getContent->desc_1); ?></textarea>
                                    </div>
                                </div>

                                 <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2" value="<?php echo e($getContent->title_2); ?>"
                                            placeholder="Title" />
                                    </div>
                                </div>
                                <div class="mb-3 col-12">

                                    <div class="mb-3 col-12">
                                        
                                        <div class="mb-2">
                                            <img id="previewimg"
                                                src="<?php echo e(isset($getContent->img) ? asset($getContent->img) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($getContent->img) ? 'block' : 'none'); ?>;">
                                        </div>

                                        
                                        <input class="form-control"
                                            type="file"
                                            name="img"
                                            id="img"
                                            accept="image/*">
                                    </div>
                                </div>
                                <div class="col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="t_1" value="<?php echo e($getContent->t_1); ?>"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="d_1" class="form-control" id="d_1"
                                                placeholder="Description"><?php echo e($getContent->d_1); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="t_2" value="<?php echo e($getContent->t_2); ?>"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="d_2" class="form-control" id="d_2"
                                                placeholder="Description"><?php echo e($getContent->d_2); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="t_3" value="<?php echo e($getContent->t_3); ?>"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="d_3" class="form-control" id="d_3"
                                                placeholder="Description"><?php echo e($getContent->d_3); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="t_4" value="<?php echo e($getContent->t_4); ?>"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="d_4" class="form-control" id="d_4"
                                                placeholder="Description"><?php echo e($getContent->d_4); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_3" value="<?php echo e($getContent->title_3); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_3" class="form-control" id="desc_3"
                                            placeholder="Description"><?php echo e($getContent->desc_3); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_4" class="form-control" id="desc_4"
                                            placeholder="Description"><?php echo e($getContent->desc_4); ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_5" class="form-control" id="desc_5"
                                            placeholder="Description"><?php echo e($getContent->desc_5); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_meet" value="<?php echo e($getContent->title_meet); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_meet" class="form-control" id="desc_meet"
                                            placeholder="Description"><?php echo e($getContent->desc_meet); ?></textarea>
                                    </div>
                                </div>

                                <div class="border border-[#0F4634] mb-3 col-12">
                                    <div class="mb-3 col-12">

                                        <div class="mb-3 col-12">
                                            
                                            <div class="mb-2">
                                                <img id="previewprofile"
                                                    src="<?php echo e(isset($getContent->profile) ? asset($getContent->profile) : ''); ?>"
                                                    width="150"
                                                    class="rounded border"
                                                    style="display: <?php echo e(isset($getContent->profile) ? 'block' : 'none'); ?>;">
                                            </div>

                                            
                                            <input class="form-control"
                                                type="file"
                                                name="profile"
                                                id="profile"
                                                accept="image/*">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="name" value="<?php echo e($getContent->name); ?>"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="position" class="form-control" id="position"
                                                placeholder="Description"><?php echo e($getContent->position); ?></textarea>
                                        </div>
                                          <div class="mb-3 col-12">
                                            <textarea name="desc_him" class="form-control" id="desc_him" rows="4"
                                                placeholder="Description"><?php echo e($getContent->desc_him); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                 <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_final" value="<?php echo e($getContent->title_final); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_final" class="form-control" id="desc_final"
                                            placeholder="Description"><?php echo e($getContent->desc_final); ?></textarea>
                                    </div>
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
            .create(document.querySelector('#desc_4'))
            .catch(error => {
                console.error(error);
        });
        ClassicEditor
            .create(document.querySelector('#desc_5'))
            .catch(error => {
                console.error(error);
        });

</script>
<script>
document.getElementById('img').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img if no file selected
        preview.style.display = '<?php echo e(isset($leaderships->img) ? 'block' : 'none'); ?>';
    }
});
</script>
<script>
document.getElementById('profile').addEventListener('change', function(e){
    const preview = document.getElementById('previewprofile');
    const file = e.target.files[0];

    if(file){
        // Update preview to new profile
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old profile if no file selected
        preview.style.display = '<?php echo e(isset($leaderships->profile) ? 'block' : 'none'); ?>';
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/apply-of-cac/licensee-update.blade.php ENDPATH**/ ?>