
<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-main-title'); ?>
        UPDATE PAGE
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
                <form action="<?php echo e(route('submit.whyjoin')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Content</label>
                                    <textarea name="content" class="form-control" id="content" rows="6"><?php echo e($whyJoin->content); ?></textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text on Image</label>
                                    <div class="mb-3 col-12">
                                        <textarea class="form-control" type="text" name="title" value="" placeholder="Title"><?php echo e($whyJoin->title); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description" class="form-control" id="description" placeholder="Description"><?php echo e($whyJoin->description); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text on Table</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_1" value="<?php echo e($whyJoin->title_1); ?>" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description_1" class="form-control" id="description_1" placeholder="description"><?php echo e($whyJoin->description_1); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="table" class="form-control" id="table"><?php echo $whyJoin->table; ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="text" class="form-control" id="text"><?php echo e($whyJoin->text); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text Under Button Bcome a mamber</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2" value="<?php echo e($whyJoin->title_2); ?>" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description_3" class="form-control" id="description_3" placeholder="Description"><?php echo e($whyJoin->description_3); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 1</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_1" value="<?php echo e($whyJoin->title_card_1); ?>" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_card_1" class="form-control" id="desc_card_1" placeholder="Description"><?php echo e($whyJoin->desc_card_1); ?></textarea>
                                    </div>
                                </div>
                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 2</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_2" value="<?php echo e($whyJoin->title_card_2); ?>" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_card_2" class="form-control" id="desc_card_2" placeholder="Description"><?php echo e($whyJoin->desc_card_2); ?></textarea>
                                    </div>
                                </div>
                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 3</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_3" value="<?php echo e($whyJoin->title_card_3); ?>" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_card_3" class="form-control" id="desc_card_3" placeholder="Description"><?php echo e($whyJoin->desc_card_3); ?></textarea>
                                    </div>
                                </div>

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

<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/why-join-growth/update.blade.php ENDPATH**/ ?>