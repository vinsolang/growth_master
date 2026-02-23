

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-main-title'); ?>
        UPDATE Lead Group
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
                <?php if($errors->any()): ?>
                    <div class="mb-4 rounded bg-red-100 border border-red-400 text-red-700 px-4 py-3">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>• <?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <!-- File input -->
                <form action="<?php echo e(route('submit.leadgroup')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Block 1</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_b_1"
                                            value="<?php echo e($leadgroup->title_b_1); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_b_1" class="form-control" id="desc_b_1"
                                            placeholder="Description"><?php echo e($leadgroup->desc_b_1); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">

                                        <div class="mb-3 col-12">
                                            
                                            <div class="mb-2">
                                                <img id="previewimg_b_1"
                                                    src="<?php echo e(isset($leadgroup->img_b_1) ? asset($leadgroup->img_b_1) : ''); ?>"
                                                    width="150"
                                                    class="rounded border"
                                                    style="display: <?php echo e(isset($leadgroup->img_b_1) ? 'block' : 'none'); ?>;">
                                            </div>

                                            
                                            <input class="form-control"
                                                type="file"
                                                name="img_b_1"
                                                id="img_b_1"
                                                accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Block 2</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_b_2"
                                            value="<?php echo e($leadgroup->title_b_2); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_b_2" class="form-control" id="desc_b_2"
                                            placeholder="Description"><?php echo e($leadgroup->desc_b_2); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">

                                        <div class="mb-3 col-12">
                                            
                                            <div class="mb-2">
                                                <img id="previewimg_b_2"
                                                    src="<?php echo e(isset($leadgroup->img_b_2) ? asset($leadgroup->img_b_2) : ''); ?>"
                                                    width="150"
                                                    class="rounded border"
                                                    style="display: <?php echo e(isset($leadgroup->img_b_2) ? 'block' : 'none'); ?>;">
                                            </div>

                                            
                                            <input class="form-control"
                                                type="file"
                                                name="img_b_2"
                                                id="img_b_2"
                                                accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Below Block Card</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_1"
                                            value="<?php echo e($leadgroup->title_1); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_1" class="form-control" id="desc_1"
                                            placeholder="Description"><?php echo e($leadgroup->desc_1); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 7</label>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Card 1</label>
                                        <input class="form-control" type="text" name="title_cd_1"
                                            value="<?php echo e($leadgroup->title_cd_1); ?>" placeholder="Title" />
                                        <textarea name="d_cd_1" class="form-control" id="d_cd_1"
                                            placeholder="Description"><?php echo e($leadgroup->d_cd_1); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Card 2</label>
                                        <input class="form-control" type="text" name="title_cd_2"
                                            value="<?php echo e($leadgroup->title_cd_2); ?>" placeholder="Title" />
                                        <textarea name="d_cd_2" class="form-control" id="d_cd_2"
                                            placeholder="Description"><?php echo e($leadgroup->d_cd_2); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Card 3</label>
                                        <input class="form-control" type="text" name="title_cd_3"
                                            value="<?php echo e($leadgroup->title_cd_3); ?>" placeholder="Title" />
                                        <textarea name="d_cd_3" class="form-control" id="d_cd_3"
                                            placeholder="Description"><?php echo e($leadgroup->d_cd_3); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Card 4</label>
                                        <input class="form-control" type="text" name="title_cd_4"
                                            value="<?php echo e($leadgroup->title_cd_4); ?>" placeholder="Title" />
                                        <textarea name="d_cd_4" class="form-control" id="d_cd_4"
                                            placeholder="Description"><?php echo e($leadgroup->d_cd_4); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Card 5</label>
                                        <input class="form-control" type="text" name="title_cd_5"
                                            value="<?php echo e($leadgroup->title_cd_5); ?>" placeholder="Title" />
                                        <textarea name="d_cd_5" class="form-control" id="d_cd_5"
                                            placeholder="Description"><?php echo e($leadgroup->d_cd_5); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Card 6</label>
                                        <input class="form-control" type="text" name="title_cd_6"
                                            value="<?php echo e($leadgroup->title_cd_6); ?>" placeholder="Title" />
                                        <textarea name="d_cd_6" class="form-control" id="d_cd_6"
                                            placeholder="Description"><?php echo e($leadgroup->d_cd_6); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Card 7</label>
                                        <input class="form-control" type="text" name="title_cd_7"
                                            value="<?php echo e($leadgroup->title_cd_7); ?>" placeholder="Title" />
                                        <textarea name="d_cd_7" class="form-control" id="d_cd_7"
                                            placeholder="Description"><?php echo e($leadgroup->d_cd_7); ?></textarea>
                                    </div>

                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section below Card of 7</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2"
                                            value="<?php echo e($leadgroup->title_2); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_2" class="form-control" id="desc_2"
                                            placeholder="Description"><?php echo e($leadgroup->desc_2); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section table</label>
                                    <div class="mb-3 col-12 space-y-2">
                                         <label for="formFile" class="form-label text-[#0F4634]">Title</label>
                                        <input class="form-control" type="text" name="t_t_1"
                                            value="<?php echo e($leadgroup->t_t_1); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_t_2"
                                            value="<?php echo e($leadgroup->t_t_2); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_t_3"
                                            value="<?php echo e($leadgroup->t_t_3); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_t_4"
                                            value="<?php echo e($leadgroup->t_t_4); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                        <textarea name="t_d_1" class="form-control" id="t_d_1"
                                            placeholder="Description"><?php echo e($leadgroup->t_d_1); ?></textarea>
                                        <textarea name="t_d_2" class="form-control" id="t_d_2"
                                            placeholder="Description"><?php echo e($leadgroup->t_d_2); ?></textarea>
                                        <textarea name="t_d_3" class="form-control" id="t_d_3"
                                            placeholder="Description"><?php echo e($leadgroup->t_d_3); ?></textarea>
                                        <textarea name="t_d_4" class="form-control" id="t_d_4"
                                            placeholder="Description"><?php echo e($leadgroup->t_d_4); ?></textarea>
                                    </div>
                                </div>


                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Title Description of Card</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_3"
                                            value="<?php echo e($leadgroup->title_3); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_3" class="form-control" id="desc_3"
                                            placeholder="Description"><?php echo e($leadgroup->desc_3); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section table</label>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Title</label>
                                        <input class="form-control" type="text" name="t_c_1"
                                            value="<?php echo e($leadgroup->t_c_1); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_c_2"
                                            value="<?php echo e($leadgroup->t_c_2); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_c_3"
                                            value="<?php echo e($leadgroup->t_c_3); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_c_4"
                                            value="<?php echo e($leadgroup->t_c_4); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_c_5"
                                            value="<?php echo e($leadgroup->t_c_5); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                        <textarea name="d_c_1" class="form-control" id="d_c_1"
                                            placeholder="Description"><?php echo e($leadgroup->d_c_1); ?></textarea>
                                        <textarea name="d_c_2" class="form-control" id="d_c_2"
                                            placeholder="Description"><?php echo e($leadgroup->d_c_2); ?></textarea>
                                        <textarea name="d_c_3" class="form-control" id="d_c_3"
                                            placeholder="Description"><?php echo e($leadgroup->d_c_3); ?></textarea>
                                        <textarea name="d_c_4" class="form-control" id="d_c_4"
                                            placeholder="Description"><?php echo e($leadgroup->d_c_4); ?></textarea>
                                        <textarea name="d_c_5" class="form-control" id="d_c_5"
                                            placeholder="Description"><?php echo e($leadgroup->d_c_5); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Title and Description in Background</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_4"
                                            value="<?php echo e($leadgroup->title_4); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_4" class="form-control" id="desc_4"
                                            placeholder="Description"><?php echo e($leadgroup->desc_4); ?></textarea>
                                    </div>
                                </div>

                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section in Background</label>
                                    <div class="mb-3 col-12 space-y-2">
                                        <input class="form-control" type="text" name="t_bg_1"
                                            value="<?php echo e($leadgroup->t_bg_1); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_bg_2"
                                            value="<?php echo e($leadgroup->t_bg_2); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_bg_3"
                                            value="<?php echo e($leadgroup->t_bg_3); ?>" placeholder="Title" />
                                        <input class="form-control" type="text" name="t_bg_4"
                                            value="<?php echo e($leadgroup->t_bg_4); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12 space-y-2   ">
                                        <textarea name="d_bg_1" class="form-control" id="d_bg_1"
                                            placeholder="Description"><?php echo e($leadgroup->d_bg_1); ?></textarea>
                                        <textarea name="d_bg_2" class="form-control" id="d_bg_2"
                                            placeholder="Description"><?php echo e($leadgroup->d_bg_2); ?></textarea>
                                        <textarea name="d_bg_3" class="form-control" id="d_bg_3"
                                            placeholder="Description"><?php echo e($leadgroup->d_bg_3); ?></textarea>
                                        <textarea name="d_bg_4" class="form-control" id="d_bg_4"
                                            placeholder="Description"><?php echo e($leadgroup->d_bg_4); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Title and Description below form</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_5"
                                            value="<?php echo e($leadgroup->title_5); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_5" class="form-control" id="desc_5"
                                            placeholder="Description"><?php echo e($leadgroup->desc_5); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Final</label>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Name</label>
                                        <input class="form-control" type="text" name="name"
                                            value="<?php echo e($leadgroup->name); ?>" placeholder="Title" />
                                         <label for="formFile" class="form-label text-[#0F4634]">Position</label>
                                        <textarea class="form-control" type="text" name="position"
                                            value="" placeholder="Title"><?php echo e($leadgroup->position); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                        <textarea name="desc_him" class="form-control" id="desc_him"
                                            placeholder="Description"><?php echo e($leadgroup->desc_him); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        
                                        <div class="mb-2">
                                            <img id="previewprofile_him"
                                                src="<?php echo e(isset($leadgroup->profile_him) ? asset($leadgroup->profile_him) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($leadgroup->profile_him) ? 'block' : 'none'); ?>;">
                                        </div>

                                        
                                        <input class="form-control"
                                            type="file"
                                            name="profile_him"
                                            id="profile_him"
                                            accept="image/*">
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Final</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_v"
                                            value="<?php echo e($leadgroup->title_v); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_v" class="form-control" id="desc_v"
                                            placeholder="Description"><?php echo e($leadgroup->desc_v); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">

                                        
                                        <div class="mb-2">
                                            <video id="previewvdo"
                                                width="250"
                                                controls
                                                class="rounded border"
                                                style="display: <?php echo e(isset($leadgroup->vdo) ? 'block' : 'none'); ?>;">
                                                <?php if(isset($leadgroup->vdo)): ?>
                                                    <source src="<?php echo e(asset($leadgroup->vdo)); ?>" type="video/mp4">
                                                <?php endif; ?>
                                            </video>
                                        </div>

                                        
                                        <input class="form-control"
                                            type="file"
                                            name="vdo"
                                            id="vdo"
                                            accept="video/*">
                                    </div>
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
document.getElementById('img_b_1').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg_b_1');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img_b_1
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img_b_1 if no file selected
        preview.style.display = '<?php echo e(isset($leadgroup->img_b_1) ? 'block' : 'none'); ?>';
    }
});
</script>
<script>
document.getElementById('img_b_2').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg_b_2');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img_b_2
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img_b_2 if no file selected
        preview.style.display = '<?php echo e(isset($leadgroup->img_b_2) ? 'block' : 'none'); ?>';
    }
});
</script>
<script>
document.getElementById('profile_him').addEventListener('change', function(e){
    const preview = document.getElementById('previewprofile_him');
    const file = e.target.files[0];

    if(file){
        // Update preview to new profile_him
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old profile_him if no file selected
        preview.style.display = '<?php echo e(isset($leadgroup->profile_him) ? 'block' : 'none'); ?>';
    }
});
</script>

<script>
document.getElementById('vdo').addEventListener('change', function(e) {
    const preview = document.getElementById('previewvdo');
    const file = e.target.files[0];

    if (file) {
        const videoURL = URL.createObjectURL(file);
        preview.src = videoURL;
        preview.style.display = 'block';
        preview.load(); // important
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/mentors/update-lead-group.blade.php ENDPATH**/ ?>