

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-main-title'); ?>
        UPDATE PAGE PEER GROUP
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
                <form action="<?php echo e(route('submit.peergroupcontent')); ?>" method="post" enctype="multipart/form-data">
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
                                        <input class="form-control" type="text" name="title" value="<?php echo e($getContent->title); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Description in Background"><?php echo e($getContent->description); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">  
                                        <textarea name="description_1" class="form-control" id="description_1"
                                            placeholder="Description"><?php echo e($getContent->description_1); ?></textarea>
                                    </div>
                                      <div class="mb-3 col-12">
                                            <textarea name="table" class="form-control" id="table"
                                                placeholder="Table"><?php echo $getContent->table; ?></textarea>
                                    </div>
                                </div>


                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text of Section card</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2"
                                            value="<?php echo e($getContent->title_2); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="description_2" class="form-control" id="description_2"
                                                placeholder="Description"><?php echo $getContent->description_2; ?></textarea>
                                    </div>
                                    
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 1</label>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_card1" class="form-control" id="desc_card1"
                                                placeholder="Description"><?php echo $getContent->desc_card1; ?></textarea>
                                    </div>
                                     <div class="mb-3 col-12">
                                        
                                        <div class="mb-2">
                                            <img id="previewimg_card1"
                                                src="<?php echo e(isset($getContent->img_card1) ? asset('storage/'.$getContent->img_card1) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($getContent->img_card1) ? 'block' : 'none'); ?>;">
                                        </div>

                                        
                                        <input class="form-control"
                                            type="file"
                                            name="img_card1"
                                            id="img_card1"
                                            accept="image/*">
                                    </div>
                                    
                                </div>

                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 2</label>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_card2" class="form-control" id="desc_card2"
                                                placeholder="Description"><?php echo $getContent->desc_card2; ?></textarea>
                                    </div>
                                     <div class="mb-3 col-12">
                                        
                                        <div class="mb-2">
                                            <img id="previewimg_card2"
                                                src="<?php echo e(isset($getContent->img_card2) ? asset('storage/'.$getContent->img_card2) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($getContent->img_card2) ? 'block' : 'none'); ?>;">
                                        </div>

                                        
                                        <input class="form-control"
                                            type="file"
                                            name="img_card2"
                                            id="img_card2"
                                            accept="image/*">
                                    </div>
                                    
                                </div>

                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text of Section Below card block</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_t1"
                                            value="<?php echo e($getContent->title_t1); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_t1" class="form-control" id="desc_t1"
                                                placeholder="Description"><?php echo $getContent->desc_t1; ?></textarea>
                                    </div>

                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_t2"
                                            value="<?php echo e($getContent->title_t2); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_t2" class="form-control" id="desc_t2"
                                                placeholder="Description"><?php echo $getContent->desc_t2; ?></textarea>
                                    </div>

                                     <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_t3"
                                            value="<?php echo e($getContent->title_t3); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_t3" class="form-control" id="desc_t3"
                                                placeholder="Description"><?php echo $getContent->desc_t3; ?></textarea>
                                    </div>

                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_t4"
                                            value="<?php echo e($getContent->title_t4); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_t4" class="form-control" id="desc_t4"
                                                placeholder="Description"><?php echo $getContent->desc_t4; ?></textarea>
                                    </div>

                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_t5"
                                            value="<?php echo e($getContent->title_t5); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_t5" class="form-control" id="desc_t5"
                                                placeholder="Description"><?php echo $getContent->desc_t5; ?></textarea>
                                    </div>
                                    
                                </div>
                                  <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title Desctiption of Card text</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_3"
                                            value="<?php echo e($getContent->title_3); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="description_3" class="form-control" id="description_3"
                                                placeholder="Description"><?php echo $getContent->description_3; ?></textarea>
                                    </div>
                                    
                                </div>

                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card text</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_c1"
                                            value="<?php echo e($getContent->title_c1); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_c1" class="form-control" id="desc_c1"
                                                placeholder="Description"><?php echo $getContent->desc_c1; ?></textarea>
                                    </div>
                                     <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_c2"
                                            value="<?php echo e($getContent->title_c2); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_c2" class="form-control" id="desc_c2"
                                                placeholder="Description"><?php echo $getContent->desc_c2; ?></textarea>
                                    </div>
                                     <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_c3"
                                            value="<?php echo e($getContent->title_c3); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_c3" class="form-control" id="desc_c3"
                                                placeholder="Description"><?php echo $getContent->desc_c3; ?></textarea>
                                    </div>
                                     <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_c4"
                                            value="<?php echo e($getContent->title_c4); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_c4" class="form-control" id="desc_c4"
                                                placeholder="Description"><?php echo $getContent->desc_c4; ?></textarea>
                                    </div>
                                      <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_c5"
                                            value="<?php echo e($getContent->title_c5); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_c5" class="form-control" id="desc_c5"
                                                placeholder="Description"><?php echo $getContent->desc_c5; ?></textarea>
                                    </div>
                                       <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_c6"
                                            value="<?php echo e($getContent->title_c6); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_c6" class="form-control" id="desc_c6"
                                                placeholder="Description"><?php echo $getContent->desc_c6; ?></textarea>
                                    </div>
                                </div>

                                </div>
                                  <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title Desctiption of Card text</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_4"
                                            value="<?php echo e($getContent->title_4); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="description_4" class="form-control" id="description_4"
                                                placeholder="Description"><?php echo $getContent->description_4; ?></textarea>
                                    </div>
                                    
                                </div>

                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card text</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_g1"
                                            value="<?php echo e($getContent->title_g1); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_g1" class="form-control" id="desc_g1"
                                                placeholder="Description"><?php echo $getContent->desc_g1; ?></textarea>
                                    </div>
                                     <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_g2"
                                            value="<?php echo e($getContent->title_g2); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_g2" class="form-control" id="desc_g2"
                                                placeholder="Description"><?php echo $getContent->desc_g2; ?></textarea>
                                    </div>
                                     <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_g3"
                                            value="<?php echo e($getContent->title_g3); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_g3" class="form-control" id="desc_g3"
                                                placeholder="Description"><?php echo $getContent->desc_g3; ?></textarea>
                                    </div>
                                     <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_g4"
                                            value="<?php echo e($getContent->title_g4); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_g4" class="form-control" id="desc_g4"
                                                placeholder="Description"><?php echo $getContent->desc_g4; ?></textarea>
                                    </div>
                                      <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_g5"
                                            value="<?php echo e($getContent->title_g5); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_g5" class="form-control" id="desc_g5"
                                                placeholder="Description"><?php echo $getContent->desc_g5; ?></textarea>
                                    </div>
                                       <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_g6"
                                            value="<?php echo e($getContent->title_g6); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_g6" class="form-control" id="desc_g6"
                                                placeholder="Description"><?php echo $getContent->desc_g6; ?></textarea>
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
            .create(document.querySelector('#desc_card2'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#desc_card1'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#table'))
            .catch(error => {
                console.error(error);
            });
</script>
<script>
document.getElementById('previewimg_card2').addEventListener('change', function(event) {
    const preview = document.getElementById('previewpreviewimg_card2');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});
</script>
<script>
document.getElementById('previewimg_card1').addEventListener('change', function(event) {
    const preview = document.getElementById('previewpreviewimg_card1');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/peer-group/update-text.blade.php ENDPATH**/ ?>