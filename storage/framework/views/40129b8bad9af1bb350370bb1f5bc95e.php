

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-main-title'); ?>
        UPDATE HOME OF CONTENT
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
                <form action="<?php echo e(route('submit.homecontent')); ?>" method="post" enctype="multipart/form-data">
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
                                        <input class="form-control" type="text" name="title" value="<?php echo e($getSectionHome->title); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Description"><?php echo e($getSectionHome->description); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Card of Content</label>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 1</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_1"
                                                value="<?php echo e($getSectionHome->title_card_1); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_1" class="form-control" id="desc_card_1"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_1); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 2</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_2"
                                                value="<?php echo e($getSectionHome->title_card_2); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_2" class="form-control" id="desc_card_2"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_2); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 3</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_3"
                                                value="<?php echo e($getSectionHome->title_card_3); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_3" class="form-control" id="desc_card_3"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_3); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 4</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_4"
                                                value="<?php echo e($getSectionHome->title_card_4); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_4" class="form-control" id="desc_card_4"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_4); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 5</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_5"
                                                value="<?php echo e($getSectionHome->title_card_5); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_5" class="form-control" id="desc_card_5"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_5); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 6</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_6"
                                                value="<?php echo e($getSectionHome->title_card_6); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_6" class="form-control" id="desc_card_6"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_6); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section background Below People</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_1"
                                            value="<?php echo e($getSectionHome->title_1); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description_1" class="form-control" id="description_1"
                                            placeholder="Description"><?php echo e($getSectionHome->description_1); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">

                                        <div class="mb-3 col-12">
                                            
                                            <div class="mb-2">
                                                <img id="previewImage"
                                                    src="<?php echo e(isset($getSectionHome->image) ? asset($getSectionHome->image) : ''); ?>"
                                                    width="150"
                                                    class="rounded border"
                                                    style="display: <?php echo e(isset($getSectionHome->image) ? 'block' : 'none'); ?>;">
                                            </div>

                                            
                                            <input class="form-control"
                                                type="file"
                                                name="image"
                                                id="image"
                                                accept="image/*">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description_bg" class="form-control" id="description_bg"
                                            placeholder="Description"><?php echo e($getSectionHome->description_bg); ?></textarea>
                                    </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Event Finane</label>
                                        <div class="mb-3 col-12">
                                            <textarea name="sub_title_event" class="form-control" id="sub_title_event"
                                                placeholder="Title of Event Card"><?php echo e($getSectionHome->sub_title_event); ?></textarea>
                                        </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Event Card 1</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_event_1"
                                                value="<?php echo e($getSectionHome->title_event_1); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_event_1" class="form-control" id="desc_card_event_1"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_event_1); ?></textarea>
                                        </div>
                                        
                                        
                                        <div class="mb-2">
                                            <img id="previewimg_card_event_1"
                                                src="<?php echo e(isset($getSectionHome->img_card_event_1) ? asset($getSectionHome->img_card_event_1) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($getSectionHome->img_card_event_1) ? 'block' : 'none'); ?>;">
                                        </div>

                                        
                                        <input class="form-control"
                                            type="file"
                                            name="img_card_event_1"
                                            id="img_card_event_1"
                                            accept="image/*">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Event Card 2</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_event_2"
                                                value="<?php echo e($getSectionHome->title_event_2); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_event_2" class="form-control" id="desc_card_event_2"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_event_2); ?></textarea>
                                        </div>
                                        
                                        
                                        <div class="mb-2">
                                            <img id="previewimg_card_event_2"
                                                src="<?php echo e(isset($getSectionHome->img_card_event_2) ? asset($getSectionHome->img_card_event_2) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($getSectionHome->img_card_event_2) ? 'block' : 'none'); ?>;">
                                        </div>

                                        
                                        <input class="form-control"
                                            type="file"
                                            name="img_card_event_2"
                                            id="img_card_event_2"
                                            accept="image/*">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Event Card 3</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_event_3"
                                                value="<?php echo e($getSectionHome->title_event_3); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_event_3" class="form-control" id="desc_card_event_3"
                                                placeholder="Description"><?php echo e($getSectionHome->desc_card_event_3); ?></textarea>
                                        </div>
                                      

                                        
                                        <div class="mb-2">
                                            <img id="previewimg_card_event_3"
                                                src="<?php echo e(isset($getSectionHome->img_card_event_3) ? asset($getSectionHome->img_card_event_3) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($getSectionHome->img_card_event_3) ? 'block' : 'none'); ?>;">
                                        </div>

                                        
                                        <input class="form-control"
                                            type="file"
                                            name="img_card_event_3"
                                            id="img_card_event_3"
                                            accept="image/*">
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text below FAQs</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_below" value="<?php echo e($getSectionHome->title_below); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_bolow" class="form-control" id="desc_bolow"
                                            placeholder="Description"><?php echo e($getSectionHome->desc_bolow); ?></textarea>
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
document.getElementById('image').addEventListener('change', function(e){
    const preview = document.getElementById('previewImage');
    const file = e.target.files[0];

    if(file){
        // Update preview to new image
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old image if no file selected
        preview.style.display = '<?php echo e(isset($getSectionHome->image) ? 'block' : 'none'); ?>';
    }
});
</script>
<script>
document.getElementById('img_card_event_1').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg_card_event_1');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img_card_event_1
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img_card_event_1 if no file selected
        preview.style.display = '<?php echo e(isset($getSectionHome->img_card_event_1) ? 'block' : 'none'); ?>';
    }
});
</script>
<script>
document.getElementById('img_card_event_2').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg_card_event_2');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img_card_event_2
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img_card_event_2 if no file selected
        preview.style.display = '<?php echo e(isset($getSectionHome->img_card_event_2) ? 'block' : 'none'); ?>';
    }
});
</script>
<script>
document.getElementById('img_card_event_3').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg_card_event_3');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img_card_event_3
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img_card_event_3 if no file selected
        preview.style.display = '<?php echo e(isset($getSectionHome->img_card_event_3) ? 'block' : 'none'); ?>';
    }
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/home-content/update-text.blade.php ENDPATH**/ ?>