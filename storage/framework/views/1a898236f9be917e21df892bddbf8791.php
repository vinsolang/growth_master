
<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-main-title'); ?>
        UPDATE PAGE WHY JION GROWTH MASTER
    <?php $__env->stopSection(); ?>
    
    <!-- Content wrapper -->
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
                <form action="<?php echo e(route('submit.about')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12 space-y-2">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title</label>
                                    <textarea name="title" class="form-control" id="title" rows="4"><?php echo e($about->title); ?></textarea>
                                    <textarea name="desc" class="form-control" id="desc" rows="4"><?php echo e($about->desc); ?></textarea>
                                </div>

                                <div class="mb-3 col-12 space-y-2">
                                    <label for="formFile" class="form-label text-[#0F4634]">Vision, Mission, Core Value</label>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Vision</label>
                                        <input class="form-control" type="text" name="title_v" value="<?php echo e($about->title_v); ?>" placeholder="Title"/>
                                        <textarea class="form-control" type="text" name="desc_v" value="" placeholder="Description"><?php echo e($about->desc_v); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Mission</label>
                                        <input class="form-control" type="text" name="title_m" value="<?php echo e($about->title_m); ?>" placeholder="Title"/>
                                        <textarea class="form-control" type="text" name="desc_m" value="" placeholder="Description"><?php echo e($about->desc_m); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12 space-y-2">
                                        <label for="formFile" class="form-label text-[#0F4634]">Core Value</label>
                                        <input class="form-control" type="text" name="title_c" value="<?php echo e($about->title_c); ?>" placeholder="Title"/>
                                        
                                        <input class="form-control" type="text" name="sub_t_1" value="<?php echo e($about->sub_t_1); ?>" placeholder="Title"/>
                                        <textarea class="form-control" type="text" name="text_1" value="" placeholder="Description"><?php echo e($about->text_1); ?></textarea>

                                        <input class="form-control" type="text" name="sub_t_2" value="<?php echo e($about->sub_t_2); ?>" placeholder="Title"/>
                                        <textarea class="form-control" type="text" name="text_2" value="" placeholder="Description"><?php echo e($about->text_2); ?></textarea>

                                        <input class="form-control" type="text" name="sub_t_3" value="<?php echo e($about->sub_t_3); ?>" placeholder="Title"/>
                                        <textarea class="form-control" type="text" name="text_3" value="" placeholder="Description"><?php echo e($about->text_3); ?></textarea>

                                        <input class="form-control" type="text" name="sub_t_4" value="<?php echo e($about->sub_t_4); ?>" placeholder="Title"/>
                                        <textarea class="form-control" type="text" name="text_4" value="" placeholder="Description"><?php echo e($about->text_4); ?></textarea>

                                        <input class="form-control" type="text" name="sub_t_5" value="<?php echo e($about->sub_t_5); ?>" placeholder="Title"/>
                                        <textarea class="form-control" type="text" name="text_5" value="" placeholder="Description"><?php echo e($about->text_5); ?></textarea> 
                                    </div>
                                </div>

                                <div class="mb-3 col-12 space-y-2">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title</label>
                                    <textarea name="title_1" class="form-control" id="title" rows="4"><?php echo e($about->title_1); ?></textarea>
                                    <textarea name="desc_2" class="form-control" id="title" rows="4"><?php echo e($about->desc_2); ?></textarea>
                                </div>
                            <div class="flex gap-3">
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                    value="Update New">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

   
       
       

<script>
        ClassicEditor
        .create(document.querySelector('#table'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".uploader").forEach(uploader => {

        const fileInput = uploader.querySelector(".file-input");
        const preview = uploader.querySelector(".preview-image");
        const placeholder = uploader.querySelector(".upload-placeholder");
        const resetBtn = uploader.querySelector(".reset-btn");

        const oldImage = preview.src ? preview.src : "";

        // When selecting new image
        fileInput.addEventListener("change", function () {
            const file = this.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = e => {
                preview.src = e.target.result;
                preview.classList.remove("hidden");
                placeholder.classList.add("hidden");
                resetBtn.classList.remove("hidden");
            };
            reader.readAsDataURL(file);
        });

        // Reset button clicked
        resetBtn.addEventListener("click", function (e) {
            e.preventDefault();
            fileInput.value = "";

            if (oldImage) {
                // Restore old image
                preview.src = oldImage;
                preview.classList.remove("hidden");
                placeholder.classList.add("hidden");
            } else {
                // No old image originally
                preview.src = "";
                preview.classList.add("hidden");
                placeholder.classList.remove("hidden");
                resetBtn.classList.add("hidden");
            }
        });
    });
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/about/update-what-is-growthmaster.blade.php ENDPATH**/ ?>